<?php 
// 🛠️ RUTA BASE DINÁMICA: Asegura que los enlaces del 404 funcionen en cualquier subcarpeta
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Error
$pageTitle = "Error 404 - Página no encontrada | Centro Futura";
$pageDescription = "Ups... parece que esta página ha faltado a clase. Vuelve al inicio de la Academia Centro Futura.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="error-wrapper">
    <div class="content-island error-island reveal">
        
        <div class="error-watermark" aria-hidden="true">404</div>
        
        <span class="badge badge--orange mb-15">Incidencia en el Expediente Digital</span>
        
        <h1 class="section-title mb-25">
            Ups... <span class="bounce-icon" aria-hidden="true">🎒</span><br>
            <span class="text-orange text-1-1em">¿Falta de asistencia?</span>
        </h1>
        
        <p class="section-description max-w-600 mx-auto m-0">
            Parece que la página que buscas ha decidido <strong class="text-navy">no venir</strong> hoy. Hemos pasado lista y no está en su pupitre.
        </p>

        <div class="tutor-note shadow-sm">
            <h3 class="tutor-note-title">Nota del tutor:</h3>
            <ul class="tutor-note-list">
                <li>La dirección web no ha estudiado lo suficiente.</li>
                <li>El enlace ha suspendido el examen de "existencia".</li>
                <li>La página se ha ido al recreo y no ha vuelto.</li>
            </ul>
        </div>

        <div class="error-actions">
            <a href="<?php echo $base_url; ?>index.php" class="btn-primary">
                Volver a la clase (Inicio)
            </a>
            <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost">
                Avisar a secretaría
            </a>
        </div>
        
    </div>
</main>

<?php 
// Invocación del pie de página modular
include 'includes/footer.php'; 
?>