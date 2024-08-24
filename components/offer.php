<?php
if ($_SERVER['REQUEST_URI'] === '/baixadawebstudio/' || $_SERVER['REQUEST_URI'] === '/') {
    include 'helpers/get-offer-data.php';
} else {
    include '../helpers/get-offer-data.php';
}
$offerData = getOfferData();
if ($offerData):
?>
<section class="offer">
    <div class="waves wave-1a"></div>
    <div class="container">
        <div class="heading-title scroll-effect" id="o-que-fazemos">
            <h3><?php echo $offerData['title']; ?></h3>
        </div>
        <div class="packages">
            <div class="content scroll-effect">
                <img
                    src="<?php echo $root ?>/library/images/<?php echo $offerData['image']; ?>"
                    alt="<?php echo $offerData['title']; ?>- Baixada web studio"
                    class="image-content ease-in-out" />
            </div>
            <div class="package scroll-effect swiper mySwiper">
                <div class="swiper-button-next"></div>
                <div class="options swiper-wrapper">
                <?php if($offerData['lists']): 
                    foreach($offerData['lists'] as $offerData):  
                ?>                
                    <article class="option swiper-slide">
                        <img
                            src="<?php echo $root ?>/library/icons/check.svg"
                            alt="O que oferecemos" />
                        <div class="text">
                            <h2><?php echo $offerData['title']; ?></h2>
                            <p><?php echo $offerData['description']; ?></p>
                            <a
                                target="_blank"
                                href="https://api.whatsapp.com/send?phone=5513988264181&text=Olá, achei seu contato através do site da Baixada Web Studio. Gostaria de mais informações sobre desenvolvimento de sites para marcenaria"
                                class="button button-second">
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