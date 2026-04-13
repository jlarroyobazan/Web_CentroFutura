<?php 
// Fallback por si no viene del header
if (!isset($base_url)) { $base_url = '/'; }

$pageTitle = "Blog Educativo y Recursos NEE | Centro Futura Rivas";
$pageDescription = "Recursos, guías y consejos sobre apoyo escolar, técnicas de estudio, TDAH, dislexia y neuroeducación para familias en Rivas Vaciamadrid.";
include 'includes/header.php'; 

// =======================================================================
// 📝 GESTOR DE ARTÍCULOS (OPCIÓN 2: SEMI-AUTOMÁTICA)
// Aquí añades tus artículos reales. Copia el bloque para añadir más.
// =======================================================================
$articulos = [
    [
        "destacado" => true,
        "titulo" => "Por qué tu hijo no \"pasa\" de la primera página: Técnicas de estudio para la neurodiversidad",
        "excerpt" => "Descubre por qué los métodos tradicionales fallan en alumnos con TDAH o Dislexia y cómo las técnicas neuroeducativas cambian sus resultados.",
        "imagen" => "https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=1200&q=80",
        "categoria" => "Técnicas de Estudio",
        "badge_color" => "orange",
        "autor" => "Elena Martínez",
        "tiempo" => "7 min",
        "enlace" => $base_url . "blog/tecnicas-estudio-neurodiversidad.php" // Ruta dinámica absoluta
    ]
    // Cuando escribas otro artículo, pon una coma arriba y pega un bloque como este aquí abajo cambiando "destacado" => false.
];
?>

    <main>
        <section class="hero-premium reveal">
            <div class="hero-premium__container page-wrapper hero-container-center">
                <div class="hero-premium__content hero-content-center">
                    <div class="mb-20 stagger-1">
                        <span class="badge badge--orange">RECURSOS PARA FAMILIAS</span>
                    </div>
                    <h1 class="hero-premium__title items-center">
                        <span class="title-pill stagger-2">El blog de</span>
                        <span class="title-pill stagger-3"><span class="text-orange">Centro Futura</span></span>
                    </h1>
                    <div class="hero-premium__text-box stagger-4 hero-text-box-center">
                        <p class="hero-premium__text">
                            Guías prácticas, neuroeducación y consejos honestos para ayudar a tus hijos a gestionar su tiempo, mejorar sus notas y recuperar la confianza.
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
                    // RENDERIZADO AUTOMÁTICO DEL ARTÍCULO DESTACADO
                    foreach($articulos as $post): 
                        if($post['destacado']): 
                    ?>
                    <article class="blog-featured filter-item" data-category="<?php echo $post['categoria']; ?>">
                        <div class="blog-featured__img-wrapper">
                            <img src="<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="blog-featured__image">
                        </div>
                        <div class="blog-featured__content">
                            <span class="badge badge--<?php echo $post['badge_color']; ?> mb-15 badge-category"><?php echo $post['categoria']; ?></span>
                            <a href="<?php echo $post['enlace']; ?>" class="no-underline"><h2 class="blog-featured__title"><?php echo $post['titulo']; ?></h2></a>
                            <p class="blog-card__excerpt"><?php echo $post['excerpt']; ?></p>
                            <a href="<?php echo $post['enlace']; ?>" class="link-orange mt-10">Leer artículo completo →</a>
                            <div class="blog-card__meta mt-30">
                                <span>Por <?php echo $post['autor']; ?></span>
                                <span>Lectura de <?php echo $post['tiempo']; ?></span>
                            </div>
                        </div>
                    </article>
                    <?php 
                        endif; 
                    endforeach; 
                    ?>

                    <div class="blog-grid">
                        <?php 
                        // RENDERIZADO AUTOMÁTICO DE LA CUADRÍCULA DE ARTÍCULOS
                        foreach($articulos as $post): 
                            if(!$post['destacado']): 
                        ?>
                        <article class="blog-card filter-item" data-category="<?php echo $post['categoria']; ?>">
                            <a href="<?php echo $post['enlace']; ?>" class="blog-card-link">
                                <div class="blog-card__img-wrapper">
                                    <img src="<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="blog-card__image" loading="lazy">
                                </div>
                                <div class="blog-card__content">
                                    <span class="badge badge--<?php echo $post['badge_color']; ?> badge-category mb-10"><?php echo $post['categoria']; ?></span>
                                    <h3 class="blog-card__title"><?php echo $post['titulo']; ?></h3>
                                    <p class="blog-card__excerpt"><?php echo $post['excerpt']; ?></p>
                                    <div class="blog-card__meta">
                                        <span><?php echo $post['fecha']; ?></span>
                                        <span><?php echo $post['tiempo']; ?></span>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php 
                            endif; 
                        endforeach; 
                        ?>
                    </div>
                    
                    <div id="no-results-msg" class="no-results-msg">
                        No hay artículos en esta categoría por el momento.
                    </div>

                </section>
            </div>

            <div class="cta-banner reveal mt-60 mb-40">
                <div class="cta-banner__content">
                    <h2 class="cta-banner__title">¿Tu hijo necesita aplicar estas estrategias hoy?</h2>
                    <p class="cta-banner__text max-w-600">Te ayudamos a transformar la teoría en práctica. Solicita una valoración y descubramos el plan de estudio que su cerebro necesita.</p>
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
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');
                    let visibleCount = 0;

                    filterItems.forEach(item => {
                        item.classList.add('filter-item-anim');
                        
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('d-none');
                            setTimeout(() => {
                                item.classList.remove('filter-fade-out');
                            }, 10);
                            visibleCount++;
                        } else {
                            item.classList.add('filter-fade-out');
                            setTimeout(() => {
                                if (item.classList.contains('filter-fade-out')) {
                                    item.classList.add('d-none');
                                }
                            }, 300);
                        }
                    });

                    setTimeout(() => {
                        if (visibleCount === 0) {
                            noResultsMsg.classList.add('show-msg');
                        } else {
                            noResultsMsg.classList.remove('show-msg');
                        }
                    }, 310);
                });
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>