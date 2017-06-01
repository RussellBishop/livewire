<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201637);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 contained pad-verticals-6 text-align-center">
        <h1>
            <?= live($page->services_heading, 'words|2')?>
        </h1>
    </div>


    <div class="contained spacing pad-verticals-4 pad-sides-6 bg-2">
        <div class="spacing pad-verticals-2 pad-sides-6">
            <blockquote>
                <?= live($page->introduction, 'sentences|2')?>
            </blockquote>
        </div>
        <div class="pad-sides-6">
            <h2>
                <?= live($page->pullout, 'sentences|2')?>
            </h2>
        </div>
        <div class="spacing pad-verticals-2 pad-sides-6">
        <p>
            <?= live($page->copy, 'sentences|2')?>
        </p>
        </div>
        <div class="spacing pad-verticals-4 pad-sides-6 bg-1">
            <h3>
                <?= live($page->process_description_title, 'sentences|2')?>
            </h3>
            <p>
                <?= live($page->process_description, 'sentences|2')?>
            </p>
        </div>
    
    </div>

<div class="spacing contained pad-verticals-2 bg-5">

    <h2><?= live($page->contact_heading, 'words|2')?></h2>

<div class="spacing pad-verticals-2">

</div>

    <grid>
        <div class="bg-3 ratio-100"  small="6" medium-large="3" caption="Contact"></div>
        <div small="6" medium-large="3"><?= live($page->main_contact1, 'words|5')?></div>
        <div class="bg-3 ratio-100"  small="6" medium-large="3" caption="Contact"></div>
        <div small="6" medium-large="3"><?= live($page->main_contact2, 'words|5')?></div>

    </grid>


</div>


    <?php include('../src/footer.php'); ?>
