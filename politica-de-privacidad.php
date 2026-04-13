<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Privacidad
$pageTitle = "Política de Privacidad - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Compromiso de Confidencialidad y Seguridad RGPD sobre el tratamiento de datos personales en la Academia Centro Futura.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">PROTECCIÓN DE DATOS</span>
        <h1 class="section-title">Política de <span class="text-orange">Privacidad</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Compromiso de Confidencialidad y Seguridad RGPD • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto max-w-900">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange badge-lg">01</span>
                <h2 class="legal-title">Responsable Legal</h2>
            </div>
            <div class="legal-text">
                <p>En cumplimiento del Reglamento (UE) 2016/679 (RGPD), se detallan los datos del titular responsable del tratamiento de sus datos personales:</p>
            </div>
            
            <div class="legal-grid mt-30 legal-grid-auto">
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-card-title">Titular</h3>
                    <p class="legal-text legal-card-text">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-card-title">Actividad</h3>
                    <p class="legal-text legal-card-text">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-card-title">Ubicación</h3>
                    <p class="legal-text legal-card-text">Av. Pablo Iglesias, 89, Local 5<br>28521 Rivas Vaciamadrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card border-orange-light">
                    <h3 class="legal-card-title text-orange">DPO / Contacto</h3>
                    <p class="legal-text legal-card-text-bold">hola@centrofutura.es</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--blue badge-lg bg-navy text-white">02</span>
                <h2 class="legal-title">Finalidad y Tipología de Datos</h2>
            </div>
            <div class="legal-text">
                <p>Tratamos la información que nos facilitan las personas interesadas con el fin de gestionar la relación educativa y administrativa. Los datos recogidos incluyen:</p>
            </div>
            
            <div class="legal-grid mt-30 legal-grid-250">
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-card-title text-orange text-16 mb-10">Datos Identificativos</h3>
                    <p class="legal-text legal-card-text leading-relaxed">Nombre, DNI y contacto de tutores para facturación y avisos.</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-card-title text-orange text-16 mb-10">Datos Académicos</h3>
                    <p class="legal-text legal-card-text leading-relaxed">Nivel de estudios y necesidades de refuerzo del alumno.</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange badge-lg">03</span>
                <h2 class="legal-title">Seguridad y Videovigilancia</h2>
            </div>
            <div class="legal-text">
                <p>El centro dispone de sistemas de videovigilancia en zonas comunes para garantizar la integridad de los menores y el personal. <strong>No existen cámaras en aulas ni aseos.</strong></p>
                
                <div class="content-island legal-island legal-highlight-box">
                    <p class="legal-card-text leading-relaxed">Las imágenes se suprimen automáticamente en un plazo de 30 días, salvo que existan incidentes que requieran su custodia para autoridades policiales.</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--blue badge-lg bg-navy text-white">04</span>
                <h2 class="legal-title">Conservación y Herramientas Digitales</h2>
            </div>
            <div class="legal-text">
                <p>Los datos se conservarán mientras se mantenga la relación comercial o durante los años necesarios para cumplir con las obligaciones legales (facturación).</p>
                <p><strong>Uso de IA:</strong> En Centro Futura podemos utilizar herramientas de Inteligencia Artificial para el análisis de progreso académico de forma anonimizada, nunca para la toma de decisiones automatizadas que afecten legalmente al alumno.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange badge-lg">05</span>
                <h2 class="legal-title">Tus Derechos</h2>
            </div>
            <div class="legal-text mb-30">
                <p>Tiene derecho a acceder, rectificar y suprimir los datos, así como otros derechos explicados en la información adicional.</p>
            </div>
            
            <div class="content-island legal-island text-center reveal legal-contact-box">
                <p class="legal-contact-kicker">Canal de Ejercicio de Derechos:</p>
                <a href="mailto:hola@centrofutura.es" class="legal-contact-email">hola@centrofutura.es</a>
                <p class="text-16 text-light-gray m-0">Responderemos a su solicitud en un plazo máximo de 30 días.</p>
            </div>
        </section>

    </div>
</main>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>