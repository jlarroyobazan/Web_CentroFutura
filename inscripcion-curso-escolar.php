<?php 
// SEO Dinámico para la página de Admisión
$pageTitle = "Solicitud Oficial de Plaza 2025-2026 | Centro Futura Rivas";
$pageDescription = "Formulario de inscripción oficial para alumnos de Centro Futura. Reserva tu plaza presencial en Rivas Futura. Grupos reducidos y gabinete NEE.";

// Llamada a la cabecera modular
include 'includes/header.php'; 
?>

    <main>
        <div class="page-wrapper mt-40">
            
            <div class="content-island reveal">
                <section class="island-section">
                    
                    <div class="text-center mb-50">
                        <span class="badge badge--orange mb-15">ADMISIÓN OFICIAL</span>
                        <h1 class="section-title">Inscripción <span class="text-orange">Curso 25/26</span></h1>
                        <p class="section-description mx-auto max-w-800">Formaliza la matrícula presencial en Rivas Futura. Las plazas en nuestros grupos reducidos se asignan por riguroso orden de recepción.</p>
                    </div>

                    <div class="form-card form-card-main">
                        
                        <form class="real-form" id="formMatricula" action="procesar-solicitud.php" method="POST">
                            
                            <div class="hidden">
                                <label for="website_url">No rellenes esto si eres humano:</label>
                                <input type="text" id="website_url" name="website_url" value="" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="input-group floating-label-group mb-40">
                                <input type="email" id="email_notificaciones" name="email_notificaciones" placeholder=" " required class="input-white">
                                <label for="email_notificaciones">Correo electrónico para notificaciones *</label>
                            </div>

                            <div class="form-section-box">
                                <div class="form-section-header">
                                    <span class="badge badge--orange badge-sm">1</span>
                                    <h3 class="form-section-title">Datos del Alumno/a</h3>
                                </div>
                                
                                <div class="form-grid-2col">
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder=" " required class="bg-white">
                                        <label for="nombre_alumno">Nombre *</label>
                                    </div>
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="apellidos_alumno" name="apellidos_alumno" placeholder=" " required class="bg-white">
                                        <label for="apellidos_alumno">Apellidos *</label>
                                    </div>
                                </div>

                                <div class="form-grid-2col">
                                    <div class="input-group floating-label-group">
                                        <input type="email" id="email_alumno" name="email_alumno" placeholder=" " class="bg-white">
                                        <label for="email_alumno">Correo del alumno (opcional)</label>
                                    </div>
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="centro_educativo" name="centro_educativo" placeholder=" " required class="bg-white">
                                        <label for="centro_educativo">Centro Educativo *</label>
                                    </div>
                                </div>

                                <div class="input-group floating-label-group">
                                    <select id="curso_escolar" name="curso_escolar" required class="bg-white">
                                        <option value="" disabled selected hidden></option>
                                        <option value="primaria">Primaria</option>
                                        <option value="1eso">1º ESO</option>
                                        <option value="2eso">2º ESO</option>
                                        <option value="3eso">3º ESO</option>
                                        <option value="4eso">4º ESO</option>
                                        <option value="1bach">1º Bachillerato</option>
                                        <option value="2bach">2º Bachillerato</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                    <label for="curso_escolar">Curso Escolar *</label>
                                    <div class="select-arrow" aria-hidden="true">▼</div>
                                </div>

                                <div class="nee-checkbox-box">
                                    <p class="nee-checkbox-title">Indique si presenta Necesidades Educativas Especiales (NEE):</p>
                                    <div class="nee-checkbox-grid">
                                        <?php 
                                        $nees = ["TDAH", "Dislexia", "Dificultades de aprendizaje", "TEA", "TEL / TDL", "Altas capacidades (AACC)", "Retraso madurativo", "Discalculia", "Disgrafía", "Otro"];
                                        foreach($nees as $nee): ?>
                                        <label class="nee-checkbox-label">
                                            <input type="checkbox" name="nee[]" value="<?php echo $nee; ?>" class="nee-checkbox-input"> <?php echo $nee; ?>
                                        </label>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="input-group floating-label-group mb-0">
                                    <textarea id="ayuda_alumno" name="ayuda_alumno" placeholder=" " class="textarea-md"></textarea>
                                    <label for="ayuda_alumno">¿Cómo podemos ayudar mejor al alumno? (Aspectos clave)</label>
                                </div>
                            </div>

                            <div class="form-section-box">
                                <div class="form-section-header">
                                    <span class="badge badge--orange badge-sm">2</span>
                                    <h3 class="form-section-title">Contactos Familiares</h3>
                                </div>
                                
                                <p class="form-subsection-title">Contacto Principal (Tutor 1) *</p>
                                <div class="form-grid-2col mb-20">
                                    <div class="input-group floating-label-group mb-0">
                                        <input type="text" id="nombre_tutor1" name="nombre_tutor1" placeholder=" " required class="input-white">
                                        <label for="nombre_tutor1">Nombre y Apellidos *</label>
                                    </div>
                                    <div class="input-group floating-label-group mb-0 mt-20-mobile">
                                        <input type="tel" id="tlf_tutor1" name="tlf_tutor1" placeholder=" " required class="input-white">
                                        <label for="tlf_tutor1">Teléfono móvil *</label>
                                    </div>
                                </div>

                                <p class="form-subsection-title-muted">Contacto Alternativo (Tutor 2 - Opcional)</p>
                                <div class="form-grid-2col">
                                    <div class="input-group floating-label-group mb-0">
                                        <input type="text" id="nombre_tutor2" name="nombre_tutor2" placeholder=" " class="input-white">
                                        <label for="nombre_tutor2">Nombre y Apellidos</label>
                                    </div>
                                    <div class="input-group floating-label-group mb-0 mt-20-mobile">
                                        <input type="tel" id="tlf_tutor2" name="tlf_tutor2" placeholder=" " class="input-white">
                                        <label for="tlf_tutor2">Teléfono móvil</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-section-box">
                                <div class="form-section-header">
                                    <span class="badge badge--orange badge-sm">3</span>
                                    <h3 class="form-section-title">Detalles de la Inscripción</h3>
                                </div>
                                
                                <div class="form-grid-2col">
                                    <div class="input-group floating-label-group">
                                        <select id="horas_semanales" name="horas_semanales" required class="bg-white">
                                            <option value="" disabled selected hidden></option>
                                            <option value="1">1 hora semanal (50€ /mes)</option>
                                            <option value="2">2 horas semanales (80€ /mes)</option>
                                            <option value="3">3 horas semanales (110€ /mes)</option>
                                            <option value="4">4 horas semanales (140€ /mes)</option>
                                            <option value="5">5 horas semanales (170€ /mes)</option>
                                            <option value="6">6 horas semanales (200€ /mes)</option>
                                            <option value="7">7 horas semanales (230€ /mes)</option>
                                            <option value="8">8 horas semanales (260€ /mes)</option>
                                            <option value="pau">Curso PaU - 10 horas (120€ /curso)</option>
                                        </select>
                                        <label for="horas_semanales">Horas Semanales *</label>
                                        <div class="select-arrow" aria-hidden="true">▼</div>
                                    </div>

                                    <div class="input-group floating-label-group">
                                        <select id="forma_pago" name="forma_pago" required class="bg-white">
                                            <option value="" disabled selected hidden></option>
                                            <option value="transferencia">Transferencia Bancaria</option>
                                            <option value="efectivo">Pago en Efectivo</option>
                                        </select>
                                        <label for="forma_pago">Forma de pago *</label>
                                        <div class="select-arrow" aria-hidden="true">▼</div>
                                    </div>
                                </div>

                                <div class="input-group floating-label-group">
                                    <input type="text" id="horario_preferencia" name="horario_preferencia" placeholder=" " required class="input-white">
                                    <label for="horario_preferencia">Horario y días de preferencia *</label>
                                </div>

                                <div class="input-group floating-label-group mb-0">
                                    <input type="text" id="asignaturas" name="asignaturas" placeholder=" " required class="input-white">
                                    <label for="asignaturas">Asignaturas a reforzar *</label>
                                </div>
                            </div>

                            <div class="form-section-box mb-40">
                                <div class="form-section-header">
                                    <span class="badge badge--orange badge-sm">4</span>
                                    <h3 class="form-section-title">Autorizaciones</h3>
                                </div>
                                
                                <label class="auth-checkbox-label">
                                    <input type="checkbox" name="auth_whatsapp" value="si" class="auth-checkbox-input">
                                    <span><strong>CONSIENTO</strong> el uso de WhatsApp como canal de comunicación para recibir avisos sobre eventos y actualizaciones de los servicios.</span>
                                </label>

                                <label class="auth-checkbox-label">
                                    <input type="checkbox" name="auth_imagen" value="si" class="auth-checkbox-input">
                                    <span><strong>AUTORIZO</strong> la cesión de los derechos de imagen del alumno para fines informativos o promocionales en canales oficiales.</span>
                                </label>

                                <label class="auth-checkbox-label">
                                    <input type="checkbox" name="auth_salida" value="si" class="auth-checkbox-input">
                                    <span><strong>AUTORIZO</strong> a mi hijo/a a abandonar las instalaciones por sus propios medios al finalizar las clases, eximiendo al centro de responsabilidad.</span>
                                </label>

                                <div class="terms-box">
                                    <label class="terms-label">
                                        <input type="checkbox" name="acepta_reglamento" value="si" required class="terms-input">
                                        <span>He LEÍDO y ACEPTO en su totalidad los Términos de Contratación y el Reglamento Interno (incluyendo política de pagos y bajas). *</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-40 text-center">
                                <div class="flex items-center justify-center gap-10 mb-15">
                                    <span class="badge badge--orange badge-sm">5</span>
                                    <h3 class="signature-title">Firma Digital del Tutor/a *</h3>
                                </div>
                                <p class="signature-subtitle">Firme dentro del cuadro usando su ratón o deslizando el dedo en su móvil.</p>
                                
                                <div class="signature-canvas-wrapper">
                                    <canvas id="firmaCanvas" width="400" height="200" class="signature-canvas"></canvas>
                                    <button type="button" id="limpiarFirma" class="signature-clear-btn">Borrar firma</button>
                                </div>
                                <input type="hidden" id="firmaImagen" name="firma_base64" required>
                                
                                <div class="signature-secure-text">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    Proceso cifrado y 100% seguro
                                </div>
                            </div>
    
                            <button type="submit" class="btn-primary btn-submit btn-submit-main">
                                Confirmar Matrícula y Asegurar Plaza
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ml-8" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </button>

                            <div class="rgpd-info-box">
                                <h4 class="rgpd-info-title">
                                    Información Básica sobre Protección de Datos (RGPD)
                                </h4>
                                <div class="rgpd-info-text">
                                    <p class="mb-8"><strong>Responsable:</strong> Ainhoa Moreno Garrido (Centro Futura). NIF: 70427872D.</p>
                                    <p class="mb-8"><strong>Finalidad:</strong> Gestión de la solicitud de plaza, matriculación y relación académica/administrativa. Emisión de comunicaciones operativas.</p>
                                    <p class="mb-8"><strong>Legitimación y Destinatarios:</strong> Ejecución de un contrato formativo. No se cederán datos a terceros salvo obligación legal expresa.</p>
                                    <p><strong>Derechos:</strong> Puede ejercer sus derechos de acceso, rectificación, supresión y portabilidad enviando un correo a <a href="mailto:hola@centrofutura.es" class="link-orange-no-underline">hola@centrofutura.es</a>.</p>
                                </div>
                            </div>
                            
                        </form>
                    </div>

                </section>
            </div>

        </div> 
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const canvas = document.getElementById('firmaCanvas');
            const ctx = canvas.getContext('2d');
            const limpiarBtn = document.getElementById('limpiarFirma');
            const firmaInput = document.getElementById('firmaImagen');
            const form = document.getElementById('formMatricula');
            
            let drawing = false;

            function startDrawing(e) {
                drawing = true;
                ctx.beginPath();
                const pos = getPos(e);
                ctx.moveTo(pos.x, pos.y);
            }

            function draw(e) {
                if (!drawing) return;
                const pos = getPos(e);
                ctx.lineTo(pos.x, pos.y);
                ctx.strokeStyle = '#1D1D1F'; // Apple Navy color
                ctx.lineWidth = 3; // Ligeramente más grueso para simular bolígrafo real
                ctx.lineCap = 'round';
                ctx.stroke();
            }

            function stopDrawing() {
                drawing = false;
                firmaInput.value = canvas.toDataURL(); // Guarda la firma en el input oculto
            }

            // DEV/UX FIX: Función matemática para escalar las coordenadas en móviles
            function getPos(e) {
                const rect = canvas.getBoundingClientRect();
                const scaleX = canvas.width / rect.width;    // Factor de escala X
                const scaleY = canvas.height / rect.height;  // Factor de escala Y
                
                const clientX = e.touches ? e.touches[0].clientX : e.clientX;
                const clientY = e.touches ? e.touches[0].clientY : e.clientY;
                
                return {
                    x: (clientX - rect.left) * scaleX,
                    y: (clientY - rect.top) * scaleY
                };
            }

            canvas.addEventListener('mousedown', startDrawing);
            canvas.addEventListener('mousemove', draw);
            window.addEventListener('mouseup', stopDrawing);

            // Previene que la pantalla del móvil haga scroll mientras se firma
            canvas.addEventListener('touchstart', (e) => { e.preventDefault(); startDrawing(e); }, {passive: false});
            canvas.addEventListener('touchmove', (e) => { e.preventDefault(); draw(e); }, {passive: false});
            canvas.addEventListener('touchend', stopDrawing);

            limpiarBtn.addEventListener('click', () => {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                firmaInput.value = '';
            });

            form.addEventListener('submit', (e) => {
                if (!firmaInput.value) {
                    e.preventDefault();
                    alert('Por favor, firme el documento digitalmente en el recuadro indicado para poder asegurar la plaza.');
                    canvas.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    canvas.classList.add('error-pulse');
                    setTimeout(() => canvas.classList.remove('error-pulse'), 2000);
                }
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>