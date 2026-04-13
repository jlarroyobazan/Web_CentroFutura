<?php 
$pageTitle = "Contacto y Ubicación | Academia Centro Futura Rivas";
$pageDescription = "Contacta con Centro Futura en Rivas Vaciamadrid. Solicita tu clase de prueba gratuita o información sobre nuestro gabinete psicopedagógico especializado.";
include 'includes/header.php'; 
?>

    <main>
        <div class="page-wrapper mt-40">
            <div class="content-island reveal scroll-mt-100" id="formulario-contacto">
                <section class="island-section">
                    
                    <div class="text-center mb-50">
                        <span class="badge badge--orange mb-15">ESTAMOS AQUÍ PARA AYUDARTE</span>
                        <h1 class="section-title">Hablemos del futuro <br>de <span class="text-orange">tu hijo/a</span></h1>
                        <p class="section-description mx-auto max-w-800">Escríbenos para solicitar información, reservar una clase de prueba gratuita o agendar una primera valoración clínica y psicopedagógica sin compromiso.</p>
                    </div>

                    <div class="contact-premium-wrapper">
                        <div class="contact-info-panel">
                            <h2 class="contact-info-title">Información directa</h2>
                            <p class="section-description mb-40 text-16">Si lo prefieres, puedes llamarnos directamente o escribirnos por WhatsApp. Respondemos siempre en menos de 24 horas laborables con total confidencialidad.</p>
            
                            <div class="contact-perks-list">
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-blue">📞</div>
                                    <div>
                                        <h4 class="perk-title">Llámanos</h4>
                                        <p class="perk-text"><a href="tel:+34676894284" class="perk-link-lg">+34 676 894 284</a></p>
                                    </div>
                                </div>
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-green">✉️</div>
                                    <div>
                                        <h4 class="perk-title">Escríbenos</h4>
                                        <p class="perk-text"><a href="mailto:hola@centrofutura.es" class="perk-link">hola@centrofutura.es</a></p>
                                    </div>
                                </div>
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-purple">🕒</div>
                                    <div>
                                        <h4 class="perk-title">Horario de atención</h4>
                                        <p class="perk-text">Lunes a Viernes: <strong>16:00 a 21:00</strong></p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-testimonial-mini">
                                "Ojalá os hubiéramos llamado antes. Ver a mi hijo ir a clase sin ansiedad no tiene precio."
                                <strong>- Sara M., madre de alumno de 3º ESO</strong>
                            </div>
                        </div>
            
                        <div class="contact-form-panel">
                            <div class="form-card">
                                <h3 class="form-title">Reserva tu plaza</h3>
                                <p class="form-subtitle">Plazas limitadas. Grupos máx. 6 alumnos.</p>
                                
                                <form class="real-form" action="#" method="POST">
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="nombre" name="nombre" placeholder=" " aria-required="true" required>
                                        <label for="nombre">Nombre del tutor/a</label>
                                    </div>
                                    
                                    <div class="input-group floating-label-group">
                                        <input type="tel" id="telefono" name="telefono" placeholder=" " aria-required="true" required>
                                        <label for="telefono">Teléfono de contacto</label>
                                    </div>
            
                                    <div class="input-group floating-label-group">
                                        <select id="curso" name="curso" aria-required="true" required>
                                            <option value="" disabled selected hidden></option>
                                            <option value="primaria">Primaria (1º a 6º)</option>
                                            <option value="eso">E.S.O. (1º a 4º)</option>
                                            <option value="bachillerato">Bachillerato / Preparación EvAU</option>
                                            <option value="nee">Gabinete NEE (TDAH, Dislexia, TEA...)</option>
                                            <option value="otro">No estoy seguro, necesito asesoramiento</option>
                                        </select>
                                        <label for="curso">Necesidad del alumno</label>
                                        <div class="select-arrow">▼</div>
                                    </div>

                                    <div class="input-group floating-label-group">
                                        <textarea id="mensaje" name="mensaje" placeholder=" "></textarea>
                                        <label for="mensaje">Comentarios adicionales (Opcional)</label>
                                    </div>
            
                                    <button type="submit" class="btn-primary btn-submit mt-10">
                                        Solicitar valoración gratuita
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ml-8"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </button>

                                    <div class="form-steps-microcopy">
                                        <span class="text-orange">1. Recibimos tu petición</span> <span>→</span>
                                        <span>2. Te llamamos en < 24h</span> <span>→</span>
                                        <span>3. Agendamos la sesión</span>
                                    </div>

                                    <p class="form-disclaimer">Al enviar, aceptas nuestra <a href="politica-de-privacidad.php" target="_blank">política de privacidad</a>. Tus datos clínicos y personales están seguros.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="content-island content-island--light reveal mt-0">
                <section class="island-section">
                    <div class="mt-20 text-center">
                        <span class="badge badge--blue mb-15">NUESTRAS INSTALACIONES</span>
                        <h2 class="section-title text-32">Ven a conocernos a <span class="text-orange">Rivas Futura</span></h2>
                        <p class="section-description mx-auto max-w-800 mb-40">Aulas libres de ruidos visuales, luz natural y perfectamente acondicionadas para el estudio en pleno centro de Rivas Vaciamadrid.</p>
                        
                        <div class="map-premium-wrapper" id="mapWrapper" aria-live="polite">
                            <div class="map-facade" onclick="loadMap()" aria-label="Cargar mapa interactivo de ubicación" role="button" tabindex="0">
                                <div class="map-facade-btn">
                                    <span class="text-20" aria-hidden="true">📍</span> Ver mapa interactivo
                                </div>
                            </div>
                        </div>

                        <div class="contact-perks-grid mt-40 mx-auto">
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
                            <div class="faq-answer">Sí, nuestra academia de apoyo escolar en <strong>Avenida Pablo Iglesias 89</strong> se encuentra en una zona residencial con amplio aparcamiento en la propia calle y alrededores, ideal para dejar o recoger a los alumnos con total comodidad y sin prisas.</div>
                        </details>
                        
                        <details class="faq-item">
                            <summary class="faq-question">¿A qué distancia estáis del Metro Rivas Futura?</summary>
                            <div class="faq-answer">Estamos muy bien comunicados. Nos encontramos a escasos minutos a pie de la estación de metro <strong>Rivas Futura (Línea 9)</strong> y contamos con paradas de autobús (331, 332 y 334) a menos de 50 metros de nuestra puerta.</div>
                        </details>

                        <details class="faq-item">
                            <summary class="faq-question">¿El centro es accesible para personas con movilidad reducida?</summary>
                            <div class="faq-answer">Totalmente. Nuestras instalaciones están a pie de calle, sin barreras arquitectónicas, y adaptadas al 100% para garantizar el acceso cómodo y seguro a todos los alumnos y familias de Rivas Vaciamadrid.</div>
                        </details>
                    </div>
                </section>
            </div>
            
        </div>
    </main>

    <script>
        // Carga diferida del mapa interactivo (Excelente para SEO y Performance)
        function loadMap() {
            document.getElementById('mapWrapper').innerHTML = '<iframe title="Mapa interactivo de ubicación de Centro Futura en Rivas-Vaciamadrid" aria-label="Ubicación en Google Maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12163.504107604675!2d-3.53503525!3d40.3448496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422530113f875f%3A0x8e8202b935e4e3e3!2sRivas-Vaciamadrid%2C%20Madrid!5e0!3m2!1ses!2ses!4v1700000000000!5m2!1ses!2ses" class="map-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
    </script>

<?php include 'includes/footer.php'; ?>