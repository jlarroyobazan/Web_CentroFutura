<?php
/**
 * MOTOR DE MATRÍCULA ELITE - CENTRO FUTURA
 * Arquitectura: PHP Puro con Dompdf
 * Estilo: Bento Grid Apple Premium + Acuerdo Legal + Logo Tipográfico
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
    '7' => '7 horas semanales (230€ /mes)', '8' => '8 horas semanales (260€ /mes)', 'pau' => 'Curso PAU - 10 horas (120€ /curso)'
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
$firma_html = $firma_base64 ? "<img src='$firma_base64' style='max-height: 60px; margin-top: 5px;'>" : "<div style='padding:20px; color:#ED7D31; font-size:10px;'>Firma digital pendiente</div>";

// 3. ESTRUCTURA HTML & CSS DEL PDF (Estilos integrados obligatorios para Dompdf)
$html_pdf = "
<html>
<head>
<style>
    @page { margin: 10mm 15mm; background-color: #ffffff; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; color: #1e293b; font-size: 9pt; line-height: 1.4; background-color: #ffffff; margin: 0; padding: 0; }
    
    .orange { color: #ED7D31; }
    .navy { color: #1e293b; }
    .header { width: 100%; border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 20px; }
    .badge { background-color: #0f172a; color: #ffffff; padding: 4px 10px; border-radius: 8px; font-size: 8pt; font-weight: bold; }
    
    .section-title { font-size: 7.5pt; font-weight: bold; color: #94a3b8; text-transform: uppercase; letter-spacing: 1.5px; margin: 20px 0 8px 5px; }
    
    .bento-container { border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; background-color: #ffffff; width: 100%; margin-bottom: 12px; }
    .bento-cell { padding: 12px 15px; border-bottom: 1px solid #f1f5f9; background-color: #ffffff; }
    .bento-cell-title { font-weight: bold; font-size: 8.5pt; color: #0f172a; margin-bottom: 2px; }
    .bento-cell-desc { font-size: 8pt; color: #64748b; line-height: 1.2; }
    
    .critical { background-color: #f9f0ff; border: 1.2px solid #e9d5ff; padding: 15px; border-radius: 10px; margin: 12px 0; }
    .critical-title { color: #8e44ad; font-weight:bold; font-size:9pt; margin-bottom:5px; }
    
    .next-steps-box { background-color: #0f172a; color: #ffffff; padding: 15px; border-radius: 10px; margin: 15px 0; border-left: 5px solid #ED7D31; }
    .next-steps-title { color: #ED7D31; font-size: 8.5pt; font-weight: bold; text-transform: uppercase; margin-bottom: 6px; letter-spacing: 0.5px; }
    .next-steps-text { font-size: 8pt; line-height: 1.5; opacity: 0.95; }
    
    .signature-box { margin: 0 auto; width: 280px; height: 90px; border: 1px solid #cbd5e1; border-radius: 8px; background-color: #f8fafc; text-align: center; }
    
    .page-break { page-break-before: always; }
    .legal-table { width: 100%; border-collapse: collapse; margin-top: 5px; }
    .legal-td { width: 48%; vertical-align: top; }
    .legal-spacer { width: 4%; }
    
    .legal-card { background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 12px; margin-bottom: 10px; }
    .legal-card-title { font-size: 7.5pt; font-weight: bold; color: #0f172a; margin-bottom: 4px; text-transform: uppercase; }
    .legal-card-text { font-size: 6.5pt; color: #475569; line-height: 1.4; text-align: justify; }
    .num-pill { background-color: #ED7D31; color: white; padding: 1px 5px; border-radius: 4px; font-size: 6pt; margin-right: 4px; display: inline-block; }
    .num-pill-dark { background-color: #0f172a; color: white; padding: 1px 5px; border-radius: 4px; font-size: 6pt; margin-right: 4px; display: inline-block; }
</style>
</head>
<body>

<table class='header'>
    <tr>
        <td>
            <div style=\"font-size: 19pt; letter-spacing: -0.5px;\">
                <span style=\"color: #1e293b; font-weight: normal;\">Centro</span> <span style=\"color: #ED7D31; font-weight: bold;\">Futura</span>
            </div>
        </td>
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
    <div class='critical-title'>Perfil Neurocognitivo / NEE</div>
    <div style='font-size:8pt; font-weight:bold; color:#6b21a8; margin-bottom:4px; text-transform: uppercase;'>$nee_display</div>
    <div style='font-size:8pt; line-height:1.4; color:#4c1d95;'>$ayuda_alumno</div>
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
    <div class='next-steps-title'>Acuerdo confirmado. ¿Qué sucede ahora?</div>
    <div class='next-steps-text'>
        <strong>1. Evaluación y Asignación:</strong> Analizaremos la solicitud y le asignaremos su grupo ideal.<br>
        <strong>2. Bienvenida Oficial:</strong> Recibiréis un mensaje confirmando el horario definitivo.<br>
        <strong>3. Primer día:</strong> Aconsejamos que el alumno traiga su agenda y últimas calificaciones.
    </div>
</div>

<div class='signature-box'>
    $firma_html
    <div style='font-weight: bold; font-size: 7.5pt; color: #0f172a; margin-top: 5px;'>Firma del Tutor/a Legal</div>
</div>
<div style='text-align: center; font-size: 6.5pt; color: #94a3b8; margin-top: 5px;'>
    Acuerdo sellado digitalmente. IP de firma: $ip_firma.
</div>

<div class='page-break'></div>

<table class='header' style='margin-bottom: 10px;'>
    <tr>
        <td>
            <div style=\"font-size: 15pt; letter-spacing: -0.5px;\">
                <span style=\"color: #1e293b; font-weight: normal;\">Centro</span> <span style=\"color: #ED7D31; font-weight: bold;\">Futura</span>
            </div>
        </td>
        <td align='right'>
            <div style='font-weight:bold; font-size:9pt; color:#0f172a;'>ACUERDO DE SERVICIOS</div>
            <div style='font-size:7pt; color:#94a3b8;'>Anexo a expediente: $id_expediente</div>
        </td>
    </tr>
</table>

<div style='font-size: 10pt; font-weight: bold; color: #0f172a; margin-bottom: 15px;'>Resumen de Condiciones y Normas de Convivencia</div>

<table class='legal-table'>
    <tr>
        <td class='legal-td'>
            <div class='legal-card' style='border-left: 3px solid #ED7D31;'>
                <div class='legal-card-title'><span class='num-pill'>01</span> Transparencia y Pagos</div>
                <div class='legal-card-text'>
                    Para mantener los grupos reducidos, el servicio es mensual. Los cobros se realizan del 1 al 5. Los recibos devueltos o pagos a partir del día 10 generan un recargo de gestión de 10€. Las tarifas son planas anuales (sin compensación por festivos o inasistencia del alumno).
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>02</span> Pausas de Servicio</div>
                <div class='legal-card-text'>
                    Entendemos que las necesidades cambian. Solo pedimos comunicar la baja por escrito antes del día 25 del mes anterior para no emitir el recibo y poder ceder la plaza a otra familia.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>03</span> Continuidad Educativa</div>
                <div class='legal-card-text'>
                    Ante situaciones de fuerza mayor (climáticas, etc.), las clases pasarán fluidamente a modalidad de Aula Virtual, garantizando el progreso sin alterar la cuota del servicio.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>04</span> Compromiso de Éxito</div>
                <div class='legal-card-text'>
                    Ofrecemos una obligación de medios (equipo colegiado, método neuroeducativo). Sin embargo, el éxito (notas, EvAU) requiere del esfuerzo ineludible del propio alumno.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>05</span> Convivencia Segura</div>
                <div class='legal-card-text'>
                    Creamos un entorno protegido. No se tolerará el acoso, faltas de respeto, ni la grabación en vídeo/audio a compañeros. El incumplimiento supondrá la baja inmediata del centro.
                </div>
            </div>
        </td>
        <td class='legal-spacer'></td>
        <td class='legal-td'>
            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>06</span> Cuidado de Recursos</div>
                <div class='legal-card-text'>
                    Los materiales (esquemas, guías) son propiedad intelectual del centro para uso exclusivo del alumno. Las familias se comprometen a no contratar a nuestros profesores de forma privada.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>07</span> Seguridad y Recogida</div>
                <div class='legal-card-text'>
                    Custodiamos al menor en horario de clase. Rogamos puntualidad en la recogida; retrasos sistemáticos (más de 15 min) obligan a facturar un cargo adicional por custodia.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>08</span> Uso de Nuestras Aulas</div>
                <div class='legal-card-text'>
                    El centro es el \"tercer educador\". Si el alumno causara daños graves al mobiliario por uso negligente, la familia deberá responsabilizarse de la reparación.
                </div>
            </div>

            <div class='legal-card'>
                <div class='legal-card-title'><span class='num-pill-dark'>09</span> Salud y Objetos Personales</div>
                <div class='legal-card-text'>
                    Se debe avisar de alergias. Si el menor presenta síntomas contagiosos, debe quedarse en casa. El centro no se responsabiliza de dispositivos electrónicos o dinero perdidos.
                </div>
            </div>

            <div class='legal-card' style='border-left: 3px solid #0f172a;'>
                <div class='legal-card-title'><span class='num-pill'>10</span> Privacidad y RGPD</div>
                <div class='legal-card-text'>
                    Datos custodiados por Ainhoa Moreno (70427872D) exclusivamente para el servicio. Contamos con videovigilancia sin grabación en aulas. Ejerza sus derechos en hola@centrofutura.es.
                </div>
            </div>

            <div style='margin-top:12px; border: 1px dashed #cbd5e1; background: #ffffff; padding:10px; border-radius: 8px; color:#0f172a; font-size: 6.5pt; text-align: center;'>
                <strong>Acuerdo en Firme:</strong> Mediante la rúbrica digital en la página anterior, la familia acepta este marco de convivencia. Documento completo disponible en centrofutura.es.
            </div>
        </td>
    </tr>
</table>
</body>
</html>";

// 4. GENERACIÓN SEGURA DEL PDF
$pdf_output = null;
$pdf_filename = "Acuerdo_CentroFutura_" . str_replace(' ', '_', $nombre_alumno . "_" . $apellidos_alumno) . ".pdf";

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

// 5. ENVÍO DE CORREOS (MIME Mixed - Correos amigables estilo "Aliado Familiar")
$to_academia = "hola@centrofutura.es";
$to_cliente = $email_notificaciones;
$subject = "¡Tu solicitud está en marcha! - Centro Futura";
$boundary = md5(time());

$headers = "From: Centro Futura <hola@centrofutura.es>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// HTML del Correo Electrónico
$html_email = "
<div style='font-family: Helvetica, Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #f5f5f7; padding: 20px; border-radius: 12px;'>
    <div style='background: white; padding: 35px; border-radius: 8px; text-align: center; border-top: 4px solid #ED7D31; box-shadow: 0 4px 15px rgba(0,0,0,0.05);'>
        <h2 style='color: #1c1c28; margin-top: 0; font-size: 24px; font-weight: 800;'>¡Todo listo para empezar!</h2>
        <p style='color: #424245; font-size: 16px; line-height: 1.6;'>Hola, acabas de dar el paso más importante hacia la tranquilidad académica de <strong>$nombre_alumno</strong>.</p>
        <p style='color: #424245; font-size: 16px; line-height: 1.6;'>Hemos recibido vuestros datos correctamente. Adjunto a este correo encontrarás el <strong>Acuerdo de Servicios</strong> en formato PDF, que incluye el resumen de vuestra solicitud y nuestra garantía de calidad.</p>
        
        <div style='background: #fff7ed; border-left: 4px solid #ED7D31; padding: 15px; text-align: left; margin: 25px 0; border-radius: 4px;'>
            <h3 style='color: #ED7D31; font-size: 14px; margin: 0 0 5px 0; text-transform: uppercase;'>Siguientes Pasos:</h3>
            <p style='margin:0; font-size: 14px; color: #431407; line-height: 1.5;'>Nuestro equipo evaluará el perfil y os escribiremos por WhatsApp en menos de 24 horas para confirmaros el horario definitivo y daros la bienvenida oficial al curso.</p>
        </div>

        <p style='color: #86868b; font-size: 14px;'>¡Estamos deseando empezar a trabajar juntos!</p>

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