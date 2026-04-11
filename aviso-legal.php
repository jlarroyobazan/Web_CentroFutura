<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Aviso Legal
$pageTitle = "Aviso Legal - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Información Legal y cumplimiento LSSI-CE de Academia Centro Futura. Transparencia digital y titularidad.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<style>
    /* Tipografía Premium para Textos Legales (Mejora de Legibilidad UX) */
    .legal-text p {
        font-size: 17px;
        line-height: 1.8;
        color: #333336;
        margin-bottom: 20px;
    }
    .legal-text strong {
        color: var(--color-navy);
        font-weight: 800;
    }
    
    /* Efecto interactivo para las tarjetas de datos */
    .legal-mini-card {
        background: var(--bg-body);
        border: 1px solid rgba(0,0,0,0.04);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .legal-mini-card:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-sm);
        background: var(--color-white);
    }
</style>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">INFORMACIÓN LEGAL</span>
        <h1 class="section-title">Aviso <span class="text-orange">Legal</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Cumplimiento LSSI-CE y Transparencia Digital • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto" style="max-width: 900px;">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 15px;">
                <span class="badge badge--orange" style="padding: 6px 12px; font-size: 16px;">01</span>
                <h2 class="legal-title" style="font-family: var(--font-title); font-size: 24px; color: var(--color-navy); margin: 0; font-weight: 900;">Responsable y Titularidad</h2>
            </div>
            <div class="legal-text">
                <p>En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), se detallan los datos identificativos del titular de este sitio web:</p>
            </div>
            
            <div class="legal-grid mt-30" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem;">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Titular Legal</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem;">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Nombre Comercial</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem;">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Ubicación</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Av. Pablo Iglesias, 89, Local 5<br>28521 Rivas Vaciamadrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="margin: 0; padding: 1.5rem; border-color: rgba(237, 125, 49, 0.2);">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-orange); margin-bottom: 8px;">Contacto Oficial</h3>
                    <p class="legal-text" style="font-size: 0.95rem; font-weight: 700; margin: 0;">hola@centrofutura.es<br>676 894 284</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 15px;">
                <span class="badge badge--blue" style="padding: 6px 12px; font-size: 16px; background: var(--color-navy); color: white;">02</span>
                <h2 class="legal-title" style="font-family: var(--font-title); font-size: 24px; color: var(--color-navy); margin: 0; font-weight: 900;">Propiedad Intelectual e Industrial</h2>
            </div>
            <div class="legal-text">
                <p>Todos los contenidos didácticos, metodologías de estudio desarrolladas por el centro, textos, diseños de marca, logotipos e imágenes presentes en este sitio web y materiales entregados en las sesiones son propiedad exclusiva de <strong>Ainhoa Moreno Garrido</strong>.</p>
                <p>Queda terminantemente prohibida la reproducción, distribución o comunicación pública de los materiales entregados (apuntes, ejercicios y esquemas) fuera del ámbito estrictamente personal del alumno matriculado. El uso de los mismos para fines comerciales o su difusión en plataformas digitales externas conllevará acciones legales inmediatas.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 15px;">
                <span class="badge badge--blue" style="padding: 6px 12px; font-size: 16px; background: var(--color-navy); color: white;">03</span>
                <h2 class="legal-title" style="font-family: var(--font-title); font-size: 24px; color: var(--color-navy); margin: 0; font-weight: 900;">Limitación de Responsabilidad</h2>
            </div>
            <div class="legal-text">
                <p><strong>Compromiso de Resultados:</strong> Centro Futura proporciona todos los medios pedagógicos, herramientas digitales y apoyo docente necesarios para el aprendizaje. No obstante, el éxito académico (notas, aprobados o superación de exámenes oficiales) depende íntegramente del esfuerzo personal, asistencia y trabajo individual del estudiante, por lo que el centro no garantiza resultados específicos automáticos.</p>
                <p><strong>Uso de Tecnologías:</strong> Centro Futura emplea en ocasiones herramientas de Inteligencia Artificial y software educativo de vanguardia como apoyo al estudio. La titular no se hace responsable de errores algorítmicos o fallos técnicos temporales en las plataformas de terceros utilizadas durante el curso.</p>
            </div>
        </section>

        <section class="content-island legal-island text-center reveal" style="background: linear-gradient(135deg, var(--color-navy), #2c3e50); padding: 3.5rem 2.5rem; border-radius: var(--radius-lg); margin-top: 3rem; box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
            <h2 style="font-family: var(--font-title); font-size: 1.75rem; font-weight: 900; color: var(--color-white); margin-bottom: 1rem; letter-spacing: -0.02em;">¿Alguna consulta legal?</h2>
            <p style="font-size: 1.05rem; color: #b8b8c5; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">Si necesita cualquier aclaración sobre nuestros términos legales o el uso de nuestra propiedad intelectual, estamos a su total disposición.</p>
            <div style="display: flex; justify-content: center;">
                <a href="mailto:hola@centrofutura.es" class="btn-primary" style="background: var(--color-orange); color: white; border: none;">
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