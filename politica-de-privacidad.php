<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Privacidad
$pageTitle = "Política de Privacidad - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Compromiso de Confidencialidad y Seguridad RGPD sobre el tratamiento de datos personales en la Academia Centro Futura.";

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
    
    /* Encabezados de sección numerados */
    .legal-header-flex {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        padding-bottom: 15px;
    }
    
    .legal-title {
        font-family: var(--font-title);
        font-size: 24px;
        color: var(--color-navy);
        margin: 0;
        font-weight: 900;
    }

    /* Efecto interactivo para las tarjetas de datos */
    .legal-mini-card {
        background: var(--bg-body);
        border: 1px solid rgba(0,0,0,0.04);
        padding: 1.5rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        margin: 0 !important;
    }
    .legal-mini-card:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-sm);
        background: var(--color-white);
    }
</style>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">PROTECCIÓN DE DATOS</span>
        <h1 class="section-title">Política de <span class="text-orange">Privacidad</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Compromiso de Confidencialidad y Seguridad RGPD • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto" style="max-width: 900px;">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange" style="padding: 6px 12px; font-size: 16px;">01</span>
                <h2 class="legal-title">Responsable Legal</h2>
            </div>
            <div class="legal-text">
                <p>En cumplimiento del Reglamento (UE) 2016/679 (RGPD), se detallan los datos del titular responsable del tratamiento de sus datos personales:</p>
            </div>
            
            <div class="legal-grid mt-30" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Titular</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Actividad</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Ubicación</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Av. Pablo Iglesias, 89, Local 5<br>28521 Rivas Vaciamadrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="border-color: rgba(237, 125, 49, 0.2);">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-orange); margin-bottom: 8px;">DPO / Contacto</h3>
                    <p class="legal-text" style="font-size: 0.95rem; font-weight: 700; margin: 0;">hola@centrofutura.es</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--blue" style="padding: 6px 12px; font-size: 16px; background: var(--color-navy); color: white;">02</span>
                <h2 class="legal-title">Finalidad y Tipología de Datos</h2>
            </div>
            <div class="legal-text">
                <p>Tratamos la información que nos facilitan las personas interesadas con el fin de gestionar la relación educativa y administrativa. Los datos recogidos incluyen:</p>
            </div>
            
            <div class="legal-grid mt-30" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 16px; color: var(--color-orange); margin-bottom: 10px;">Datos Identificativos</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0; line-height: 1.6;">Nombre, DNI y contacto de tutores para facturación y avisos.</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 16px; color: var(--color-orange); margin-bottom: 10px;">Datos Académicos</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0; line-height: 1.6;">Nivel de estudios y necesidades de refuerzo del alumno.</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange" style="padding: 6px 12px; font-size: 16px;">03</span>
                <h2 class="legal-title">Seguridad y Videovigilancia</h2>
            </div>
            <div class="legal-text">
                <p>El centro dispone de sistemas de videovigilancia en zonas comunes para garantizar la integridad de los menores y el personal. <strong>No existen cámaras en aulas ni aseos.</strong></p>
                
                <div class="content-island legal-island" style="margin: 1.5rem 0 0 0; padding: 1.5rem; background: rgba(237, 125, 49, 0.05); border-left: 4px solid var(--color-orange); box-shadow: none;">
                    <p style="margin: 0; font-size: 0.95rem; line-height: 1.6;">Las imágenes se suprimen automáticamente en un plazo de 30 días, salvo que existan incidentes que requieran su custodia para autoridades policiales.</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--blue" style="padding: 6px 12px; font-size: 16px; background: var(--color-navy); color: white;">04</span>
                <h2 class="legal-title">Conservación y Herramientas Digitales</h2>
            </div>
            <div class="legal-text">
                <p>Los datos se conservarán mientras se mantenga la relación comercial o durante los años necesarios para cumplir con las obligaciones legales (facturación).</p>
                <p><strong>Uso de IA:</strong> En Centro Futura podemos utilizar herramientas de Inteligencia Artificial para el análisis de progreso académico de forma anonimizada, nunca para la toma de decisiones automatizadas que afecten legalmente al alumno.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange" style="padding: 6px 12px; font-size: 16px;">05</span>
                <h2 class="legal-title">Tus Derechos</h2>
            </div>
            <div class="legal-text mb-30">
                <p>Tiene derecho a acceder, rectificar y suprimir los datos, así como otros derechos explicados en la información adicional.</p>
            </div>
            
            <div class="content-island legal-island text-center reveal" style="background: linear-gradient(135deg, var(--color-navy), #2c3e50); padding: 3.5rem 2.5rem; border-radius: var(--radius-lg); margin-top: 3rem; box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
                <p class="text-orange" style="font-size: 0.85rem; font-weight: 900; letter-spacing: 0.2em; text-transform: uppercase; margin-bottom: 0.5rem;">Canal de Ejercicio de Derechos:</p>
                <a href="mailto:hola@centrofutura.es" style="font-family: var(--font-title); font-size: 1.75rem; font-weight: 800; color: var(--color-white); text-decoration: none; display: block; margin-bottom: 1rem; transition: color 0.3s;" onmouseover="this.style.color='var(--color-orange)'" onmouseout="this.style.color='var(--color-white)'">hola@centrofutura.es</a>
                <p style="font-size: 1.05rem; color: #b8b8c5; margin: 0;">Responderemos a su solicitud en un plazo máximo de 30 días.</p>
            </div>
        </section>

    </div>
</main>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>