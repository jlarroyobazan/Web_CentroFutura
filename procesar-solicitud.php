<?php
/**
 * MOTOR DE MATRÍCULA ELITE - CENTRO FUTURA
 * Arquitectura: PHP Puro con Dompdf
 * Estilo: Bento Grid Apple Premium + Contrato Legal
 */

// Escudo para evitar que advertencias de PHP corrompan el archivo PDF
error_reporting(0);

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

// 1. FILTRO DE SEGURIDAD (Honeypot anti-spam)
if (!empty($_POST['website_url'])) {
    die("Petición bloqueada por seguridad."); 
}

// 2. PROCESAMIENTO Y MAPEO DE DATOS DEL FORMULARIO
$fecha_registro = date("d/m/Y - H:i");
$id_expediente = "CF-" . date("Y") . "-" . rand(10000, 99999);
$ip_firma = $_SERVER['REMOTE_ADDR'] ?? 'Desconocida'; // Trazabilidad legal

// Diccionarios para traducir los "values" del HTML a texto legible para el PDF
$curso_map = [
    'primaria' => 'Primaria', '1eso' => '1º ESO', '2eso' => '2º ESO', '3eso' => '3º ESO', 
    '4eso' => '4º ESO', '1bach' => '1º Bachillerato', '2bach' => '2º Bachillerato', 'otro' => 'Otro'
];
$horas_map = [
    '1' => '1 hora semanal (50€ /mes)', '2' => '2 horas semanales (80€ /mes)', '3' => '3 horas semanales (110€ /mes)',
    '4' => '4 horas semanales (140€ /mes)', '5' => '5 horas semanales (170€ /mes)', '6' => '6 horas semanales (200€ /mes)',
    '7' => '7 horas semanales (230€ /mes)', '8' => '8 horas semanales (260€ /mes)', 'pau' => 'Curso PaU - 10 horas (120€ /curso)'
];
$pago_map = [
    'transferencia' => 'Transferencia Bancaria', 'efectivo' => 'Pago en Efectivo'
];

// Sanitización rigurosa
$email_notificaciones = filter_var($_POST['email_notificaciones'] ?? '', FILTER_SANITIZE_EMAIL);
$nombre_alumno = htmlspecialchars($_POST['nombre_alumno'] ?? 'No especificado');
$apellidos_alumno = htmlspecialchars($_POST['apellidos_alumno'] ?? '');

$curso_raw = $_POST['curso_escolar'] ?? '';
$curso_escolar = $curso_map[$curso_raw] ?? htmlspecialchars($curso_raw);

$centro_educativo = htmlspecialchars($_POST['centro_educativo'] ?? 'No especificado');

// Mapeo de NEE (Array a String)
$nee_display = isset($_POST['nee']) && is_array($_POST['nee']) ? implode(', ', array_map('htmlspecialchars', $_POST['nee'])) : 'Ninguna necesidad específica declarada';
$ayuda_alumno = htmlspecialchars($_POST['ayuda_alumno'] ?? 'Sin observaciones adicionales.');

// Contactos
$tutor1_nom = htmlspecialchars($_POST['nombre_tutor1'] ?? 'No especificado');
$tutor1_tlf = htmlspecialchars($_POST['tlf_tutor1'] ?? 'No especificado');
$tutor2_nom = htmlspecialchars($_POST['nombre_tutor2'] ?? 'No aportado');
$tutor2_tlf = htmlspecialchars($_POST['tlf_tutor2'] ?? 'No aportado');

// Detalles Académicos
$horas_raw = $_POST['horas_semanales'] ?? '';
$horas_semanales = $horas_map[$horas_raw] ?? htmlspecialchars($horas_raw);

$pago_raw = $_POST['forma_pago'] ?? '';
$forma_pago = $pago_map[$pago_raw] ?? htmlspecialchars($pago_raw);

$horario_preferencia = htmlspecialchars($_POST['horario_preferencia'] ?? 'No especificado');
$asignaturas = htmlspecialchars($_POST['asignaturas'] ?? 'No especificado');

// Autorizaciones Legales
$auth_whatsapp = isset($_POST['auth_whatsapp']) ? 'SÍ AUTORIZA' : 'NO AUTORIZA';
$auth_imagen = isset($_POST['auth_imagen']) ? 'SÍ AUTORIZA' : 'NO AUTORIZA';
$auth_salida = isset($_POST['auth_salida']) ? 'SÍ AUTORIZA' : 'NO AUTORIZA';

$firma_base64 = $_POST['firma_base64'] ?? '';
$firma_html = $firma_base64 ? "<img src='$firma_base64' style='max-height: 60px; margin-top: 5px;'>" : "<div style='padding:20px; color:#f97316; font-size:10px;'>Firma física pendiente en el centro</div>";

// 3. ESTRUCTURA HTML & CSS DEL PDF (Bento Grid Legal Premium)
$html_pdf = "
<html>
<head>
<style>
    @page { margin: 10mm 15mm; background-color: #ffffff; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; color: #1e293b; font-size: 9pt; line-height: 1.4; background-color: #ffffff; margin: 0; padding: 0; }
    
    .orange { color: #f97316; }
    .navy { color: #0f172a; }
    .header { width: 100%; border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 20px; }
    .badge { background-color: #0f172a; color: #ffffff; padding: 4px 10px; border-radius: 8px; font-size: 8pt; font-weight: bold; }
    
    .section-title { font-size: 7.5pt; font-weight: bold; color: #94a3b8; text-transform: uppercase; letter-spacing: 1.5px; margin: 20px 0 8px 5px; }
    
    .bento-container { border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background-color: #ffffff; width: 100%; margin-bottom: 12px; }
    .bento-cell { padding: 12px 15px; border-bottom: 1px solid #f1f5f9; background-color: #ffffff; }
    .bento-cell-title { font-weight: bold; font-size: 8.5pt; color: #0f172a; margin-bottom: 2px; }
    .bento-cell-desc { font-size: 8pt; color: #64748b; line-height: 1.2; }
    
    .critical { background-color: #fff7ed; border: 1.2px solid #fdba74; padding: 15px; border-radius: 10px; margin: 12px 0; }
    
    .next-steps-box { background-color: #0f172a; color: #ffffff; padding: 15px; border-radius: 10px; margin: 15px 0; border-left: 5px solid #f97316; }
    .next-steps-title { color: #f97316; font-size: 8.5pt; font-weight: bold; text-transform: uppercase; margin-bottom: 6px; letter-spacing: 0.5px; }
    .next-steps-text { font-size: 8pt; line-height: 1.5; opacity: 0.95; }
    
    .signature-box { margin: 0 auto; width: 280px; height: 90px; border: 1px solid #cbd5e1; border-radius: 8px; background-color: #f8fafc; text-align: center; }
    
    .page-break { page-break-before: always; }
    .legal-table { width: 100%; border-collapse: collapse; margin-top: 5px; }
    .legal-td { width: 48%; vertical-align: top; }
    .legal-spacer { width: 4%; }
    
    .legal-card { background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 12px; margin-bottom: 10px; }
    .legal-card-title { font-size: 7.5pt; font-weight: bold; color: #0f172a; margin-bottom: 4px; text-transform: uppercase; }
    .legal-card-text { font-size: 6.5pt; color: #475569; line-height: 1.4; text-align: justify; }
    .num-pill { background-color: #f97316; color: white; padding: 1px 5px; border-radius: 4px; font-size: 6pt; margin-right: 4px; display: inline-block; }
    .num-pill-dark { background-color: #0f172a; color: white; padding: 1px 5px; border-radius: 4px; font-size: 6pt; margin-right: 4px; display: inline-block; }
</style>
</head>
<body>

<table class='header'>
    <tr>
        <td><div style='font-size: 18pt; font-weight: 900;' class='navy'>Centro <span class='orange'>Futura</span></div></td>
        <td align='right'>
            <span class='badge'>$id_expediente</span><br>
            <span style='font-size:7pt; color:#94a3b8; font-weight: bold; margin-top:5px;'>REGISTRO: $fecha_registro</span>
        </td>
    </tr>
</table>

<div class='section-title'>1. Datos del Alumno/a</div>
<div class='bento-container' style='background-color: #f8fafc; border-color: #f1f5f9; margin-bottom: 15px;'>
    <div class='bento-cell' style='padding: 15px; background-color: #f8fafc;'>
        <div style='font-size: 18pt; font-weight: bold; color: #0f172a; line-height: 1.1; margin-bottom: 6px;'>$nombre_alumno <span class='orange'>$apellidos_alumno</span></div>
        <div style='font-size: 9.5pt; color: #64748b; font-weight: bold; letter-spacing: 0.3px;'>
            $curso_escolar <span class='orange' style='margin: 0 5px;'>|</span> $centro_educativo
        </div>
    </div>
</div>

<div class='section-title'>2. Contactos Familiares y Notificaciones</div>
<div class='bento-container'>
    <table width='100%' cellpadding='0' cellspacing='0'>
        <tr>
            <td width='50%' class='bento-cell' style='border-right: 1px solid #f1f5f9;'>
                <div class='bento-cell-title'>Tutor/a 1 (Principal)</div>
                <div class='bento-cell-desc'>$tutor1_nom • $tutor1_tlf</div>
            </td>
            <td width='50%' class='bento-cell'>
                <div class='bento-cell-title'>Tutor/a 2 (Opcional)</div>
                <div class='bento-cell-desc'>$tutor2_nom • $tutor2_tlf</div>
            </td>
        </tr>
        <tr>
            <td colspan='2' class='bento-cell'>
                <div class='bento-cell-title'>Email de Notificaciones y Facturación</div>
                <div class='bento-cell-desc'>$email_notificaciones</div>
            </td>
        </tr>
    </table>
</div>

<div class='section-title'>3. Detalles de Inscripción y Horarios</div>
<div class='bento-container'>
    <table width='100%' cellpadding='0' cellspacing='0'>
        <tr>
            <td width='50%' class='bento-cell' style='border-right: 1px solid #f1f5f9;'>
                <div class='bento-cell-title'>Horas y Tarifa Mensual</div>
                <div class='bento-cell-desc'>$horas_semanales</div>
            </td>
            <td width='50%' class='bento-cell'>
                <div class='bento-cell-title'>Forma de Pago</div>
                <div class='bento-cell-desc'>$forma_pago</div>
            </td>
        </tr>
        <tr>
            <td width='50%' class='bento-cell' style='border-right: 1px solid #f1f5f9;'>
                <div class='bento-cell-title'>Asignaturas a reforzar</div>
                <div class='bento-cell-desc'>$asignaturas</div>
            </td>
            <td width='50%' class='bento-cell'>
                <div class='bento-cell-title'>Preferencia Horaria</div>
                <div class='bento-cell-desc'>$horario_preferencia</div>
            </td>
        </tr>
    </table>
</div>

<div class='critical'>
    <div class='orange' style='font-weight:bold; font-size:9pt; margin-bottom:5px;'>Información de Gabinete / NEE</div>
    <div style='font-size:8pt; font-weight:bold; color:#9a3412; margin-bottom:4px; text-transform: uppercase;'>$nee_display</div>
    <div style='font-size:8pt; line-height:1.4; color:#431407;'>$ayuda_alumno</div>
</div>

<div class='section-title'>4. Autorizaciones Legales Concedidas</div>
<div class='bento-container'>
    <table width='100%' cellpadding='0' cellspacing='0'>
        <tr>
            <td width='33.3%' class='bento-cell' style='border-right: 1px solid #f1f5f9;'>
                <div class='bento-cell-title'>Uso de WhatsApp</div>
                <div class='bento-cell-desc'>$auth_whatsapp</div>
            </td>
            <td width='33.3%' class='bento-cell' style='border-right: 1px solid #f1f5f9;'>
                <div class='bento-cell-title'>Derechos de Imagen</div>
                <div class='bento-cell-desc'>$auth_imagen</div>
            </td>
            <td width='33.3%' class='bento-cell'>
                <div class='bento-cell-title'>Salida Autónoma</div>
                <div class='bento-cell-desc'>$auth_salida</div>
            </td>
        </tr>
    </table>
</div>

<div class='next-steps-box'>
    <div class='next-steps-title'>¿Qué sucede ahora? (Próximos Pasos)</div>
    <div class='next-steps-text'>
        <strong>1. Evaluación:</strong> Nuestro equipo revisará el perfil en 24h laborables.<br>
        <strong>2. Bienvenida:</strong> Recibirás un WhatsApp para confirmar el inicio y el horario definitivo.<br>
        <strong>3. Primer día:</strong> Es vital traer el último boletín de notas.
    </div>
</div>

<div class='signature-box'>
    $firma_html
    <div style='font-weight: bold; font-size: 7.5pt; color: #0f172a; margin-top: 5px;'>Firma del Tutor/a Legal</div>
</div>
<div style='text-align: center; font-size: 6.5pt; color: #94a3b8; margin-top: 5px;'>
    Firma capturada electrónicamente. IP: $ip_firma.
</div>

<div class='page-break'></div>

<table class='header' style='margin-bottom: 10px;'>
    <tr>
        <td><div style='font-size: 14pt; font-weight: 900;' class='navy'>Centro <span class='orange'>Futura</span></div></td>
        <td align='right'>
            <div style='font-weight:bold; font-size:9pt; color:#0f172a;'>CONTRATO DE SERVICIOS</div>
            <div style='font-size:7pt; color:#94a3b8;'>Anexo a: $id_expediente</div>
        </td>
    </tr>
</table>

<div style='font-size: 11pt; font-weight: bold; color: #0f172a; margin-bottom: 15px;'>Condiciones Generales y Reglamento Interno</div>

<table class='legal-table'>
    <tr>
        <td class='legal-td'>
            <div class='legal-card' style='border-left: 3px solid #f97316;'>
                <div class='legal-card-title'><span class='num-pill'>01</span> Régimen Económico</div>
                <div class='legal-card-text'>
                    <strong>1.1. Devengo y Pago:</strong> El servicio se contrata por periodos mensuales. El pago se realizará entre los días 1 y 5 de cada mes. El retraso generará un recargo de 10€ a partir del día 10.<br>
                    <strong>1.2. Prorrateo:</strong> No se efectuarán reducciones por festivos, vacaciones o inasistencias médicas.<br>
                    <strong>1.3. Actualización:</strong> El centro puede actualizar cuotas al inicio de cada curso (aviso 30 días).
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>02</span> Bajas y Desistimiento</div>
                <div class='legal-card-text'>
                    La baja debe comunicarse por escrito (email o WhatsApp) antes del <strong>día 25 del mes anterior</strong>. La ausencia de comunicación implica el cargo irrenunciable del mes siguiente. En caso de expulsión, no hay devolución.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>03</span> Continuidad Digital</div>
                <div class='legal-card-text'>
                    Ante causas de fuerza mayor (clima, sanidad), se garantiza el servicio en modalidad online. Este cambio temporal no altera la obligación económica del contrato.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>04</span> Responsabilidad Pedagógica</div>
                <div class='legal-card-text'>
                    El centro asume una obligación de medios (recursos y docentes). El éxito académico depende del esfuerzo del alumno, declinando el centro responsabilidad sobre resultados de exámenes.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>05</span> Normas de Convivencia</div>
                <div class='legal-card-text'>
                    Se exige respeto absoluto. Queda estrictamente prohibida la grabación de sesiones (ciberconvivencia) o la falta de respeto a docentes, lo cual conlleva expulsión inmediata.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>06</span> Propiedad Intelectual</div>
                <div class='legal-card-text'>
                    Los materiales entregados son propiedad de Centro Futura. Queda prohibida su reproducción o la contratación externa de nuestros docentes por parte de las familias.
                </div>
            </div>
        </td>
        <td class='legal-spacer'></td>
        <td class='legal-td'>
            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>07</span> Seguridad y Recogida</div>
                <div class='legal-card-text'>
                    El centro custodia al alumno solo en horario lectivo. Retrasos recurrentes en la recogida (más de 15 min) podrán facturarse a 15€ por fracción como servicio de guardia.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>08</span> Uso de Imagen</div>
                <div class='legal-card-text'>
                    Sujeto a la autorización marcada en la página 1, se podrán utilizar fotos o vídeos educativos en los canales corporativos del centro velando por el menor.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>09</span> Cuidado de Instalaciones</div>
                <div class='legal-card-text'>
                    El tutor legal deberá sufragar el coste íntegro de reparación o reposición por daños derivados de un uso negligente del mobiliario o material informático por el alumno.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>10</span> Canales de Atención</div>
                <div class='legal-card-text'>
                    Toda gestión se canalizará vía email o WhatsApp oficial. Se garantiza el derecho a la desconexión digital del profesorado fuera de su horario laboral.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>11 & 12</span> Objetos y Salud</div>
                <div class='legal-card-text'>
                    El centro no se responsabiliza de pérdida de dispositivos o dinero. Es obligatorio informar de alergias. Alumnos con enfermedad contagiosa no podrán acceder al local.
                </div>
            </div>

            <div class='legal-card' style='border-left: 3px solid #0f172a;'>
                <div class='legal-card-title'><span class='num-pill'>13</span> Protección de Datos (RGPD)</div>
                <div class='legal-card-text'>
                    Datos tratados por Ainhoa Moreno (70427872D) para el servicio formativo. El centro cuenta con videovigilancia sin grabación en aulas. Ejerza sus derechos en hola@centrofutura.es.
                </div>
            </div>

            <div style='margin-top:12px; border: 1px dashed #cbd5e1; background: #ffffff; padding:10px; border-radius: 8px; font-weight:bold; color:#0f172a; font-size: 6.5pt; text-align: center;'>
                Mediante la firma electrónica en la página 1, el tutor/a legal acepta en su totalidad las cláusulas de este contrato vinculante. Condiciones disponibles en centrofutura.es
            </div>
        </td>
    </tr>
</table>
</body>
</html>";

// 4. GENERACIÓN SEGURA DEL PDF
$pdf_output = null;
$pdf_filename = "Matricula_Futura_" . str_replace(' ', '_', $nombre_alumno . "_" . $apellidos_alumno) . ".pdf";

try {
    $options = new Options();
    $options->set('isRemoteEnabled', true);
    $options->set('isHtml5ParserEnabled', true);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html_pdf);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $pdf_output = $dompdf->output();
} catch (Exception $e) {
    // Fallback: el correo debe salir sí o sí aunque falle la librería PDF
    error_log("Error generando PDF de matrícula: " . $e->getMessage());
}

// 5. ENVÍO DE CORREOS (MIME Mixed - Apple Style Email)
$to_academia = "hola@centrofutura.es";
$to_cliente = $email_notificaciones;
$subject = "Confirmación de Matrícula: $nombre_alumno $apellidos_alumno";
$boundary = md5(time());

$headers = "From: Centro Futura <hola@centrofutura.es>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

$html_email = "
<div style='font-family: Helvetica, Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #f5f5f7; padding: 20px; border-radius: 12px;'>
    <div style='background: white; padding: 35px; border-radius: 8px; text-align: center; border-top: 4px solid #ED7D31; box-shadow: 0 4px 15px rgba(0,0,0,0.05);'>
        <h2 style='color: #1c1c28; margin-top: 0; font-size: 24px; font-weight: 800;'>¡Plaza en Revisión!</h2>
        <p style='color: #424245; font-size: 16px; line-height: 1.6;'>Hemos recibido correctamente la solicitud oficial de plaza para <strong>$nombre_alumno $apellidos_alumno</strong>.</p>
        <p style='color: #424245; font-size: 16px; line-height: 1.6;'>Adjunto a este correo encontrarás el documento legal en formato PDF con todos los datos que has introducido, tu firma digital y el reglamento interno del centro.</p>
        
        <div style='background: #fff7ed; border-left: 4px solid #ED7D31; padding: 15px; text-align: left; margin: 25px 0; border-radius: 4px;'>
            <h3 style='color: #ED7D31; font-size: 14px; margin: 0 0 5px 0; text-transform: uppercase;'>¿Qué sucede ahora?</h3>
            <p style='margin:0; font-size: 14px; color: #431407; line-height: 1.5;'>Nuestro equipo psicopedagógico revisará el perfil y te escribiremos por WhatsApp en las próximas 24h para confirmarte el horario definitivo y darte la bienvenida al curso.</p>
        </div>

        <div style='margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #86868b;'>
            Expediente: $id_expediente<br>Centro Futura | Av. Pablo Iglesias 89, Rivas-Vaciamadrid
        </div>
    </div>
</div>";

$email_body = "--$boundary\r\n";
$email_body .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
$email_body .= $html_email;
$email_body .= "\r\n\r\n--$boundary\r\n";

if ($pdf_output) {
    $email_body .= "Content-Type: application/pdf; name=\"$pdf_filename\"\r\n";
    $email_body .= "Content-Transfer-Encoding: base64\r\n";
    $email_body .= "Content-Disposition: attachment; filename=\"$pdf_filename\"\r\n\r\n";
    $email_body .= chunk_split(base64_encode($pdf_output)) . "\r\n";
}
$email_body .= "--$boundary--";

// Envío Dual
if (filter_var($to_cliente, FILTER_VALIDATE_EMAIL)) {
    mail($to_cliente, $subject, $email_body, $headers);
}
mail($to_academia, "NUEVA ALTA: $nombre_alumno $apellidos_alumno", $email_body, $headers);

// 6. REDIRECCIÓN UX
header("Location: solicitud-en-revision.php");
exit();
?>