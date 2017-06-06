<?php

    $title = 'Single News';

    require '../src/src.php';

    $page = new Page(4540672);

?>

<?php include('styles/navigation.styles.php'); ?>

<body class="bg-4">

<div class="bg-4">

    <?php $active = 'aboutus'; $menu = 'news'; include('blocks/navigation.php'); ?>

</div>

<div class="bg-0 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('http://lorempixel.com/1000/400/people/');">
    </div>

    <h4><a href="/templates/news.php">&larr; back to Help and Advice</a></h4>

    <div class="spacing push-top-10">
        <h1><?= live($page->headline, 'sentences|1')?></h1>
        <h2><?= live($page->sub_headline, 'sentences|1')?></h2>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <article large="10" class="spacing max-images">

        <h5><?= live($page->author, 'names|1')?></h5>
        <p><?= live($page->date_and_time_published, 'sentences|12')?></p>

        <hr />

        <?= live($page->body_of_post, 'sentences|12')?>

        <div class="bg-4 spacing pad-2 push-top-4 bg-5" border>
            <h3>Related links</h3>
            <?= live($page->related_links, 'listitems|3')?>
        </div>

    </article>

</grid>

<?php include('../src/footer.php'); ?>
