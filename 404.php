<?php 
// 🛠️ RUTA BASE DINÁMICA: Asegura que los enlaces del 404 funcionen en cualquier subcarpeta
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página de Error
$pageTitle = "Error 404 - Página no encontrada | Centro Futura";
$pageDescription = "Ups... parece que esta página ha faltado a clase. Vuelve al inicio de la Academia Centro Futura.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<style>
    /* Estilos encapsulados para la página 404 */
    .error-wrapper {
        min-height: 75vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 24px;
    }
    
    .error-island {
        position: relative;
        max-width: 800px;
        width: 100%;
        padding: 5rem 3rem;
        text-align: center;
        overflow: hidden;
        z-index: 1;
        margin: 0; /* Anula el margen por defecto de content-island para centrarlo verticalmente */
    }
    
    /* Marca de agua gigante 404 */
    .error-watermark {
        position: absolute;
        top: -30px;
        right: -20px;
        font-size: clamp(10rem, 20vw, 18rem);
        font-weight: 900;
        color: rgba(0, 0, 0, 0.03);
        line-height: 0.8;
        z-index: -1;
        user-select: none;
        font-family: var(--font-title);
    }
    
    /* Animación escolar suave */
    .bounce-icon {
        display: inline-block;
        animation: bounce-soft 2.5s infinite ease-in-out;
    }
    
    @keyframes bounce-soft {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px) rotate(5deg); }
    }
    
    /* Tarjeta "Nota del Tutor" */
    .tutor-note {
        background: var(--bg-body);
        border-left: 4px solid var(--color-orange);
        padding: 2rem 2.5rem;
        border-radius: 0 var(--radius-md) var(--radius-md) 0;
        text-align: left;
        margin: 3rem auto;
        max-width: 600px;
    }
    
    .tutor-note-list {
        list-style: none;
        padding: 0;
        margin: 1.5rem 0 0 0;
    }
    
    .tutor-note-list li {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 1rem;
        font-size: 1rem;
        color: var(--color-text);
        font-weight: 500;
    }
    
    .tutor-note-list li::before {
        content: "";
        display: block;
        min-width: 8px;
        height: 8px;
        background-color: var(--color-orange);
        border-radius: 50%;
    }
    
    .error-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 2rem;
    }
</style>

<main class="error-wrapper">
    <div class="content-island error-island reveal">
        
        <div class="error-watermark" aria-hidden="true">404</div>
        
        <span class="badge badge--orange mb-15">Incidencia en el Expediente Digital</span>
        
        <h1 class="section-title" style="margin-bottom: 1.5rem;">
            Ups... <span class="bounce-icon" aria-hidden="true">🎒</span><br>
            <span class="text-orange" style="font-size: 1.1em;">¿Falta de asistencia?</span>
        </h1>
        
        <p class="section-description" style="max-width: 600px; margin: 0 auto;">
            Parece que la página que buscas ha decidido <strong style="color: var(--color-navy);">no venir</strong> hoy. Hemos pasado lista y no está en su pupitre.
        </p>

        <div class="tutor-note shadow-sm">
            <h3 style="font-family: var(--font-title); font-size: 1.2rem; font-weight: 800; color: var(--color-navy); margin: 0; text-transform: uppercase; letter-spacing: 0.05em;">Nota del tutor:</h3>
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