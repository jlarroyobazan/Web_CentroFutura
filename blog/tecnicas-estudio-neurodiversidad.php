<?php 
// 📝 CONFIGURACIÓN SEO DEL ARTÍCULO
$pageTitle = "Técnicas de Estudio para Cerebros Diferentes | Blog Centro Futura";
$pageDescription = "Descubre por qué los métodos tradicionales fallan en alumnos con TDAH o Dislexia y cómo las técnicas neuroeducativas cambian sus resultados en Rivas.";
// ATENCIÓN: Ruta con ../ porque este archivo está dentro de la carpeta /blog/
include '../includes/header.php'; 
?>

<style>
    /* Estilos específicos para la legibilidad del artículo (Estándar Apple) */
    .article-body {
        font-size: 18px;
        line-height: 1.8;
        color: #333336;
    }
    .article-body p { margin-bottom: 24px; }
    .article-body h2 {
        font-family: var(--font-title);
        font-size: 28px;
        font-weight: 900;
        color: var(--color-navy);
        margin: 50px 0 20px;
        letter-spacing: -0.02em;
    }
    .article-body h3 {
        font-family: var(--font-title);
        font-size: 22px;
        font-weight: 800;
        color: var(--color-navy);
        margin: 30px 0 15px;
    }
    .article-body ul, .article-body ol {
        margin-bottom: 24px;
        padding-left: 24px;
    }
    .article-body li { margin-bottom: 12px; }
    .article-body strong { color: var(--color-navy); font-weight: 800; }
    
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
                <span class="badge badge--orange mb-15">TÉCNICAS DE ESTUDIO</span>
                <h1 class="section-title" style="margin-bottom: 25px; font-size: clamp(32px, 5vw, 48px); line-height: 1.1;">
                    Por qué tu hijo no "pasa" de la primera página: Técnicas de estudio para la neurodiversidad
                </h1>
                
                <div style="display: flex; justify-content: center; align-items: center; gap: 15px; font-size: 14px; color: #86868b; font-weight: 600; flex-wrap: wrap;">
                    <span style="display: flex; align-items: center; gap: 6px;">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=100&q=80" alt="Elena Martínez" style="width: 24px; height: 24px; border-radius: 50%; object-fit: cover;">
                        Elena Martínez
                    </span>
                    <span>•</span>
                    <span>11 de Abril, 2026</span>
                    <span>•</span>
                    <span>Lectura de 7 min</span>
                </div>
            </header>

            <div class="island-section">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=1200&q=80" alt="Material de estudio neuroeducativo sobre un escritorio de madera" style="width: 100%; height: auto; aspect-ratio: 21/9; object-fit: cover; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
            </div>

            <div class="island-section article-body mx-auto max-w-800">
                
                <p>La escena se repite en miles de hogares de Rivas Vaciamadrid cada tarde: Lleva dos horas "encerrado" en la habitación estudiando para el examen de Sociales. Entras para ver cómo lo lleva y descubres, con frustración, que sigue mirando exactamente el mismo párrafo de la primera página.</p>
                
                <p>La primera reacción automática como padres suele ser pensar que están siendo perezosos. Sin embargo, desde la neuroeducación sabemos que <strong>el cerebro no es una grabadora, es un procesador de información</strong>. Y si ese cerebro tiene un perfil neurodivergente (TDAH, Dislexia, DEA), intentar meterle información leyendo y repitiendo es como intentar encender un fuego echándole agua.</p>

                <h2>El mito destructivo de las "Horas de Codo"</h2>
                <p>El sistema educativo tradicional nos ha hecho creer que a más horas sentados frente al libro, mejores notas. Esto es una trampa. Para un alumno con déficit de atención, obligarle a mirar un texto plano durante 60 minutos seguidos solo consigue tres cosas:</p>
                
                <ul>
                    <li><strong>Agotamiento de la memoria de trabajo:</strong> Su cerebro gasta toda la energía intentando no distraerse, en lugar de retener el contenido.</li>
                    <li><strong>Caída en picado de la dopamina:</strong> Sin pequeñas recompensas o estímulos visuales, el cerebro "se apaga" y entra en modo de supervivencia (distracción o sueño).</li>
                    <li><strong>Destrucción de la autoestima:</strong> Terminan creyendo la peligrosa mentira de "soy tonto, por mucho que estudio no se me queda".</li>
                </ul>

                <blockquote class="article-blockquote">
                    "No necesitan estudiar más horas. Necesitan estudiar de una forma que su cerebro sea capaz de decodificar y almacenar sin sufrimiento."
                </blockquote>

                <h2>Herramientas Futura: Del texto plano a la acción</h2>
                <p>En nuestro gabinete en Rivas Futura, cuando un alumno llega con esta frustración, lo primero que hacemos es "romper el libro". Literalmente. Dejamos de leer de forma pasiva y empezamos a estudiar de forma activa usando estas dos herramientas clave:</p>

                <h3>1. Mapas Mentales y Visual Thinking</h3>
                <p>A un cerebro con Dislexia o TDAH le asustan los bloques gigantes de texto. Enséñale a tu hijo a traducir cada párrafo a un concepto visual. Utilizar colores, flechas y dibujos activa diferentes áreas del cerebro, creando "anclajes de memoria". Si asocian la Revolución Francesa a un dibujo y una flecha roja, en el examen su cerebro buscará esa imagen, no el texto del libro.</p>

                <h3>2. Tangibilizar el Tiempo (El Time Timer)</h3>
                <p>El "estudia hasta la hora de cenar" es una condena. Utiliza un <strong>Time Timer</strong> (un reloj visual donde el tiempo se ve como un disco rojo que va desapareciendo). Acuerda bloques de estudio hiper-cortos: <strong>20 minutos de foco absoluto y 5 minutos de movimiento</strong> (levantarse, beber agua, estirar). Saber exactamente cuándo termina el esfuerzo reduce la ansiedad de forma casi mágica.</p>

                <div style="background: linear-gradient(135deg, var(--color-orange-kicker-bg), #FFFFFF); border: 1px solid rgba(237,125,49,0.2); border-radius: var(--radius-md); padding: 40px 30px; margin: 50px 0; text-align: center; box-shadow: var(--shadow-sm);">
                    <h3 style="margin-top: 0; color: var(--color-orange); font-size: 22px; font-weight: 900;">¿Cansado de ser el "policía de los deberes"?</h3>
                    <p style="font-size: 16px; margin-bottom: 25px; color: var(--color-navy); max-width: 600px; margin-left: auto; margin-right: auto;">En Centro Futura enseñamos estas herramientas (y muchas más) a tu hijo/a para que adquiera una autonomía real. No hacemos los deberes por ellos, les enseñamos a estudiar.</p>
                    <a href="../contacto.php" class="btn-primary" style="background: linear-gradient(135deg, var(--color-orange), #ff9858); box-shadow: 0 4px 15px rgba(237, 125, 49, 0.3); padding: 16px 32px; font-size: 16px;">Solicitar valoración de técnicas de estudio</a>
                </div>

                <h2>La autonomía se entrena, no se exige</h2>
                <p>Ningún niño nace sabiendo planificar una agenda, esquematizar un tema de biología o gestionar el estrés antes de un examen. Son habilidades ejecutivas que deben enseñarse de forma explícita y paciente.</p>
                <p>El próximo día que veas a tu hijo atascado en la misma página, no le digas "concéntrate más". Acércate, ciérrale el libro, dale un folio en blanco, rotuladores y dile: <em>"Vamos a dibujar lo que acabas de leer"</em>. Verás cómo cambia su mirada.</p>

                <hr style="border: none; border-top: 1px solid rgba(0,0,0,0.05); margin: 50px 0;">

                <div class="author-box">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80" alt="Elena Martínez">
                    <div>
                        <h4 style="font-family: var(--font-title); font-size: 18px; font-weight: 900; color: var(--color-navy); margin-bottom: 5px;">Elena Martínez</h4>
                        <p style="font-size: 13px; font-weight: 800; color: var(--color-purple); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Directora Clínica y Pedagoga Colegiada</p>
                        <p style="font-size: 15px; margin: 0; color: var(--color-text);">Especialista en neuropsicología educativa, evaluación clínica de TDAH e intervención en funciones ejecutivas. Fundadora de Centro Futura en Rivas Vaciamadrid.</p>
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
                        <h3 style="font-family: var(--font-title); font-size: 18px; color: var(--color-navy); font-weight: 900; line-height: 1.3;">Dislexia: El texto no tiene que ser el enemigo de tu hijo</h3>
                    </div>
                    <a href="#" class="link-orange mt-10" style="margin-top: auto;">Leer artículo →</a>
                </article>

                <article class="feature-card" style="padding: 20px; display: flex; flex-direction: column; gap: 15px;">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=400&q=80" style="width: 100%; height: 160px; object-fit: cover; border-radius: var(--radius-sm);" alt="ESO">
                    <div>
                        <span class="badge badge--blue mb-10">FAMILIAS</span>
                        <h3 style="font-family: var(--font-title); font-size: 18px; color: var(--color-navy); font-weight: 900; line-height: 1.3;">Transición a la ESO: Cómo evitar que pierdan el rumbo</h3>
                    </div>
                    <a href="#" class="link-orange mt-10" style="margin-top: auto;">Leer artículo →</a>
                </article>

            </div>
        </section>

    </main>

<?php include '../includes/footer.php'; ?>