<?php 
// 📝 CONFIGURACIÓN SEO DEL ARTÍCULO
$pageTitle = "Título de tu Artículo | Blog Centro Futura";
$pageDescription = "Descripción breve del artículo (unas 150 letras) que aparecerá en Google. Debe incluir la palabra clave principal.";
// ATENCIÓN: Ruta actualizada con ../ porque este archivo está dentro de la carpeta /blog/
include '../includes/header.php'; 
?>

<style>
    /* Estilos específicos para la legibilidad del artículo (Estándar Apple) */
    .article-body {
        font-size: 18px;
        line-height: 1.8;
        color: #333336; /* Un tono ligeramente más oscuro para lectura prolongada */
    }
    .article-body p { margin-bottom: 24px; }
    .article-body h2 {
        font-family: var(--font-title);
        font-size: 28px;
        font-weight: 800;
        color: var(--color-navy);
        margin: 40px 0 20px;
        letter-spacing: -0.02em;
    }
    .article-body h3 {
        font-family: var(--font-title);
        font-size: 22px;
        font-weight: 700;
        color: var(--color-navy);
        margin: 30px 0 15px;
    }
    .article-body ul, .article-body ol {
        margin-bottom: 24px;
        padding-left: 24px;
    }
    .article-body li { margin-bottom: 10px; }
    .article-body strong { color: var(--color-navy); font-weight: 700; }
    
    .article-blockquote {
        border-left: 4px solid var(--color-orange);
        background: rgba(237, 125, 49, 0.05);
        padding: 24px 30px;
        border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
        font-size: 20px;
        font-style: italic;
        color: var(--color-navy);
        margin: 40px 0;
    }

    /* Caja del autor (E-E-A-T SEO) */
    .author-box {
        display: flex;
        align-items: center;
        gap: 20px;
        background: var(--bg-body);
        padding: 30px;
        border-radius: var(--radius-md);
        margin-top: 50px;
        border: 1px solid rgba(0,0,0,0.03);
    }
    .author-box img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    @media (max-width: 600px) {
        .article-body { font-size: 17px; }
        .author-box { flex-direction: column; text-align: center; }
    }
</style>

    <main class="page-wrapper mt-40">
        
        <div class="mb-20">
            <a href="../blog.php" class="btn-ghost btn--small" style="display: inline-flex; align-items: center; gap: 8px;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Volver al Blog
            </a>
        </div>

        <article class="content-island reveal" style="padding-top: 60px;">
            
            <header class="island-section text-center" style="max-width: 900px; margin: 0 auto 40px;">
                <span class="badge badge--purple mb-15">GABINETE NEE</span>
                <h1 class="section-title" style="margin-bottom: 25px; font-size: clamp(32px, 5vw, 48px);">
                    Aquí va el título espectacular de tu artículo de blog
                </h1>
                
                <div style="display: flex; justify-content: center; align-items: center; gap: 15px; font-size: 14px; color: #86868b; font-weight: 500; flex-wrap: wrap;">
                    <span style="display: flex; align-items: center; gap: 6px;">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=100&q=80" alt="Elena Martínez" style="width: 24px; height: 24px; border-radius: 50%; object-fit: cover;">
                        Elena Martínez
                    </span>
                    <span>•</span>
                    <span>15 de Mayo, 2024</span>
                    <span>•</span>
                    <span>Lectura de 6 min</span>
                </div>
            </header>

            <div class="island-section">
                <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=1200&q=80" alt="Descripción de la imagen para accesibilidad" style="width: 100%; height: auto; aspect-ratio: 21/9; object-fit: cover; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
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

                <div style="background: linear-gradient(135deg, var(--bg-icon-purple), #F9F0FF); border: 1px solid rgba(142,68,173,0.15); border-radius: var(--radius-md); padding: 30px; margin: 40px 0; text-align: center;">
                    <h3 style="margin-top: 0; color: var(--color-purple); font-size: 20px;">¿Necesitas ayuda para implementar esto?</h3>
                    <p style="font-size: 16px; margin-bottom: 20px;">En nuestro <strong>Gabinete Psicopedagógico en Rivas</strong> entrenamos a los alumnos para usar estas herramientas y asesoramos a los padres para trasladarlas al hogar.</p>
                    <a href="../contacto.php" class="btn-primary" style="background: linear-gradient(135deg, var(--color-purple), #a259c3); box-shadow: 0 4px 15px rgba(142,68,173,0.3); padding: 12px 24px; font-size: 15px;">Pedir cita de valoración inicial</a>
                </div>

                <h2>3. El Método de la "Recompensa Inmediata"</h2>
                <p>El sistema de dopamina en un cerebro neurodivergente funciona distinto. Prometer un regalo a final de curso por aprobar no funciona, porque el cerebro no segrega dopamina ante una meta tan lejana. Necesitan micro-recompensas inmediatas.</p>
                <p>Prueba a dividir la tarde de deberes en bloques de 20 minutos (estudio) y 5 minutos (recompensa motora: saltar, escuchar una canción, comer algo). Esa pequeña recarga dopaminérgica es lo que les permitirá afrontar los siguientes 20 minutos.</p>

                <hr style="border: none; border-top: 1px solid rgba(0,0,0,0.05); margin: 50px 0;">

                <div class="author-box">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80" alt="Elena Martínez">
                    <div>
                        <h4 style="font-family: var(--font-title); font-size: 18px; font-weight: 800; color: var(--color-navy); margin-bottom: 5px;">Elena Martínez</h4>
                        <p style="font-size: 13px; font-weight: 700; color: var(--color-purple); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Directora Clínica y Pedagoga Colegiada</p>
                        <p style="font-size: 14px; margin: 0;">Especialista en neuropsicología educativa, evaluación clínica de TDAH e intervención en funciones ejecutivas. Fundadora de Centro Futura en Rivas Vaciamadrid.</p>
                    </div>
                </div>

            </div>
        </article>

        <section class="mt-80 mb-60 text-center">
            <h2 class="section-title mb-40" style="font-size: 28px;">Sigue <span class="text-orange">leyendo</span></h2>
            
            <div class="features-split__grid text-left" style="max-width: 900px; margin: 0 auto; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                
                <article class="feature-card" style="padding: 20px; display: flex; flex-direction: column; gap: 15px;">
                    <img src="https://images.unsplash.com/photo-1517520286547-44c1143aeb1a?auto=format&fit=crop&w=400&q=80" style="width: 100%; height: 160px; object-fit: cover; border-radius: var(--radius-sm);" alt="Dislexia">
                    <div>
                        <span class="badge badge--purple mb-10">GABINETE NEE</span>
                        <h3 style="font-family: var(--font-title); font-size: 18px; color: var(--color-navy); font-weight: 800;">Dislexia: El texto no tiene que ser el enemigo de tu hijo</h3>
                    </div>
                    <a href="#" class="link-orange mt-10" style="margin-top: auto;">Leer artículo →</a>
                </article>

                <article class="feature-card" style="padding: 20px; display: flex; flex-direction: column; gap: 15px;">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=400&q=80" style="width: 100%; height: 160px; object-fit: cover; border-radius: var(--radius-sm);" alt="ESO">
                    <div>
                        <span class="badge badge--blue mb-10">FAMILIAS</span>
                        <h3 style="font-family: var(--font-title); font-size: 18px; color: var(--color-navy); font-weight: 800;">Transición a la ESO: Cómo evitar que pierdan el rumbo</h3>
                    </div>
                    <a href="#" class="link-orange mt-10" style="margin-top: auto;">Leer artículo →</a>
                </article>

            </div>
        </section>

    </main>

<?php 
// ATENCIÓN: Ruta actualizada con ../ porque este archivo está dentro de la carpeta /blog/
include '../includes/footer.php'; 
?>