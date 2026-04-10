<footer class="footer-island reveal mt-80">
        <div class="footer-grid">
            <div class="footer-col brand-col">
                <span class="footer-logo">Centro Futura</span>
                <p class="footer-desc">Academia líder en apoyo escolar y gabinete psicopedagógico (NEE) en Rivas Vaciamadrid. Restauramos la motivación y garantizamos el progreso académico de tus hijos.</p>
                <div class="social-links">
                    <a href="#" aria-label="Visitar nuestro perfil de Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <a href="#" aria-label="Visitar nuestra página de Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Contacto</h3>
                <ul class="footer-links">
                    <li><span style="display:inline-block; width:20px;" aria-hidden="true">📍</span> Zona Rivas Futura / Centro</li>
                    <li><span style="display:inline-block; width:20px;" aria-hidden="true">📞</span> <a href="tel:+34676894284">676 894 284</a></li>
                    <li><span style="display:inline-block; width:20px;" aria-hidden="true">✉️</span> <a href="mailto:hola@centrofutura.es">hola@centrofutura.es</a></li>
                    <li><span style="display:inline-block; width:20px;" aria-hidden="true">🕒</span> L-V: 16:00 a 21:00</li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Navegación</h3>
                <ul class="footer-links">
                    <li><a href="index.php#metodologia">Método Futura</a></li>
                    <li><a href="index.php#etapas">Etapas Educativas</a></li>
                    <li><a href="index.php#gabinete-nee">Gabinete Especializado NEE</a></li>
                    <li><a href="index.php#faq">Preguntas Frecuentes</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Legal y Privacidad</h3>
                <ul class="footer-links">
                    <li><a href="aviso-legal.php">Aviso Legal</a></li>
                    <li><a href="condiciones-generales.php">Términos y Condiciones</a></li>
                    <li><a href="politica-de-privacidad.php">Política de Privacidad</a></li>
                    <li><a href="politica-de-cookies.php">Política de Cookies</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> Ainhoa Moreno (Academia Centro Futura) | NIF: 70427872D | Av. Pablo Iglesias 89, Rivas-Vaciamadrid, España | Todos los derechos reservados.</p>
        </div>
    </footer>

    <div class="mobile-sticky-cta">
        <a href="index.php#contacto" class="btn-primary" style="width: 100%; border-radius: 100px; padding: 16px; box-shadow: none;">¡Solicitar plaza!</a>
    </div>

    <a href="https://wa.me/34676894284" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Abrir chat de WhatsApp para resolver dudas">
        <svg viewBox="0 0 32 32" width="35" height="35" fill="white" aria-hidden="true"><path d="M16 2a13 13 0 0 0-11 20l-2 6 6-2a13 13 0 1 0 7-24zm0 24a11 11 0 0 1-5-1l-3 1 1-3a11 11 0 1 1 7 3zm6-7l-2-1c0 0-1 0-1 0s0 0 0 0l-1 1c0 0-1 0-1 0a6 6 0 0 1-3-3s0 0 0 0l1-1v-1l-1-2c0 0-1 0-1 0s-1 1-1 2c0 1 0 3 3 5s4 4 6 4 2-1 2-2c0 0 0-1 0-1z"/></svg>
    </a>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Barra de progreso de lectura
            const progressBar = document.getElementById("scrollProgress");
            window.addEventListener("scroll", () => {
                const scrollTop = document.documentElement.scrollTop;
                const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                if(progressBar) {
                    progressBar.style.width = (scrollTop / scrollHeight) * 100 + "%";
                    progressBar.setAttribute("aria-valuenow", Math.round((scrollTop / scrollHeight) * 100));
                }
            });

            // Animación de aparición (Reveal)
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            document.querySelectorAll(".reveal").forEach(r => revealObserver.observe(r));

            // Contadores animados
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = +el.dataset.target;
                        const suffix = el.dataset.suffix;
                        let count = 0;
                        const update = setInterval(() => {
                            count += target / 40;
                            if (count >= target) { 
                                el.innerText = target + suffix; 
                                clearInterval(update); 
                            } else { 
                                el.innerText = Math.ceil(count) + suffix; 
                            }
                        }, 30);
                        observer.unobserve(el); 
                    }
                });
            }, { threshold: 0.5 });
            document.querySelectorAll(".counter-number").forEach(c => counterObserver.observe(c));
        });
    </script>
    <button id="reopenCookiesBtn" class="cookie-reopen-btn" aria-label="Configurar Cookies" style="display: none;">⚙️</button>

    <div id="cookieBanner" class="cookie-banner-wrapper" role="dialog" aria-labelledby="cookieTitle">
        <p class="cookie-text" id="cookieTitle">
            <strong>Respetamos tu privacidad.</strong> En Centro Futura utilizamos cookies propias (necesarias para la web) y de terceros (para analítica y medición). Puedes aceptar todas, rechazarlas o configurarlas a tu medida. Más info en nuestra <a href="politica-de-cookies.php" class="link-orange">Política de Cookies</a>.
        </p>
        <div class="cookie-actions">
            <button id="btnConfigCookies" class="btn-cookie-link">Configurar</button>
            <button id="btnRejectCookies" class="btn-cookie-ghost">Rechazar no esenciales</button>
            <button id="btnAcceptCookies" class="btn-cookie-primary">Aceptar todas</button>
        </div>
    </div>

    <div id="cookieModal" class="cookie-modal-overlay" role="dialog" aria-modal="true">
        <div class="cookie-modal">
            <div class="cookie-modal-header">
                <h3>Panel de Preferencias</h3>
                <button id="closeCookieModal" class="cookie-modal-close" aria-label="Cerrar panel">×</button>
            </div>
            <div class="cookie-modal-body">
                <div class="cookie-switch-group">
                    <div class="cookie-switch-info">
                        <h4>Técnicas y Estrictamente Necesarias</h4>
                        <p>Imprescindibles para que la web funcione correctamente (seguridad, sesión).</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked disabled>
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="cookie-switch-group">
                    <div class="cookie-switch-info">
                        <h4>Rendimiento y Analítica</h4>
                        <p>Nos permiten medir de forma anónima las visitas para mejorar la web (Google Analytics).</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" id="toggleAnalytics">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="cookie-modal-footer">
                <button id="btnSaveCookiePreferences" class="btn-cookie-primary">Guardar preferencias</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const banner = document.getElementById('cookieBanner');
            const modal = document.getElementById('cookieModal');
            const reopenBtn = document.getElementById('reopenCookiesBtn');
            const toggleAnalytics = document.getElementById('toggleAnalytics');
            
            // Constante del nombre de nuestra cookie de consentimiento
            const CONSENT_KEY = 'futura-consent';

            // Función principal para cargar scripts condicionales (Ej: Google Analytics)
            function loadThirdPartyScripts() {
                const consent = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if (consent && consent.analytics) {
                    console.log("Cookies analíticas aceptadas: Cargando Google Analytics...");
                    // AQUI DEBES PEGAR EL SCRIPT DE GOOGLE ANALYTICS
                    // Ejemplo:
                    // let script = document.createElement('script');
                    // script.src = "https://www.googletagmanager.com/gtag/js?id=TU-ID-DE-GOOGLE";
                    // document.head.appendChild(script);
                } else {
                    console.log("Cookies analíticas rechazadas: Bloqueando scripts de terceros.");
                }
            }

            // Ocultar banner y mostrar botón flotante
            function hideBannerShowBtn() {
                banner.classList.remove('show');
                setTimeout(() => { reopenBtn.style.display = 'flex'; }, 600);
            }

            // Guardar preferencias en LocalStorage (Válido legalmente en lugar de document.cookie para el estado)
            function saveConsent(analyticsVal) {
                const consentData = {
                    technical: true, // Siempre true
                    analytics: analyticsVal,
                    timestamp: new Date().getTime()
                };
                localStorage.setItem(CONSENT_KEY, JSON.stringify(consentData));
                hideBannerShowBtn();
                modal.classList.remove('show');
                loadThirdPartyScripts();
            }

            // COMPROBACIÓN INICIAL AL CARGAR LA PÁGINA
            if (!localStorage.getItem(CONSENT_KEY)) {
                // Si no hay consentimiento, mostrar banner después de 1 segundo (evita parpadeos)
                setTimeout(() => { banner.classList.add('show'); }, 1000);
            } else {
                // Si ya decidió, mostrar el botón de engranaje y ejecutar scripts si procede
                reopenBtn.style.display = 'flex';
                loadThirdPartyScripts();
            }

            // EVENTOS DE LOS BOTONES DEL BANNER
            document.getElementById('btnAcceptCookies').addEventListener('click', () => { saveConsent(true); });
            document.getElementById('btnRejectCookies').addEventListener('click', () => { saveConsent(false); });
            
            document.getElementById('btnConfigCookies').addEventListener('click', () => {
                // Cargar estado previo en los toggles si existe
                const saved = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if(saved) { toggleAnalytics.checked = saved.analytics; }
                modal.classList.add('show');
            });

            // EVENTOS DEL MODAL
            document.getElementById('closeCookieModal').addEventListener('click', () => { modal.classList.remove('show'); });
            document.getElementById('btnSaveCookiePreferences').addEventListener('click', () => {
                saveConsent(toggleAnalytics.checked);
            });

            // EVENTO REABRIR (El engranaje flotante, y la función global para el enlace en tu Política de Cookies)
            reopenBtn.addEventListener('click', () => {
                const saved = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if(saved) { toggleAnalytics.checked = saved.analytics; }
                modal.classList.add('show');
            });

            // Exponer función para que el enlace del texto de "Política de cookies" pueda abrir el modal
            window.openCookieBanner = function() {
                const saved = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if(saved) { toggleAnalytics.checked = saved.analytics; }
                modal.classList.add('show');
            };
        });
    </script>
</body>
</html>