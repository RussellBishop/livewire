<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201636);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 spacing contained pad-verticals-6">
        <h1>
            <?= live($page->services_heading, 'words|2')?>
        </h1>
    
    <p>
        <?= live($page->introduction, 'sentences|1')?>
    </p>
</div>

    <div class="contained spacing pad-verticals-4">

    <p>
        <?= live($page->service_introduction, 'sentences|2')?>
    </p>
    <p>
        <?= live($page->process_description, 'sentences|2')?>
    </p>
    <p>
        <?= live($page->client_testimonial, 'sentences|2')?>
    </p>
    
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
