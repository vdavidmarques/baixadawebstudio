<?php
if (
    $_SERVER['REQUEST_URI'] === '/baixadawebstudio/' ||
    $_SERVER['REQUEST_URI'] === '/' ||
    $_SERVER['REQUEST_URI'] === '/?i=1' ||
    $_SERVER['REQUEST_URI'] === '/?i=2'
) {
    require_once 'helpers/get-banner-data.php';
} else {
    require_once '../helpers/get-banner-data.php';
}

$bannerData = getBannerData();
if ($bannerData):
?>
    <section class="main-banner banners py-20" itemscope itemtype="https://schema.org/WebPage">
        <meta itemprop="name" content="<?php echo $bannerData['cta']; ?>">
        <meta itemprop="description" content="<?php echo $bannerData['title']; ?>">
        <div class="swiper-container relative">
            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
            <img
                src="<?php echo $root ?>/library/images/<?php echo $bannerData['image']; ?>"
                alt="Baixada Web Studio"
                itemprop="image"
                class="show-desktop"
                itemprop="primaryImageOfPage"
                />

            <img
                src="<?php echo $root ?>/library/images/<?php echo $bannerData['image']; ?>"
                alt=""
                itemprop="image"
                class="show-mobile" />
            <div
                class="default-heading-title flex flex-col h-full scroll-effect swiper-content" itemprop="mainEntity" itemscope itemtype="https://schema.org/Service">
                <h1 itemprop="name"><?php echo $bannerData['title']; ?></h1>
                <?php 
                    if($bannerData['subtitle']):
                ?>
                    <p itemprop="description">
                        <?php echo $bannerData['subtitle']; ?>
                    </p>
                <?php endif; ?>
                <a
                    target="_blank"
                    href="https://api.whatsapp.com/send?phone=5513988264181&text=Olá, achei seu contato através do site da Baixada Web Studio. Gostaria de mais informações sobre desenvolvimento de web sites"
                    class="button button-default" 
                    itemprop="url"
                    >
                    <?php echo $bannerData['cta']; ?>
                </a>
            </div>
            <div class="waves wave-1"></div>
            <div class="waves wave-2">
                <svg
                    class="wave"
                    preserveAspectRatio="none"
                    width="1440"
                    height="241"
                    viewBox="0 0 1440 241"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1435.96 57.3005C1402.51 40.0612 1367.28 22.2319 1329.45 17.4889C1289.38 12.4647 1254.3 30.47 1220.01 49.1158C1147.8 88.3864 1003.8 164.478 924.432 107.759C905.178 93.9992 893.339 72.2477 876.377 55.7411C753.604 -63.7253 602.593 41.0161 478.926 93.4452C430.558 113.95 376.033 128.672 323.331 120.545C227.187 105.722 140.667 26.0675 0.793182 29.8209V241H1441.34V60.3558C1439.56 59.2364 1437.73 58.215 1435.96 57.3005Z"
                        fill="#175c91" />
                </svg>
            </div>
            <div class="waves wave-3">
                <svg
                    class="wave"
                    preserveAspectRatio="none"
                    width="1440"
                    height="333"
                    viewBox="0 0 1440 333"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1445.34 173.026C1371.02 173.979 1287 168.145 1214.86 155.591C1180.83 149.672 1146.75 142.157 1115.4 127.656C1074.94 108.932 1039.61 78.8388 996.718 66.6729C960.844 56.5 921.257 60.0607 887.773 76.4713C855.941 92.0749 830.39 118.279 799.116 134.976C751.568 160.362 695.318 161.699 641.427 162.455C567.377 163.495 488.822 163.365 425.639 124.725C363.62 86.7961 320.118 13.9325 248.334 2.45363C202.605 -4.85861 157.475 15.4728 115.615 35.2878C77.3435 53.405 39.0707 71.5222 0.799467 89.6394V333H-3.34332H1445.34V173.026H1445.34Z"
                        fill="#598ec7" />
                </svg>
            </div>
            <div class="waves wave-4">
                <svg
                    class="wave"
                    preserveAspectRatio="none"
                    width="1440"
                    height="329"
                    viewBox="0 0 1440 329"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1278.06 20.5445C1220.81 16.2444 1178.64 50.3869 1135.11 83.5687C1081.65 124.322 1020.9 149.632 953.577 127.99C893.612 108.713 847.984 60.0949 792.106 31.0141C735.994 1.8107 669.398 -6.68563 607.754 7.49848C573.142 15.4611 540.525 30.1688 507.336 42.8167C346.872 103.969 168.426 135.411 0.793152 98.2V329H1441.34V65.4307C1366.37 54.925 1334.7 24.8013 1278.06 20.5445Z"
                        fill="#daf3ff" />
                </svg>
            </div>
        </div>
    </section>
<?php endif; ?>