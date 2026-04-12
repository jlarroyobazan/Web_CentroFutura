<?php 
// 🛠️ RUTA BASE DINÁMICA: Seguridad arquitectónica
if (!isset($base_url)) { $base_url = '/'; }

// SEO Dinámico para la página legal
$pageTitle = "Acuerdo de Servicios y Convivencia - Centro Futura | Rivas Vaciamadrid";
$pageDescription = "Conoce nuestro marco de confianza, normativas de convivencia y términos de servicio en Centro Futura. Transparencia y empatía para todas las familias.";

// Invocación de la cabecera modular
include 'includes/header.php'; 
?>

<main class="page-wrapper legal-page-wrapper mt-40">
    
    <header class="text-center mb-50 reveal">
        <span class="badge badge--orange mb-15">NUESTRO MARCO DE CONFIANZA</span>
        <h1 class="section-title">Acuerdo de <span class="text-orange">Servicios</span></h1>
        <p class="section-description mx-auto max-w-600 mt-10">Términos de contratación y normas de convivencia diseñadas para proteger el bienestar y el progreso de todos nuestros alumnos. • Edición <?php echo date('Y'); ?></p>
    </header>

    <div class="legal-content mx-auto legal-container-limit">

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">01</span>
                <h2 class="legal-title">Transparencia Económica y Pagos</h2>
            </div>
            <div class="legal-text">
                <p><strong>1.1. Gestión de Cuotas:</strong> Para poder mantener la máxima calidad en nuestros grupos reducidos, el servicio se contrata por meses completos. Los pagos se gestionan cómodamente entre los días <strong>1 y 5 de cada mes</strong>. Agradecemos vuestra puntualidad; tened en cuenta que las devoluciones o retrasos prolongados (a partir del día 10) nos generan gastos bancarios y administrativos que suponen un pequeño recargo de 10€.</p>
                <p><strong>1.2. Cuotas Planas Anuales:</strong> Nuestras tarifas están prorrateadas. Esto significa que la cuota es la misma todos los meses, por lo que no realizamos compensaciones ni reembolsos por festivos del calendario escolar oficial, ni por inasistencias médicas o personales del alumno.</p>
                <p><strong>1.3. Actualizaciones:</strong> Si fuera necesario actualizar nuestras tarifas para seguir ofreciendo el mejor servicio, os avisaremos siempre con total transparencia y al menos 30 días de antelación al inicio del nuevo curso.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">02</span>
                <h2 class="legal-title">Pausas y Cancelación del Servicio</h2>
            </div>
            <div class="legal-text">
                <p><strong>2.1. Comunicación de Baja:</strong> Entendemos que vuestras necesidades pueden cambiar. Solo os pedimos que nos aviséis de cualquier baja por escrito (email o WhatsApp) <strong>antes del día 25 del mes anterior</strong>. Esto nos permite paralizar el recibo bancario a tiempo y ofrecer esa valiosa plaza a otra familia que esté en lista de espera.</p>
                <p><strong>2.2. Cancelación por Convivencia:</strong> Nuestro deber es garantizar un espacio 100% seguro. Si nos vemos obligados a cancelar una plaza por faltas graves de respeto que alteren el bienestar del grupo, la cuota del mes en curso no será reembolsable.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal legal-border-orange">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">03</span>
                <h2 class="legal-title">Garantía de Continuidad Educativa</h2>
            </div>
            <div class="legal-text">
                <p>Ante situaciones de fuerza mayor que nos impidan abrir las puertas físicamente (alertas climáticas severas, huelgas de transporte u otras restricciones gubernamentales), en <strong>Centro Futura</strong> no dejamos a los alumnos solos. Trasladaremos las sesiones de forma fluida a nuestra <strong>Modalidad de Aula Virtual</strong>, manteniendo intacto nuestro compromiso, el progreso del alumno y las condiciones del servicio.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">04</span>
                <h2 class="legal-title">Compromiso Mutuo de Éxito</h2>
            </div>
            <div class="legal-text">
                <p>Nos comprometemos a dar el 200%: ponemos a vuestra disposición un equipo colegiado, metodología neuroeducativa y todo nuestro cariño. Sin embargo, legal y pedagógicamente esto es una <strong>"obligación de medios"</strong>. El éxito final en los exámenes también requiere la constancia y el trabajo autónomo del alumno. Somos un equipo, y juntos llegaremos lo más lejos posible.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal legal-border-red">
            <div class="legal-header-flex">
                <span class="badge badge--red legal-badge">05</span>
                <h2 class="legal-title">Clima de Convivencia y Respeto</h2>
            </div>
            <div class="legal-text">
                <p><strong>5.1. Un entorno seguro:</strong> Para que las mentes neurodiversas florezcan, necesitan sentirse protegidas. Exigimos respeto absoluto hacia los profesores y compañeros. El acoso, el lenguaje ofensivo o la intimidación supondrán la pérdida inmediata de la plaza.</p>
                <p><strong>5.2. Privacidad Digital:</strong> Queda estrictamente prohibido grabar en audio o vídeo a profesores o compañeros, así como difundir fotos del centro sin permiso. Cuidamos la privacidad de nuestros menores por encima de todo, y cualquier vulneración conllevará medidas legales.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">06</span>
                <h2 class="legal-title">Cuidado de Nuestros Recursos y Equipo</h2>
            </div>
            <div class="legal-text">
                <p><strong>6.1. Materiales Exclusivos:</strong> Los esquemas, guías y recursos que creamos están diseñados con mucho esfuerzo exclusivo para nuestros alumnos. Te pedimos que los uséis de forma personal y no los distribuyáis ni los comercialicéis.</p>
                <p><strong>6.2. Cuidado de nuestro talento:</strong> Para proteger la estabilidad de nuestra plantilla, los tutores se comprometen a no intentar contratar de forma privada y externa a nuestros profesores durante su relación con el centro y hasta 12 meses después.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">07</span>
                <h2 class="legal-title">Seguridad y Cuidado de los Alumnos</h2>
            </div>
            <div class="legal-text">
                <p>Cuidamos de tu hijo con total dedicación durante su horario de clase. Te pedimos colaboración con la puntualidad a la hora de recogerles, ya que nuestro equipo necesita atender a los siguientes alumnos o finalizar su jornada. Los retrasos recurrentes (más de 15 min) nos obligarían a facturar 15€ adicionales para cubrir el tiempo extra de custodia del personal.</p>
            </div>
        </section>

        <section class="reveal mt-40 mb-40">
            <div class="legal-mini-cards-grid">
                <div class="content-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-orange">08. Uso de Imagen</h3>
                    <p class="legal-text legal-mini-text">Si nos dais permiso, nos encanta celebrar sus éxitos. Usaremos imágenes de proyectos o dinámicas para nuestras redes corporativas, siempre velando por el buen gusto, el orgullo y la protección del menor.</p>
                </div>
                <div class="content-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">09. Nuestras Aulas</h3>
                    <p class="legal-text legal-mini-text">Nuestras instalaciones son el "tercer educador". Pedimos a los alumnos que cuiden el mobiliario. Si ocurriera algún daño grave por uso negligente, la familia deberá hacerse cargo de la reparación.</p>
                </div>
                <div class="content-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">10. Canales de Atención</h3>
                    <p class="legal-text legal-mini-text">Para conciliar la vida laboral de nuestro equipo, os atenderemos encantados vía email o WhatsApp dentro de nuestro horario de tarde. Los mensajes fuera de hora se responderán al día siguiente con el mismo cariño.</p>
                </div>
                <div class="content-island legal-mini-card">
                    <h3 class="legal-mini-card-title text-navy">11. Objetos Personales</h3>
                    <p class="legal-text legal-mini-text">Para evitar distracciones y disgustos, recomendamos que no traigan objetos de gran valor (consolas, exceso de dinero). El centro no puede hacerse responsable en caso de pérdida o extravío accidental.</p>
                </div>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--orange legal-badge">12</span>
                <h2 class="legal-title">Bienestar y Salud Común</h2>
            </div>
            <div class="legal-text">
                <p>Si tu hijo/a tiene alguna alergia o condición médica relevante, por favor háznoslo saber por escrito. Asimismo, si presenta síntomas evidentes de enfermedad contagiosa, te pedimos que se recupere tranquilamente en casa para cuidar de su salud y la de todos sus compañeros.</p>
            </div>
        </section>

        <section class="content-island legal-island reveal">
            <div class="legal-header-flex">
                <span class="badge badge--navy legal-badge">13</span>
                <h2 class="legal-title">Protección de Datos y Privacidad</h2>
            </div>
            <div class="legal-text">
                <p>De acuerdo con el RGPD europeo y la LOPDGDD, tratamos los datos de tu familia con máxima confidencialidad, usándolos únicamente para gestionar la matrícula y nuestro servicio. Además, para la seguridad de todos, contamos con videovigilancia legal. Tienes todo el control: puedes ejercer tus derechos de acceso o borrado escribiéndonos a <strong>hola@centrofutura.es</strong>.</p>
            </div>
        </section>

    </div>
</main>

<?php include 'includes/footer.php'; ?>