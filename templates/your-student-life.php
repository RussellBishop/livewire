<?php

    $title = 'Your Student Life : Index';

    require '../src/src.php';

    $page = new Page(4539864);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<div class="bg-4">

    <?php $active = 'yourstudentlife'; include('blocks/navigation.php'); ?>

</div>

<div class="bg-0 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .5; background-image: url('https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-qJCSs9H/0/34cc6c13/X3/UCLU_June2017-44-X3.jpg');">
    </div>

    <div class="spacing push-top-15 max-30">
        <h1><?= live($page->page_title, 'sentences|1')?></h1>
        <h2><?= live($page->section_description, 'sentences|2')?></h2>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <section small-medium-large="12">

        <h2>Welcome Festival 2017</h2>

    </section>

    <section class="border spacing pad">

        <h3><a href="#">Clubs and societies</a></h3>

        <p class="text-small"><?= live($page->nothing, 'sentences|1')?></p>

        <ul class="text-small">
        <li><a href="#">Directory A-Z</a></li>
        <li><a href="#">Join</a></li>
        <li><a href="#">Start your own</a></li>
        <li><a href="#">Resources for clubs and societies</a></li>
        <li><a href="#">FAQs</a></li>
        </ul>

    </section>



</grid>

<?php include('../src/footer.php'); ?>
