<?php 
// SEO Dinámico Específico para esta página
$pageTitle = "Tarifas y Precios | Academia Centro Futura en Rivas Vaciamadrid";
$pageDescription = "Consulta nuestras tarifas de apoyo escolar y gabinete psicopedagógico (NEE) en Rivas. Planes desde 1 hasta 8 horas semanales y curso intensivo PAU.";

// Llamada a la cabecera modular (incluye CSS y Navegación)
include 'includes/header.php'; 
?>

    <main>
        <div class="page-wrapper mt-40">
            
            <div class="content-island reveal">
                <section class="pricing-hero island-section text-center">
                    <span class="badge badge--orange mb-15">INVERSIÓN EN SU FUTURO</span>
                    <h1 class="section-title">Elige el plan adaptado <br>a <span class="text-orange">sus necesidades</span></h1>
                    <p class="section-description mx-auto max-w-800 mb-40">En Centro Futura no hay matrículas ocultas ni compromisos de permanencia. Escoge el bono de horas ideal para asegurar el aprobado con nuestros grupos súper reducidos.</p>

                    <div class="pricing-toggle-wrapper mb-60">
                        <div class="pricing-toggle" role="tablist" aria-label="Selector de planes de precios">
                            <button class="tab-btn active" role="tab" aria-selected="true" aria-controls="tab-apoyo" id="tab-btn-apoyo" data-target="tab-apoyo">Apoyo Escolar</button>
                            <button class="tab-btn" role="tab" aria-selected="false" aria-controls="tab-gabinete" id="tab-btn-gabinete" data-target="tab-gabinete">Gabinete NEE</button>
                        </div>
                    </div>

                    <div id="tab-apoyo" class="tab-content active" role="tabpanel" aria-labelledby="tab-btn-apoyo">
                        <div class="pricing-grid">
                            
                            <div class="pricing-card">
                                <span class="pricing-category-label">Refuerzo Básico</span>
                                <h3>1 hora semanal</h3>
                                <div class="pricing-price">
                                    <span>€</span>50<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 12,50€ / sesión</div>
                                <p class="pricing-desc">Refuerzo puntual para resolver dudas, revisar deberes y reforzar una asignatura.</p>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; width: 100%; text-align: center;">Solicitar información</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Refuerzo Básico</span>
                                <h3>2 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>80<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 10,00€ / sesión</div>
                                <p class="pricing-desc">Apoyo semanal para reforzar contenidos, mejorar hábitos de estudio y preparar exámenes.</p>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; width: 100%; text-align: center;">Solicitar información</a>
                            </div>

                            <div class="pricing-card card-featured border-orange">
                                <div class="pricing-badge" aria-hidden="true">MÁS SOLICITADO</div>
                                <span class="pricing-category-label text-orange">Apoyo Continuo</span>
                                <h3>3 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>110<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 9,15€ / sesión</div>
                                <p class="pricing-desc">Refuerzo continuo en varias materias con seguimiento del progreso académico.</p>
                                <a href="index.php#contacto" class="btn-primary mt-10" style="margin-top: auto; width: 100%; text-align: center;">Quiero este plan</a>
                            </div>

                            <div class="pricing-card card-featured border-orange">
                                <div class="pricing-badge" aria-hidden="true">MÁS SOLICITADO</div>
                                <span class="pricing-category-label text-orange">Apoyo Continuo</span>
                                <h3>4 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>140<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 8,75€ / sesión</div>
                                <p class="pricing-desc">Apoyo más completo para mejorar resultados y consolidar las asignaturas principales.</p>
                                <a href="index.php#contacto" class="btn-primary mt-10" style="margin-top: auto; width: 100%; text-align: center;">Quiero este plan</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Programa Intensivo</span>
                                <h3>5 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>170<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 8,50€ / sesión</div>
                                <p class="pricing-desc">Programa intensivo para alumnos que necesitan reforzar varias materias cada semana.</p>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; width: 100%; text-align: center;">Solicitar información</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Programa Intensivo</span>
                                <h3>6 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>200<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly text-orange" style="font-weight: 700;">Aprox. 8,33€ / sesión • Mayor ahorro</div>
                                <p class="pricing-desc">Refuerzo académico intensivo con preparación de exámenes y apoyo constante.</p>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; width: 100%; text-align: center;">Solicitar información</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Programa Intensivo</span>
                                <h3>7 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>230<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly text-orange" style="font-weight: 700;">Aprox. 8,20€ / sesión • Mayor ahorro</div>
                                <p class="pricing-desc">Apoyo semanal avanzado para mejorar rendimiento y recuperar asignaturas pendientes.</p>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; width: 100%; text-align: center;">Solicitar información</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label">Programa Intensivo</span>
                                <h3>8 horas semanales</h3>
                                <div class="pricing-price">
                                    <span>€</span>260<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly text-orange" style="font-weight: 700;">Aprox. 8,12€ / sesión • Mejor precio</div>
                                <p class="pricing-desc">Plan completo de refuerzo para alumnos que necesitan apoyo académico continuo.</p>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; width: 100%; text-align: center;">Solicitar información</a>
                            </div>

                            <div class="pricing-card" style="background: var(--bg-icon-blue); border-color: transparent;">
                                <span class="pricing-category-label" style="color: #2d82b5;">A tu medida</span>
                                <h3>Plan Hermanos / Personal</h3>
                                <div class="pricing-price" style="font-size: 32px; margin-top: 10px;">
                                    Consultar
                                </div>
                                <div class="pricing-hourly" style="color: #2d82b5;">Descuentos familiares</div>
                                <p class="pricing-desc" style="color: #2d82b5;">¿Necesitáis más horas, combinar apoyo con gabinete o un bono familiar? Diseñamos una cuota exclusiva.</p>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; width: 100%; text-align: center; border-color: #2d82b5; color: #2d82b5;">Hablar con dirección</a>
                            </div>
                        </div>

                        <div class="pau-banner mt-60">
                            <div class="pau-banner__content">
                                <div>
                                    <span class="pricing-category-label" style="color: var(--color-orange); background: white; display: inline-block; padding: 4px 12px; border-radius: 100px; margin-bottom: 10px;">Preparación Universitaria</span>
                                    <h3>Curso Intensivo EvAU (PAU) - 10 horas</h3>
                                    <p>Preparación estratégica enfocada 100% en superar el examen y alcanzar la nota de corte deseada.</p>
                                </div>
                                <div class="pau-banner__action">
                                    <div class="pricing-price" style="color: white; margin-bottom: 5px;">
                                        <span style="color: rgba(255,255,255,0.8);">€</span>120<span style="color: rgba(255,255,255,0.8);">/ Curso</span>
                                    </div>
                                    <a href="index.php#contacto" class="btn-primary pau-btn" style="background: white; color: var(--color-orange); width: 100%;">Reservar plaza PAU</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tab-gabinete" class="tab-content" role="tabpanel" aria-labelledby="tab-btn-gabinete">
                        <div class="pricing-grid">
                            
                            <div class="pricing-card">
                                <span class="pricing-category-label text-purple">Paso 1</span>
                                <h3>Evaluación Inicial</h3>
                                <div class="pricing-price text-purple">
                                    <span>€</span>90<span>/ Pago único</span>
                                </div>
                                <ul class="pricing-features mt-10 mb-20 text-left">
                                    <li>Entrevista familiar profunda.</li>
                                    <li>Detección de estilo de aprendizaje.</li>
                                    <li>Diseño de plan de intervención.</li>
                                </ul>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; border-color: var(--color-purple); color: var(--color-purple);">Agendar entrevista inicial</a>
                            </div>

                            <div class="pricing-card card-featured border-purple">
                                <div class="pricing-badge--purple" aria-hidden="true">MÁS EFECTIVO</div>
                                <span class="pricing-category-label text-purple">Paso 2</span>
                                <h3>Intervención (2h/sem)</h3>
                                <div class="pricing-price text-purple">
                                    <span>€</span>160<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 20,00€ / sesión clínica</div>
                                <ul class="pricing-features mt-10 mb-20 text-left">
                                    <li>2 sesiones semanales adaptadas.</li>
                                    <li>Entrenamiento de funciones ejecutivas.</li>
                                    <li>Pautas para replicar en casa.</li>
                                </ul>
                                <a href="index.php#contacto" class="btn-primary mt-10" style="margin-top: auto; background: linear-gradient(135deg, var(--color-purple), #a259c3); box-shadow: 0 8px 20px rgba(142,68,173,0.3);">Reservar horario</a>
                            </div>

                            <div class="pricing-card">
                                <span class="pricing-category-label text-purple">Mantenimiento</span>
                                <h3>Seguimiento (1h/sem)</h3>
                                <div class="pricing-price text-purple">
                                    <span>€</span>90<span>/ Mes</span>
                                </div>
                                <div class="pricing-hourly">Aprox. 22,50€ / sesión clínica</div>
                                <ul class="pricing-features mt-10 mb-20 text-left">
                                    <li>1 sesión semanal de refuerzo.</li>
                                    <li>Mantenimiento de rutinas creadas.</li>
                                    <li>Gestión del estrés pre-exámenes.</li>
                                </ul>
                                <a href="index.php#contacto" class="btn-ghost mt-10" style="margin-top: auto; border-color: var(--color-purple); color: var(--color-purple);">Solicitar plaza</a>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island content-island--light reveal">
                <section class="island-section text-center">
                    <h2 class="section-title mb-40" style="font-size: 28px;">Todos los planes de apoyo <span class="text-orange">incluyen:</span></h2>
                    <div class="value-bar-grid">
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">🆓</div>
                            <h4>Matrícula Gratis</h4>
                            <p>Cero costes de alta o permanencia oculta.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">👨‍👩‍👧</div>
                            <h4>Tutorías Familiares</h4>
                            <p>Reuniones mensuales para evaluar el progreso.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">🏫</div>
                            <h4>Sinergia Escolar</h4>
                            <p>Coordinación directa con su colegio o instituto.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon" aria-hidden="true">📚</div>
                            <h4>Técnicas de Estudio</h4>
                            <p>Material propio y planificación de agenda escolar.</p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island reveal">
                <section class="island-section text-center">
                    <figure class="testimonial-focus" style="margin: 0;">
                        <div class="stars mb-15" aria-label="5 de 5 estrellas">⭐⭐⭐⭐⭐</div>
                        <blockquote class="mb-20" style="font-family: var(--font-title); font-size: 22px; color: var(--color-navy); max-width: 700px; margin: 0 auto; line-height: 1.4;">
                            "Dudábamos si apuntarle 4 horas semanales, pero verle aprobar y recuperar la confianza en sí mismo hace que cada euro invertido valga la pena. La mejor decisión académica."
                        </blockquote>
                        <figcaption class="text-orange mt-20" style="font-weight: 700; display: block;">— Carlos M., padre de alumno de 3º ESO</figcaption>
                    </figure>
                </section>
            </div>

            <div class="content-island content-island--light reveal">
                <section class="faq island-section faq-pricing">
                    <h2 class="section-title text-center mb-50">Dudas sobre Pagos y Facturación</h2>
                    
                    <details class="faq-item" open>
                        <summary class="faq-question">¿Tengo que pagar matrícula o firmar permanencia?</summary>
                        <div class="faq-answer"><strong>En absoluto.</strong> Creemos en nuestro método, por lo que no cobramos ningún tipo de matrícula, coste de alta o materiales extra. Tampoco hay permanencia; el alumno está con nosotros el tiempo que necesite.</div>
                    </details>
                    
                    <details class="faq-item">
                        <summary class="faq-question">¿Qué ocurre si hay días festivos en el mes?</summary>
                        <div class="faq-answer">Las tarifas son planas y están prorrateadas anualmente. Esto significa que el precio es el mismo todos los meses, independientemente de si el mes tiene festivos o días lectivos extra. Garantizamos el cumplimiento del calendario escolar de Rivas.</div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">¿Cómo se realizan los pagos mensuales?</summary>
                        <div class="faq-answer">Para mayor comodidad de las familias, los pagos se realizan mediante <strong>domiciliación bancaria</strong> entre los días 1 y 5 de cada mes en curso.</div>
                    </details>
                    
                    <details class="faq-item">
                        <summary class="faq-question">Si mi hijo falta por enfermedad, ¿pierde el dinero de esa clase?</summary>
                        <div class="faq-answer">No. Entendemos que los imprevistos médicos ocurren. Si se avisa con antelación, ofrecemos flexibilidad para recuperar esa clase en otro horario disponible durante la misma semana.</div>
                    </details>

                    <details class="faq-item">
                        <summary class="faq-question">¿Por qué elegir un psicopedagogo en Rivas Vaciamadrid?</summary>
                        <div class="faq-answer">Al estar ubicados en <strong>Rivas Futura</strong>, conocemos de cerca el entorno educativo local. Nuestro servicio de <strong>Gabinete Psicopedagógico</strong> (con especialistas en TDAH, Dislexia y TEA) está integrado con el apoyo escolar, ofreciendo una intervención completa sin tener que desplazarse a Madrid centro.</div>
                    </details>
                    <details class="faq-item">
                        <summary class="faq-question">¿Qué incluye el bono de Apoyo Escolar en Rivas?</summary>
                        <div class="faq-answer">Nuestros precios de <strong>apoyo escolar en Rivas</strong> incluyen clases en grupos reducidos (máximo 6 alumnos), material de estudio propio, enseñanza de técnicas de estudio y tutorías regulares con los padres para asegurar el avance del alumno.</div>
                    </details>
                </section>
            </div>

            <div class="cta-banner reveal mt-60 mb-40">
                <div class="cta-banner__content">
                    <h2 style="font-family: var(--font-title); font-size: 32px; color: var(--color-white); font-weight: 900; margin-bottom: 15px;">¿No estás seguro de cuántas horas necesita?</h2>
                    <p style="color: rgba(255,255,255,0.9); font-size: 18px; margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">Reserva una entrevista inicial gratuita. Evaluaremos su situación, sus últimos resultados y te recomendaremos el plan exacto sin compromiso.</p>
                    <a href="index.php#contacto" class="btn-primary" style="background: var(--color-white); color: var(--color-orange); box-shadow: 0 10px 20px rgba(0,0,0,0.15);">Solicitar entrevista gratuita</a>
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
                    // Remover estado activo de botones y paneles
                    tabBtns.forEach(b => {
                        b.classList.remove('active');
                        b.setAttribute('aria-selected', 'false');
                    });
                    tabContents.forEach(c => c.classList.remove('active'));
                    
                    // Añadir estado activo al botón clickeado y su panel correspondiente
                    btn.classList.add('active');
                    btn.setAttribute('aria-selected', 'true');
                    document.getElementById(btn.dataset.target).classList.add('active');
                });
            });
        });
    </script>

<?php 
// Llamada al pie de página modular (que ya incluye las animaciones globales)
include 'includes/footer.php'; 
?>