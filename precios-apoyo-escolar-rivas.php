<?php 
// SEO Dinámico Específico para esta página
$pageTitle = "Tarifas y Planes de Éxito | Centro Futura en Rivas Vaciamadrid";
$pageDescription = "Invierte en el futuro de tu hijo. Consulta nuestros planes de apoyo escolar y gabinete psicopedagógico en Rivas. Máxima transparencia, sin matrículas ocultas.";

// Llamada a la cabecera modular (incluye CSS y Navegación)
include 'includes/header.php'; 
?>

    <main>
        <div class="page-wrapper mt-40">
            
            <div class="content-island reveal">
                <section class="pricing-hero island-section text-center">
                    <span class="badge badge--orange mb-15">INVERSIÓN EN SU FUTURO</span>
                    <h1 class="section-title">Elige la ruta exacta hacia <br><span class="text-orange">su éxito académico</span></h1>
                    <p class="section-description mx-auto max-w-800 mb-40">En Centro Futura creemos en la máxima transparencia: sin matrículas ocultas ni compromisos de permanencia. Selecciona el plan ideal para potenciar su aprendizaje en nuestros grupos súper reducidos.</p>

                    <div class="pricing-toggle-wrapper mb-60">
                        <div class="pricing-toggle" role="tablist" aria-label="Selector de planes de inversión">
                            <button class="tab-btn active" role="tab" aria-selected="true" aria-controls="tab-apoyo" id="tab-btn-apoyo" data-target="tab-apoyo">Apoyo Escolar</button>
                            <button class="tab-btn" role="tab" aria-selected="false" aria-controls="tab-gabinete" id="tab-btn-gabinete" data-target="tab-gabinete">Gabinete NEE</button>
                        </div>
                    </div>

                    <div id="tab-apoyo" class="tab-content active" role="tabpanel" aria-labelledby="tab-btn-apoyo">
                        <div class="pricing-grid">
                            
                            <div class="pricing-card">
                                <span class="pricing-category-label">Acompañamiento Base</span>
                                <h3>1 hora semanal</h3>
                                <div class="pricing-price">
                                    <span>€</span>50<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 12,50€ / sesión</div>
                                <p class="pricing-desc">Un impulso estratégico semanal para afianzar conocimientos y ganar seguridad en una asignatura clave.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost pricing-card-btn">Impulsar su talento</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Acompañamiento Base</span>
                                <h3>2 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>80<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 10,00€ / sesión</div>
                                <p class="pricing-desc">Acompañamiento continuo para consolidar contenidos, mejorar sus hábitos de estudio y brillar en los exámenes.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost pricing-card-btn">Asegurar su éxito</a>
                            </div>

                            <div class="pricing-card card-featured border-orange">
                                <div class="pricing-badge" aria-hidden="true">MÁS SOLICITADO</div>
                                <span class="pricing-category-label text-orange">Evolución Continua</span>
                                <h3>3 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>110<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 9,15€ / sesión</div>
                                <p class="pricing-desc">Inmersión profunda en varias materias, garantizando una evolución académica constante y sólida.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary pricing-card-btn">Trazar su ruta</a>
                            </div>

                            <div class="pricing-card card-featured border-orange">
                                <div class="pricing-badge" aria-hidden="true">MÁS SOLICITADO</div>
                                <span class="pricing-category-label text-orange">Evolución Continua</span>
                                <h3>4 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>140<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 8,75€ / sesión</div>
                                <p class="pricing-desc">Nuestro plan más equilibrado para elevar sus resultados globales y dominar las asignaturas troncales.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary pricing-card-btn">Trazar su ruta</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Alto Rendimiento</span>
                                <h3>5 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>170<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 8,50€ / sesión</div>
                                <p class="pricing-desc">Entrenamiento académico inmersivo para alumnos decididos a potenciar múltiples materias con excelencia.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost pricing-card-btn">Alcanzar sus metas</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Alto Rendimiento</span>
                                <h3>6 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>200<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly text-orange font-weight-700">Aprox. 8,33€ / sesión • Mayor valor</div>
                                <p class="pricing-desc">Acompañamiento constante y metódico, ideal para consolidar rutinas de éxito insuperables.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost pricing-card-btn">Alcanzar sus metas</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Alto Rendimiento</span>
                                <h3>7 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>230<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly text-orange font-weight-700">Aprox. 8,20€ / sesión • Mayor valor</div>
                                <p class="pricing-desc">Preparación avanzada semanal diseñada para maximizar el rendimiento y superar cualquier reto.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost pricing-card-btn">Alcanzar sus metas</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Alto Rendimiento</span>
                                <h3>8 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>260<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly text-orange font-weight-700">Aprox. 8,12€ / sesión • Inversión óptima</div>
                                <p class="pricing-desc">El ecosistema de estudio total. Para alumnos que desean un respaldo académico continuo y sobresaliente.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost pricing-card-btn">Alcanzar sus metas</a>
                            </div>

                            <div class="pricing-card pricing-card--blue">
                                <span class="pricing-category-label text-blue-custom">A tu medida</span>
                                <h3>Plan Familiar / Personal</h3>
                                <div class="pricing-price pricing-price-custom">
                                    Consultar
                                </div>
                                <div class="pricing-hourly text-blue-custom">Bonificaciones familiares</div>
                                <p class="pricing-desc text-blue-custom">¿Buscáis un bono para hermanos o combinar apoyo escolar con nuestro Gabinete? Diseñamos una solución a medida.</p>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost btn-ghost-blue pricing-card-btn">Hablar con dirección</a>
                            </div>
                        </div>

                        <div class="pau-banner mt-60">
                            <div class="pau-banner__content">
                                <div>
                                    <span class="pricing-category-label pau-badge">Preparación Universitaria</span>
                                    <h3>Curso Intensivo EvAU (PAU) - 10 horas</h3>
                                    <p>Entrenamiento estratégico de alto impacto enfocado 100% en superar el examen y conquistar la nota de corte deseada.</p>
                                </div>
                                <div class="pau-banner__action">
                                    <div class="pricing-price pau-price-container">
                                        <span class="pau-price-currency">€</span>120<span class="pau-price-currency">/ Curso</span>
                                    </div>
                                    <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary pau-btn btn-pau-white">Asegurar plaza universitaria</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tab-gabinete" class="tab-content" role="tabpanel" aria-labelledby="tab-btn-gabinete">
                        <div class="pricing-grid" style="justify-content: center; display: flex; flex-wrap: wrap; gap: 30px;">
                            
                            <div class="pricing-card" style="flex: 1; min-width: 300px; max-width: 380px;">
                                <span class="pricing-category-label text-purple">Paso 1</span>
                                <h3>Evaluación Inicial</h3>
                                <div class="pricing-price text-purple">
                                    <span>€</span>90<span>/ Pago único</span>
                                </div>
                                <ul class="pricing-features mt-10 mb-20 text-left">
                                    <li>Entrevista familiar empática y profunda.</li>
                                    <li>Detección de su perfil neurocognitivo.</li>
                                    <li>Diseño de su plan de acción.</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost btn-ghost-purple pricing-card-btn">Agendar entrevista inicial</a>
                            </div>

                            <div class="pricing-card card-featured border-purple" style="flex: 1; min-width: 300px; max-width: 380px;">
                                <div class="pricing-badge--purple" aria-hidden="true">MÁS EFECTIVO</div>
                                <span class="pricing-category-label text-purple">Paso 2</span>
                                <h3>Intervención (2h/sem)</h3>
                                <div class="pricing-price text-purple">
                                    <span>€</span>160<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 20,00€ / sesión clínica</div>
                                <ul class="pricing-features mt-10 mb-20 text-left">
                                    <li>2 sesiones semanales transformadoras.</li>
                                    <li>Entrenamiento de funciones ejecutivas.</li>
                                    <li>Pautas claras para aplicar en el hogar.</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary btn-primary-purple-shadow pricing-card-btn">Iniciar su crecimiento</a>
                            </div>

                            <div class="pricing-card" style="flex: 1; min-width: 300px; max-width: 380px;">
                                <span class="pricing-category-label text-purple">Consolidación</span>
                                <h3>Seguimiento (1h/sem)</h3>
                                <div class="pricing-price text-purple">
                                    <span>€</span>90<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 22,50€ / sesión clínica</div>
                                <ul class="pricing-features mt-10 mb-20 text-left">
                                    <li>1 sesión semanal de empoderamiento.</li>
                                    <li>Consolidación de rutinas de éxito.</li>
                                    <li>Dominio emocional ante retos académicos.</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>contacto.php" class="btn-ghost btn-ghost-purple pricing-card-btn">Mantener su progreso</a>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island content-island--light reveal">
                <section class="island-section text-center">
                    <h2 class="section-title mb-40 section-title--sm">Todos los planes de apoyo <span class="text-orange">incluyen:</span></h2>
                    <div class="value-bar-grid">
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">🆓</div>
                            <h4>Matrícula Gratuita</h4>
                            <p>Cero costes de alta. Tu inversión va directa a su educación.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">👨‍👩‍👧</div>
                            <h4>Sinergia Familiar</h4>
                            <p>Tutorías regulares para celebrar juntos su magnífica evolución.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">🏫</div>
                            <h4>Alianza Escolar</h4>
                            <p>Coordinación directa con los tutores de su centro en Rivas.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">📚</div>
                            <h4>Técnicas de Éxito</h4>
                            <p>Dotamos al alumno de herramientas neuroeducativas de por vida.</p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island reveal">
                <section class="island-section text-center">
                    <figure class="testimonial-focus">
                        <div class="stars mb-15" aria-label="5 de 5 estrellas">⭐⭐⭐⭐⭐</div>
                        <blockquote class="mb-20 testimonial-quote-large">
                            "Buscábamos la mejor opción para él, y verle disfrutar aprendiendo y recuperar su confianza hace que cada euro invertido sea un éxito absoluto. La mejor decisión académica para nuestra familia."
                        </blockquote>
                        <figcaption class="text-orange mt-20 testimonial-author">— Carlos M., padre de alumno de 3º ESO</figcaption>
                    </figure>
                </section>
            </div>

            <div class="content-island content-island--light reveal">
                <section class="faq island-section faq-pricing">
                    <span class="badge badge--purple mb-15 badge-margin-auto">CLARIDAD ABSOLUTA</span>
                    <h2 class="section-title text-center mb-50">Dudas sobre Inversión y Facturación</h2>
                    
                    <details class="faq-item" open>
                        <summary class="faq-question">¿Existe coste de matrícula o compromiso de permanencia?</summary>
                        <div class="faq-answer"><strong>En absoluto.</strong> Creemos firmemente en el poder de nuestro método. No cobramos matrícula, ni costes de alta, ni extras por materiales. Tampoco exigimos permanencia; la mejor garantía es que tu hijo desee seguir viniendo.</div>
                    </details>
                    
                        <details class="faq-item">
                        <summary class="faq-question">¿Cómo se estructura el pago en los meses con festivos?</summary>
                        <div class="faq-answer">Nuestras cuotas son tarifas planas prorrateadas anualmente. Esto garantiza que la inversión mensual sea siempre la misma y predecible, independientemente de los festivos locales. Cumplimos rigurosamente el calendario escolar oficial de Rivas.</div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">¿Cuál es el método de pago?</summary>
                        <div class="faq-answer">Para brindar la máxima comodidad y despreocupación a las familias, gestionamos la inversión mediante <strong>domiciliación bancaria automática</strong> entre los días 1 y 5 de cada mes.</div>
                    </details>
                    
                    <details class="faq-item">
                        <summary class="faq-question">Si surge un imprevisto familiar o médico, ¿se pierde la sesión?</summary>
                        <div class="faq-answer">En absoluto. Sabemos que la conciliación familiar requiere empatía. Si nos avisas con antelación, ofrecemos total flexibilidad para que el alumno recupere su sesión de éxito en otro horario disponible durante la misma semana.</div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">¿Por qué elegir un gabinete y academia en Rivas Vaciamadrid?</summary>
                        <div class="faq-answer">Nuestra ubicación en <strong>Rivas Futura</strong> nos permite estar en contacto constante con la realidad educativa de la zona. Nuestro Gabinete Psicopedagógico está plenamente integrado en el centro, brindando una solución de élite sin desplazamientos a Madrid capital.</div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">¿Qué incluye exactamente el bono de Apoyo Escolar?</summary>
                        <div class="faq-answer">Tu inversión en <strong>apoyo escolar en Rivas</strong> garantiza grupos súper reducidos (máximo 6 alumnos para asegurar foco total), enseñanza activa de técnicas de estudio, materiales neuroeducativos y un seguimiento constante con las familias.</div>
                    </details>
                </section>
            </div>

            <div class="cta-banner reveal mt-60 mb-40">
                <div class="cta-banner__content">
                    <h2 class="cta-banner-title">¿No estás seguro de cuál es su ruta ideal?</h2>
                    <p class="cta-banner-desc">No te preocupes, estamos aquí para guiarte. Reserva una entrevista inicial gratuita, escucharemos vuestra situación y diseñaremos el plan de acción perfecto sin ningún compromiso.</p>
                    <a href="<?php echo $base_url; ?>contacto.php" class="btn-primary btn-white-orange">Agendar asesoría inicial gratuita</a>
                </div>
            </div>

        </div> 
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Toggle Switch Logic for Pricing con Accesibilidad (ARIA)
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    tabBtns.forEach(b => {
                        b.classList.remove('active');
                        b.setAttribute('aria-selected', 'false');
                    });
                    tabContents.forEach(c => c.classList.remove('active'));
                    
                    btn.classList.add('active');
                    btn.setAttribute('aria-selected', 'true');
                    document.getElementById(btn.dataset.target).classList.add('active');
                });
            });
        });
    </script>

<?php 
// Llamada al pie de página modular
include 'includes/footer.php'; 
?>