<?php
if (
    $_SERVER['REQUEST_URI'] === '/baixadawebstudio/' || 
    $_SERVER['REQUEST_URI'] === '/' ||
    $_SERVER['REQUEST_URI'] === '/?i=1' ||
    $_SERVER['REQUEST_URI'] === '/?i=2'
    ){
    include 'helpers/get-works-data.php';
} else {
    include '../helpers/get-works-data.php';
}
$worksData = getWorksData();
if ($worksData):
?>
    <section class="works scroll-effect">
        <div class="container">
            <div class="heading-title scroll-effect" id="nossos-clientes">
                <h2><?php echo $worksData['title']; ?></h2>
            </div>
            <?php if($worksData['lists']): ?>
                <div class="lists">
                    <?php 
                    foreach($worksData['lists'] as $worksData): 
                    ?>
                        <div class="list scroll-effect">
                            <div class="image">
                                <?php if($worksData['link'] ): ?>
                                    <a href="<?php echo $worksData['link'] ?>" target="_blank">
                                        <img src="<?php echo $root ?>/library/images/<?php echo $worksData['image'] ?>" alt="<?php echo $worksData['alt'] ?>" class="image ease-in-out">
                                    </a>
                                <?php else: ?>
                                    <img src="<?php echo $root ?>/library/images/<?php echo $worksData['image'] ?>" alt="<?php echo $worksData['alt'] ?>" class="image ease-in-out">
                                <?php endif; ?>
                            </div>
                            <?php if($worksData['text']): ?>
                                <p class="text">"<?php echo $worksData['text'] ?>"</p>
                            <?php endif;?>
                        </div>     
                    <?php endforeach;  ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
