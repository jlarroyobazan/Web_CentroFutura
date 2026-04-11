<?php 
// SEO Dinámico para la Portada (Rivas Vaciamadrid)
$pageTitle = "Academia Centro Futura | Apoyo Escolar y Gabinete NEE en Rivas Vaciamadrid";
$pageDescription = "Especialistas en apoyo escolar, gabinete psicopedagógico (TDAH, Dislexia) y neuroeducación en Rivas Vaciamadrid. Grupos súper reducidos (máx. 6).";

// Llamada a la cabecera modular
include 'includes/header.php'; 
?>

    <style>
        .form-grid-mobile { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 0 15px; }
        
        @media (max-width: 768px) {
            /* Ajustes de tipografía fluida para evitar títulos rotos */
            .hero-premium__title { font-size: clamp(32px, 8vw, 42px) !important; line-height: 1.15; }
            .section-title { font-size: clamp(26px, 7vw, 32px) !important; line-height: 1.2; }
            
            /* Reducción de espacios muertos en móvil */
            .mt-80 { margin-top: 45px !important; }
            .mb-50 { margin-bottom: 30px !important; }
            .island-section { padding: 40px 20px !important; }
            .seo-block { padding-top: 40px !important; }
            
            /* Reestructuración de elementos para que no se aplasten */
            .contact-premium-wrapper { grid-template-columns: 1fr !important; gap: 40px !important; }
            .hero-premium__actions { flex-direction: column; align-items: flex-start; gap: 20px; }
            .form-grid-mobile { grid-template-columns: 1fr !important; } /* Fuerza los campos a 1 columna en móvil */
        }
    </style>

    <main>
        
        <section class="hero-premium hero-full-bleed reveal">
            <div class="hero-premium__container page-wrapper">
                
                <div class="hero-premium__content">
                    <div class="mb-20 stagger-1">
                        <span class="badge badge--orange" style="display: inline-flex; align-items: center; gap: 8px; padding-left: 12px;">
                            <span class="pulse-dot" aria-hidden="true"></span>
                            Atención personalizada - Máx. 6 alumnos
                        </span>
                    </div>
                    
                    <h1 class="hero-premium__title" aria-label="Tu academia de apoyo escolar y Gabinete en Rivas">
                        <span class="title-pill stagger-2" aria-hidden="true">Apoyo escolar y</span>
                        <span class="title-pill stagger-3" aria-hidden="true">Gabinete NEE en <span class="text-orange">Rivas</span></span>
                    </h1>
                    
                    <div class="hero-premium__text-box stagger-4">
                        <span class="hero-premium__subtitle">APRENDIZAJE SIN FRUSTRACIÓN</span>
                        <p class="hero-premium__text">
                            Recupera la tranquilidad en casa. Clases súper reducidas y metodología neuroeducativa para que tu hijo mejore sus notas, apruebe exámenes y recupere la confianza en sí mismo.
                        </p>
                        
                        <div class="hero-premium__actions mt-30">
                            <div class="hero-premium__trust">
                                <div class="trust-icons-stack" aria-hidden="true">
                                    <div>🏆</div>
                                    <div>🧠</div>
                                    <div>⭐</div>
                                </div>
                                <div style="display: flex; flex-direction: column;">
                                    <span style="font-family: var(--font-title); font-size: 15px; font-weight: 800; color: var(--color-navy); line-height: 1.2;">+95% aprobados</span>
                                    <span style="font-size: 12px; font-weight: 500; color: var(--color-text);">Método comprobado</span>
                                </div>
                            </div>
                            <a href="#contacto" class="btn-ghost btn--small">Reservar clase de prueba →</a>
                        </div>
                    </div>
                </div>

                <div class="hero-premium__visual stagger-img">
                    <div class="hero-premium__image-wrapper">
                        <div class="hero-premium__bg-shape"></div>
                        
                        <picture>
                            <source media="(max-width: 600px)" srcset="./img/banner-principal-CentroFutura-kids-mobile.webp">
                            <img src="./img/banner-principal-CentroFutura-kids.webp" alt="Alumnos estudiando en academia Centro Futura de Rivas Vaciamadrid" class="hero-premium__image" width="800" height="600" fetchpriority="high" loading="eager">
                        </picture>
                        
                        <div class="hero-premium__floating-rating stagger-pop-1">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Logotipo de opiniones de Google" width="28" height="28">
                            <div>
                                <div style="font-family: var(--font-title); font-weight: 800; font-size: 20px; color: var(--color-navy); line-height: 1;" aria-label="4.9 estrellas de 5">4.9/5</div>
                                <div style="font-size: 13px; color: var(--color-text); font-weight: 700;">80 opiniones</div>
                            </div>
                        </div>

                        <a href="#contacto" class="btn-cta-floating stagger-pop-2">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                            Clase de prueba gratis
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <div class="page-wrapper">
            <div class="content-island reveal">
                
                <section class="signals island-section">
                    <span class="badge badge--blue mb-15">EL PUNTO DE INFLEXIÓN</span>
                    <h2 class="section-title">¿Cómo saber si tu hijo necesita <span class="text-orange">refuerzo académico?</span></h2>
                    
                    <div class="signals-list mt-50">
                        <div class="signal-row reveal">
                            <div class="signal-num" aria-hidden="true">01</div>
                            <h3 class="signal-title">Peleas diarias por los deberes</h3>
                            <p class="signal-desc">Las tardes de estudio se han convertido en una batalla de desgaste, lágrimas y estrés en casa. Necesita recuperar el hábito guiado por un profesional externo.</p>
                        </div>
                        <div class="signal-row reveal">
                            <div class="signal-num" aria-hidden="true">02</div>
                            <h3 class="signal-title">Materias que se le resisten</h3>
                            <p class="signal-desc">Las matemáticas, la física o el inglés se han vuelto un muro insalvable. Una explicación diferente, sin la presión del colegio, hace que por fin hagan el "clic".</p>
                        </div>
                        <div class="signal-row reveal">
                            <div class="signal-num" aria-hidden="true">03</div>
                            <h3 class="signal-title">Autoestima y motivación bajo cero</h3>
                            <p class="signal-desc">Ha empezado a creer que "no sirve" para estudiar porque el esfuerzo no se refleja en las notas. Nuestro primer trabajo es devolverle la seguridad.</p>
                        </div>
                        <div class="signal-row reveal">
                            <div class="signal-num" aria-hidden="true">04</div>
                            <h3 class="signal-title">Necesidad de un enfoque neurodiverso</h3>
                            <p class="signal-desc">Alumnos con TDAH, Dislexia o TEA se pierden en el sistema tradicional. Avanzan de forma brillante cuando la metodología se adapta a su cerebro, no al revés.</p>
                        </div>
                    </div>
                </section>

                <section id="metodologia" class="features-split island-section mt-80">
                    <div class="features-split__info">
                        <span class="badge badge--orange mb-15">NEUROEDUCACIÓN APLICADA</span>
                        <h2 class="section-title">El Método Futura: Aprender a <span class="text-orange">aprender</span></h2>
                        <p class="section-description">No somos una sala de hacer deberes. Somos educadores. Atacamos la raíz del problema para que tu hijo sea autónomo.</p>
                    </div>
                    <div class="features-split__grid">
                        <article class="feature-card">
                            <div class="feature-card__icon icon-bg-blue" aria-hidden="true">👥</div>
                            <h3 class="feature-card__title">Foco Absoluto (Máx. 6)</h3>
                            <p class="feature-card__text">Grupos súper reducidos que nos permiten conocer el estilo de aprendizaje de cada alumno y no dejar a nadie atrás.</p>
                        </article>
                        <article class="feature-card">
                            <div class="feature-card__icon icon-bg-green" aria-hidden="true">💡</div>
                            <h3 class="feature-card__title">Estrategia de Estudio</h3>
                            <p class="feature-card__text">Enseñamos a planificar la agenda, esquematizar temarios densos y gestionar el tiempo de cara a los exámenes.</p>
                        </article>
                        <article class="feature-card">
                            <div class="feature-card__icon icon-bg-orange" aria-hidden="true">🗣️</div>
                            <h3 class="feature-card__title">Sinergia Familiar</h3>
                            <p class="feature-card__text">Contacto constante con las familias y, si nos lo permites, con los orientadores de su colegio en Rivas.</p>
                        </article>
                        <article class="feature-card">
                            <div class="feature-card__icon icon-bg-purple" aria-hidden="true">✨</div>
                            <h3 class="feature-card__title">Gabinete Propio Integrado</h3>
                            <p class="feature-card__text">Especialistas en dificultades del aprendizaje (TDAH, DEA) interviniendo directamente en su dinámica de estudio.</p>
                        </article>
                    </div>
                </section>

                <section class="method-steps island-section mt-80">
                    <div class="text-center mb-50">
                        <h2 class="section-title">Tu camino hacia el éxito <span class="text-orange">en 3 pasos</span></h2>
                        <p class="section-description">Un proceso sencillo, humano y transparente para empezar a ver cambios desde la primera semana.</p>
                    </div>
                    <div class="steps-grid">
                        <div class="step-card">
                            <div class="step-number" aria-hidden="true">1</div>
                            <h3>Valoración Honesta</h3>
                            <p>Nos sentamos contigo, analizamos las notas y bloqueos del alumno, y determinamos si somos el centro adecuado para ayudarle.</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number" aria-hidden="true">2</div>
                            <h3>Plan de Choque</h3>
                            <p>Le asignamos a su grupo ideal por nivel o necesidad (NEE), marcamos la rutina de estudio y le enseñamos a organizarse.</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number" aria-hidden="true">3</div>
                            <h3>Resultados y Autonomía</h3>
                            <p>Acompañamiento continuo. Superamos los suspensos iniciales y celebramos juntos cuando logran estudiar por sí mismos.</p>
                        </div>
                    </div>
                </section>

                <section class="island-section mt-80 reveal">
                    <div class="cta-banner">
                        <div class="cta-banner__content">
                            <h2 style="font-family: var(--font-title); font-size: 36px; font-weight: 800; color: white; margin-bottom: 15px;">Transforma el "No puedo" en "Lo he logrado"</h2>
                            <p style="font-size: 18px; color: rgba(255,255,255,0.9); margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">Deja que nuestros especialistas evalúen el caso de tu hijo sin ningún compromiso. Diseñaremos un plan a su medida para que vuelva a creer en sus capacidades.</p>
                            <a href="#contacto" class="btn-primary" style="background: white; color: var(--color-orange); box-shadow: 0 10px 25px rgba(0,0,0,0.1);">Solicitar orientación hoy</a>
                        </div>
                    </div>
                </section>

            </div>

            <div class="content-island content-island--light reveal">
                <section id="etapas" class="etapas-premium island-section">
                    <div class="etapas-premium__header text-center mb-50">
                        <span class="badge badge--orange mb-15">ETAPAS EDUCATIVAS</span>
                        <h2 class="section-title">El progreso académico <span class="text-orange">empieza aquí</span></h2>
                        <p class="section-description mx-auto max-w-800">Acompañamos a tu hijo en cada fase decisiva, elevando el nivel de exigencia e introduciendo técnicas de estudio más avanzadas según su edad.</p>
                    </div>

                    <div class="etapas-grid">
                        <article class="etapa-card glass-effect border-blue">
                            <div class="etapa-card__header">
                                <div class="etapa-card__icon icon-bg-blue" aria-hidden="true">🎒</div>
                                <span class="age-badge">6 a 12 años</span>
                            </div>
                            <h3 class="etapa-card__title">Primaria</h3>
                            <p class="etapa-card__text">Evitamos que la frustración eche raíces. Afianzamos la lectoescritura, la lógica matemática y creamos rutinas divertidas para que aprender sea un reto, no un castigo.</p>
                            <ul class="etapa-tags" aria-label="Habilidades trabajadas en Primaria">
                                <li class="tag-blue">Hábitos base</li>
                                <li class="tag-blue">Lectoescritura</li>
                            </ul>
                        </article>

                        <article class="etapa-card glass-effect border-green">
                            <div class="etapa-card__header">
                                <div class="etapa-card__icon icon-bg-green" aria-hidden="true">📚</div>
                                <span class="age-badge">12 a 16 años</span>
                            </div>
                            <h3 class="etapa-card__title">E.S.O.</h3>
                            <p class="etapa-card__text">La etapa del cambio radical. Prevenimos el abandono escolar enseñándoles a esquematizar, a ser responsables con sus plazos y dominando las materias troncales.</p>
                            <ul class="etapa-tags" aria-label="Habilidades trabajadas en ESO">
                                <li class="tag-green">Responsabilidad</li>
                                <li class="tag-green">Organización</li>
                            </ul>
                        </article>

                        <article class="etapa-card glass-effect border-orange">
                            <div class="etapa-card__header">
                                <div class="etapa-card__icon icon-bg-orange" aria-hidden="true">🎓</div>
                                <span class="age-badge">16 a 18 años</span>
                            </div>
                            <h3 class="etapa-card__title">Bachillerato y EvAU</h3>
                            <p class="etapa-card__text">Foco total en la nota de corte y el futuro universitario. Profundizamos en el temario complejo, resolvemos exámenes reales y entrenamos la gestión del estrés.</p>
                            <ul class="etapa-tags" aria-label="Habilidades trabajadas en Bachillerato">
                                <li class="tag-orange">Estrategia EvAU</li>
                                <li class="tag-orange">Control del estrés</li>
                            </ul>
                        </article>
                    </div>
                </section>
            </div>
            
            <div id="gabinete-nee" class="content-island content-island--nee reveal">
                <section class="nee-premium island-section">
                    <div class="nee-premium__header text-center mb-50">
                        <span class="badge badge--purple mb-15">GABINETE EXCLUSIVO EN RIVAS</span>
                        <h2 class="section-title">Aprender distinto <br>no es <span class="text-purple">aprender menos</span></h2>
                        <p class="section-description mx-auto max-w-900">Somos pioneros en la Comunidad de Madrid al integrar un <strong>Gabinete Psicopedagógico (NEE)</strong> dentro del apoyo escolar diario. No obligamos al alumno a encajar en un sistema rígido; adaptamos nuestra forma de enseñar a su neurodiversidad para destapar su talento real.</p>
                    </div>

                    <div class="nee-bento-grid">
                        <div class="nee-card nee-card--wide glass-effect">
                            <div class="nee-card__header">
                                <div class="nee-card__icon icon-bg-purple" aria-hidden="true">🧠</div>
                                <h3>TDA y TDAH</h3>
                            </div>
                            <p>Transformamos la impulsividad en foco productivo. Entrenamos las <strong>funciones ejecutivas</strong>, usamos técnicas de pomodoro adaptadas y gestionamos la tolerancia a la frustración para que las rabietas frente a los libros desaparezcan.</p>
                            <ul class="nee-tags" aria-label="Especialidades en TDAH">
                                <li>Gestión del tiempo</li>
                                <li>Foco sostenido</li>
                                <li>Control de impulsividad</li>
                            </ul>
                        </div>

                        <div class="nee-card nee-card--narrow glass-effect">
                            <div class="nee-card__header">
                                <div class="nee-card__icon icon-bg-orange" aria-hidden="true">📖</div>
                                <h3>Dislexia y DEA</h3>
                            </div>
                            <p>El texto no tiene por qué ser el enemigo. Usamos adaptaciones visuales y mapas mentales para que la comprensión lectora y la expresión escrita fluyan de forma natural.</p>
                        </div>

                        <div class="nee-card nee-card--narrow glass-effect">
                            <div class="nee-card__header">
                                <div class="nee-card__icon icon-bg-blue" aria-hidden="true">⭐</div>
                                <h3>Altas Capacidades</h3>
                            </div>
                            <p>Prevenimos el fracaso escolar causado por el aburrimiento extremo. Aceleramos y enriquecemos el currículo mientras trabajamos su alta sensibilidad emocional.</p>
                        </div>

                        <div class="nee-card nee-card--wide glass-effect">
                            <div class="nee-card__header">
                                <div class="nee-card__icon icon-bg-green" aria-hidden="true">🧩</div>
                                <h3>TEA (Grado 1 / Asperger)</h3>
                            </div>
                            <p>Creamos un entorno seguro, libre de sobreestimulación y 100% predecible. Trabajamos con anticipación visual y rutinas estrictas, fomentando simultáneamente sus habilidades sociales y de comunicación.</p>
                            <ul class="nee-tags" aria-label="Especialidades en TEA">
                                <li>Anticipación visual</li>
                                <li>Seguridad y rutinas</li>
                            </ul>
                        </div>
                    </div>

                    <div class="nee-protocol mt-80">
                        <div class="text-center mb-50">
                            <h3 style="font-family: var(--font-title); font-size: 32px; color: var(--color-navy); font-weight: 800;">El Triángulo del Éxito <span class="text-purple">Futura</span></h3>
                            <p class="section-description mt-10">La intervención en NEE solo funciona cuando todos remamos en la misma dirección.</p>
                        </div>
                        <div class="protocol-grid">
                            <div class="protocol-step">
                                <div class="protocol-num" aria-hidden="true">01</div>
                                <h4>El Alumno en el Centro</h4>
                                <p>Descubrimos su estilo óptimo de procesamiento de información y le damos herramientas para que vuelva a confiar en su inteligencia.</p>
                            </div>
                            <div class="protocol-step">
                                <div class="protocol-num" aria-hidden="true">02</div>
                                <h4>Escuela de Familias</h4>
                                <p>Ofrecemos pautas claras y apoyo moral a los padres para que repliquen el clima de concentración y paz en casa.</p>
                            </div>
                            <div class="protocol-step">
                                <div class="protocol-num" aria-hidden="true">03</div>
                                <h4>Sinergia Escolar</h4>
                                <p>Nos coordinamos directamente con los profesores y el equipo de orientación de su colegio en Rivas para alinear las adaptaciones curriculares.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island content-island--dark reveal" style="background-color: var(--color-navy); padding-top: 80px; padding-bottom: 80px;">
                <section class="counters island-section text-center">
                    <span class="badge badge--orange mb-15">NUESTRO IMPACTO</span>
                    <h2 class="section-title mb-10" style="color: var(--color-white);">Datos que avalan tu <span class="text-orange">tranquilidad</span></h2>
                    <p class="section-description mx-auto max-w-600 mb-50" style="color: #b8b8c5;">La excelencia no se promete, se demuestra con trayectoria y dedicación diaria.</p>
                    
                    <div class="counters__grid">
                        <div class="counter-item glass-dark">
                            <div class="counter-item__icon" aria-hidden="true">🏆</div>
                            <span class="counter-number text-gradient-orange" data-target="13" data-suffix="+">0</span>
                            <p>Años enseñando</p>
                        </div>
                        
                        <div class="counter-item glass-dark">
                            <div class="counter-item__icon" aria-hidden="true">👥</div>
                            <span class="counter-number text-gradient-blue" data-target="6" data-suffix="">0</span>
                            <p>Alumnos por clase</p>
                        </div>
                        
                        <div class="counter-item glass-dark">
                            <div class="counter-item__icon" aria-hidden="true">📈</div>
                            <span class="counter-number text-gradient-green" data-target="95" data-suffix="%">0</span>
                            <p>Mejoran su rendimiento</p>
                        </div>
                        
                        <div class="counter-item glass-dark">
                            <div class="counter-item__icon" aria-hidden="true">⭐</div>
                            <span class="counter-number text-gradient-purple" data-target="192" data-suffix="">0</span>
                            <p>Reseñas positivas</p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island reveal">
                <section class="testimonials island-section">
                    <div class="text-center mb-50">
                        <span class="badge badge--orange mb-15">OPINIONES EN GOOGLE</span>
                        <h2 class="section-title">Lo que dicen las familias de <span class="text-orange">Rivas Vaciamadrid</span></h2>
                    </div>
                    <div class="testimonials__grid">
                        <figure class="testimonial__card google-review">
                            <div class="google-review__header">
                                <div class="google-review__avatar" aria-hidden="true">M</div>
                                <figcaption class="google-review__info">
                                    <strong>Mónica G.</strong>
                                    <span class="google-review__date">Hace 2 meses</span>
                                </figcaption>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Logotipo de Google" class="google-review__logo" width="24" height="24" loading="lazy">
                            </div>
                            <div class="testimonial__stars" aria-label="5 de 5 estrellas">⭐⭐⭐⭐⭐</div>
                            <blockquote class="testimonial__quote">"La mejor academia de Rivas, con las mejores profesoras que se puede tener. Te enseñan métodos de estudio y cómo organizarte, el número de personas en clase es reducido para centrarse así en cada alumno."</blockquote>
                        </figure>
                        <figure class="testimonial__card google-review">
                            <div class="google-review__header">
                                <div class="google-review__avatar" style="background: var(--color-orange);" aria-hidden="true">C</div>
                                <figcaption class="google-review__info">
                                    <strong>Carlos P.</strong>
                                    <span class="google-review__date">Hace 4 meses</span>
                                </figcaption>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Logotipo de Google" class="google-review__logo" width="24" height="24" loading="lazy">
                            </div>
                            <div class="testimonial__stars" aria-label="5 de 5 estrellas">⭐⭐⭐⭐⭐</div>
                            <blockquote class="testimonial__quote">"Muy contentos con el trato. Desde que llevamos a nuestro hijo han conseguido que se concentre, adquiera el hábito de estudio y vaya mucho más motivado al instituto. Gran profesionalidad."</blockquote>
                        </figure>
                        <figure class="testimonial__card google-review">
                            <div class="google-review__header">
                                <div class="google-review__avatar" style="background: var(--color-purple);" aria-hidden="true">S</div>
                                <figcaption class="google-review__info">
                                    <strong>Sara L.</strong>
                                    <span class="google-review__date">Hace 5 meses</span>
                                </figcaption>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Logotipo de Google" class="google-review__logo" width="24" height="24" loading="lazy">
                            </div>
                            <div class="testimonial__stars" aria-label="5 de 5 estrellas">⭐⭐⭐⭐⭐</div>
                            <blockquote class="testimonial__quote">"Atención súper personalizada. Que los grupos sean como mucho de 5 o 6 niños marca muchísimo la diferencia para resolver dudas. Mi hija ha logrado sacar adelante la EvAU gracias a ellas."</blockquote>
                        </figure>
                    </div>
                    <div class="text-center mt-50">
                        <a href="https://www.google.com/search?q=Centro+Futura+Avenida+Pablo+Iglesias+89+Rivas#lrd=0x0:0x0,1,,," target="_blank" rel="noopener noreferrer" class="btn-ghost" style="display: inline-flex; align-items: center; gap: 10px;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" width="18" height="18" aria-hidden="true">
                            Leer todas las opiniones reales
                        </a>
                    </div>
                </section>
                
                <section class="seo-block island-section mt-80 reveal" style="border-top: 1px solid rgba(0,0,0,0.05); padding-top: 60px;">
                    <div class="max-w-900 mx-auto text-center">
                        <span class="badge badge--orange mb-15">13 AÑOS LIDERANDO RIVAS</span>
                        <h2 class="section-title">Referentes en <span class="text-orange">Apoyo Escolar y NEE</span> en Rivas Vaciamadrid</h2>
                        
                        <p class="section-description mt-20" style="font-size: 18px; max-width: 800px; margin-left: auto; margin-right: auto;">
                            En Centro Futura llevamos más de <strong>una década</strong> demostrando que una educación a medida es la llave del éxito. 
                            Nuestra academia en Rivas Futura no es un centro de estudios convencional; es un espacio integral donde el rendimiento académico y el bienestar emocional van de la mano.
                        </p>

                        <div class="mt-50 text-left glass-effect" style="border-radius: var(--radius-lg); background: var(--bg-body); padding: 40px; border: 1px solid rgba(0,0,0,0.04); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <div class="icon-bg-purple mb-20" aria-hidden="true" style="width: 60px; height: 60px; font-size: 28px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">🧠</div>
                            <h3 class="navy mb-15" style="font-family: var(--font-title); font-weight: 800; font-size: 24px; color: var(--color-navy);">Pioneros en Gabinete Psicopedagógico</h3>
                            <p class="gray" style="font-size: 16px; line-height: 1.8; color: var(--color-text); max-width: 700px; margin-bottom: 0;">
                                A diferencia de otras academias de barrio, contamos con un <strong>gabinete propio hiper-especializado</strong> para atender retos como el 
                                <span class="text-orange" style="font-weight: 700;">TDAH, la Dislexia, el TEA o las Altas Capacidades</span>. Blindamos el futuro de tu hijo diseñando estrategias que encajan con su neurobiología.
                            </p>
                        </div>
                    </div>
                </section>

                <section id="faq" class="faq island-section mt-80">
                    <div class="faq-container">
                        <h2 class="section-title text-center mb-50">Resolvemos tus dudas</h2>
                        
                        <details class="faq-item" open>
                            <summary class="faq-question">¿Cuántos alumnos hay como máximo por clase?</summary>
                            <div class="faq-answer">Garantizamos grupos súper reducidos con un <strong>máximo estricto de 6 alumnos por aula</strong>. Esto nos permite asegurar una atención 100% personalizada, conocer a cada alumno por su nombre y resolver todas las dudas al instante sin que nadie se quede atrás.</div>
                        </details>
                        
                        <details class="faq-item">
                            <summary class="faq-question">¿Tratáis necesidades educativas especiales (NEE)?</summary>
                            <div class="faq-answer">Sí, somos especialistas pioneros en Rivas. Contamos con un gabinete psicopedagógico propio altamente preparado para ayudar a alumnos con <strong>TDAH, Dislexia, TEA o Altas Capacidades</strong>. Adaptamos el ritmo, los materiales y nuestra metodología a su estilo único de aprendizaje.</div>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-question">¿Trabajáis en coordinación con los colegios o institutos de Rivas?</summary>
                            <div class="faq-answer">¡Totalmente! Si la familia nos da su consentimiento, nos ponemos en contacto con los tutores y orientadores del centro educativo del alumno. Trabajar en equipo (Familia - Academia - Colegio) es la clave para conseguir resultados rápidos y duraderos.</div>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-question">¿Enseñáis técnicas de estudio o solo hacéis los deberes?</summary>
                            <div class="faq-answer">Nuestro objetivo no es solo que aprueben el próximo examen, sino que aprendan a estudiar solos. Por eso, en todas nuestras clases integramos <strong>técnicas de estudio, organización de agenda, esquematización y gestión del tiempo</strong>. No somos un "hace-deberes", somos educadores.</div>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-question">¿Qué materias impartís?</summary>
                            <div class="faq-answer">Cubrimos todas las asignaturas troncales desde Primaria hasta Bachillerato (EvAU). Esto incluye Matemáticas, Física y Química, Lengua y Literatura, Inglés, Biología, etc. Asignamos a cada alumno al profesor especializado en su rama.</div>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-question">¿Qué ocurre si el alumno falta a una clase por enfermedad?</summary>
                            <div class="faq-answer">Entendemos que los imprevistos ocurren. Ofrecemos mucha flexibilidad: si avisas con antelación, el alumno podrá recuperar esa clase en otro horario disponible dentro de esa misma semana para no perder el ritmo.</div>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-question">¿Se puede probar una clase antes de apuntarse?</summary>
                            <div class="faq-answer">Por supuesto. Sabemos que la conexión con el profesor es vital. Ofrecemos una <strong>primera clase de prueba y valoración completamente gratuita</strong> y sin ningún compromiso para que el alumno conozca a la profesora, el aula y decida si se siente cómodo.</div>
                        </details>
                    </div>
                </section>

                <section id="contacto" class="contact-section island-section mt-80">
                    <div class="contact-premium-wrapper">
                        <div class="contact-info-panel">
                            <span class="badge badge--orange mb-15">DA EL PRIMER PASO</span>
                            <h2 class="section-title">Asegura el futuro <br>de tu hijo <span class="text-orange">hoy</span></h2>
                            <p class="section-description mb-40">Rellena el formulario y una especialista educativa te contactará en menos de 24h para asesorarte de forma honesta y agendar una <strong>clase de prueba gratuita y sin compromiso</strong>.</p>
            
                            <div class="contact-perks">
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-blue" aria-hidden="true">📞</div>
                                    <div>
                                        <h4 class="perk-title">Asesoría directa</h4>
                                        <p class="perk-text">Llámanos al <strong>676 894 284</strong></p>
                                    </div>
                                </div>
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-green" aria-hidden="true">📍</div>
                                    <div>
                                        <h4 class="perk-title">Rivas Futura</h4>
                                        <p class="perk-text">Zona Centro. <a href="https://maps.google.com" target="_blank" class="link-orange">Ver mapa</a></p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="contact-testimonial mt-30">
                                <div class="stars mb-10" aria-label="5 estrellas">⭐⭐⭐⭐⭐</div>
                                <p class="mb-0">"¡Me llamaron rapidísimo! Atención de 10 desde el primer minuto. Resolvieron todas mis dudas y mi hijo empezó a la semana siguiente."</p>
                                <strong class="mt-10 display-block text-navy">- Sara M.</strong>
                            </div>
                        </div>
            
                        <div class="contact-form-panel">
                            <div class="form-card">
                                <h3 class="form-title">¿Tienes dudas? Escríbenos</h3>
                                <p class="form-subtitle">Consulta disponibilidad o solicita orientación académica sin compromiso.</p>
                                
                                <form class="real-form" action="#" method="POST">
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="nombre" name="nombre" placeholder=" " required autocomplete="name" aria-required="true">
                                        <label for="nombre">Tu nombre completo</label>
                                    </div>

                                    <div class="form-grid-mobile">
                                        <div class="input-group floating-label-group">
                                            <input type="email" id="correo" name="correo" placeholder=" " required autocomplete="email" aria-required="true">
                                            <label for="correo">Correo electrónico</label>
                                        </div>
                                        <div class="input-group floating-label-group">
                                            <input type="tel" id="telefono" name="telefono" placeholder=" " required autocomplete="tel" aria-required="true">
                                            <label for="telefono">Teléfono</label>
                                        </div>
                                    </div>
            
                                    <div class="input-group floating-label-group">
                                        <select id="curso" name="curso" required aria-required="true">
                                            <option value="" disabled selected hidden></option>
                                            <option value="primaria">Primaria (1º a 6º)</option>
                                            <option value="eso">E.S.O. (1º a 4º)</option>
                                            <option value="bachillerato">Bachillerato / Preparación EvAU</option>
                                            <option value="nee">Gabinete NEE (TDAH, Dislexia, TEA...)</option>
                                        </select>
                                        <label for="curso">¿Qué nivel o ayuda necesita?</label>
                                        <div class="select-arrow" aria-hidden="true">▼</div>
                                    </div>

                                    <div class="input-group floating-label-group">
                                        <textarea id="mensaje" name="mensaje" placeholder=" " rows="3" required aria-required="true" style="resize: vertical; min-height: 80px;"></textarea>
                                        <label for="mensaje">Cuéntanos brevemente tu caso...</label>
                                    </div>

                                    <div style="margin-top: 15px; margin-bottom: 20px;">
                                        <label style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer; font-size: 13px; color: var(--color-text);">
                                            <input type="checkbox" name="acepta_privacidad" required style="width: 18px; height: 18px; accent-color: var(--color-orange); margin-top: 2px;">
                                            <span>He leído y acepto la <a href="politica-de-privacidad.php" target="_blank" class="link-orange">política de privacidad</a>. *</span>
                                        </label>
                                    </div>
            
                                    <button type="submit" class="btn-primary btn-submit mt-10">
                                        Enviar consulta
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left:8px;" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                    </button>
                                    <p class="form-disclaimer">Tus datos están protegidos y solo los usamos para responderte.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </div> 
    </main>

<?php 
// Llamada al pie de página modular
include 'includes/footer.php'; 
?>