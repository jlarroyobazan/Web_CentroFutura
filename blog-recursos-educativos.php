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
            <div class="hero-premium__container page-wrapper" style="grid-template-columns: 1fr; text-align: center;">
                <div class="hero-premium__content" style="align-items: center; max-width: 800px; margin: 0 auto;">
                    <div class="mb-20 stagger-1">
                        <span class="badge badge--orange">RECURSOS PARA FAMILIAS</span>
                    </div>
                    <h1 class="hero-premium__title" style="align-items: center;">
                        <span class="title-pill stagger-2">El blog de</span>
                        <span class="title-pill stagger-3"><span class="text-orange">Centro Futura</span></span>
                    </h1>
                    <div class="hero-premium__text-box stagger-4" style="text-align: center; max-width: 700px;">
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
                            <span class="badge badge--<?php echo $post['badge_color']; ?> mb-15" style="width: max-content; text-transform: uppercase;"><?php echo $post['categoria']; ?></span>
                            <a href="<?php echo $post['enlace']; ?>" style="text-decoration: none;"><h2 class="blog-featured__title"><?php echo $post['titulo']; ?></h2></a>
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
                            <a href="<?php echo $post['enlace']; ?>" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                                <div class="blog-card__img-wrapper">
                                    <img src="<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="blog-card__image" loading="lazy">
                                </div>
                                <div class="blog-card__content">
                                    <span class="badge badge--<?php echo $post['badge_color']; ?>" style="width: max-content; text-transform: uppercase; margin-bottom: 10px;"><?php echo $post['categoria']; ?></span>
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
                    
                    <div id="no-results-msg" style="display: none; text-align: center; padding: 40px; color: #a0a0ab; font-weight: 500;">
                        No hay artículos en esta categoría por el momento.
                    </div>

                </section>
            </div>

            <div class="cta-banner reveal mt-60 mb-40">
                <div class="cta-banner__content">
                    <h2 style="font-family: var(--font-title); font-size: 32px; color: var(--color-white); font-weight: 900; margin-bottom: 15px;">¿Tu hijo necesita aplicar estas estrategias hoy?</h2>
                    <p style="color: rgba(255,255,255,0.9); font-size: 18px; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">Te ayudamos a transformar la teoría en práctica. Solicita una valoración y descubramos el plan de estudio que su cerebro necesita.</p>
                    <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary" style="background: var(--color-white); color: var(--color-orange); box-shadow: 0 10px 20px rgba(0,0,0,0.15);">Agendar valoración gratuita</a>
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
                        item.style.transition = "opacity 0.3s ease, transform 0.3s ease";
                        
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = ""; 
                            setTimeout(() => {
                                item.style.opacity = "1";
                                item.style.transform = "scale(1)";
                            }, 10);
                            visibleCount++;
                        } else {
                            item.style.opacity = "0";
                            item.style.transform = "scale(0.95)";
                            setTimeout(() => {
                                item.style.display = "none";
                            }, 300);
                        }
                    });

                    setTimeout(() => {
                        noResultsMsg.style.display = visibleCount === 0 ? "block" : "none";
                    }, 310);
                });
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>