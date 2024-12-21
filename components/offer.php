<?php
if (
    $_SERVER['REQUEST_URI'] === '/baixadawebstudio/' ||
    $_SERVER['REQUEST_URI'] === '/' ||
    $_SERVER['REQUEST_URI'] === '/?i=1' ||
    $_SERVER['REQUEST_URI'] === '/?i=2'
) {
    include 'helpers/get-offer-data.php';
} else {
    include '../helpers/get-offer-data.php';
}
$offerData = getOfferData();
if ($offerData):
?>
    <section class="offer" itemscope itemtype="https://schema.org/Service">
        <div class="waves wave-1a"></div>
        <div class="container">
            <div class="heading-title scroll-effect" id="o-que-fazemos">
                <h2 itemprop="name"><?php echo $offerData['title']; ?></h2>
                <?php if(isset($offerData['description']) && !empty($offerData['description'])): ?>
                    <meta itemprop="description" content="<?php echo $offerData['description']; ?>">
                <?php endif; ?>
            </div>
            <div class="packages">
                <div class="content scroll-effect"  itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                    <picture>
                        <source srcset="<?php echo $root ?>/library/images/<?php echo  $offerData['image-webp']; ?>.webp" type="image/webp">
                            <img
                                src="<?php echo $root ?>/library/images/<?php echo $offerData['image']; ?>"
                                alt="<?php echo $offerData['title']; ?>- Baixada web studio"
                                class="image-content ease-in-out" itemprop="contentUrl"/>
                                <meta itemprop="url" content="<?php echo $root ?>/library/images/<?php echo $offerData['image']; ?>">
                    </picture>
                </div>
                <div class="package scroll-effect swiper mySwiper" itemscope itemtype="https://schema.org/OfferCatalog">
                    <div class="swiper-button-next"></div>
                    <div class="options swiper-wrapper">
                        <?php if ($offerData['lists']):
                            foreach ($offerData['lists'] as $offerData):
                        ?>
                                <article class="option swiper-slide" itemscope itemtype="https://schema.org/Offer">
                                    <img
                                        src="<?php echo $root ?>/library/icons/check.svg"
                                        alt="O que oferecemos" />
                                    <div class="text">
                                        <h3 itemprop="name"><?php echo $offerData['title']; ?></h3>
                                        <p itemprop="description"><?php echo $offerData['description']; ?></p>
                                        <a
                                            target="_blank"
                                            href="https://api.whatsapp.com/send?phone=5513988264181&text=Olá, achei seu contato através do site da Baixada Web Studio. Gostaria de mais informações sobre desenvolvimento de sites"
                                            class="button button-second"
                                            aria-label="<?php echo $offerData['button-label']; ?>">
                                            <?php echo $offerData['button-label']; ?>
                                        </a>
                                    </div>
                                </article>
                            <?php endforeach;  ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="waves wave-1b"></div>
    </section>
<?php endif; ?>