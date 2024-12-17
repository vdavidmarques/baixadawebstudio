<?php 
    require_once 'helpers/root-dir.php'; 
    session_start();

    if (isset($_SESSION['message'])):
?>
    <div class="alert <?php echo $_SESSION['message_type']; ?> opened">
        <div class="message">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']); 
                unset($_SESSION['message_type']);
            ?>
            <button class="close-message" onclick="closeMessage()"></button>
        </div>
    </div>
<?php endif; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Desenvolvimento de landing pages focadas em conversão, ideais para campanhas de marketing e captação de leads.">
    <meta name="keywords" content="desenvolvimento web, web sites, Site Institucional, Landing Pages">
    <meta name="author" content="Vinícius Marques">

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
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700;900&display=swap"
        rel="stylesheet" />
    <?php include 'utils/favicon.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="home blog">
    <header>
        <div class="header-menu-itens container">
            <div class="logotype">
                <a href="/" class="logo">
                    <img
                        src="<?php echo $root ?>/library/icons/baixada-web-studio-logo-2.png"
                        alt=""
                        itemprop="image"
                        class="image" />
                        <span class="title">BAIXADA<span>WEB STUDIO</span></span>
                </a>
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