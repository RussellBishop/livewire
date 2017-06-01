<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201620);

?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 contained pad-verticals-6 text-align-center">
        <h1>
            <?= live($page->heading, 'sentences|1')?>
        </h1>
    </div>

    <div class="bg-1 spacing contained pad-verticals-3 pad-sides-3">
    
    <p>
        <?= live($page->introduction, 'sentences|2')?>
    </p>
</div>

    <div class="contained spacing pad-verticals-3">
        <div class="text-align-center pad-verticals-1">
            <h3>
                <?= live($page->services_header, 'sentences|1')?>
            </h3>
        </div>
        <grid>
                <div class="pad-sides-2 pad-verticals-2 bg-3 spacing" border="dark" small="12" medium="4" large="4"><a href="/templates/service1.php"><?= live($page->service_title1, 'words|2')?></a><p><?= live($page->service1, 'words|2')?></p></div>
                <div class="pad-sides-2 pad-verticals-2 bg-3 spacing" border="dark" small="12" medium="4" large="4"><a href="/templates/service2.php"><?= live($page->service_title2, 'words|2')?></a><p><?= live($page->service2, 'words|2')?></p></div>
                <div class="pad-sides-2 pad-verticals-2 bg-3 spacing" border="dark" small="12" medium="4" large="4"><a href="/templates/service3.php"><?= live($page->service_title3, 'words|2')?></a><p><?= live($page->service3, 'words|2')?></p></div>
        </grid>
    </div>




    <?php include('../src/footer.php'); ?>
