<?php 
// 🛠️ RUTA BASE DINÁMICA: Asegura que los enlaces del 404 funcionen en cualquier subcarpeta
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Error
$pageTitle = "Página no encontrada | Academia Centro Futura Rivas";
$pageDescription = "Parece que hay un pequeño desvío en tu ruta. Vuelve a la página principal de Centro Futura y descubre cómo potenciar el talento de tu hijo.";
$metaRobots = "noindex, nofollow"; // Evita que Google indexe errores

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper error-wrapper">
    <div class="content-island error-island reveal">
        
        <div class="error-watermark" aria-hidden="true">404</div>
        
        <span class="badge badge--orange mb-15">UN PEQUEÑO DESVÍO</span>
        
        <h1 class="section-title error-title-mb">
            Ups... <span class="bounce-icon" aria-hidden="true">🧭</span><br>
            <span class="text-orange error-subtitle-lg">¿Buscando una nueva ruta?</span>
        </h1>
        
        <p class="section-description error-desc-center">
            Parece que la página que buscas está <strong class="text-navy">explorando nuevos horizontes</strong> o se ha actualizado. No te preocupes, retomar el camino al éxito es muy sencillo.
        </p>

        <div class="tutor-note shadow-sm">
            <h3 class="tutor-note-title">¿Qué ha podido pasar?</h3>
            <ul class="tutor-note-list">
                <li>El enlace se está actualizando para ofrecerte mejor información.</li>
                <li>La dirección web ha cambiado de ubicación recientemente.</li>
                <li>Has escrito una ruta diferente por accidente en el navegador.</li>
            </ul>
        </div>

        <div class="error-actions">
            <a href="<?php echo $base_url; ?>index.php" class="btn-primary">
                Volver a la página principal
            </a>
            <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost">
                Contactar con nuestro equipo
            </a>
        </div>
        
    </div>
</main>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>