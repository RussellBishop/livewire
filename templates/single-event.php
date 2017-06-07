<?php

    $title = 'Single Event';

    require '../src/src.php';

    $page = new Page(4540675);

?>

<?php include('styles/navigation.styles.php'); ?>

<body class="bg-4">

<div class="bg-4">

    <?php $active = 'yourstudentlife'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

</div>

<div class="bg-0 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('http://lorempixel.com/1000/750/nightlife/');">
    </div>

    <h4><a href="/templates/news.php">&larr; back to Clubs and Societies</a></h4>

    <div class="spacing push-top-10">
        <h1><?= live($page->event_title, 'sentences|1')?></h1>
        <p><?= live($page->location, 'words|3')?></p>
        <p><?= live($page->date, 'words|3')?>, <?= live($page->time, 'words|3')?></p>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">

        <?= live($page->event_description, 'sentences|12')?>

        <hr />

        <h3>Who are the Salsa Society?</h3>

        <p><span data-forcefeed="sentences|2"></span></p>

        <button type="button">Visit the Salsa Society</button>

    </article>

    <aside large="4">
        <div class="bg-4 spacing pad-2 bg-5 border">
            <h3>Booking</h3>
            <?= live($page->booking, 'sentences|1')?>
            <?= live($page->contact_details_for_additional_information_about_the_event, 'sentences|1')?>
            <button type="button">Purchase</button>
            </div>
    </aside>


</grid>

<?php include('../src/footer.php'); ?>
