<?php 
// SEO Dinámico para la página de Éxito/Revisión
$pageTitle = "¡Solicitud Recibida! - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Hemos recibido tu solicitud de plaza. Nuestro equipo en Rivas Vaciamadrid está gestionando todo para que tu hijo comience su camino al éxito.";
$metaRobots = "noindex, nofollow"; // PRO-TIP SEO: Evita que Google indexe esta página privada

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper success-wrapper">
    
    <div class="success-glow"></div>

    <header class="text-center reveal">
        <div class="success-badge-wrapper">
            <span class="success-badge-step">Paso 2 de 2</span>
            <span class="success-badge-text">Recepción exitosa</span>
        </div>
        
        <h1 class="section-title success-header-title">
            ¡Todo listo para empezar! <br><span class="text-orange">Tu solicitud está en marcha</span>
        </h1>
        <p class="section-description mx-auto max-w-600">
            Has dado el paso más importante hacia su éxito académico. Hemos recibido tus datos y nuestro equipo ya está preparando su plaza en Rivas Vaciamadrid.
        </p>
    </header>

    <div class="success-bento-grid reveal">
        
        <div class="content-island success-card">
            <div class="success-card-header">
                <span class="pulse-dot-inline" aria-hidden="true"></span>
                <h2 class="success-card-title">Próximos pasos</h2>
            </div>
            
            <ul class="steps-list">
                <li>
                    <span class="step-number-highlight">01.</span>
                    <p class="success-step-text">Recibirás un <strong>email de confirmación</strong> con el resumen de tu solicitud y el acuerdo de éxito (revisa tu carpeta de spam por si acaso).</p>
                </li>
                <li>
                    <span class="step-number-highlight">02.</span>
                    <p class="success-step-text">Si has elegido transferencia, realiza tu aportación a la cuenta indicada para asegurar su plaza definitivamente en su grupo de estudio.</p>
                </li>
                <li>
                    <span class="step-number-highlight">03.</span>
                    <p class="success-step-text">En cuanto lo validemos, te daremos la <strong>bienvenida oficial</strong> por WhatsApp con toda la ilusión y los detalles para su primer día.</p>
                </li>
            </ul>

            <div class="success-contact-box">
                <p class="success-contact-label">¿Necesitas ayuda con el proceso?</p>
                <a href="mailto:hola@centrofutura.es" class="success-contact-link">hola@centrofutura.es</a>
            </div>
        </div>

        <div class="content-island success-card iban-card">
            <div class="iban-header-row">
                <div class="iban-title-group">
                    <div class="iban-icon-wrapper" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                    </div>
                    <h2 class="success-card-title">Inversión</h2>
                </div>
            </div>

            <div class="iban-box iban-box-interactive" onclick="copyIban()" role="button" tabindex="0" aria-label="Copiar número de cuenta bancaria">
                <div class="iban-label-row">
                    <span class="iban-label iban-label-mb0">Cuenta IBAN</span>
                    <span class="iban-action-text" id="copyBtnText">Copiar</span>
                </div>
                <div class="iban-value" id="ibanText">ES09 0019 0535 7140 1003 5170</div>
            </div>

            <div class="iban-box">
                <span class="iban-label">Concepto de la operación</span>
                <p class="iban-help-text">Nombre del alumno + Curso académico.</p>
            </div>

            <div class="iban-box iban-box-mb-lg">
                <span class="iban-label">Titular</span>
                <p class="iban-titular">Ainhoa Moreno</p>
            </div>

            <a href="https://wa.me/34676894284?text=Hola%2C%20acabo%20de%20realizar%20la%20transferencia%20de%20la%20matr%C3%ADcula.%20Os%20adjunto%20el%20justificante." target="_blank" rel="noopener noreferrer" class="btn-whatsapp-outline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Avisar por WhatsApp (Justificante)
            </a>
        </div>

        <div class="content-island success-card bento-full-width">
            <div>
                <h4 class="success-card-title-sm">Acuerdo de Crecimiento Mutuo</h4>
                <p class="success-card-subtitle">Puedes consultar las condiciones de nuestro compromiso en cualquier momento.</p>
            </div>
            <a href="<?php echo $base_url; ?>condiciones-generales.php" class="btn-ghost" target="_blank" rel="noopener noreferrer">
                Términos y Condiciones
            </a>
        </div>

    </div>

    <div class="success-disclaimer-wrapper">
        <p class="success-disclaimer-text">
            <strong>Último paso:</strong> La reserva de plaza en nuestros grupos reducidos se consolida oficialmente una vez validada la información administrativa y confirmado el abono correspondiente.
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