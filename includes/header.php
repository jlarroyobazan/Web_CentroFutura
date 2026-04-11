<?php
// 🛠️ RUTA BASE DINÁMICA: 
// Si trabajas en localhost dentro de una carpeta, pon el nombre aquí (Ej: '/mi-web/')
// Si está subida a internet o en la raíz, déjalo como '/'
if (!isset($base_url)) {
    $base_url = '/'; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="theme-color" content="#F5F5F7">
    <title><?php echo $pageTitle ?? 'Academia Centro Futura | Apoyo Escolar y NEE en Rivas Vaciamadrid'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'Especialistas en apoyo escolar, gabinete psicopedagógico (TDAH, Dislexia) y técnicas de estudio en Rivas Vaciamadrid.'; ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&family=Red+Hat+Display:wght@300;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo $base_url; ?>style.css">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["EducationalOrganization", "LocalBusiness"],
      "name": "Centro Futura Rivas",
      "url": "https://centrofutura.es",
      "logo": "https://centrofutura.es/img/logo.png",
      "description": "Academia de apoyo escolar y gabinete psicopedagógico especializado en NEE en Rivas Vaciamadrid.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Zona Centro / Rivas Futura",
        "addressLocality": "Rivas-Vaciamadrid",
        "addressRegion": "Madrid",
        "postalCode": "28521",
        "addressCountry": "ES"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "40.3422",
        "longitude": "-3.5255"
      },
      "telephone": "+34676894284",
      "openingHours": "Mo-Fr 16:00-21:00",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "192"
      }
    }
    </script>

    <style>
        .mobile-menu-btn { display: none; background: transparent; border: none; cursor: pointer; padding: 5px; }
        @media (max-width: 950px) {
            .mobile-menu-btn { display: block; }
            .main-nav.nav-open {
                display: flex !important;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(245, 245, 247, 0.98);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                padding: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                border-bottom: 1px solid rgba(0,0,0,0.05);
            }
            .header-inner { position: relative; }
        }
    </style>
</head>
<body>

    <div class="scroll-progress-bar" id="scrollProgress" role="progressbar" aria-label="Progreso de lectura" aria-valuemin="0" aria-valuemax="100"></div>

    <header class="site-header">
        <div class="header-inner">
            <div class="logo">
                <a href="<?php echo $base_url; ?>index.php" style="text-decoration: none; display: flex; align-items: center; font-family: var(--font-title, 'Red Hat Display', sans-serif); font-size: 24px; letter-spacing: -0.02em;">
                    <span style="color: var(--color-navy, #1e293b); font-weight: 300;">Centro</span>
                    <span style="color: #ED7D31; font-weight: 800;">Futura</span>
                </a>
            </div>
            
            <nav class="main-nav" aria-label="Navegación principal">
                <div class="nav-dropdown">
                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Conócenos <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                    <div class="dropdown-menu" role="menu">
                        <a href="<?php echo $base_url; ?>quienes-somos-academia-rivas.php" role="menuitem">Nosotros</a>
                        <a href="<?php echo $base_url; ?>metodologia-neuroeducacion.php" role="menuitem">Metodología</a>
                        <a href="<?php echo $base_url; ?>instalaciones-centro-futura.php" role="menuitem">Instalaciones</a>
                    </div>
                </div>
                <a href="<?php echo $base_url; ?>gabinete-psicopedagogico-rivas.php">Gabinete</a>
                <a href="<?php echo $base_url; ?>precios-apoyo-escolar-rivas.php">Precios</a>
                <a href="<?php echo $base_url; ?>blog-recursos-educativos.php">Blog</a>
                <a href="<?php echo $base_url; ?>contacto.php">Contacto</a>
            </nav>

            <a href="<?php echo $base_url; ?>inscripcion-curso-escolar.php" class="btn-primary btn--small" style="margin-left: 20px;">Reserva tu plaza</a>

            <button class="mobile-menu-btn" aria-label="Abrir menú móvil" aria-expanded="false">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-navy)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                const progressBar = document.getElementById('scrollProgress');
                if(progressBar) progressBar.style.width = scrolled + '%';
            });

            const mobileBtn = document.querySelector('.mobile-menu-btn');
            const mainNav = document.querySelector('.main-nav');
            
            if(mobileBtn && mainNav) {
                mobileBtn.addEventListener('click', () => {
                    const expanded = mobileBtn.getAttribute('aria-expanded') === 'true';
                    mobileBtn.setAttribute('aria-expanded', !expanded);
                    mainNav.classList.toggle('nav-open');
                });
            }
        });
    </script>