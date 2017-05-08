<?php

    $title = 'Single Project';

    require '../src/src.php';

    $page = new Page(4201789);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <div class="bg-3 ratio-50 contained" caption="Image"></div>

    <h2 class="text-align-center pad-verticals-2">
        <?= live($page->project_name, 'words|3')?>
    </h2>
    <div class="contained spacing pad-verticals-2">
    <grid class="bg-4">
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">
            <div class="bg-1 pad-sides-1 text-small" small-medium-large="4"><?= live($page->sector, 'words|2')?></div>
            <p>Services provided:</p>
            <p><?= live($page->services_provided, 'sentences|4')?></p>
            <div>Completed: <?= live($page->completed, 'words|1')?></div>
            <div>Value: <?= live($page->value, 'words|1')?></div>
        </div> 
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="8">
            <p><?= live($page->description_of_project, 'sentences|6')?></p>
        </div> 
    </grid>
</div>
    

    <?php include('../src/footer.php'); ?>
