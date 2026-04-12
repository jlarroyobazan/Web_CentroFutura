<?php 
$pageTitle = "Inicia su camino al éxito | Contacto Centro Futura Rivas";
$pageDescription = "Da el primer paso hoy. Contacta con Centro Futura en Rivas Vaciamadrid y agenda una valoración psicopedagógica gratuita para impulsar el talento de tu hijo.";
include 'includes/header.php'; 
?>

    <main>
        <div class="page-wrapper mt-40">
            <div class="content-island reveal scroll-mt-100" id="formulario-contacto">
                <section class="island-section">
                    
                    <div class="text-center mb-50">
                        <span class="badge badge--orange mb-15">EL PRIMER PASO HACIA SU ÉXITO</span>
                        <h1 class="section-title">Diseñemos juntos su <br><span class="text-orange">ruta al éxito</span></h1>
                        <p class="section-description mx-auto max-w-800">Escríbenos para solicitar información, reservar una sesión de bienvenida o agendar una primera valoración clínica y psicopedagógica sin ningún compromiso.</p>
                    </div>

                    <div class="contact-premium-wrapper">
                        <div class="contact-info-panel">
                            <h2 class="contact-info-title">Asesoría directa y cercana</h2>
                            <p class="section-description mb-40 text-md">Si lo prefieres, puedes llamarnos directamente o escribirnos. Respondemos siempre en menos de 24 horas laborables con total empatía y confidencialidad.</p>
            
                            <div class="contact-perks contact-perks-vertical">
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-blue" aria-hidden="true">📞</div>
                                    <div>
                                        <h4 class="perk-title">Llámanos</h4>
                                        <p class="perk-text"><a href="tel:+34676894284" class="text-navy contact-link-lg">+34 676 894 284</a></p>
                                    </div>
                                </div>
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-green" aria-hidden="true">✉️</div>
                                    <div>
                                        <h4 class="perk-title">Escríbenos</h4>
                                        <p class="perk-text"><a href="mailto:hola@centrofutura.es" class="text-navy contact-link-sm">hola@centrofutura.es</a></p>
                                    </div>
                                </div>
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-purple" aria-hidden="true">🕒</div>
                                    <div>
                                        <h4 class="perk-title">Horario de atención</h4>
                                        <p class="perk-text">Lunes a Viernes: <strong>16:00 a 21:00</strong></p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-testimonial-mini">
                                "Ojalá os hubiéramos llamado antes. Ver a mi hijo ir a clase motivado y sin estrés no tiene precio."
                                <strong>- Sara M., madre de alumno de 3º ESO</strong>
                            </div>
                        </div>
            
                        <div class="contact-form-panel">
                            <div class="form-card">
                                <h3 class="form-title">Asegura su plaza hoy</h3>
                                <p class="form-subtitle">Grupos exclusivos. Garantizamos foco total (Máx. 6 alumnos).</p>
                                
                                <form class="real-form" action="#" method="POST">
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="nombre" name="nombre" placeholder=" " aria-required="true" required>
                                        <label for="nombre">Tu nombre (Padre/Madre/Tutor)</label>
                                    </div>
                                    
                                    <div class="form-grid-mobile">
                                        <div class="input-group floating-label-group">
                                            <input type="email" id="correo" name="correo" placeholder=" " required autocomplete="email" aria-required="true">
                                            <label for="correo">Correo electrónico</label>
                                        </div>
                                        <div class="input-group floating-label-group">
                                            <input type="tel" id="telefono" name="telefono" placeholder=" " aria-required="true" required>
                                            <label for="telefono">Teléfono (para llamarte)</label>
                                        </div>
                                    </div>
            
                                    <div class="input-group floating-label-group">
                                        <select id="curso" name="curso" aria-required="true" required>
                                            <option value="" disabled selected hidden></option>
                                            <option value="primaria">Primaria (1º a 6º) - Pasión por aprender</option>
                                            <option value="eso">E.S.O. (1º a 4º) - Autonomía y Hábitos</option>
                                            <option value="bachillerato">Bachillerato / EvAU - Excelencia</option>
                                            <option value="nee">Gabinete NEE (TDAH, Dislexia, TEA...)</option>
                                            <option value="otro">Necesito asesoría para decidir</option>
                                        </select>
                                        <label for="curso">¿Qué etapa vamos a impulsar?</label>
                                        <div class="select-arrow" aria-hidden="true">▼</div>
                                    </div>

                                    <div class="input-group floating-label-group">
                                        <textarea id="mensaje" name="mensaje" placeholder=" " class="textarea-auto"></textarea>
                                        <label for="mensaje">Cuéntanos cómo podemos potenciar su aprendizaje...</label>
                                    </div>
            
                                    <div class="form-checkbox-wrapper">
                                        <label class="form-checkbox-label">
                                            <input type="checkbox" name="acepta_privacidad" required class="custom-checkbox">
                                            <span>Confirmo que deseo proteger mis datos aceptando la <a href="<?php echo $base_url; ?>politica-de-privacidad.php" target="_blank" rel="noopener noreferrer" class="link-orange">política de privacidad</a>. *</span>
                                        </label>
                                    </div>

                                    <button type="submit" class="btn-primary btn-submit mt-10">
                                        Solicitar valoración gratuita
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="icon-right-8" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </button>

                                    <div class="form-steps-microcopy">
                                        <span class="text-orange">1. Recibimos tu petición</span> <span>→</span>
                                        <span>2. Te llamamos hoy</span> <span>→</span>
                                        <span>3. Trazamos el plan</span>
                                    </div>

                                    <p class="form-disclaimer">Tus datos clínicos y personales están 100% seguros con nosotros.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island content-island--light reveal mt-0">
                <section class="island-section">
                    <div class="mt-20 text-center">
                        <span class="badge badge--blue mb-15">NUESTRO OASIS DE APRENDIZAJE</span>
                        <h2 class="section-title section-title--md">Ven a conocernos a <span class="text-orange">Rivas Futura</span></h2>
                        <p class="section-description mx-auto max-w-800 mb-40">Aulas libres de ruidos visuales, bañadas en luz natural y perfectamente diseñadas para el foco profundo en el centro de Rivas Vaciamadrid.</p>
                        
                        <div class="map-premium-wrapper" id="mapWrapper" aria-live="polite">
                            <div class="map-facade" onclick="loadMap()" aria-label="Cargar mapa interactivo de ubicación de Centro Futura" role="button" tabindex="0">
                                <div class="map-facade-btn">
                                    <span class="text-xl" aria-hidden="true">📍</span> Ver mapa interactivo
                                </div>
                            </div>
                        </div>

                        <div class="contact-perks mt-40 mx-auto perks-grid-wide">
                            <div class="perk-card perk-card-white text-left">
                                <div class="perk-icon icon-bg-orange" aria-hidden="true">📍</div>
                                <div>
                                    <h4 class="perk-title">Dirección Exacta</h4>
                                    <p class="perk-text">Av. Pablo Iglesias, 89<br>28521 Rivas-Vaciamadrid</p>
                                </div>
                            </div>
                            <div class="perk-card perk-card-white text-left">
                                <div class="perk-icon icon-bg-blue" aria-hidden="true">🚇</div>
                                <div>
                                    <h4 class="perk-title">Transporte Público</h4>
                                    <p class="perk-text">Metro: Rivas Futura (L9)<br>Autobuses: 331, 332, 334</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island reveal">
                <section class="faq island-section">
                    <div class="faq-container">
                        <h2 class="section-title text-center mb-50">Logística y Ubicación</h2>
                        
                        <details class="faq-item" open>
                            <summary class="faq-question">¿Es fácil aparcar cerca de Centro Futura?</summary>
                            <div class="faq-answer">Sí, nuestra academia de apoyo escolar en <strong>Avenida Pablo Iglesias 89</strong> se encuentra en una zona residencial con amplio aparcamiento en la propia calle y alrededores, ideal para acompañar a los alumnos con total comodidad y sin estrés.</div>
                        </details>
                        
                        <details class="faq-item">
                            <summary class="faq-question">¿A qué distancia estáis del Metro Rivas Futura?</summary>
                            <div class="faq-answer">Estamos magníficamente comunicados. Nos encontramos a escasos minutos a pie de la estación de metro <strong>Rivas Futura (Línea 9)</strong> y contamos con paradas de autobús interurbano (331, 332 y 334) a menos de 50 metros de nuestra puerta.</div>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-question">¿El centro es accesible para personas con movilidad reducida?</summary>
                            <div class="faq-answer">Totalmente. Nuestras instalaciones están a pie de calle, sin barreras arquitectónicas, y adaptadas al 100% de forma inclusiva para garantizar el acceso cómodo y seguro a todos los alumnos y familias de Rivas Vaciamadrid.</div>
                        </details>
                    </div>
                </section>
            </div>
            
        </div>
    </main>

    <script>
        // Carga diferida del mapa interactivo (Excelente para SEO y Performance)
        function loadMap() {
            document.getElementById('mapWrapper').innerHTML = '<iframe title="Mapa interactivo de ubicación de Centro Futura en Rivas-Vaciamadrid" aria-label="Ubicación en Google Maps" src="http://googleusercontent.com/maps.google.com/3" class="iframe-map-premium" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
    </script>

<?php include 'includes/footer.php'; ?>