<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Aviso Legal
$pageTitle = "Aviso Legal - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Información Legal y cumplimiento LSSI-CE de Academia Centro Futura. Transparencia digital y titularidad.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">INFORMACIÓN LEGAL</span>
        <h1 class="section-title">Aviso <span class="text-orange">Legal</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Cumplimiento LSSI-CE y Transparencia Digital • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto max-w-900">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex legal-header-flex-border">
                <span class="badge badge--orange badge-lg">01</span>
                <h2 class="legal-title">Responsable y Titularidad</h2>
            </div>
            <div class="legal-text">
                <p>En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), se detallan los datos identificativos del titular de este sitio web:</p>
            </div>
            
            <div class="legal-grid mt-30 legal-grid-250">
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title">Titular Legal</h3>
                    <p class="legal-text legal-card-text">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title">Nombre Comercial</h3>
                    <p class="legal-text legal-card-text">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title">Ubicación</h3>
                    <p class="legal-text legal-card-text">Av. Pablo Iglesias, 89, Local 5<br>28521 Rivas Vaciamadrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card m-0 p-24 border-orange-light">
                    <h3 class="legal-card-title text-orange">Contacto Oficial</h3>
                    <p class="legal-text legal-card-text-bold">hola@centrofutura.es<br>676 894 284</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex legal-header-flex-border">
                <span class="badge badge--blue badge-lg bg-navy text-white">02</span>
                <h2 class="legal-title">Propiedad Intelectual e Industrial</h2>
            </div>
            <div class="legal-text">
                <p>Todos los contenidos didácticos, metodologías de estudio desarrolladas por el centro, textos, diseños de marca, logotipos e imágenes presentes en este sitio web y materiales entregados en las sesiones son propiedad exclusiva de <strong>Ainhoa Moreno Garrido</strong>.</p>
                <p>Queda terminantemente prohibida la reproducción, distribución o comunicación pública de los materiales entregados (apuntes, ejercicios y esquemas) fuera del ámbito estrictamente personal del alumno matriculado. El uso de los mismos para fines comerciales o su difusión en plataformas digitales externas conllevará acciones legales inmediatas.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex legal-header-flex-border">
                <span class="badge badge--blue badge-lg bg-navy text-white">03</span>
                <h2 class="legal-title">Limitación de Responsabilidad</h2>
            </div>
            <div class="legal-text">
                <p><strong>Compromiso de Resultados:</strong> Centro Futura proporciona todos los medios pedagógicos, herramientas digitales y apoyo docente necesarios para el aprendizaje. No obstante, el éxito académico (notas, aprobados o superación de exámenes oficiales) depende íntegramente del esfuerzo personal, asistencia y trabajo individual del estudiante, por lo que el centro no garantiza resultados específicos automáticos.</p>
                <p><strong>Uso de Tecnologías:</strong> Centro Futura emplea en ocasiones herramientas de Inteligencia Artificial y software educativo de vanguardia como apoyo al estudio. La titular no se hace responsable de errores algorítmicos o fallos técnicos temporales en las plataformas de terceros utilizadas durante el curso.</p>
            </div>
        </section>

        <section class="content-island legal-island text-center reveal legal-contact-box">
            <h2 class="legal-contact-email">¿Alguna consulta legal?</h2>
            <p class="legal-contact-desc">Si necesita cualquier aclaración sobre nuestros términos legales o el uso de nuestra propiedad intelectual, estamos a su total disposición.</p>
            <div class="flex justify-center">
                <a href="mailto:hola@centrofutura.es" class="btn-primary btn-orange-solid">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="mr-10" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
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