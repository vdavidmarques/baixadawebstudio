<?php
    $rootDir = "";
    if(strpos($_SERVER['HTTP_HOST'], 'localhost')===FALSE)
    {
    //On Production
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
    } else {
        //On Dev server
        $rootDir = $_SERVER['DOCUMENT_ROOT'] . '/baixadawebstudio';
        
        $find = 'G:/xampp/htdocs/';
        $replacement = '';
        $root = '/' . str_replace($find, $replacement, $rootDir);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex, nofollow" />

    <style id="safe-svg-svg-icon-style-inline-css" type="text/css">
        .safe-svg-cover {
            text-align: center;
        }

        .safe-svg-cover .safe-svg-inside {
            display: inline-block;
            max-width: 100%;
        }

        .safe-svg-cover svg {
            height: 100%;
            max-height: 100%;
            max-width: 100%;
            width: 100%;
        }
    </style>

    <link rel="stylesheet" href="<?php echo $root ?>/library/css/styles.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <meta name="generator" content="WordPress 6.5.3" />
    <title itemprop="name">Baixada Web Studio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
        rel="stylesheet" />

    <link
        rel="apple-touch-icon"
        sizes="57x57"
        href="<?php echo $root ?>/library/icons/apple-icon-57x57.png" />
    <link
        rel="apple-touch-icon"
        sizes="60x60"
        href="<?php echo $root ?>/library/icons/apple-icon-60x60.png" />
    <link
        rel="apple-touch-icon"
        sizes="72x72"
        href="<?php echo $root ?>/library/icons/apple-icon-72x72.png" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="<?php echo $root ?>/library/icons/apple-icon-76x76.png" />
    <link
        rel="apple-touch-icon"
        sizes="114x114"
        href="<?php echo $root ?>/library/icons/apple-icon-114x114.png" />
    <link
        rel="apple-touch-icon"
        sizes="120x120"
        href="<?php echo $root ?>/library/icons/apple-icon-120x120.png" />
    <link
        rel="apple-touch-icon"
        sizes="144x144"
        href="<?php echo $root ?>/library/icons/apple-icon-144x144.png" />
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="<?php echo $root ?>/library/icons/apple-icon-152x152.png" />
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="<?php echo $root ?>/library/icons/apple-icon-180x180.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="192x192"
        href="<?php echo $root ?>/library/icons/android-icon-192x192.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="<?php echo $root ?>/library/icons/favicon-32x32.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="96x96"
        href="<?php echo $root ?>/library/icons/favicon-96x96.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="<?php echo $root ?>/library/icons/favicon-16x16.png" />
</head>

<body class="home blog">
    <header>
        <div class="header-menu-itens container">
            <div class="logotype">
                <a href="/baixada-web-studio" class="logo"> Baixada Web Studio </a>
            </div>
            <div class="open-menu-mobile">
                <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
            </div>
            <div class="menu-items scroll-effect">
                <nav id="custom-header-menu">
                    <div class="menu-header-container">
                        <ul id="custom-header-menu" class="main-menu">
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-143">
                                <a href="#quem-somos">Quem Somos</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144">
                                <a href="#beneficios">Benefícios</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-145">
                                <a href="#o-que-fazemos">O que fazemos?</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-145">
                                <a href="#nossos-clientes">Nossos Clientes</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147">
                                <a
                                    href="https://api.whatsapp.com/send?phone=5513988264181&text=Ol%C3%A1,%20achei%20seu%20contato%20atrav%C3%A9s%20do%20site%20da%20Baixada%20Web%20Studio.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20desenvolvimento%20de%20web%20sites"
                                    target="_blank">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
            </div>
        </div>
    </header>
    <main id="content" role="main">
      <div class="home">
        <div class="page home">