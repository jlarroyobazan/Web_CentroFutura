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

                    <div class="form-card" style="max-width: 900px; margin: 0 auto 60px; box-shadow: var(--shadow-md); border: 1px solid rgba(0,0,0,0.03); padding: 40px 5vw;">
                        
                        <form class="real-form" id="formMatricula" action="procesar-solicitud.php" method="POST">
                            
                            <div style="display:none; visibility:hidden;">
                                <label for="website_url">No rellenes esto si eres humano:</label>
                                <input type="text" id="website_url" name="website_url" value="" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="input-group floating-label-group mb-40">
                                <input type="email" id="email_notificaciones" name="email_notificaciones" placeholder=" " required style="background: white; border: 1px solid #d2d2d7;">
                                <label for="email_notificaciones">Correo electrónico para notificaciones *</label>
                            </div>

                            <div style="background: var(--bg-body); padding: 30px; border-radius: var(--radius-md); margin-bottom: 30px; border: 1px solid rgba(0,0,0,0.02);">
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 25px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 15px;">
                                    <span class="badge badge--orange" style="padding: 4px 10px;">1</span>
                                    <h3 style="font-family: var(--font-title); font-size: 20px; color: var(--color-navy); margin: 0;">Datos del Alumno/a</h3>
                                </div>
                                
                                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0 20px;">
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder=" " required style="background: white;">
                                        <label for="nombre_alumno">Nombre *</label>
                                    </div>
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="apellidos_alumno" name="apellidos_alumno" placeholder=" " required style="background: white;">
                                        <label for="apellidos_alumno">Apellidos *</label>
                                    </div>
                                </div>

                                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0 20px;">
                                    <div class="input-group floating-label-group">
                                        <input type="email" id="email_alumno" name="email_alumno" placeholder=" " style="background: white;">
                                        <label for="email_alumno">Correo del alumno (opcional)</label>
                                    </div>
                                    <div class="input-group floating-label-group">
                                        <input type="text" id="centro_educativo" name="centro_educativo" placeholder=" " required style="background: white;">
                                        <label for="centro_educativo">Centro Educativo *</label>
                                    </div>
                                </div>

                                <div class="input-group floating-label-group">
                                    <select id="curso_escolar" name="curso_escolar" required style="background: white;">
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

                                <div style="background: white; padding: 25px; border-radius: var(--radius-sm); margin-bottom: 25px; border: 1px solid rgba(0,0,0,0.05);">
                                    <p style="font-family: var(--font-title); font-weight: 800; font-size: 15px; color: var(--color-purple); margin-bottom: 15px;">Indique si presenta Necesidades Educativas Especiales (NEE):</p>
                                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px;">
                                        <?php 
                                        $nees = ["TDAH", "Dislexia", "Dificultades de aprendizaje", "TEA", "TEL / TDL", "Altas capacidades (AACC)", "Retraso madurativo", "Discalculia", "Disgrafía", "Otro"];
                                        foreach($nees as $nee): ?>
                                        <label style="display: flex; align-items: center; gap: 10px; font-size: 14px; cursor: pointer; color: var(--color-navy); font-weight: 500;">
                                            <input type="checkbox" name="nee[]" value="<?php echo $nee; ?>" style="accent-color: var(--color-purple); width: 18px; height: 18px; cursor: pointer;"> <?php echo $nee; ?>
                                        </label>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="input-group floating-label-group mb-0">
                                    <textarea id="ayuda_alumno" name="ayuda_alumno" placeholder=" " style="min-height: 100px; background: white;"></textarea>
                                    <label for="ayuda_alumno">¿Cómo podemos ayudar mejor al alumno? (Aspectos clave)</label>
                                </div>
                            </div>

                            <div style="background: var(--bg-body); padding: 30px; border-radius: var(--radius-md); margin-bottom: 30px; border: 1px solid rgba(0,0,0,0.02);">
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 25px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 15px;">
                                    <span class="badge badge--orange" style="padding: 4px 10px;">2</span>
                                    <h3 style="font-family: var(--font-title); font-size: 20px; color: var(--color-navy); margin: 0;">Contactos Familiares</h3>
                                </div>
                                
                                <p style="font-size: 14px; color: var(--color-orange); font-weight: 700; margin-bottom: 15px;">Contacto Principal (Tutor 1) *</p>
                                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0 20px; margin-bottom: 20px;">
                                    <div class="input-group floating-label-group mb-0">
                                        <input type="text" id="nombre_tutor1" name="nombre_tutor1" placeholder=" " required style="background: white;">
                                        <label for="nombre_tutor1">Nombre y Apellidos *</label>
                                    </div>
                                    <div class="input-group floating-label-group mb-0 mt-20-mobile">
                                        <input type="tel" id="tlf_tutor1" name="tlf_tutor1" placeholder=" " required style="background: white;">
                                        <label for="tlf_tutor1">Teléfono móvil *</label>
                                    </div>
                                </div>

                                <p style="font-size: 14px; color: #86868b; font-weight: 700; margin-bottom: 15px;">Contacto Alternativo (Tutor 2 - Opcional)</p>
                                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0 20px;">
                                    <div class="input-group floating-label-group mb-0">
                                        <input type="text" id="nombre_tutor2" name="nombre_tutor2" placeholder=" " style="background: white;">
                                        <label for="nombre_tutor2">Nombre y Apellidos</label>
                                    </div>
                                    <div class="input-group floating-label-group mb-0 mt-20-mobile">
                                        <input type="tel" id="tlf_tutor2" name="tlf_tutor2" placeholder=" " style="background: white;">
                                        <label for="tlf_tutor2">Teléfono móvil</label>
                                    </div>
                                </div>
                            </div>

                            <div style="background: var(--bg-body); padding: 30px; border-radius: var(--radius-md); margin-bottom: 30px; border: 1px solid rgba(0,0,0,0.02);">
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 25px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 15px;">
                                    <span class="badge badge--orange" style="padding: 4px 10px;">3</span>
                                    <h3 style="font-family: var(--font-title); font-size: 20px; color: var(--color-navy); margin: 0;">Detalles de la Inscripción</h3>
                                </div>
                                
                                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0 20px;">
                                    <div class="input-group floating-label-group">
                                        <select id="horas_semanales" name="horas_semanales" required style="background: white;">
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
                                        <select id="forma_pago" name="forma_pago" required style="background: white;">
                                            <option value="" disabled selected hidden></option>
                                            <option value="transferencia">Transferencia Bancaria</option>
                                            <option value="efectivo">Pago en Efectivo</option>
                                        </select>
                                        <label for="forma_pago">Forma de pago *</label>
                                        <div class="select-arrow" aria-hidden="true">▼</div>
                                    </div>
                                </div>

                                <div class="input-group floating-label-group">
                                    <input type="text" id="horario_preferencia" name="horario_preferencia" placeholder=" " required style="background: white;">
                                    <label for="horario_preferencia">Horario y días de preferencia *</label>
                                </div>

                                <div class="input-group floating-label-group mb-0">
                                    <input type="text" id="asignaturas" name="asignaturas" placeholder=" " required style="background: white;">
                                    <label for="asignaturas">Asignaturas a reforzar *</label>
                                </div>
                            </div>

                            <div style="background: var(--bg-body); padding: 30px; border-radius: var(--radius-md); margin-bottom: 40px; border: 1px solid rgba(0,0,0,0.02);">
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 25px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 15px;">
                                    <span class="badge badge--orange" style="padding: 4px 10px;">4</span>
                                    <h3 style="font-family: var(--font-title); font-size: 20px; color: var(--color-navy); margin: 0;">Autorizaciones</h3>
                                </div>
                                
                                <label style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 18px; cursor: pointer; font-size: 15px; color: var(--color-text);">
                                    <input type="checkbox" name="auth_whatsapp" value="si" style="margin-top: 4px; width: 20px; height: 20px; accent-color: var(--color-orange); cursor: pointer;">
                                    <span><strong>CONSIENTO</strong> el uso de WhatsApp como canal de comunicación para recibir avisos sobre eventos y actualizaciones de los servicios.</span>
                                </label>

                                <label style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 18px; cursor: pointer; font-size: 15px; color: var(--color-text);">
                                    <input type="checkbox" name="auth_imagen" value="si" style="margin-top: 4px; width: 20px; height: 20px; accent-color: var(--color-orange); cursor: pointer;">
                                    <span><strong>AUTORIZO</strong> la cesión de los derechos de imagen del alumno para fines informativos o promocionales en canales oficiales.</span>
                                </label>

                                <label style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 18px; cursor: pointer; font-size: 15px; color: var(--color-text);">
                                    <input type="checkbox" name="auth_salida" value="si" style="margin-top: 4px; width: 20px; height: 20px; accent-color: var(--color-orange); cursor: pointer;">
                                    <span><strong>AUTORIZO</strong> a mi hijo/a a abandonar las instalaciones por sus propios medios al finalizar las clases, eximiendo al centro de responsabilidad.</span>
                                </label>

                                <div style="margin-top: 30px; padding-top: 25px; border-top: 1px solid rgba(0,0,0,0.05);">
                                    <label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; font-size: 15px; color: var(--color-navy); font-weight: 700;">
                                        <input type="checkbox" name="acepta_reglamento" value="si" required style="margin-top: 4px; width: 22px; height: 22px; accent-color: var(--color-orange); cursor: pointer;">
                                        <span>He LEÍDO y ACEPTO en su totalidad los Términos de Contratación y el Reglamento Interno (incluyendo política de pagos y bajas). *</span>
                                    </label>
                                </div>
                            </div>

                            <div style="margin-bottom: 40px; text-align: center;">
                                <div style="display: flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 15px;">
                                    <span class="badge badge--orange" style="padding: 4px 10px;">5</span>
                                    <h3 style="font-family: var(--font-title); font-size: 22px; color: var(--color-navy); margin: 0; text-transform: uppercase; letter-spacing: 1px;">Firma Digital del Tutor/a *</h3>
                                </div>
                                <p style="font-size: 14px; color: #86868b; margin-bottom: 20px;">Firme dentro del cuadro usando su ratón o deslizando el dedo en su móvil.</p>
                                
                                <div style="background: white; border: 2px solid #d2d2d7; border-radius: var(--radius-sm); display: inline-block; position: relative; max-width: 100%; box-shadow: inset 0 2px 5px rgba(0,0,0,0.02);">
                                    <canvas id="firmaCanvas" width="400" height="200" style="max-width: 100%; cursor: crosshair; touch-action: none; border-radius: var(--radius-sm);"></canvas>
                                    <button type="button" id="limpiarFirma" style="position: absolute; top: 10px; right: 10px; background: rgba(0,0,0,0.05); border: none; padding: 6px 14px; border-radius: 100px; font-size: 13px; font-weight: 700; color: var(--color-navy); cursor: pointer; transition: 0.3s;">Borrar firma</button>
                                </div>
                                <input type="hidden" id="firmaImagen" name="firma_base64" required>
                                
                                <div style="display: flex; justify-content: center; align-items: center; gap: 8px; margin-top: 15px; color: var(--color-wa); font-weight: 700; font-size: 13px;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    Proceso cifrado y 100% seguro
                                </div>
                            </div>
    
                            <button type="submit" class="btn-primary btn-submit" style="font-size: 18px; width: 100%; margin-bottom: 30px; padding: 22px; box-shadow: 0 10px 30px rgba(237, 125, 49, 0.3);">
                                Confirmar Matrícula y Asegurar Plaza
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left:8px;" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </button>

                            <div style="background-color: var(--bg-body); padding: 25px; border-radius: var(--radius-sm); border: 1px solid rgba(0,0,0,0.03); text-align: left;">
                                <h4 style="font-family: var(--font-title); font-size: 11px; font-weight: 900; text-transform: uppercase; letter-spacing: 1px; color: var(--color-navy); margin-bottom: 10px;">
                                    Información Básica sobre Protección de Datos (RGPD)
                                </h4>
                                <div style="font-size: 11px; line-height: 1.6; color: #86868b;">
                                    <p style="margin-bottom: 8px;"><strong>Responsable:</strong> Ainhoa Moreno Garrido (Centro Futura). NIF: 70427872D.</p>
                                    <p style="margin-bottom: 8px;"><strong>Finalidad:</strong> Gestión de la solicitud de plaza, matriculación y relación académica/administrativa. Emisión de comunicaciones operativas.</p>
                                    <p style="margin-bottom: 8px;"><strong>Legitimación y Destinatarios:</strong> Ejecución de un contrato formativo. No se cederán datos a terceros salvo obligación legal expresa.</p>
                                    <p><strong>Derechos:</strong> Puede ejercer sus derechos de acceso, rectificación, supresión y portabilidad enviando un correo a <a href="mailto:hola@centrofutura.es" style="color: var(--color-orange); text-decoration: none;">hola@centrofutura.es</a>.</p>
                                </div>
                            </div>
                            
                        </form>
                    </div>

                </section>
            </div>

        </div> 
    </main>

    <style>
        @media (max-width: 600px) {
            .mt-20-mobile { margin-top: 20px !important; }
        }
    </style>

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
                    canvas.style.boxShadow = "0 0 0 3px var(--color-orange)";
                    setTimeout(() => canvas.style.boxShadow = "inset 0 2px 5px rgba(0,0,0,0.02)", 2000);
                }
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>