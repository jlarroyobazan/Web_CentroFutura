<?php 
// Fallback por si no viene del header
if (!isset($base_url)) { $base_url = '/'; }

$pageTitle = "Inspiración y Recursos NEE | Blog de Centro Futura Rivas";
$pageDescription = "Descubre herramientas neuroeducativas, guías prácticas y estrategias probadas para potenciar el talento de tu hijo y disfrutar del aprendizaje en familia.";
include 'includes/header.php'; 

// =======================================================================
// 📝 GESTOR DE ARTÍCULOS (OPCIÓN 2: SEMI-AUTOMÁTICA)
// Aquí añades tus artículos reales. 
// =======================================================================
$articulos = [
    [
        "destacado" => true,
        "titulo" => "Por qué tu hijo se bloquea en la primera página: Técnicas de estudio para mentes neurodiversas",
        "excerpt" => "Descubre cómo transformar el agotamiento frente a los libros en un proceso fluido adaptando las técnicas de estudio al cerebro de alumnos con TDAH o Dislexia.",
        "imagen" => "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=1200&q=80",
        "categoria" => "Técnicas de Estudio",
        "badge_color" => "orange",
        "autor" => "Elena Martínez",
        "tiempo" => "7 min",
        "enlace" => $base_url . "blog/tecnicas-estudio-neurodiversidad.php" 
    ],
    [
        "destacado" => false,
        "titulo" => "Cómo estructurar una tarde de estudio sin estrés ni conflictos en casa",
        "excerpt" => "Estrategias prácticas para padres: desde la preparación del espacio (neuroarquitectura casera) hasta el uso de temporizadores visuales.",
        "imagen" => "https://images.unsplash.com/photo-1427504494785-319ce514a839?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Familias",
        "badge_color" => "blue",
        "autor" => "Carlos Ruiz",
        "tiempo" => "5 min",
        "enlace" => "#"
    ],
    [
        "destacado" => false,
        "titulo" => "Altas Capacidades: Identificando el talento detrás del aburrimiento en clase",
        "excerpt" => "Las Altas Capacidades a menudo se camuflan bajo el desinterés. Aprende a detectar las señales y cómo enriquecer su curiosidad innata.",
        "imagen" => "https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Gabinete NEE",
        "badge_color" => "purple",
        "autor" => "Laura Gómez",
        "tiempo" => "6 min",
        "enlace" => "#"
    ],
    [
        "destacado" => false,
        "titulo" => "El poder de los Mapas Mentales para multiplicar la memoria visual a largo plazo",
        "excerpt" => "Olvídate de los resúmenes interminables. Te enseñamos paso a paso cómo crear esquemas que el cerebro retiene de forma natural.",
        "imagen" => "https://images.unsplash.com/photo-1517842645767-c639042777db?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Técnicas de Estudio",
        "badge_color" => "orange",
        "autor" => "Elena Martínez",
        "tiempo" => "4 min",
        "enlace" => "#"
    ]
];
?>

    <main>
        <section class="hero-premium hero-blog-centered reveal">
            <div class="hero-premium__container page-wrapper">
                <div class="hero-premium__content hero-content-centered">
                    <div class="mb-20 stagger-1">
                        <span class="badge badge--orange">INSPIRACIÓN Y HERRAMIENTAS</span>
                    </div>
                    <h1 class="hero-premium__title hero-title-centered">
                        <span class="title-pill stagger-2">El diario de</span>
                        <span class="title-pill stagger-3"><span class="text-orange">Centro Futura</span></span>
                    </h1>
                    <div class="hero-premium__text-box stagger-4 hero-text-box-centered">
                        <p class="hero-premium__text">
                            Descubre herramientas neuroeducativas, guías prácticas y estrategias probadas para potenciar el talento de tu hijo y volver a disfrutar del aprendizaje en familia.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="page-wrapper">
            <div class="content-island content-island--light reveal">
                <section class="island-section">
                    
                    <div class="blog-filter-bar">
                        <button class="filter-pill active" data-filter="all">Todos los artículos</button>
                        <button class="filter-pill" data-filter="Gabinete NEE">Gabinete y NEE</button>
                        <button class="filter-pill" data-filter="Técnicas de Estudio">Técnicas de Estudio</button>
                        <button class="filter-pill" data-filter="Familias">Familias</button>
                    </div>

                    <?php 
                    // RENDERIZADO DEL ARTÍCULO DESTACADO
                    foreach($articulos as $post): 
                        if($post['destacado']): 
                    ?>
                    <article class="blog-featured filter-item" data-category="<?php echo $post['categoria']; ?>">
                        <div class="blog-featured__img-wrapper">
                            <img src="<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="blog-featured__image" fetchpriority="high">
                        </div>
                        <div class="blog-featured__content">
                            <span class="badge badge--<?php echo $post['badge_color']; ?> mb-15 badge-uppercase"><?php echo $post['categoria']; ?></span>
                            <a href="<?php echo $post['enlace']; ?>" class="blog-link-reset">
                                <h2 class="blog-featured__title"><?php echo $post['titulo']; ?></h2>
                            </a>
                            <p class="blog-featured__excerpt"><?php echo $post['excerpt']; ?></p>
                            <a href="<?php echo $post['enlace']; ?>" class="link-orange mt-10 font-weight-700">Leer artículo completo →</a>
                            <div class="blog-card__meta mt-40">
                                <span class="blog-meta-author">Por <?php echo $post['autor']; ?></span>
                                <span class="blog-meta-time">Lectura de <?php echo $post['tiempo']; ?></span>
                            </div>
                        </div>
                    </article>
                    <?php 
                        endif; 
                    endforeach; 
                    ?>

                    <div class="blog-grid">
                        <?php 
                        // RENDERIZADO DE LA CUADRÍCULA DE ARTÍCULOS
                        foreach($articulos as $post): 
                            if(!$post['destacado']): 
                        ?>
                        <article class="blog-card filter-item" data-category="<?php echo $post['categoria']; ?>">
                            <a href="<?php echo $post['enlace']; ?>" class="blog-link-card">
                                <div class="blog-card__img-wrapper">
                                    <img src="<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="blog-card__image" loading="lazy">
                                </div>
                                <div class="blog-card__content">
                                    <span class="badge badge--<?php echo $post['badge_color']; ?> mb-15 badge-uppercase"><?php echo $post['categoria']; ?></span>
                                    <h3 class="blog-card__title"><?php echo $post['titulo']; ?></h3>
                                    <p class="blog-card__excerpt"><?php echo $post['excerpt']; ?></p>
                                    <div class="blog-card__meta">
                                        <span class="blog-meta-author">Por <?php echo $post['autor']; ?></span>
                                        <span class="blog-meta-time"><?php echo $post['tiempo']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php 
                            endif; 
                        endforeach; 
                        ?>
                    </div>
                    
                    <div id="no-results-msg" class="empty-state-msg">
                        Aún no hemos publicado artículos en esta categoría. ¡Vuelve pronto!
                    </div>

                </section>
            </div>

            <div class="cta-banner-premium reveal mt-60 mb-40">
                <div class="cta-banner__content">
                    <h2 class="cta-banner-title">¿Tu hijo necesita aplicar estas estrategias hoy?</h2>
                    <p class="cta-banner-desc">Te ayudamos a transformar la teoría neuroeducativa en práctica diaria. Solicita una valoración gratuita y descubramos la ruta de estudio que su cerebro necesita.</p>
                    <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary btn-white-orange">Agendar valoración gratuita</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const filterBtns = document.querySelectorAll('.filter-pill');
            const filterItems = document.querySelectorAll('.filter-item');
            const noResultsMsg = document.getElementById('no-results-msg');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Actualizar botones activos
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');
                    let visibleCount = 0;

                    // Lógica de filtrado gestionada por clases CSS (Mejor Performance)
                    filterItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('filter-hidden');
                            // Pequeño delay para permitir que el display:block se aplique antes de la opacidad
                            setTimeout(() => item.classList.remove('filter-fade-out'), 50);
                            visibleCount++;
                        } else {
                            item.classList.add('filter-fade-out');
                            // Esperar a que termine la transición de opacidad para ocultar el elemento
                            setTimeout(() => item.classList.add('filter-hidden'), 300);
                        }
                    });

                    // Mostrar mensaje de vacío si no hay resultados
                    setTimeout(() => {
                        if (visibleCount === 0) {
                            noResultsMsg.classList.add('show-empty-state');
                        } else {
                            noResultsMsg.classList.remove('show-empty-state');
                        }
                    }, 310);
                });
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>