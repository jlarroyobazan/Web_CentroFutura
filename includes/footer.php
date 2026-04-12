<?php
// Fallback por si la variable base_url no llegó correctamente
if (!isset($base_url)) {
    $base_url = '/'; 
}
?>
    <footer class="footer-island reveal mt-80">
        <div class="footer-grid">
            <div class="footer-col brand-col">
                <a href="<?php echo $base_url; ?>index.php" style="text-decoration: none; display: flex; align-items: center; font-family: var(--font-title, 'Red Hat Display', sans-serif); font-size: 24px; letter-spacing: -0.02em; margin-bottom: 15px;">
                    <span style="color: #FFFFFF; font-weight: 300;">Centro</span>
                    <span style="color: #ED7D31; font-weight: 800;">Futura</span>
                </a>
                <p class="footer-desc">Academia líder en apoyo escolar y gabinete psicopedagógico (NEE) en Rivas Vaciamadrid. Restauramos la motivación y garantizamos el progreso académico de tus hijos.</p>
                <div class="social-links">
                    <a href="https://www.instagram.com/centrofuturarivas/" target="_blank" rel="noopener noreferrer" aria-label="Visitar nuestro perfil de Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <a href="https://www.facebook.com/CentroFuturaRivas/" target="_blank" rel="noopener noreferrer" aria-label="Visitar nuestra página de Facebook">
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
                    <li><a href="<?php echo $base_url; ?>index.php#metodologia">Método Futura</a></li>
                    <li><a href="<?php echo $base_url; ?>index.php#etapas">Etapas Educativas</a></li>
                    <li><a href="<?php echo $base_url; ?>index.php#gabinete-nee">Gabinete Especializado NEE</a></li>
                    <li><a href="<?php echo $base_url; ?>index.php#faq">Preguntas Frecuentes</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Legal y Privacidad</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_url; ?>aviso-legal.php">Aviso Legal</a></li>
                    <li><a href="<?php echo $base_url; ?>condiciones-generales.php">Términos y Condiciones</a></li>
                    <li><a href="<?php echo $base_url; ?>politica-de-privacidad.php">Política de Privacidad</a></li>
                    <li><a href="<?php echo $base_url; ?>politica-de-cookies.php">Política de Cookies</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> Ainhoa Moreno (Academia Centro Futura) | NIF: 70427872D | Av. Pablo Iglesias 89, Rivas-Vaciamadrid, España | Todos los derechos reservados.</p>
        </div>
    </footer>

    <div class="mobile-sticky-cta">
        <a href="<?php echo $base_url; ?>inscripcion-curso-escolar.php" class="btn-primary" style="width: 100%; border-radius: 100px; padding: 16px; box-shadow: none;">¡Solicitar plaza!</a>
    </div>

    <a href="https://wa.me/34676894284" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat con Centro Futura" style="background: transparent; box-shadow: none; padding: 0;">
        <img src="<?php echo $base_url; ?>img/whatsapp.svg" alt="Contactar por WhatsApp" width="60" height="60" style="filter: drop-shadow(0px 8px 16px rgba(0, 0, 0, 0.15)); display: block; transition: transform 0.3s ease;">
    </a>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
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
            <strong>Respetamos tu privacidad.</strong> En Centro Futura utilizamos cookies propias (necesarias para la web) y de terceros (para analítica y medición). Puedes aceptar todas, rechazarlas o configurarlas a tu medida. Más info en nuestra <a href="<?php echo $base_url; ?>politica-de-cookies.php" class="link-orange">Política de Cookies</a>.
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
                        <input type="checkbox" checked disabled aria-label="Cookies necesarias, siempre activas">
                        <span class="slider"></span>
                    </label>
                </div>
                <div class="cookie-switch-group">
                    <div class="cookie-switch-info">
                        <h4>Rendimiento y Analítica</h4>
                        <p>Nos permiten medir de forma anónima las visitas para mejorar la web (Google Analytics).</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" id="toggleAnalytics" aria-label="Activar cookies de análisis">
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
            
            const CONSENT_KEY = 'futura-consent';

            function loadThirdPartyScripts() {
                const consent = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if (consent && consent.analytics) {
                    console.log("Cookies analíticas aceptadas.");
                }
            }

            function hideBannerShowBtn() {
                banner.classList.remove('show');
                setTimeout(() => { reopenBtn.style.display = 'flex'; }, 600);
            }

            function saveConsent(analyticsVal) {
                const consentData = {
                    technical: true,
                    analytics: analyticsVal,
                    timestamp: new Date().getTime()
                };
                localStorage.setItem(CONSENT_KEY, JSON.stringify(consentData));
                hideBannerShowBtn();
                modal.classList.remove('show');
                loadThirdPartyScripts();
            }

            if (!localStorage.getItem(CONSENT_KEY)) {
                setTimeout(() => { banner.classList.add('show'); }, 1000);
            } else {
                reopenBtn.style.display = 'flex';
                loadThirdPartyScripts();
            }

            document.getElementById('btnAcceptCookies').addEventListener('click', () => { saveConsent(true); });
            document.getElementById('btnRejectCookies').addEventListener('click', () => { saveConsent(false); });
            
            document.getElementById('btnConfigCookies').addEventListener('click', () => {
                const saved = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if(saved) { toggleAnalytics.checked = saved.analytics; }
                modal.classList.add('show');
            });

            document.getElementById('closeCookieModal').addEventListener('click', () => { modal.classList.remove('show'); });
            document.getElementById('btnSaveCookiePreferences').addEventListener('click', () => {
                saveConsent(toggleAnalytics.checked);
            });

            reopenBtn.addEventListener('click', () => {
                const saved = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if(saved) { toggleAnalytics.checked = saved.analytics; }
                modal.classList.add('show');
            });

            window.openCookieBanner = function() {
                const saved = JSON.parse(localStorage.getItem(CONSENT_KEY));
                if(saved) { toggleAnalytics.checked = saved.analytics; }
                modal.classList.add('show');
            };
        });
    </script>
</body>
</html>