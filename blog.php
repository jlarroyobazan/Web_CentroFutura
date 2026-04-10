<?php 
$pageTitle = "Blog Educativo y Recursos NEE | Centro Futura Rivas";
$pageDescription = "Recursos, guías y consejos sobre apoyo escolar, técnicas de estudio, TDAH, dislexia y neuroeducación para familias en Rivas Vaciamadrid.";
include 'includes/header.php'; 

// =======================================================================
// 📝 GESTOR DE ARTÍCULOS (OPCIÓN 2: SEMI-AUTOMÁTICA)
// Para añadir un artículo, solo copia uno de estos bloques y cambia el texto.
// =======================================================================
$articulos = [
    [
        "destacado" => true,
        "titulo" => "TDAH en casa: 5 adaptaciones visuales para que hacer los deberes deje de ser una batalla",
        "excerpt" => "El entorno físico afecta directamente a las funciones ejecutivas. Descubre cómo aplicar los principios de neuroarquitectura en la habitación de tu hijo.",
        "imagen" => "https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=1200&q=80",
        "categoria" => "Gabinete NEE",
        "badge_color" => "purple",
        "autor" => "Elena Martínez",
        "tiempo" => "6 min",
        "enlace" => "#" // Aquí irá el enlace a articulo-tdah.php en el futuro
    ],
    [
        "destacado" => false,
        "titulo" => "La técnica Pomodoro adaptada para alumnos con déficit de atención",
        "excerpt" => "Por qué usar temporizadores visuales (Time Timers) tangibiliza el tiempo y reduce drásticamente la ansiedad frente a los exámenes.",
        "imagen" => "https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Técnicas de Estudio",
        "badge_color" => "orange",
        "fecha" => "Hace 1 semana",
        "tiempo" => "5 min",
        "enlace" => "#"
    ],
    [
        "destacado" => false,
        "titulo" => "Transición a la ESO: Cómo evitar que tu hijo pierda el rumbo",
        "excerpt" => "El salto de primaria a secundaria es el momento crítico donde ocurren más fracasos escolares. Estrategias de agenda y autonomía.",
        "imagen" => "https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Familias",
        "badge_color" => "blue",
        "fecha" => "Hace 2 semanas",
        "tiempo" => "7 min",
        "enlace" => "#"
    ],
    [
        "destacado" => false,
        "titulo" => "Dislexia: El texto no tiene que ser el enemigo de tu hijo",
        "excerpt" => "Cómo transformamos el temario oficial en mapas mentales multisensoriales para que la comprensión lectora fluya sin bloqueos.",
        "imagen" => "https://images.unsplash.com/photo-1517520286547-44c1143aeb1a?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Gabinete NEE",
        "badge_color" => "purple",
        "fecha" => "Hace 3 semanas",
        "tiempo" => "4 min",
        "enlace" => "#"
    ],
    [
        "destacado" => false,
        "titulo" => "EvAU 2026: Planificación inversa a 3 meses vista",
        "excerpt" => "Una guía paso a paso para organizar los repasos de Bachillerato y llegar al examen con la memoria a largo plazo consolidada.",
        "imagen" => "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Técnicas de Estudio",
        "badge_color" => "orange",
        "fecha" => "Hace 1 mes",
        "tiempo" => "8 min",
        "enlace" => "#"
    ],
    [
        "destacado" => false,
        "titulo" => "TEA en el aula ordinaria: La importancia de las rutinas visuales",
        "excerpt" => "Por qué la anticipación estructurada disminuye las crisis conductuales y permite focalizar la energía del alumno en aprender.",
        "imagen" => "https://images.unsplash.com/photo-1580894732444-8ecded790047?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Gabinete NEE",
        "badge_color" => "purple",
        "fecha" => "Hace 1 mes",
        "tiempo" => "6 min",
        "enlace" => "#"
    ],
    [
        "destacado" => false,
        "titulo" => "Suspensos en la primera evaluación: ¿Cuándo saltar la alarma?",
        "excerpt" => "Te explicamos la diferencia entre un bache académico por adaptación y un problema estructural que requiere intervención externa rápida.",
        "imagen" => "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80",
        "categoria" => "Familias",
        "badge_color" => "blue",
        "fecha" => "Hace 2 meses",
        "tiempo" => "5 min",
        "enlace" => "#"
    ]
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
                    <a href="contacto.php" class="btn-primary" style="background: var(--color-white); color: var(--color-orange); box-shadow: 0 10px 20px rgba(0,0,0,0.15);">Agendar valoración gratuita</a>
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
                    // 1. Quitar clase activa de todos los botones
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // 2. Poner clase activa al botón clicado
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');
                    let visibleCount = 0;

                    // 3. Ocultar/Mostrar artículos con transición
                    filterItems.forEach(item => {
                        item.style.transition = "opacity 0.3s ease, transform 0.3s ease";
                        
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = ""; // Vuelve a su estado original (grid/flex)
                            // Pequeño delay para que la transición funcione tras el display
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

                    // 4. Mostrar mensaje si está vacío
                    setTimeout(() => {
                        noResultsMsg.style.display = visibleCount === 0 ? "block" : "none";
                    }, 310);
                });
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>