<?php
/**
 * MOTOR DE MATRÍCULA ELITE - CENTRO FUTURA
 * Arquitectura: PHP Puro con Dompdf
 * Estilo: Apple Premium / Bento Grid (2 Páginas)
 */

// Evitar mostrar errores en pantalla (Seguridad)
error_reporting(0);

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

// 1. FILTRO DE SEGURIDAD (Honeypot anti-spam)
if (!empty($_POST['website_url'])) {
    die("Petición bloqueada por seguridad."); 
}

// 2. PROCESAMIENTO DE DATOS DEL FORMULARIO
$fecha_registro = date("d/m/Y - H:i");
$id_expediente = "CF-" . date("Y") . "-" . rand(10000, 99999);

// Sanitización rigurosa
$email_notificaciones = filter_var($_POST['email_notificaciones'] ?? '', FILTER_SANITIZE_EMAIL);
$nombre_alumno = htmlspecialchars($_POST['nombre_alumno'] ?? 'No especificado');
$apellidos_alumno = htmlspecialchars($_POST['apellidos_alumno'] ?? '');
$centro = htmlspecialchars($_POST['centro_educativo'] ?? 'No especificado');
$curso = htmlspecialchars($_POST['curso_escolar'] ?? 'No especificado');
$ayuda = htmlspecialchars($_POST['ayuda_alumno'] ?? 'No se especifican observaciones adicionales.');
$nee_list = isset($_POST['nee']) ? implode(', ', $_POST['nee']) : 'Ninguna';

$tutor1_nom = htmlspecialchars($_POST['nombre_tutor1'] ?? 'No especificado');
$tutor1_tlf = htmlspecialchars($_POST['tlf_tutor1'] ?? 'No especificado');
$tutor2_nom = htmlspecialchars($_POST['nombre_tutor2'] ?? 'No aportado');
$tutor2_tlf = htmlspecialchars($_POST['tlf_tutor2'] ?? 'No aportado');

$horas = htmlspecialchars($_POST['horas_semanales'] ?? 'No especificado');
$horario = htmlspecialchars($_POST['horario_preferencia'] ?? 'No especificado');
$asignaturas = htmlspecialchars($_POST['asignaturas'] ?? 'No especificado');
$pago = htmlspecialchars($_POST['forma_pago'] ?? 'No especificado');

$auth_wa = isset($_POST['auth_whatsapp']) ? 'SÍ' : 'NO';
$auth_img = isset($_POST['auth_imagen']) ? 'SÍ' : 'NO';
$auth_salida = isset($_POST['auth_salida']) ? 'SÍ' : 'NO';
$firma_base64 = $_POST['firma_base64'] ?? '';

// Fallback visual si no hay firma
$firma_html = $firma_base64 ? "<img src='$firma_base64' width='180' />" : "<div style='padding:20px; color:#ED7D31;'>Pendiente de firma en el centro</div>";

// 3. ESTRUCTURA HTML & CSS DEL PDF (Bento Grid)
$html_pdf = "
<html>
<head>
<style>
    @page { margin: 0; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; background: #ffffff; color: #1D1D1F; margin: 0; padding: 0; }
    
    .page-break { page-break-after: always; }
    .orange { color: #ED7D31; }
    .navy { color: #1C1C28; }
    .gray { color: #86868b; }
    
    .header { background: #F5F5F7; padding: 40px; border-bottom: 1px solid #d2d2d7; }
    .logo-text { font-size: 26pt; font-weight: 900; letter-spacing: -1.5px; margin: 0; }
    .badge { background: #ED7D31; color: white; padding: 4px 10px; border-radius: 6px; font-size: 8pt; font-weight: 800; text-transform: uppercase; margin-bottom: 8px; display: inline-block; }

    .container { padding: 30px 40px; }
    .bento-table { width: 100%; border-collapse: separate; border-spacing: 12px; margin-left: -12px; }
    .island { background: #F5F5F7; border-radius: 22px; padding: 22px; vertical-align: top; border: 1px solid rgba(0,0,0,0.02); }
    
    .label { font-size: 7.5pt; font-weight: 800; text-transform: uppercase; letter-spacing: 1.2px; color: #86868b; margin-bottom: 6px; }
    .value { font-size: 11pt; font-weight: bold; color: #1C1C28; }
    .pill { background: #ffffff; border: 1px solid #d2d2d7; padding: 3px 10px; border-radius: 100px; font-size: 8pt; font-weight: bold; display: inline-block; margin-top: 5px; }

    .signature-wrap { background: #ffffff; border: 1px solid #d2d2d7; border-radius: 14px; padding: 12px; margin-top: 10px; text-align: center; }
    
    .legal-page { padding: 50px; }
    .legal-title { font-size: 18pt; font-weight: 900; margin-bottom: 30px; border-left: 6px solid #ED7D31; padding-left: 15px; }
    .legal-column { width: 48%; vertical-align: top; font-size: 8pt; color: #424245; line-height: 1.6; }
    .legal-section { margin-bottom: 15px; }
    .legal-section h4 { color: #1C1C28; margin: 0 0 5px 0; font-size: 9pt; text-transform: uppercase; }
</style>
</head>
<body>
    <div class='page-break'>
        <div class='header'>
            <table width='100%'>
                <tr>
                    <td>
                        <div class='badge'>Matrícula Oficial</div>
                        <div class='logo-text'>Centro <span class='orange'>Futura</span></div>
                    </td>
                    <td align='right'>
                        <div class='gray' style='font-weight: bold; font-size: 8pt;'>EXPEDIENTE</div>
                        <div style='font-size: 14pt; font-weight: 900;'>$id_expediente</div>
                        <div class='gray' style='font-size: 8pt;'>Registrado el $fecha_registro</div>
                    </td>
                </tr>
            </table>
        </div>

        <div class='container'>
            <table class='bento-table'>
                <tr>
                    <td class='island' width='62%'>
                        <div class='label'>I. Perfil del Alumno</div>
                        <div style='font-size: 20pt; font-weight: 900; margin-bottom: 10px;' class='navy'>$nombre_alumno <span class='orange'>$apellidos_alumno</span></div>
                        <div class='pill'>$curso</div> &nbsp; <div class='pill'>$centro</div>
                        <div style='margin-top:20px;'>
                            <div class='label'>Email Notificaciones</div>
                            <div class='value' style='color:#ED7D31'>$email_notificaciones</div>
                        </div>
                    </td>
                    <td class='island' width='38%'>
                        <div class='label'>II. Plan y Tarifa</div>
                        <div class='label' style='margin-top:10px;'>Carga Seleccionada</div>
                        <div class='value'>$horas</div>
                        <div class='label' style='margin-top:15px;'>Método de Pago</div>
                        <div class='value'>$pago</div>
                    </td>
                </tr>
            </table>

            <table class='bento-table'>
                <tr>
                    <td class='island'>
                        <div class='label'>III. Informe y Apoyo Especializado</div>
                        <div class='pill' style='background:#ED7D31; color:white; border:none;'>NEE: $nee_list</div>
                        <div style='margin-top:12px; font-size: 9.5pt; color: #424245;'>$ayuda</div>
                    </td>
                </tr>
            </table>

            <table class='bento-table'>
                <tr>
                    <td class='island' width='55%'>
                        <div class='label'>IV. Planificación de Sesiones</div>
                        <div class='label' style='margin-top:5px;'>Asignaturas</div>
                        <div class='value' style='font-size:9.5pt;'>$asignaturas</div>
                        <div class='label' style='margin-top:15px;'>Tutor/a Principal</div>
                        <div class='value' style='font-size:9.5pt;'>$tutor1_nom ($tutor1_tlf)</div>
                        <div class='label' style='margin-top:15px;'>Preferencia Horaria</div>
                        <div class='value' style='font-size:9.5pt;'>$horario</div>
                    </td>
                    <td class='island' width='45%'>
                        <div class='label'>V. Validación y Firma</div>
                        <div style='font-size: 7.5pt; color: #86868b; margin-bottom: 10px;'>Acredita la aceptación de normativa.</div>
                        <div class='signature-wrap'>
                            $firma_html
                            <div style='font-size: 6pt; color: #86868b; margin-top: 5px; text-transform: uppercase;'>Firma Digital del Tutor/a</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class='legal-page'>
        <div class='legal-title'>Condiciones Generales</div>
        <table width='100%'>
            <tr>
                <td class='legal-column'>
                    <div class='legal-section'><h4>1. Pagos y Facturación</h4>Las cuotas son fijas (del 1 al 5). No se descuentan festivos.</div>
                    <div class='legal-section'><h4>2. Política de Bajas</h4>Notificar por escrito antes del día 25 del mes anterior.</div>
                </td>
                <td width='4%'></td>
                <td class='legal-column'>
                    <div class='legal-section'><h4>3. Cuenta Bancaria</h4><strong>IBAN:</strong> ES09 0019 0535 7140 1003 5170</div>
                    <div class='legal-section'><h4>4. Consentimientos</h4>WhatsApp ($auth_wa), Imagen ($auth_img), Salida ($auth_salida).</div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>";

// 4. GENERACIÓN SEGURA DEL PDF
$pdf_output = null;
$pdf_filename = "Matricula_" . str_replace(' ', '_', $nombre_alumno) . ".pdf";

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
    // Si falla el PDF, no detenemos el proceso, el email debe salir igual.
    error_log("Error generando PDF de matrícula: " . $e->getMessage());
}

// 5. ENVÍO DE CORREOS (MIME Mixed)
$to_academia = "hola@centrofutura.es";
$to_cliente = $email_notificaciones;
$subject = "Nueva Matrícula Oficial: $nombre_alumno $apellidos_alumno";
$boundary = md5(time());

$headers = "From: Centro Futura <hola@centrofutura.es>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// HTML del Email Premium
$html_email = "
<div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #f5f5f7; padding: 20px; border-radius: 12px;'>
    <div style='background: white; padding: 30px; border-radius: 8px; text-align: center; border-top: 4px solid #ED7D31;'>
        <h2 style='color: #1c1c28; margin-top: 0;'>¡Matrícula en Revisión!</h2>
        <p style='color: #424245; font-size: 16px; line-height: 1.5;'>Hemos recibido correctamente la solicitud de plaza para <strong>$nombre_alumno</strong>.</p>
        <p style='color: #424245; font-size: 16px; line-height: 1.5;'>Adjunto a este correo encontrarás el documento oficial con todos los datos y el reglamento del centro.</p>
        <div style='margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; font-size: 12px; color: #86868b;'>
            Expediente: $id_expediente<br>Centro Futura | Rivas Vaciamadrid
        </div>
    </div>
</div>";

// Cuerpo del email
$email_body = "--$boundary\r\n";
$email_body .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
$email_body .= $html_email;
$email_body .= "\r\n\r\n--$boundary\r\n";

// Adjuntar PDF si se generó con éxito
if ($pdf_output) {
    $email_body .= "Content-Type: application/pdf; name=\"$pdf_filename\"\r\n";
    $email_body .= "Content-Transfer-Encoding: base64\r\n";
    $email_body .= "Content-Disposition: attachment; filename=\"$pdf_filename\"\r\n\r\n";
    $email_body .= chunk_split(base64_encode($pdf_output)) . "\r\n";
}
$email_body .= "--$boundary--";

// Enviar a la academia (Ainhoa) y al cliente (Padres)
if (filter_var($to_cliente, FILTER_VALIDATE_EMAIL)) {
    mail($to_cliente, "Copia de tu Matrícula - Centro Futura", $email_body, $headers);
}
mail($to_academia, $subject, $email_body, $headers);

// 6. REDIRECCIÓN CORREGIDA A PÁGINA DE ÉXITO (UX)
header("Location: solicitud-en-revision.php");
exit();
?>