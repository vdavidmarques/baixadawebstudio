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

    <?php $url_canonical = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
    <link rel="canonical" href="<?php echo $url_canonical; ?>">

    <meta name="generator" content="WordPress 6.5.3" />
    <?php
        if ($_SERVER['REQUEST_URI'] === '/') {
            $text = 'seu negócio';
            $desc = 'Especializados em desenvolvimento de sites profissionais para diversos setores. Mostre seus melhores projetos e inspire confiança nos visitantes. Fotos de alta qualidade';
        }elseif($_SERVER['REQUEST_URI'] === '/sites-para-marcenarias/'){
            $text = 'Marcenarias';
            $desc = 'Desenvolvemos sites personalizados para marcenarias, destacando seus serviços e portfólio. Mostre seus melhores projetos e inspire confiança nos visitantes.';
        }
    ?>
    <title itemprop="name">Baixada Web Studio - Desenvolvimento de Sites para <?php echo $text; ?> </title>

    <meta name="description" content="<?php echo $desc; ?>">
    <meta name="keywords" content="desenvolvimento web, web sites, Site Institucional, Landing Pages, desenvolvimento web marcenarias, sites para marcenarias">
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

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700;900&display=swap"
        rel="stylesheet" />
    <?php include 'utils/favicon.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Created to preloading image and make LCP better(page speed) -->
    <link rel="preload" as="image" href="https://baixada-web-studio.great-site.net//library/images/o-que-oferecemos-baixada-web-studio.webp" />

</head>

<body class="home blog">
    <header>
        <div class="header-menu-itens container">
            <div class="logotype">
                <a href="/" class="logo" aria-label="Baixada Web Studio - Desenvolvimento de sites profissionais para diversos setores">
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
                                <a aria-label="Quem Somos" href="#quem-somos">Quem Somos</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144">
                                <a aria-label="Benefícios" href="#beneficios">Benefícios</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-145">
                                <a aria-label="O que fazemos?" href="#o-que-fazemos">O que fazemos?</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-145">
                                <a aria-label="Nossos Clientes" href="#nossos-clientes">Nossos Clientes</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147">
                                <a
                                    href="https://api.whatsapp.com/send?phone=5513988264181&text=Ol%C3%A1,%20achei%20seu%20contato%20atrav%C3%A9s%20do%20site%20da%20Baixada%20Web%20Studio.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20desenvolvimento%20de%20web%20sites"
                                    target="_blank" aria-label="Contato">Contato</a>
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