<?php 
// SEO Dinámico para la página de Aviso Legal
$pageTitle = "Aviso Legal - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Información Legal y cumplimiento LSSI-CE de Academia Centro Futura. Transparencia digital y titularidad.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">INFORMACIÓN LEGAL</span>
        <h1 class="section-title">Aviso <span class="text-orange">Legal</span></h1>
        <p class="section-description mx-auto mt-10">Cumplimiento LSSI-CE y Transparencia Digital • Edición 2026</p>
    </header>

    <div class="legal-content">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="legal-badge-orange">01</span>
                <h2 class="legal-title">Responsable y Titularidad</h2>
            </div>
            <div class="legal-text">
                <p>En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), se detallan los datos identificativos del titular de este sitio web:</p>
            </div>
            
            <div class="legal-grid mt-30">
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem;">
                    <h3>Titular Legal</h3>
                    <p class="legal-text" style="font-size: 0.9rem;">Ainhoa Moreno Garrido (70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem;">
                    <h3>Nombre Comercial</h3>
                    <p class="legal-text" style="font-size: 0.9rem;">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem;">
                    <h3>Ubicación</h3>
                    <p class="legal-text" style="font-size: 0.9rem;">Av. Pablo Iglesias, 89, Local 5, Rivas Vaciamadrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem;">
                    <h3 class="text-orange">Contacto</h3>
                    <p class="legal-text" style="font-size: 0.9rem; font-weight: 700;">hola@centrofutura.es | 676 894 284</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="legal-badge-dark">02</span>
                <h2 class="legal-title">Propiedad Intelectual e Industrial</h2>
            </div>
            <div class="legal-text">
                <p>Todos los contenidos didácticos, metodologías de estudio desarrolladas por el centro, textos, diseños de marca, logotipos e imágenes presentes en este sitio web y materiales entregados en las sesiones son propiedad exclusiva de <strong>Ainhoa Moreno Garrido</strong>.</p>
                <p>Queda terminantemente prohibida la reproducción, distribución o comunicación pública de los materiales entregados (apuntes, ejercicios y esquemas) fuera del ámbito estrictamente personal del alumno matriculado. El uso de los mismos para fines comerciales o su difusión en plataformas digitales externas conllevará acciones legales.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="legal-badge-dark">03</span>
                <h2 class="legal-title">Limitación de Responsabilidad</h2>
            </div>
            <div class="legal-text">
                <p><strong>Compromiso de Resultados:</strong> Centro Futura proporciona todos los medios pedagógicos, herramientas digitales y apoyo docente necesarios para el aprendizaje. No obstante, el éxito académico (notas, aprobados o superación de exámenes oficiales) depende íntegramente del esfuerzo personal, asistencia y trabajo individual del estudiante, por lo que el centro no garantiza resultados específicos.</p>
                <p><strong>Uso de Tecnologías:</strong> Centro Futura emplea herramientas de Inteligencia Artificial y software educativo de vanguardia. La titular no se hace responsable de errores algorítmicos o fallos técnicos temporales en plataformas de terceros utilizadas durante el curso.</p>
            </div>
        </section>

        <section class="content-island legal-island text-center glass-dark reveal" style="background: var(--color-navy); padding: 3.5rem 2.5rem; border-radius: var(--radius-lg); margin-top: 3rem;">
            <h2 style="font-family: var(--font-title); font-size: 1.75rem; font-weight: 900; color: var(--color-white); margin-bottom: 1rem; letter-spacing: -0.02em;">¿Alguna consulta legal?</h2>
            <p style="font-size: 1rem; color: #a0a0ab; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">Si necesita cualquier aclaración sobre nuestros términos legales o el uso de nuestra propiedad intelectual, estamos a su total disposición.</p>
            <div style="display: flex; justify-content: center;">
                <a href="mailto:hola@centrofutura.es" class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px;" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    hola@centrofutura.es
                </a>
            </div>
        </section>

    </div>
</main>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>