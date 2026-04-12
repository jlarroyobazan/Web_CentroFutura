<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Aviso Legal
$pageTitle = "Aviso Legal y Transparencia | Centro Futura Rivas";
$pageDescription = "Información Legal, titularidad y cumplimiento LSSI-CE de Academia Centro Futura. Conoce los detalles de nuestra entidad en Rivas Vaciamadrid.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">INFORMACIÓN LEGAL Y TRANSPARENCIA</span>
        <h1 class="section-title">Nuestro Aviso <span class="text-orange">Legal</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Nos gusta hacer las cosas bien. Aquí tienes toda la información oficial de Centro Futura en cumplimiento de la normativa española. • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto legal-container-limit">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">01</span>
                <h2 class="legal-title">Titularidad de la Web</h2>
            </div>
            <div class="legal-text">
                <p>En cumplimiento de lo que nos pide el artículo 10 de la Ley 34/2002 de Servicios de la Sociedad de la Información y de Comercio Electrónico (la famosa LSSI-CE), te presentamos los datos oficiales de quien está detrás de este sitio web y de las puertas de nuestra academia:</p>
            </div>
            
            <div class="legal-grid-4">
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Titular Legal</h3>
                    <p class="legal-text legal-mini-text">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Nombre</h3>
                    <p class="legal-text legal-mini-text">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Sede Oficial</h3>
                    <p class="legal-text legal-mini-text">Av. Pablo Iglesias, 89, Local 5<br>28521 Rivas Vaciamadrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card border-orange-light">
                    <h3 class="legal-mini-card-title text-orange">Contacto Legal</h3>
                    <p class="legal-text legal-mini-text font-weight-700">hola@centrofutura.es<br>676 894 284</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">02</span>
                <h2 class="legal-title">Propiedad Intelectual y Nuestro Trabajo</h2>
            </div>
            <div class="legal-text">
                <p>Detrás de cada esquema, guía de estudio, logotipo (Centro Futura) o texto que ves en esta web y que entregamos a los alumnos en clase, hay <strong>muchas horas de trabajo, diseño y pasión</strong> por parte de Ainhoa Moreno Garrido y su equipo.</p>
                <p>Por eso, todo este material está protegido. Te pedimos que lo uses exclusivamente para el aprendizaje personal de tu hijo. Si alguien copia, distribuye o vende nuestros recursos (ya sea en papel o en internet) sin nuestro permiso, nos veremos obligados a tomar las medidas legales oportunas para proteger el esfuerzo de nuestros educadores.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">03</span>
                <h2 class="legal-title">Nuestro Compromiso y el Vuestro</h2>
            </div>
            <div class="legal-text">
                <p><strong>Lo que prometemos nosotros:</strong> En Centro Futura volcamos todo nuestro talento, nuestras mejores herramientas pedagógicas y tecnológicas (incluyendo software educativo) para que tu hijo aprenda. Es lo que en derecho se llama "obligación de medios".</p>
                <p><strong>Lo que no podemos prometer por contrato:</strong> Un aprobado automático o una nota concreta en la EvAU. El éxito escolar es un trabajo en equipo; nosotros ponemos el método, pero la constancia y el esfuerzo diario dependen del alumno. Por tanto, el centro no se puede responsabilizar legalmente de los resultados de los exámenes oficiales del estudiante.</p>
            </div>
        </section>

        <section class="legal-contact-banner reveal">
            <h2 class="legal-contact-banner-title">¿Tienes alguna duda sobre esto?</h2>
            <p class="legal-contact-banner-desc">Si necesitas que te aclaremos cualquier aspecto sobre estos términos legales, la propiedad de nuestros materiales o el funcionamiento de la web, estamos a un clic de distancia.</p>
            <div class="legal-contact-banner-actions">
                <a href="mailto:hola@centrofutura.es" class="btn-primary btn-orange-solid">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="icon-left"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    Contactar con secretaría
                </a>
            </div>
        </section>

    </div>
</main>

<?php include 'includes/footer.php'; ?>