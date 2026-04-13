<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Cookies
$pageTitle = "Política de Cookies - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Transparencia en la navegación y uso de datos. Conoce nuestra Política de Cookies en la Academia Centro Futura.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">PRIVACIDAD DIGITAL</span>
        <h1 class="section-title">Política de <span class="text-orange">Cookies</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Transparencia en la Navegación y Uso de Datos • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto max-w-900">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange badge-lg">01</span>
                <h2 class="legal-title">Responsable y Uso</h2>
            </div>
            <div class="legal-text">
                <p>En Academia Centro Futura utilizamos cookies para mejorar su experiencia y analizar el tráfico de nuestra web. El uso de estas tecnologías se basa en su <strong>consentimiento explícito</strong>, el cual puede otorgar, denegar o configurar a través de nuestro panel informativo.</p>
            </div>
            
            <div class="legal-grid mt-30 legal-grid-auto">
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title">Titular</h3>
                    <p class="legal-text legal-card-text">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title">Nombre Comercial</h3>
                    <p class="legal-text legal-card-text">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title">Ubicación</h3>
                    <p class="legal-text legal-card-text">Rivas Vaciamadrid, Madrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card m-0 p-24 border-orange-light">
                    <h3 class="legal-card-title text-orange">Contacto</h3>
                    <p class="legal-text legal-card-text-bold">hola@centrofutura.es</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--blue badge-lg bg-navy text-white">02</span>
                <h2 class="legal-title">Tipos de Cookies Utilizadas</h2>
            </div>
            
            <div class="legal-grid mt-30 mb-30 legal-grid-250">
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title text-orange text-16 mb-10">Cookies Técnicas</h3>
                    <p class="legal-text legal-card-text leading-relaxed">Esenciales para el funcionamiento, seguridad y optimización de velocidad de la plataforma.</p>
                </div>
                <div class="content-island legal-island legal-mini-card m-0 p-24">
                    <h3 class="legal-card-title text-navy text-16 mb-10">Cookies de Análisis</h3>
                    <p class="legal-text legal-card-text leading-relaxed">Permiten medir estadísticamente el uso de la web para mejorar nuestros servicios digitales.</p>
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
                <span class="badge badge--orange badge-lg">03</span>
                <h2 class="legal-title">Gestión de Preferencias</h2>
            </div>

            <div class="content-island legal-island legal-highlight-box">
                <p class="legal-text legal-card-text font-500">
                    Usted tiene derecho a retirar su consentimiento en cualquier momento. Puede hacerlo mediante el panel flotante o simplemente <a href="#" onclick="if(typeof openCookieBanner === 'function') { openCookieBanner(); } else { alert('El panel de control está disponible en la página principal.'); } return false;" class="text-orange font-800 underline transition-colors">haciendo clic aquí</a> para abrir su centro de privacidad de forma inmediata.
                </p>
            </div>
        </section>

    </div>
</main>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>