<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Cookies
$pageTitle = "Política de Cookies - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Transparencia en la navegación y uso de datos. Conoce nuestra Política de Cookies en la Academia Centro Futura.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<style>
    /* Tipografía Premium para Textos Legales */
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

    /* Estilos específicos y encapsulados para la tabla de cookies */
    .cookies-table-wrapper {
        background: var(--color-white);
        border-radius: var(--radius-md);
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
        box-shadow: var(--shadow-sm);
        margin-top: 2rem;
        width: 100%;
        overflow-x: auto;
    }
    
    /* Scrollbar suavizada para dispositivos móviles */
    .cookies-table-wrapper::-webkit-scrollbar { height: 6px; }
    .cookies-table-wrapper::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    
    .cookies-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        min-width: 600px;
    }
    .cookies-table th {
        background-color: var(--color-navy);
        color: var(--color-white);
        padding: 1rem 1.5rem;
        font-family: var(--font-title);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    .cookies-table td {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        color: var(--color-text);
        font-size: 0.95rem;
    }
    .cookies-table tr:last-child td {
        border-bottom: none;
    }
    .cookies-table td:first-child {
        font-weight: 700;
        color: var(--color-navy);
    }
</style>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">PRIVACIDAD DIGITAL</span>
        <h1 class="section-title">Política de <span class="text-orange">Cookies</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Transparencia en la Navegación y Uso de Datos • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto" style="max-width: 900px;">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange" style="padding: 6px 12px; font-size: 16px;">01</span>
                <h2 class="legal-title">Responsable y Uso</h2>
            </div>
            <div class="legal-text">
                <p>En Academia Centro Futura utilizamos cookies para mejorar su experiencia y analizar el tráfico de nuestra web. El uso de estas tecnologías se basa en su <strong>consentimiento explícito</strong>, el cual puede otorgar, denegar o configurar a través de nuestro panel informativo.</p>
            </div>
            
            <div class="legal-grid mt-30" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Titular</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Nombre Comercial</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-navy); margin-bottom: 8px;">Ubicación</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0;">Rivas Vaciamadrid, Madrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card" style="border-color: rgba(237, 125, 49, 0.2);">
                    <h3 style="font-family: var(--font-title); font-size: 15px; color: var(--color-orange); margin-bottom: 8px;">Contacto</h3>
                    <p class="legal-text" style="font-size: 0.95rem; font-weight: 700; margin: 0;">hola@centrofutura.es</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--blue" style="padding: 6px 12px; font-size: 16px; background: var(--color-navy); color: white;">02</span>
                <h2 class="legal-title">Tipos de Cookies Utilizadas</h2>
            </div>
            
            <div class="legal-grid mt-30 mb-30" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 16px; color: var(--color-orange); margin-bottom: 10px;">Cookies Técnicas</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0; line-height: 1.6;">Esenciales para el funcionamiento, seguridad y optimización de velocidad de la plataforma.</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 style="font-family: var(--font-title); font-size: 16px; color: var(--color-navy); margin-bottom: 10px;">Cookies de Análisis</h3>
                    <p class="legal-text" style="font-size: 0.95rem; margin: 0; line-height: 1.6;">Permiten medir estadísticamente el uso de la web para mejorar nuestros servicios digitales.</p>
                </div>
            </div>

            <div class="cookies-table-wrapper">
                <table class="cookies-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Finalidad</th>
                            <th>Caducidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>centro_futura_cookies_v1</td>
                            <td>Propia</td>
                            <td>Preferencia privacidad (JSON)</td>
                            <td>1 Año</td>
                        </tr>
                        <tr>
                            <td>_lscache_vary</td>
                            <td>Propia</td>
                            <td>Caché y velocidad</td>
                            <td>Sesión</td>
                        </tr>
                        <tr>
                            <td>_ga / _gid</td>
                            <td>Terceros</td>
                            <td>Google Analytics</td>
                            <td>2 Años / 24h</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange" style="padding: 6px 12px; font-size: 16px;">03</span>
                <h2 class="legal-title">Gestión de Preferencias</h2>
            </div>

            <div class="content-island legal-island" style="margin: 1.5rem 0 0 0; padding: 2rem; background: rgba(237, 125, 49, 0.05); border-left: 4px solid var(--color-orange); box-shadow: none;">
                <p class="legal-text" style="margin: 0; font-size: 1rem; font-weight: 500;">
                    Usted tiene derecho a retirar su consentimiento en cualquier momento. Puede hacerlo mediante el panel flotante o simplemente <a href="#" onclick="if(typeof openCookieBanner === 'function') { openCookieBanner(); } else { alert('El panel de control está disponible en la página principal.'); } return false;" class="text-orange" style="font-weight: 800; text-decoration: underline; transition: color 0.3s;">haciendo clic aquí</a> para abrir su centro de privacidad de forma inmediata.
                </p>
            </div>
        </section>

    </div>
</main>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>