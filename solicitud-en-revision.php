<?php 
// SEO Dinámico para la página de Éxito/Revisión
$pageTitle = "Solicitud en Revisión - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Hemos recibido tu solicitud de matrícula correctamente. Verificaremos la información para asignarte una plaza en nuestra academia.";
$metaRobots = "noindex, nofollow"; // PRO-TIP SEO: Evita que Google indexe esta página privada

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper success-wrapper">
    
    <div class="success-glow"></div>

    <header class="text-center reveal">
        <div class="status-pill-container">
            <span class="status-pill-step">Paso 2 de 2</span>
            <span class="status-pill-text">Envío completado</span>
        </div>
        
        <h1 class="section-title mb-20">
            ¡Casi estamos! <br><span class="text-orange">Solicitud en revisión</span>
        </h1>
        <p class="section-description mx-auto max-w-600">
            Has dado el primer paso hacia la tranquilidad académica. Hemos recibido tus datos y nuestro equipo ya está procesando tu solicitud de plaza en Rivas.
        </p>
    </header>

    <div class="success-bento-grid reveal">
        
        <div class="content-island success-card">
            <div class="flex items-center gap-15 mb-40">
                <span class="pulse-dot-inline" aria-hidden="true"></span>
                <h2 class="success-card-title">Próximos pasos</h2>
            </div>
            
            <ul class="steps-list">
                <li>
                    <span class="step-number-highlight">01.</span>
                    <p class="success-step-text">Recibirás un <strong>email automático</strong> con el resguardo de esta solicitud y el contrato firmado. Revisa tu carpeta de spam si no lo ves.</p>
                </li>
                <li>
                    <span class="step-number-highlight">02.</span>
                    <p class="success-step-text">Si has elegido pago por transferencia, realiza el abono a la cuenta indicada para bloquear la plaza definitivamente.</p>
                </li>
                <li>
                    <span class="step-number-highlight">03.</span>
                    <p class="success-step-text">Tras validar el pago, te enviaremos la <strong>bienvenida oficial</strong> por WhatsApp indicando el día de inicio de clases.</p>
                </li>
            </ul>

            <div class="success-footer-box">
                <p class="success-footer-label">¿Dudas con la transferencia?</p>
                <p class="success-footer-email"><a href="mailto:hola@centrofutura.es" class="no-underline text-navy">hola@centrofutura.es</a></p>
            </div>
        </div>

        <div class="content-island success-card iban-card">
            <div class="flex items-center justify-between mb-30">
                <div class="flex items-center gap-15">
                    <div class="icon-box-orange">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                    </div>
                    <h2 class="success-card-title">Matrícula</h2>
                </div>
            </div>

            <div class="iban-box iban-box-interactive" onclick="copyIban()" role="button" tabindex="0" aria-label="Copiar número de cuenta bancaria">
                <div class="iban-label-row">
                    <span class="iban-label">Cuenta IBAN</span>
                    <span class="iban-action-text" id="copyBtnText">Copiar</span>
                </div>
                <div class="iban-value" id="ibanText">ES09 0019 0535 7140 1003 5170</div>
            </div>

            <div class="iban-box">
                <span class="iban-label block mb-8">Concepto (Muy Importante)</span>
                <p class="iban-muted-text">Nombre del alumno + Curso académico.</p>
            </div>

            <div class="iban-box mb-25">
                <span class="iban-label block mb-8">Titular</span>
                <p class="iban-owner-text">Ainhoa Moreno</p>
            </div>

            <a href="https://wa.me/34676894284?text=Hola%2C%20acabo%20de%20realizar%20la%20transferencia%20de%20la%20matr%C3%ADcula.%20Os%20adjunto%20el%20justificante." target="_blank" rel="noopener" class="btn-whatsapp-outline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Enviar justificante por WhatsApp
            </a>
        </div>

        <div class="content-island success-card bento-full-width success-card-row">
            <div>
                <h4 class="success-card-subtitle">Copia del Contrato</h4>
                <p class="success-step-text">Puedes volver a consultar las condiciones aceptadas en cualquier momento.</p>
            </div>
            <a href="condiciones-generales.php" class="btn-ghost" target="_blank" rel="noopener noreferrer">
                Términos y Reglamento
            </a>
        </div>

    </div>

    <div class="text-center mt-60 max-w-600 mx-auto">
        <p class="success-disclaimer">
            <strong>Aviso importante:</strong> El envío de este formulario no garantiza la plaza de forma automática hasta la correspondiente validación administrativa y confirmación del abono.
        </p>
    </div>

</main>

<script>
    // Script optimizado para copiar el IBAN con feedback visual sutil
    function copyIban() {
        const ibanForClipboard = "ES0900190535714010035170"; // Copia sin espacios para facilitar el pegado en apps bancarias
        
        navigator.clipboard.writeText(ibanForClipboard).then(function() {
            const ibanTextEl = document.getElementById('ibanText');
            const copyBtnEl = document.getElementById('copyBtnText');
            
            // Feedback visual
            ibanTextEl.style.color = 'var(--color-orange)';
            copyBtnEl.innerText = '¡Copiado!';
            copyBtnEl.style.background = 'var(--color-orange)';
            copyBtnEl.style.color = 'white';
            
            // Restaurar estado tras 2 segundos
            setTimeout(function() {
                ibanTextEl.style.color = '';
                copyBtnEl.innerText = 'Copiar';
                copyBtnEl.style.background = '';
                copyBtnEl.style.color = '';
            }, 2000);
        }).catch(function(err) {
            console.error('Error al copiar el texto: ', err);
            alert('Hubo un problema al copiar. Por favor, selecciónalo manualmente.');
        });
    }

    // Accesibilidad: Permitir activar la copia pulsando "Enter" al navegar con teclado
    document.querySelector('.iban-box-interactive').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            copyIban();
        }
    });
</script>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>