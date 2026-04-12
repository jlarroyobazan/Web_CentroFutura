<?php 
// SEO Dinámico para la página de Éxito/Revisión
$pageTitle = "Solicitud en Revisión - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Hemos recibido tu solicitud de matrícula correctamente. Verificaremos la información para asignarte una plaza en nuestra academia.";
$metaRobots = "noindex, nofollow"; // PRO-TIP SEO: Evita que Google indexe esta página privada

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<style>
    /* Layout específico para la cuadrícula Bento de esta página */
    .success-wrapper {
        padding-top: 80px;
        padding-bottom: 80px;
        max-width: 1100px;
        margin: 0 auto;
        position: relative;
    }

    /* Destello naranja de fondo para celebrar el éxito */
    .success-glow {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(237, 125, 49, 0.12) 0%, transparent 70%);
        border-radius: 50%;
        z-index: -1;
        pointer-events: none;
    }

    .success-bento-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 30px;
        margin-top: 50px;
    }

    @media (min-width: 950px) {
        .success-bento-grid {
            grid-template-columns: 1.3fr 1fr;
        }
        .bento-full-width {
            grid-column: span 2;
        }
    }

    .success-card {
        margin: 0; /* Resetea el margen vertical por defecto de content-island */
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border: 1px solid rgba(0,0,0,0.03);
    }

    /* Estilos para la lista de pasos */
    .steps-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .steps-list li {
        display: flex;
        gap: 20px;
        margin-bottom: 25px;
        align-items: flex-start;
    }

    .steps-list li:last-child {
        margin-bottom: 0;
    }

    .step-number-highlight {
        color: var(--color-orange);
        font-family: var(--font-title);
        font-weight: 900;
        font-size: 1.25rem;
        line-height: 1;
    }

    /* Tarjeta oscura del IBAN (Estilo Apple Wallet) */
    .iban-card {
        background-color: var(--color-navy);
        color: var(--color-white);
        border: none;
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .iban-card h3 {
        color: var(--color-white);
    }

    .iban-box {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--radius-md);
        padding: 20px 24px;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .iban-box-interactive {
        cursor: pointer;
    }

    .iban-box-interactive:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
    }

    .iban-label-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }

    .iban-label {
        font-size: 0.7rem;
        font-weight: 800;
        text-transform: uppercase;
        color: var(--color-orange);
        letter-spacing: 0.1em;
    }

    .iban-action-text {
        font-size: 0.7rem;
        font-weight: 800;
        text-transform: uppercase;
        color: var(--color-white);
        background: rgba(255,255,255,0.1);
        padding: 4px 10px;
        border-radius: 100px;
        letter-spacing: 0.05em;
        transition: all 0.3s ease;
    }

    .iban-box-interactive:hover .iban-action-text {
        background: var(--color-orange);
        color: white;
    }

    .iban-value {
        font-family: 'SF Mono', ui-monospace, monospace;
        font-size: 1.25rem;
        font-weight: 800;
        letter-spacing: 0.05em;
        color: var(--color-white);
        transition: color 0.3s ease;
        word-break: break-all;
    }

    /* Animación del pulso para el indicador visual */
    .pulse-dot-inline {
        display: inline-block;
        width: 12px;
        height: 12px;
        background-color: var(--color-orange);
        border-radius: 50%;
        animation: pulse-ring 2s infinite;
    }
</style>

<main class="page-wrapper success-wrapper">
    
    <div class="success-glow"></div>

    <header class="text-center reveal">
        <div style="display: inline-flex; align-items: center; gap: 12px; background: var(--color-white); padding: 6px 16px; border-radius: 100px; box-shadow: var(--shadow-sm); border: 1px solid rgba(0,0,0,0.05); margin-bottom: 30px;">
            <span style="background: var(--color-navy); color: white; font-size: 0.65rem; font-weight: 900; text-transform: uppercase; padding: 4px 10px; border-radius: 100px; letter-spacing: 0.05em;">Paso 2 de 2</span>
            <span style="font-size: 0.7rem; font-weight: 800; text-transform: uppercase; color: #a0a0ab; letter-spacing: 0.1em;">Envío completado</span>
        </div>
        
        <h1 class="section-title" style="margin-bottom: 20px;">
            ¡Casi estamos! <br><span class="text-orange">Solicitud en revisión</span>
        </h1>
        <p class="section-description mx-auto max-w-600">
            Has dado el primer paso hacia la tranquilidad académica. Hemos recibido tus datos y nuestro equipo ya está procesando tu solicitud de plaza en Rivas.
        </p>
    </header>

    <div class="success-bento-grid reveal">
        
        <div class="content-island success-card">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 40px;">
                <span class="pulse-dot-inline" aria-hidden="true"></span>
                <h2 style="font-family: var(--font-title); font-size: 1.5rem; font-weight: 900; color: var(--color-navy); margin: 0; text-transform: uppercase;">Próximos pasos</h2>
            </div>
            
            <ul class="steps-list">
                <li>
                    <span class="step-number-highlight">01.</span>
                    <p style="font-size: 0.95rem; color: var(--color-text); margin: 0;">Recibirás un <strong>email automático</strong> con el resguardo de esta solicitud y el contrato firmado. Revisa tu carpeta de spam si no lo ves.</p>
                </li>
                <li>
                    <span class="step-number-highlight">02.</span>
                    <p style="font-size: 0.95rem; color: var(--color-text); margin: 0;">Si has elegido pago por transferencia, realiza el abono a la cuenta indicada para bloquear la plaza definitivamente.</p>
                </li>
                <li>
                    <span class="step-number-highlight">03.</span>
                    <p style="font-size: 0.95rem; color: var(--color-text); margin: 0;">Tras validar el pago, te enviaremos la <strong>bienvenida oficial</strong> por WhatsApp indicando el día de inicio de clases.</p>
                </li>
            </ul>

            <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.65rem; font-weight: 900; text-transform: uppercase; color: #a0a0ab; letter-spacing: 0.1em; margin-bottom: 5px;">¿Dudas con la transferencia?</p>
                <p style="font-size: 1rem; font-weight: 800; color: var(--color-navy); margin: 0;"><a href="mailto:hola@centrofutura.es" style="color: inherit; text-decoration: none;">hola@centrofutura.es</a></p>
            </div>
        </div>

        <div class="content-island success-card iban-card">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 30px;">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="background: var(--color-orange); padding: 12px; border-radius: 14px; display: flex;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                    </div>
                    <h2 style="font-family: var(--font-title); font-size: 1.5rem; font-weight: 900; margin: 0; text-transform: uppercase;">Matrícula</h2>
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
                <span class="iban-label" style="display: block; margin-bottom: 8px;">Concepto (Muy Importante)</span>
                <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0; font-weight: 500;">Nombre del alumno + Curso académico.</p>
            </div>

            <div class="iban-box" style="margin-bottom: 25px;">
                <span class="iban-label" style="display: block; margin-bottom: 8px;">Titular</span>
                <p style="font-size: 0.9rem; color: var(--color-white); margin: 0; font-weight: 800; text-transform: uppercase;">Ainhoa Moreno</p>
            </div>

            <a href="https://wa.me/34676894284?text=Hola%2C%20acabo%20de%20realizar%20la%20transferencia%20de%20la%20matr%C3%ADcula.%20Os%20adjunto%20el%20justificante." target="_blank" rel="noopener" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); padding: 16px; border-radius: 100px; color: white; text-decoration: none; font-family: var(--font-title); font-weight: 800; transition: all 0.3s ease;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Enviar justificante por WhatsApp
            </a>
        </div>

        <div class="content-island success-card bento-full-width" style="flex-direction: row; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            <div>
                <h4 style="font-family: var(--font-title); font-size: 1.25rem; font-weight: 900; color: var(--color-navy); margin-bottom: 5px; text-transform: uppercase;">Copia del Contrato</h4>
                <p style="font-size: 0.9rem; color: var(--color-text); margin: 0;">Puedes volver a consultar las condiciones aceptadas en cualquier momento.</p>
            </div>
            <a href="condiciones-generales.php" class="btn-ghost" target="_blank" rel="noopener noreferrer">
                Términos y Reglamento
            </a>
        </div>

    </div>

    <div class="text-center" style="margin-top: 60px; max-width: 600px; margin-left: auto; margin-right: auto;">
        <p style="font-size: 0.75rem; color: #a0a0ab; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; line-height: 1.6;">
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