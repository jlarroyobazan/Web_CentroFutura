<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Privacidad
$pageTitle = "Protección de Datos y Privacidad | Centro Futura Rivas";
$pageDescription = "Descubre cómo en Centro Futura cuidamos y protegemos los datos personales de tu familia cumpliendo estrictamente con el RGPD y la LOPDGDD.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">PROTECCIÓN DE DATOS</span>
        <h1 class="section-title">Nuestra Política de <span class="text-orange">Privacidad</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Cuidamos la información de tu familia con el mismo rigor y cariño con el que cuidamos la educación de tus hijos. • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto legal-container-limit">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">01</span>
                <h2 class="legal-title">Quién cuida de vuestros datos</h2>
            </div>
            <div class="legal-text">
                <p>En cumplimiento del Reglamento (UE) 2016/679 (RGPD) y la LOPDGDD, queremos ser totalmente transparentes sobre quién es el titular y responsable legal de custodiar la información de vuestra familia:</p>
            </div>
            
            <div class="legal-grid-4">
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Titular Legal</h3>
                    <p class="legal-text legal-mini-text">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Actividad</h3>
                    <p class="legal-text legal-mini-text">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Ubicación</h3>
                    <p class="legal-text legal-mini-text">Av. Pablo Iglesias, 89, Local 5<br>28521 Rivas Vaciamadrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card border-orange-light">
                    <h3 class="legal-mini-card-title text-orange">Contacto Directo</h3>
                    <p class="legal-text legal-mini-text font-weight-700">hola@centrofutura.es</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">02</span>
                <h2 class="legal-title">¿Para qué necesitamos esta información?</h2>
            </div>
            <div class="legal-text">
                <p>No pedimos datos por pedir. Solo recabamos la información estrictamente necesaria para poder ofrecer a tu hijo el mejor servicio psicopedagógico y manteneros informados en todo momento:</p>
            </div>
            
            <div class="legal-grid-2">
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-orange">Datos Administrativos</h3>
                    <p class="legal-text legal-mini-text">Nombre, DNI y vías de contacto de los tutores legales para gestionar las facturas, enviar recibos y contactaros de forma ágil.</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-orange">Datos Académicos y Clínicos</h3>
                    <p class="legal-text legal-mini-text">Nivel de estudios, perfil neurocognitivo y necesidades específicas del alumno para adaptar nuestra metodología a su forma única de aprender.</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">03</span>
                <h2 class="legal-title">Un entorno seguro y protegido</h2>
            </div>
            <div class="legal-text">
                <p>Para garantizar la seguridad física de los menores y de nuestro equipo, Centro Futura cuenta con sistemas de videovigilancia en la recepción y zonas comunes de tránsito. Para salvaguardar la intimidad y la tranquilidad de los alumnos, <strong>no existen cámaras dentro de las aulas ni en los aseos.</strong></p>
                
                <div class="legal-highlight-box">
                    <p class="legal-text legal-mini-text">Por ley, estas imágenes se suprimen de forma automática en un plazo máximo de 30 días, salvo que ocurra algún incidente que requiera su custodia para las autoridades pertinentes.</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">04</span>
                <h2 class="legal-title">¿Cuánto tiempo guardamos los datos?</h2>
            </div>
            <div class="legal-text">
                <p>Vuestro expediente familiar estará activo y cuidado mientras el alumno esté matriculado con nosotros. Una vez finalizada nuestra relación, conservaremos los datos de facturación el tiempo mínimo que nos exige la ley (habitualmente 5 años para requerimientos tributarios).</p>
                <p><strong>Uso de Innovación e IA:</strong> Como centro a la vanguardia, podemos apoyarnos en herramientas de Inteligencia Artificial para mejorar nuestros materiales. Cualquier dato utilizado para análisis de progreso se hace de forma totalmente anónima, y jamás usamos IA para tomar decisiones legales que afecten al alumno.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">05</span>
                <h2 class="legal-title">Vosotros tenéis el control total</h2>
            </div>
            <div class="legal-text mb-30">
                <p>La información es vuestra. En cualquier momento podéis ejercer vuestros derechos ARCO (Acceso, Rectificación, Cancelación, Oposición y Portabilidad) para revisar qué datos tenemos, modificarlos o solicitar su eliminación completa.</p>
            </div>
            
            <div class="legal-contact-banner reveal">
                <p class="legal-contact-label">Canal de Ejercicio de Derechos:</p>
                <a href="mailto:hola@centrofutura.es" class="legal-contact-email">hola@centrofutura.es</a>
                <p class="legal-contact-sub">Nuestro equipo os atenderá con prioridad y responderá a vuestra solicitud en un plazo máximo legal de 30 días.</p>
            </div>
        </section>

    </div>
</main>

<?php include 'includes/footer.php'; ?>