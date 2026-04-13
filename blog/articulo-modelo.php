<?php 
// 📝 CONFIGURACIÓN SEO DEL ARTÍCULO
$pageTitle = "Título de tu Artículo | Blog Centro Futura";
$pageDescription = "Descripción breve del artículo (unas 150 letras) que aparecerá en Google. Debe incluir la palabra clave principal.";
// ATENCIÓN: Ruta actualizada con ../ porque este archivo está dentro de la carpeta /blog/
include '../includes/header.php'; 
?>

    <main class="page-wrapper mt-40">
        
        <div class="mb-20">
            <a href="../blog.php" class="btn-ghost btn--small btn-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Volver al Blog
            </a>
        </div>

        <article class="content-island reveal pt-60">
            
            <header class="island-section text-center max-w-900 mx-auto mb-40">
                <span class="badge badge--purple mb-15">GABINETE NEE</span>
                <h1 class="section-title mb-25 text-fluid-h1">
                    Aquí va el título espectacular de tu artículo de blog
                </h1>
                
                <div class="article-meta">
                    <span class="article-author">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=100&q=80" alt="Elena Martínez" class="article-author-img">
                        Elena Martínez
                    </span>
                    <span>•</span>
                    <span>15 de Mayo, 2024</span>
                    <span>•</span>
                    <span>Lectura de 6 min</span>
                </div>
            </header>

            <div class="island-section">
                <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=1200&q=80" alt="Descripción de la imagen para accesibilidad" class="article-hero-img">
            </div>

            <div class="island-section article-body mx-auto max-w-800">
                
                <p><strong>El entorno físico afecta directamente a las funciones ejecutivas.</strong> Si tienes un hijo diagnosticado con TDAH (o sospechas que podría tenerlo), probablemente la hora de hacer los deberes se haya convertido en el momento de mayor tensión familiar del día.</p>
                
                <p>En este artículo, no te vamos a hablar de medicamentos ni de diagnósticos clínicos, sino de algo que puedes cambiar esta misma tarde en tu casa: <strong>la neuroarquitectura de su habitación</strong>.</p>

                <h2>1. Elimina el "Ruido Visual" de su campo de visión</h2>
                <p>Imagina intentar leer un libro complejo mientras estás en medio de un concierto. Para un cerebro con TDAH, un escritorio lleno de rotuladores de colores, pósters en la pared de enfrente y juguetes a la vista supone exactamente ese mismo nivel de interrupción acústica, pero en formato visual.</p>
                
                <ul>
                    <li><strong>Mesa despejada:</strong> Solo debe haber encima el material exacto de la asignatura que está estudiando en ese momento.</li>
                    <li><strong>Pared frontal neutra:</strong> Si el escritorio está frente a una pared, asegúrate de que no haya pósters o calendarios caóticos.</li>
                    <li><strong>Iluminación:</strong> Usa luz natural siempre que sea posible. Si usas flexo, que sea de luz cálida o neutra, nunca fría de quirófano.</li>
                </ul>

                <blockquote class="article-blockquote">
                    "Un cerebro hiperactivo no necesita más estímulos para rendir, necesita un entorno predecible y en calma para no agotar su energía filtrando distracciones."
                </blockquote>

                <h2>2. Tangibiliza el tiempo con un Time Timer</h2>
                <p>Las personas con TDAH suelen tener lo que en psicopedagogía llamamos "ceguera temporal" o miopía del tiempo. Decirles "estudia durante una hora" es abstracto y genera rechazo inmediato.</p>
                <p>En Centro Futura siempre utilizamos <strong>temporizadores visuales</strong>. En lugar de ver números bajando (como en un reloj digital), ven un disco de color (generalmente rojo) que se va haciendo más pequeño a medida que pasa el tiempo. Esto hace que el tiempo se convierta en una cantidad física que pueden ver desaparecer.</p>

                <div class="article-promo-box promo-purple">
                    <h3 class="article-promo-title text-purple">¿Necesitas ayuda para implementar esto?</h3>
                    <p class="article-promo-text">En nuestro <strong>Gabinete Psicopedagógico en Rivas</strong> entrenamos a los alumnos para usar estas herramientas y asesoramos a los padres para trasladarlas al hogar.</p>
                    <a href="../contacto.php" class="btn-primary btn-primary-purple text-15 py-12 px-24">Pedir cita de valoración inicial</a>
                </div>

                <h2>3. El Método de la "Recompensa Inmediata"</h2>
                <p>El sistema de dopamina en un cerebro neurodivergente funciona distinto. Prometer un regalo a final de curso por aprobar no funciona, porque el cerebro no segrega dopamina ante una meta tan lejana. Necesitan micro-recompensas inmediatas.</p>
                <p>Prueba a dividir la tarde de deberes en bloques de 20 minutos (estudio) y 5 minutos (recompensa motora: saltar, escuchar una canción, comer algo). Esa pequeña recarga dopaminérgica es lo que les permitirá afrontar los siguientes 20 minutos.</p>

                <hr class="article-divider">

                <div class="author-box">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80" alt="Elena Martínez">
                    <div>
                        <h4 class="author-name">Elena Martínez</h4>
                        <p class="author-role text-purple">Directora Clínica y Pedagoga Colegiada</p>
                        <p class="author-bio">Especialista en neuropsicología educativa, evaluación clínica de TDAH e intervención en funciones ejecutivas. Fundadora de Centro Futura en Rivas Vaciamadrid.</p>
                    </div>
                </div>

            </div>
        </article>

        <section class="mt-80 mb-60 text-center">
            <h2 class="section-title mb-40 text-28">Sigue <span class="text-orange">leyendo</span></h2>
            
            <div class="related-articles-grid text-left">
                
                <article class="feature-card related-article-card">
                    <img src="https://images.unsplash.com/photo-1517520286547-44c1143aeb1a?auto=format&fit=crop&w=400&q=80" class="related-article-img" alt="Dislexia">
                    <div>
                        <span class="badge badge--purple mb-10">GABINETE NEE</span>
                        <h3 class="related-article-title">Dislexia: El texto no tiene que ser el enemigo de tu hijo</h3>
                    </div>
                    <a href="#" class="link-orange mt-10 mt-auto">Leer artículo →</a>
                </article>

                <article class="feature-card related-article-card">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=400&q=80" class="related-article-img" alt="ESO">
                    <div>
                        <span class="badge badge--blue mb-10">FAMILIAS</span>
                        <h3 class="related-article-title">Transición a la ESO: Cómo evitar que pierdan el rumbo</h3>
                    </div>
                    <a href="#" class="link-orange mt-10 mt-auto">Leer artículo →</a>
                </article>

            </div>
        </section>

    </main>

<?php 
// ATENCIÓN: Ruta actualizada con ../ porque este archivo está dentro de la carpeta /blog/
include '../includes/footer.php'; 
?>