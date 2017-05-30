<?php

    $title = 'Tabs';

    require '../src/src.php';

    // $page = new Page(4390635);

?>

<body class="bg-4 spacing">

<?php include('blocks/nav.php'); ?>

<div class="contained">

    <tabs>
        <button type="button" data-target="1" data-group="tabs" class="is--open"><?= live($page->tab_1, 'words|1|2')?></button>
        <button type="button" data-target="2" data-group="tabs"><?= live($page->tab_2, 'words|1|2')?></button>
        <button type="button" data-target="3" data-group="tabs"><?= live($page->tab_3, 'words|1|2')?></button>
        <button type="button" data-target="4" data-group="tabs"><?= live($page->tab_4, 'words|1|2')?></button>
    </tabs>

    <group class="border-light pad">
        <div data-group="mytabs" data-id="1" class="is--open">
            <?= live($page->tab_1_content, 'sentences|2|6')?>
        </div>

        <div data-group="mytabs" data-id="2" data-hide>
            <?= live($page->tab_2_content, 'sentences|2|6')?>
        </div>

        <div data-group="mytabs" data-id="3" data-hide>
            <?= live($page->tab_3_content, 'sentences|2|6')?>
        </div>

        <div data-group="mytabs" data-id="4" data-hide>
            <?= live($page->tab_4_content, 'sentences|2|6')?>
        </div>
    </group>

</div>

<?php include('../src/footer.php'); ?>
