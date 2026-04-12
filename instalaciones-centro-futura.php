<?php 
$pageTitle = "Nuestro Espacio | Instalaciones Neuroeducativas | Centro Futura Rivas";
$pageDescription = "Descubre las instalaciones de Centro Futura en Rivas Vaciamadrid. Aulas inspiradas en neuroarquitectura, diseñadas para potenciar el foco, la calma y el éxito académico.";
include 'includes/header.php'; 
?>

    <main>
        <section class="hero-premium reveal">
            <div class="hero-premium__container page-wrapper">
                <div class="hero-premium__content">
                    <div class="mb-20 stagger-1">
                        <span class="badge badge--blue">NEUROARQUITECTURA APLICADA</span>
                    </div>
                    <h1 class="hero-premium__title">
                        <span class="title-pill stagger-2">El entorno como</span>
                        <span class="title-pill stagger-3"><span class="text-orange">tercer educador</span></span>
                    </h1>
                    <div class="hero-premium__text-box stagger-4">
                        <p class="hero-premium__text">
                            Hemos diseñado cada aula entendiendo cómo procesa la información el cerebro. Un espacio inspirador, armónico y libre de sobreestimulación donde tus hijos encuentran la calma necesaria para concentrarse al máximo.
                        </p>
                        <div class="hero-premium__actions mt-30">
                            <a href="#galeria" class="btn-primary btn--small">Explorar instalaciones</a>
                            <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost btn--small">Ven a visitarnos →</a>
                        </div>
                    </div>
                </div>
                <div class="hero-premium__visual stagger-img">
                    <div class="hero-premium__image-wrapper">
                        <div class="hero-premium__bg-shape bg-shape-light-blue"></div>
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=80" alt="Aula luminosa y despejada diseñada para el aprendizaje en Centro Futura Rivas" class="hero-premium__image" fetchpriority="high">
                    </div>
                </div>
            </div>
        </section>

        <div class="page-wrapper">
            <div class="content-island content-island--light reveal">
                <section class="island-section">
                    <div class="text-center mb-60">
                        <span class="badge badge--orange mb-15">DISEÑO CON PROPÓSITO</span>
                        <h2 class="section-title">Detalles que impulsan <br>el <span class="text-orange">potencial cognitivo</span></h2>
                        <p class="section-description mx-auto max-w-800">Para las mentes brillantes que procesan el mundo de forma única, un entorno armónico multiplica su capacidad de retención. Nuestro espacio está pensado como un oasis de enfoque y bienestar.</p>
                    </div>

                    <div class="features-split__grid" role="list">
                        <article class="feature-card" role="listitem">
                            <div class="feature-card__icon icon-bg-blue" aria-hidden="true">👁️</div>
                            <h3 class="feature-card__title">Armonía Visual</h3>
                            <p class="feature-card__text">Paredes limpias en tonos neutros y cálidos. Creamos espacios serenos que abrazan su atención y facilitan el aprendizaje profundo de forma natural.</p>
                        </article>
                        <article class="feature-card" role="listitem">
                            <div class="feature-card__icon icon-bg-orange" aria-hidden="true">☀️</div>
                            <h3 class="feature-card__title">Luz y Energía</h3>
                            <p class="feature-card__text">Maximizamos la luz natural y empleamos luminarias LED cálidas sin parpadeos, un detalle vital para cuidar su bienestar visual y mantener su energía intacta.</p>
                        </article>
                        <article class="feature-card" role="listitem">
                            <div class="feature-card__icon icon-bg-purple" aria-hidden="true">🪑</div>
                            <h3 class="feature-card__title">Espacios Dinámicos</h3>
                            <p class="feature-card__text">Mesas individuales modulares que invitan tanto al trabajo colaborativo enriquecedor, como al foco profundo cuando necesitan concentración absoluta.</p>
                        </article>
                        <article class="feature-card" role="listitem">
                            <div class="feature-card__icon icon-bg-green" aria-hidden="true">🎧</div>
                            <h3 class="feature-card__title">Confort Acústico</h3>
                            <p class="feature-card__text">La calma auditiva fomenta la seguridad. Utilizamos materiales fonoabsorbentes que abrazan el sonido, creando un clima de inspiración perfecto para tareas complejas.</p>
                        </article>
                    </div>
                </section>
            </div>

            <div class="content-island content-island--dark content-island--navy-padded reveal">
                <section class="island-section text-center">
                    <span class="badge badge--orange mb-15">ACCESIBILIDAD Y ENTORNO</span>
                    <h2 class="section-title mb-20 text-white">Ubicación privilegiada en <br><span class="text-orange">Rivas Futura</span></h2>
                    <div class="mx-auto max-w-800 text-left mt-40 local-commitment-box">
                        <p class="local-commitment-text mb-20">
                            Diseñado para la máxima comodidad de la logística familiar. Nuestro centro de apoyo escolar e intervención está estratégicamente situado en la <strong>Avenida Pablo Iglesias 89</strong>, una de las zonas más accesibles, modernas y amables de Rivas Vaciamadrid.
                        </p>
                        <ul class="text-list-light">
                            <li><strong>Accesibilidad total:</strong> Instalaciones a pie de calle, sin barreras arquitectónicas, 100% amigables e inclusivas para cualquier tipo de movilidad.</li>
                            <li><strong>Confort para familias:</strong> Entorno residencial con excelentes facilidades de aparcamiento para acompañar a los alumnos con total tranquilidad y comodidad.</li>
                            <li><strong>Un ecosistema seguro:</strong> A escasos minutos del Metro Rivas Futura, rodeado de amplios bulevares peatonales idóneos para la independencia de los adolescentes.</li>
                        </ul>
                    </div>
                </section>
            </div>

            <div id="galeria" class="content-island reveal">
                <section class="island-section">
                    <div class="features-split mb-60">
                        <div class="features-split__info">
                            <span class="badge badge--purple mb-15">NUESTRO CENTRO</span>
                            <h2 class="section-title text-left">Un paseo por <br><span class="text-purple">Futura</span></h2>
                            <p class="section-description mb-30 text-left">Desde nuestra acogedora zona para familias hasta las salas de intervención neuroeducativa equipadas con tecnología y material manipulativo de vanguardia.</p>
                        </div>
                        <div class="features-split__visual text-right">
                            <div class="hero-premium__trust trust-align-end">
                                <div class="trust-icons-stack" aria-hidden="true">
                                    <div class="trust-icon-blue">🌿</div>
                                    <div class="trust-icon-orange">📐</div>
                                </div>
                                <div class="flex-col trust-text-left">
                                    <span class="trust-stat-title-lg">Más de 150m²</span>
                                    <span class="trust-stat-desc">dedicados a la excelencia cognitiva</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-grid" role="group" aria-label="Galería inmersiva de las instalaciones de Centro Futura">
                        <div class="gallery-item" tabindex="0" role="button">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80" alt="Zonas comunes de bienvenida cálidas y familiares" class="gallery-img" loading="lazy">
                            <div class="gallery-caption" aria-hidden="true">Áreas de Bienvenida Familiares</div>
                        </div>
                        <div class="gallery-item" tabindex="0" role="button">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=600&q=80" alt="Aulas de alto enfoque para grupos reducidos" class="gallery-img" loading="lazy">
                            <div class="gallery-caption" aria-hidden="true">Aulas de Foco (Máx. 6 alumnos)</div>
                        </div>
                        <div class="gallery-item" tabindex="0" role="button">
                            <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=600&q=80" alt="Gabinete Clínico NEE para intervención psicopedagógica" class="gallery-img" loading="lazy">
                            <div class="gallery-caption" aria-hidden="true">Gabinete Clínico Especializado</div>
                        </div>
                        <div class="gallery-item" tabindex="0" role="button">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80" alt="Material neuroeducativo y manipulativo de vanguardia" class="gallery-img" loading="lazy">
                            <div class="gallery-caption" aria-hidden="true">Recursos de Innovación Educativa</div>
                        </div>
                        <div class="gallery-item gallery-item--wide" tabindex="0" role="button">
                            <img src="https://images.unsplash.com/photo-1517520286547-44c1143aeb1a?auto=format&fit=crop&w=1200&q=80" alt="Sala de Entrevistas diseñada para reuniones familiares y orientación" class="gallery-img" loading="lazy">
                            <div class="gallery-caption" aria-hidden="true">Sala de Orientación a Familias</div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="cta-banner-premium reveal mt-60 mb-40">
                <div class="cta-banner__content">
                    <h2 class="cta-banner-title">Las fotos no hacen justicia a la calma que se respira</h2>
                    <p class="cta-banner-desc">Te invitamos a vivenciarlo en persona. Pásate a tomar un café, recorre nuestras aulas y descubre por qué nuestros alumnos se sienten como en casa mientras logran sus objetivos.</p>
                    <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary btn-white-orange">Reservar mi visita y café de bienvenida</a>
                </div>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>