<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Cookies
$pageTitle = "Política de Cookies y Transparencia | Centro Futura Rivas";
$pageDescription = "Te explicamos de forma sencilla y transparente cómo y por qué utilizamos cookies en la web de Academia Centro Futura.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">PRIVACIDAD DIGITAL</span>
        <h1 class="section-title">Nuestra Política de <span class="text-orange">Cookies</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Transparencia absoluta en tu navegación. Te explicamos qué guardamos y para qué. • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto legal-container-limit">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">01</span>
                <h2 class="legal-title">Responsable y Uso</h2>
            </div>
            <div class="legal-text">
                <p>En Academia Centro Futura utilizamos pequeñas herramientas digitales llamadas "cookies" para que la web cargue rápido, sea segura y podamos medir de forma anónima qué secciones os resultan más útiles. Todo esto se basa en tu <strong>consentimiento explícito</strong>, que puedes darnos o quitarnos cuando lo desees.</p>
            </div>
            
            <div class="legal-grid-4">
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Titular</h3>
                    <p class="legal-text legal-mini-text">Ainhoa Moreno Garrido<br>(70427872D)</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Nombre</h3>
                    <p class="legal-text legal-mini-text">Academia Centro Futura</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Ubicación</h3>
                    <p class="legal-text legal-mini-text">Rivas Vaciamadrid, Madrid</p>
                </div>
                <div class="content-island legal-island legal-mini-card border-orange-light">
                    <h3 class="legal-mini-card-title text-orange">Contacto</h3>
                    <p class="legal-text legal-mini-text font-weight-700">hola@centrofutura.es</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">02</span>
                <h2 class="legal-title">¿Qué tipo de cookies usamos?</h2>
            </div>
            
            <div class="legal-grid-2 mb-30">
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-orange">Técnicas (Necesarias)</h3>
                    <p class="legal-text legal-mini-text">Son la maquinaria básica de la web. Sin ellas, el formulario de matrícula fallaría o la web cargaría muy lento. Estas no se pueden desactivar.</p>
                </div>
                <div class="content-island legal-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">Analíticas (De Terceros)</h3>
                    <p class="legal-text legal-mini-text">Nos permiten saber, de forma anónima, cuánta gente visita el blog o lee los precios. Nos ayudan a mejorar sin saber quién eres exactamente.</p>
                </div>
            </div>

            <div class="cookies-table-wrapper">
                <table class="cookies-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Origen</th>
                            <th>Para qué sirve</th>
                            <th>Caducidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>futura-consent</td>
                            <td>Propia</td>
                            <td>Guarda tus preferencias de privacidad para no molestarte con el banner en cada página.</td>
                            <td>1 Año</td>
                        </tr>
                        <tr>
                            <td>_lscache_vary</td>
                            <td>Propia</td>
                            <td>Memoria caché para que la web cargue casi instantáneamente en tu móvil.</td>
                            <td>Sesión</td>
                        </tr>
                        <tr>
                            <td>_ga / _gid</td>
                            <td>Google</td>
                            <td>Estadísticas anónimas para saber qué artículos de nuestro blog os gustan más.</td>
                            <td>2 Años / 24h</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="content-island legal-island reveal mt-40">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">03</span>
                <h2 class="legal-title">Tienes el control total</h2>
            </div>

            <div class="legal-highlight-box">
                <p class="legal-text legal-mini-text" style="font-size: 1rem !important; font-weight: 500;">
                    Puedes cambiar de opinión en cualquier momento. Si deseas abrir de nuevo el panel de privacidad para activar o desactivar las cookies analíticas, simplemente 
                    <a href="#" onclick="if(typeof openCookieBanner === 'function') { openCookieBanner(); } else { alert('El panel de control está disponible refrescando la página.'); } return false;" class="text-orange" style="font-weight: 800; text-decoration: underline; transition: color 0.3s ease;">haz clic en este enlace</a> 
                    o pulsa el icono del engranaje ⚙️ que aparece en la esquina inferior izquierda de tu pantalla.
                </p>
            </div>
        </section>

    </div>
</main>

<?php include 'includes/footer.php'; ?>