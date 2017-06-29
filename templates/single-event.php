<?php

    $title = 'Single Event';

    require '../src/src.php';

    $page = new Page(4540675);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'whatson'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('http://lorempixel.com/1000/750/nightlife/');">
    </div>

    <h4><a href="/templates/whats-on.php">&larr; back to What's on</a></h4>

    <div class="spacing push-top-10">
        <div class="max-width-10vw bg-2 border" style="border-radius: 2px;">
            <a class="max-width-30vw" href="http://uclu.org/sites/uclu.org/files/styles/large/public/muslim_aid_0.png?itok=j2QnCAE3">
                <img src="http://uclu.org/sites/uclu.org/files/styles/large/public/muslim_aid_0.png?itok=j2QnCAE3" />
            </a>
        </div>
        <h1><?= live($page->event_title, 'sentences|1')?></h1>
        <p><?= live($page->location, 'words|3')?></p>
        <p><?= live($page->date, 'words|3')?>, <?= live($page->time, 'words|3')?></p>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="">



        <div class="spacing-article max-images">

            <?= live($page->event_description, 'sentences|12')?>

        </div>

        <hr />

        <?php $clubsocietyname = 'Salsa Society'; ?>

        <div class="spacing-article">

            <h3>Who are the <?=$clubsocietyname?>?</h3>

            <p><span data-forcefeed="sentences|2"></span></p>

            <button type="button">Visit the <?=$clubsocietyname?></button>

        </div>

    </article>

    <aside large="4" class="spacing">

        <div class="bg-3 pad-verticals-1 pad-sides-2 text-align-center">
            <?php include('blocks/share.php'); ?>
        </div>

        <div class="bg-2 spacing pad-2 border">
            <h3>Booking</h3>
            <?= live($page->booking, 'sentences|1')?>
            <?= live($page->contact_details_for_additional_information_about_the_event, 'sentences|1')?>
            <button type="button">Buy ticket</button>
        </div>
    </aside>

</grid>

<?php include('../src/footer.php'); ?>
