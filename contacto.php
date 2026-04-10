<?php 
$pageTitle = "Contacto y Ubicación | Academia Centro Futura Rivas";
$pageDescription = "Contacta con Centro Futura en Rivas Vaciamadrid. Solicita tu clase de prueba gratuita o información sobre nuestro gabinete psicopedagógico especializado.";
include 'includes/header.php'; 
?>

    <main>
        <div class="page-wrapper mt-40">
            <div class="content-island reveal" id="formulario-contacto" style="scroll-margin-top: 100px;">
                <section class="island-section">
                    
                    <div class="text-center mb-50">
                        <span class="badge badge--orange mb-15">ESTAMOS AQUÍ PARA AYUDARTE</span>
                        <h1 class="section-title">Hablemos del futuro <br>de <span class="text-orange">tu hijo/a</span></h1>
                        <p class="section-description mx-auto max-w-800">Escríbenos para solicitar información, reservar una clase de prueba gratuita o agendar una primera valoración psicopedagógica sin compromiso.</p>
                    </div>

                    <div class="contact-premium-wrapper">
                        <div class="contact-info-panel">
                            <h2 style="font-family: var(--font-title); font-size: 24px; color: var(--color-navy); margin-bottom: 20px; font-weight: 800;">Información directa</h2>
                            <p class="section-description mb-40" style="font-size: 16px;">Si lo prefieres, puedes llamarnos directamente o escribirnos por WhatsApp. Respondemos siempre en menos de 24 horas laborables.</p>
            
                            <div class="contact-perks" style="display: flex; flex-direction: column; gap: 15px;">
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-blue">📞</div>
                                    <div>
                                        <h4 class="perk-title">Llámanos</h4>
                                        <p class="perk-text"><a href="tel:+34600000000" class="text-navy" style="font-weight: 700; text-decoration: none; font-size: 18px;">+34 600 000 000</a></p>
                                    </div>
                                </div>
                                <div class="perk-card">
                                    <div class="perk-icon icon-bg-green">✉️</div>
                                    <div>
                                        <h4 class="perk-title">Escríbenos</h4>
                                        <p class="perk-text"><a href="mailto:hola@centrofutura.es" class="text-navy" style="font-weight: 500; text-decoration: none;">hola@centrofutura.es</a></p>
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
                                <strong>- Sara, madre de alumno de 3º ESO</strong>
                            </div>
                        </div>
            
                        <div class="contact-form-panel">
                            <div class="form-card">
                                <h3 class="form-title">Reserva tu plaza</h3>
                                <p class="form-subtitle">Plazas limitadas. Grupos máx. 6 alumnos.</p>
                                
                                <form class="real-form" action="#" method="POST">
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="nombre" name="nombre" placeholder=" " aria-required="true" required>
                                        <label for="nombre">Nombre del tutor</label>
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
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left:8px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </button>

                                    <div class="form-steps-microcopy">
                                        <span style="color: var(--color-orange);">1. Recibimos tu petición</span> <span>→</span>
                                        <span>2. Te llamamos en < 24h</span> <span>→</span>
                                        <span>3. Agendamos la prueba gratis</span>
                                    </div>

                                    <p class="form-disclaimer">Al enviar, aceptas nuestra <a href="#">política de privacidad</a>. Tus datos están seguros.</p>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="mt-80 text-center">
                        <span class="badge badge--blue mb-15">NUESTRAS INSTALACIONES</span>
                        <h2 class="section-title" style="font-size: 32px;">Ven a conocernos a <span class="text-orange">Rivas</span></h2>
                        <p class="section-description mx-auto max-w-800 mb-40">Aulas libres de ruidos visuales y perfectamente acondicionadas en pleno centro de Rivas Futura.</p>
                        
                        <div class="map-premium-wrapper" id="mapWrapper" aria-live="polite">
                            <div class="map-facade" onclick="loadMap()" aria-label="Cargar mapa interactivo de ubicación" role="button" tabindex="0">
                                <div class="map-facade-btn">
                                    <span style="font-size: 20px;">📍</span> Ver mapa interactivo
                                </div>
                            </div>
                        </div>

                        <div class="contact-perks mt-30 mx-auto" style="max-width: 800px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div class="perk-card text-left" style="background: var(--bg-body); border-color: transparent;">
                                <div class="perk-icon icon-bg-orange">📍</div>
                                <div>
                                    <h4 class="perk-title">Dirección</h4>
                                    <p class="perk-text">Av. Pablo Iglesias, 89<br>28521 Rivas-Vaciamadrid</p>
                                </div>
                            </div>
                            <div class="perk-card text-left" style="background: var(--bg-body); border-color: transparent;">
                                <div class="perk-icon icon-bg-blue">🚇</div>
                                <div>
                                    <h4 class="perk-title">Transporte</h4>
                                    <p class="perk-text">Metro: Rivas Futura (L9)<br>Autobuses: 331, 332, 334</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <script>
        function loadMap() {
            document.getElementById('mapWrapper').innerHTML = '<iframe title="Mapa interactivo de ubicación de Centro Futura en Rivas-Vaciamadrid" aria-label="Ubicación en Google Maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12163.504107604675!2d-3.53503525!3d40.3448496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422530113f875f%3A0x8e8202b935e4e3e3!2sRivas-Vaciamadrid%2C%20Madrid!5e0!3m2!1ses!2ses!4v1700000000000!5m2!1ses!2ses" width="100%" height="450" style="border:0; filter: grayscale(10%) contrast(1.1); transition: filter 0.4s ease;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
    </script>

<?php include 'includes/footer.php'; ?>