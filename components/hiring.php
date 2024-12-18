<?php
if (
    $_SERVER['REQUEST_URI'] === '/baixadawebstudio/' ||
    $_SERVER['REQUEST_URI'] === '/' ||
    $_SERVER['REQUEST_URI'] === '/?i=1' ||
    $_SERVER['REQUEST_URI'] === '/?i=2'
) {
    require_once 'helpers/get-hiring-data.php';
} else {
    require_once '../helpers/get-hiring-data.php';
}
$hiringData = getHiringData();
if ($hiringData):
?>

    <section class="hiring container" itemscope itemtype="https://schema.org/ItemList">
        <div class="title scroll-effect" id="beneficios">
            <h2 itemprop="name"><?php echo $hiringData['title']; ?></h2>
            <?php if ($hiringData['subtitle']): ?>
                <h3><?php echo $hiringData['subtitle']; ?></h3>
            <?php endif; ?>
            <?php if ($hiringData['description']): ?>
                <p><?php echo $hiringData['description']; ?></p>
            <?php endif; ?>
        </div>
        <?php if ($hiringData['lists']): ?>
            <meta itemprop="numberOfItems" content="3"> 
            <div class="lists">
                <?php
                $count = 0;
                foreach ($hiringData['lists'] as $hiringData):
                    $count++;
                ?>
                    <div class="list scroll-effect list-<?php echo $count; ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <meta itemprop="position" content="<?php echo $count; ?>">
                        <div class="icon wave">
                            <img
                                src="<?php echo $root ?>/library/icons/<?php echo $hiringData['icon'] ?>"
                                alt="<?php echo $hiringData['title']; ?>" itemprop="image" />
                        </div>
                        <div class="content">
                            <h3 class="content-title" itemprop="name"><?php echo $hiringData['title']; ?></h3>
                            <p itemprop="description">
                                <?php echo $hiringData['description']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>