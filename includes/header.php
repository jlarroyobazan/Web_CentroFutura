<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F5F5F7">
    <title><?php echo $pageTitle ?? 'Academia Centro Futura | Apoyo Escolar y NEE en Rivas Vaciamadrid'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'Especialistas en apoyo escolar, gabinete psicopedagógico (TDAH, Dislexia) y técnicas de estudio en Rivas Vaciamadrid.'; ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&family=Red+Hat+Display:wght@800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">

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
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Servicios Psicopedagógicos y Apoyo Escolar",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Gabinete Psicopedagógico TDAH y TEA"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Intervención en Dislexia y Dificultades del Aprendizaje"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Apoyo Escolar Grupos Reducidos (Primaria, ESO, Bachillerato)"
            }
          }
        ]
      }
    }
    </script>
</head>
<body>

    <div class="scroll-progress-bar" id="scrollProgress" role="progressbar" aria-label="Progreso de lectura" aria-valuemin="0" aria-valuemax="100"></div>

    <header class="site-header">
        <div class="header-inner">
            <div class="logo">
                <a href="index.php" style="text-decoration: none;">
                    <span class="text-orange" style="font-family: var(--font-title); font-weight: 900; font-size: 24px;">Centro Futura</span>
                </a>
            </div>
            <nav class="main-nav" aria-label="Navegación principal">
                <a href="index.php">Inicio</a>
                <div class="nav-dropdown">
                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">El centro <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                    <div class="dropdown-menu" role="menu">
                        <a href="nosotros.php" role="menuitem">Quiénes somos</a>
                        <a href="metodo.php" role="menuitem">Nuestro método</a>
                        <a href="espacio.php" role="menuitem">Nuestro espacio</a>
                    </div>
                </div>
                <a href="gabinete.php">Apoyo especializado</a>
                <a href="tarifas.php">Tarifas</a>
                <a href="blog.php">Blog educativo</a>
                <a href="contacto.php">Hablemos</a>
            </nav>
            <a href="solicitud.php" class="btn-primary btn--small" style="margin-left: 20px;">Solicitar plaza</a>
        </div>
    </header>