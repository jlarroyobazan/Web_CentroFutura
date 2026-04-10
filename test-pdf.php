<?php
/**
 * TEST DE PREVISUALIZACIÓN DE MATRÍCULA - CENTRO FUTURA ELITE
 * Diseño: Basado en Plantilla Gravity PDF (Refined 5.9.4)
 * Estilo: Bento Grid + Coherencia style.css
 */

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

/* ==========================================================================
   1. DATOS DE SIMULACIÓN (Mock Data para el Test)
   ========================================================================== */
$codigo_matricula = 'CF-2026-00018';
$fecha_firma = date('d/m/Y');
$nombre_alumno = "NAGORE FERRAGUT MOLIO";
$curso_escolar = "1º ESO";
$centro_educativo = "CEIPSO EL OLIVAR";
$carga_lectiva = "4 horas semanales (140€/mes)";
$forma_pago = "Transferencia Bancaria";
$email_notificaciones = "torresserrano.sergio85@gmail.com";
$nee_display = "DIFICULTADES DE APRENDIZAJE";
$nee_detalle = "Necesita reforzar mucho casi todas las asignaturas. El primer trimestre suspendió 5 y el segundo 7.";
$salud_detalle = "No se constatan alergias o dolencias.";
$asignaturas = "Matemáticas, Lengua, Biología, Historia y Plástica";
$horario_preferente = "Martes y Jueves de 16:00 a 18:00";
$tutor_principal = "Sergio Torres Serrano • 606036659";
$tutor_secundario = "Silvia Molio Krzyzan • 655901792";
$iban_centro = "ES09 0019 0535 7140 1003 5170";

// Firma simulada (Base64)
$firma_url = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAADICAYAAADW99L7AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAACXBIWXMAAAsTAAALEwEAmpwYAAABWWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNy4xLWMwMDAgNzkuYzg2MTYxYiwgMjAyMi8wOC8xNi0xMjo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDI0LjAgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6M0IyREI5RTk4N0NCMTFFRDlCNkZCOUQxRDlEMUQ5RDEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6M0IyREI5RUE4N0NCMTFFRDlCNkZCOUQxRDlEMUQ5RDEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozQjJEQjlFODg3Q0IxMUVEQUI2RkI5RDNEOUQxRDlEMSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozQjJEQjlFOTg3Q0IxMUVEQUI2RkI5RDNEOUQxRDlEMSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0idyI/Pg9ST9MAAABXSURBVHic7cExAQAAAMKg9U9tCy+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAN1xwABB8hS7AAAAABJRU5ErkJggg==";

/* ==========================================================================
   2. DISEÑO HTML + CSS (Exacto a Matricula_PDF.php)
   ========================================================================== */
$html_pdf = "
<html>
<head>
<style>
    @page { margin: 10mm 15mm; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; color: #1e293b; font-size: 9pt; line-height: 1.4; background: #ffffff; }
    .orange { color: #f97316; }
    .navy { color: #0f172a; }
    .header { width: 100%; border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 20px; }
    .badge { background: #0f172a; color: #ffffff; padding: 4px 10px; border-radius: 8px; font-size: 8pt; font-weight: bold; }
    .section-title { font-size: 7.5pt; font-weight: bold; color: #94a3b8; text-transform: uppercase; letter-spacing: 1.5px; margin: 25px 0 8px 5px; }
    .bento-container { border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background: #ffffff; width: 100%; margin-bottom: 15px; }
    .bento-cell { padding: 12px 15px; border-bottom: 1px solid #f1f5f9; }
    .bento-cell:last-child { border-bottom: none; }
    .bento-cell-title { font-weight: bold; font-size: 9.5pt; color: #0f172a; margin-bottom: 2px; }
    .bento-cell-desc { font-size: 8pt; color: #64748b; line-height: 1.2; }
    .critical { background: #fff7ed; border: 1.2px solid #fdba74; padding: 18px; border-radius: 10px; margin: 15px 0; }
    .check-ui { width: 16px; height: 16px; border-radius: 3px; text-align: center; line-height: 14px; font-weight: bold; font-size: 11pt; display: inline-block; }
    .bajas-notice { background: #0f172a; color: #ffffff; padding: 15px; border-radius: 10px; margin: 20px 0; border-left: 5px solid #f97316; }
    .bajas-title { color: #f97316; font-size: 7.5pt; font-weight: bold; text-transform: uppercase; margin-bottom: 8px; }
    .bajas-text { font-size: 8.5pt; line-height: 1.5; opacity: 0.95; text-align: justify; }
    .signature-box { margin: 0 auto; width: 280px; height: 90px; border: 1px solid #cbd5e1; border-radius: 8px; background-color: #f8fafc; text-align: center; }
    .legal-bento-cell { padding: 10px 15px; border-bottom: 1px solid #f1f5f9; }
    .page-break { page-break-after: always; }
</style>
</head>
<body>

<table class=\"header\">
    <tr>
        <td><div style=\"font-size: 18pt; font-weight: 900;\" class=\"navy\">Centro <span class=\"orange\">Futura</span></div></td>
        <td align=\"right\">
            <span class=\"badge\">$codigo_matricula</span><br>
            <span style=\"font-size:7pt; color:#94a3b8; font-weight: bold; margin-top:5px;\">REGISTRO OFICIAL: $fecha_firma</span>
        </td>
    </tr>
</table>

<div class=\"section-title\">I. Perfil Académico del Alumno</div>
<div class=\"bento-container\" style=\"background: #f8fafc; border-color: #f1f5f9; margin-bottom: 20px;\">
    <div class=\"bento-cell\" style=\"padding: 20px;\">
        <div style=\"font-size: 20pt; font-weight: bold; color: #0f172a; line-height: 1.1; margin-bottom: 6px;\">$nombre_alumno</div>
        <div style=\"font-size: 10.5pt; color: #64748b; font-weight: bold; letter-spacing: 0.3px;\">
            $curso_escolar <span class=\"orange\" style=\"margin: 0 5px;\">|</span> $centro_educativo
        </div>
    </div>
</div>

<div class=\"section-title\">II. Detalles de la Inscripción</div>
<div class=\"bento-container\">
    <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td width=\"33%\" class=\"bento-cell\" style=\"border-right: 1px solid #f1f5f9;\">
                <div class=\"bento-cell-title\">Carga Lectiva</div>
                <div class=\"bento-cell-desc\">$carga_lectiva</div>
            </td>
            <td width=\"33%\" class=\"bento-cell\" style=\"border-right: 1px solid #f1f5f9;\">
                <div class=\"bento-cell-title\">Forma de Pago</div>
                <div class=\"bento-cell-desc\">$forma_pago</div>
            </td>
            <td width=\"34%\" class=\"bento-cell\">
                <div class=\"bento-cell-title\">Notificaciones</div>
                <div class=\"bento-cell-desc\">$email_notificaciones</div>
            </td>
        </tr>
    </table>
</div>

<div class=\"section-title\">III. Información Psicopedagógica y Médica</div>
<div class=\"critical\">
    <table width=\"100%\">
        <tr>
            <td width=\"50%\" style=\"border-right: 1px solid #fed7aa; padding-right:15px; vertical-align: top;\">
                <div class=\"orange\" style=\"font-weight:bold; font-size:9.5pt; margin-bottom:8px;\">Necesidades Educativas (NEE)</div>
                <div style=\"font-size:7.5pt; font-weight:bold; color:#9a3412; margin-bottom:6px; text-transform: uppercase;\">$nee_display</div>
                <div style=\"font-size:8.5pt; line-height:1.5; color:#431407;\">$nee_detalle</div>
            </td>
            <td width=\"50%\" style=\"padding-left:15px; vertical-align: top;\">
                <div class=\"orange\" style=\"font-weight:bold; font-size:9.5pt; margin-bottom:8px;\">Alertas Médicas / Alergias</div>
                <div style=\"font-size:8.5pt; line-height:1.5; color:#431407;\">$salud_detalle</div>
            </td>
        </tr>
    </table>
</div>

<div class=\"section-title\">IV. Planificación Académica y Contactos</div>
<div class=\"bento-container\">
    <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td width=\"50%\" class=\"bento-cell\" style=\"border-right: 1px solid #f1f5f9;\">
                <div class=\"bento-cell-title\">Asignaturas</div>
                <div class=\"bento-cell-desc\">$asignaturas</div>
            </td>
            <td width=\"50%\" class=\"bento-cell\">
                <div class=\"bento-cell-title\">Horario Preferente</div>
                <div class=\"bento-cell-desc\">$horario_preferente</div>
            </td>
        </tr>
        <tr>
            <td class=\"bento-cell\" style=\"border-right: 1px solid #f1f5f9;\">
                <div class=\"bento-cell-title\">Tutor Principal</div>
                <div class=\"bento-cell-desc\">$tutor_principal</div>
            </td>
            <td class=\"bento-cell\">
                <div class=\"bento-cell-title\">Tutor Secundario</div>
                <div class=\"bento-cell-desc\">$tutor_secundario</div>
            </td>
        </tr>
    </table>
</div>

<div class=\"section-title\">V. Consentimientos y Autorizaciones</div>
<div class=\"bento-container\">
    <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td width=\"50%\" style=\"padding: 15px; border-right: 1px solid #f1f5f9;\">
                <div class=\"check-ui\" style=\"border: 1.5px solid #22c55e; color: #22c55e;\">✓</div>
                <span style=\"margin-left: 10px; font-weight: bold; font-size: 9.5pt;\">Canal WhatsApp</span>
            </td>
            <td width=\"50%\" style=\"padding: 15px;\">
                <div class=\"check-ui\" style=\"border: 1.5px solid #22c55e; color: #22c55e;\">✓</div>
                <span style=\"margin-left: 10px; font-weight: bold; font-size: 9.5pt;\">Derechos de imagen</span>
            </td>
        </tr>
    </table>
</div>

<div class=\"bajas-notice\">
    <div class=\"bajas-title\">Compromiso de Permanencia y Procedimiento de Baja</div>
    <div class=\"bajas-text\">Cualquier solicitud de baja definitiva debe comunicarse estrictamente <strong>antes del día 25 del mes anterior</strong>.</div>
</div>

<div class=\"signature-box\">
    <img src=\"$firma_url\" style=\"max-height: 80px; mix-blend-mode: multiply; margin-top: 5px;\">
    <div style=\"font-weight: bold; font-size: 8pt; color: #0f172a; margin-top: 5px;\">Validado el $fecha_firma</div>
</div>

<div class=\"page-break\"></div>

<table class=\"header\">
    <tr>
        <td><div style=\"font-size: 14pt; font-weight: 900;\" class=\"navy\">Centro <span class=\"orange\">Futura</span></div></td>
        <td align=\"right\"><div style=\"font-weight:bold; font-size:10pt; color:#0f172a;\">ANEXO LEGAL</div><div style=\"font-size:7pt; color:#94a3b8;\">ID: $codigo_matricula</div></td>
    </tr>
</table>

<div style=\"margin-bottom: 12px; margin-top: 5px;\">
    <div style=\"font-size: 17pt; font-weight: bold; color: #0f172a;\">Términos y Condiciones Generales</div>
    <div style=\"color:#64748b; font-size:9pt;\">Academia Centro Futura • Compromiso Educativo 2026</div>
</div>

<div class=\"section-title\">I. Régimen Contractual</div>
<div class=\"bento-container\">
    <div class=\"legal-bento-cell\">
        <div class=\"bento-cell-title\"><span class=\"orange\">1.</span> Régimen Económico y Pago</div>
        <div class=\"bento-cell-desc\">Las cuotas deberán ser abonadas <span class=\"orange\" style=\"font-weight:bold;\">entre los días 1 y 5 de cada mes</span>. El IBAN de ingreso es: <span style=\"font-weight:bold;\">$iban_centro</span>.</div>
    </div>
    <div class=\"legal-bento-cell\" style=\"background: #fff7ed; border-left: 4px solid #f97316;\">
        <div class=\"bento-cell-title\"><span class=\"orange\">2.</span> Política de Bajas</div>
        <div class=\"bento-cell-desc\">Cualquier baja debe comunicarse por escrito antes del día 25 del mes anterior.</div>
    </div>
</div>

<div class=\"section-title\">III. Privacidad</div>
<div class=\"bento-container\">
    <div class=\"legal-bento-cell\">
        <div class=\"bento-cell-title\"><span class=\"orange\">5.</span> Protección de Datos (RGPD)</div>
        <div class=\"bento-cell-desc\">En cumplimiento del RGPD, el responsable es Ainhoa Moreno. Puede ejercer sus derechos en hola@centrofutura.es.</div>
    </div>
</div>

<div style=\"margin-top:20px; border:1px solid #f1f5f9; padding:15px; border-radius:10px; background: #f8fafc; text-align: center; font-size: 7.5pt; color: #64748b;\">
    Documento generado digitalmente tras la validación del tutor/a. Expediente: $codigo_matricula.
</div>

</body>
</html>";

/* ==========================================================================
   3. RENDERIZADO DOMPDF
   ========================================================================== */
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html_pdf);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("Test_Matricula_Futura.pdf", array("Attachment" => false));