<?php

    $title = 'Single News';

    require '../src/src.php';

    $page = new Page(4540672);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<div class="bg-4">

    <?php $active = 'aboutus'; $menu = 'news'; include('blocks/navigation.php'); ?>

</div>

<div class="bg-0 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('http://lorempixel.com/1000/400/people/');">
    </div>

    <h4><a href="/templates/news.php">&larr; back to News</a></h4>

    <div class="spacing push-top-10">
        <h1><?= live($page->headline, 'sentences|1')?></h1>
        <h2><?= live($page->sub_headline, 'sentences|1')?></h2>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing-article push-bottom-4 max-images">

        <div>
            <h5><?= live($page->author, 'names|1')?></h5>
            <p><?= live($page->date_and_time_published, 'sentences|12')?></p>
        </div>

        <hr />

        <?= live($page->body_of_post, 'sentences|12')?>

        <?php /*

        <div class="bg-4 spacing pad-2 push-top-4 bg-5 border">
            <h3>Related links</h3>
            <?= live($page->related_links, 'listitems|3')?>
        </div>

        */ ?>

    </article>

    <aside large="3" class="spacing">

        <h2>More in <a href="#">Help and Advice</a></h2>

        <grid>

        <div medium="6">

        <?php

            $post = array (

                'title'         =>  'Heads Up! A Mental Health Awareness Year',
                'description'   =>  'Heads Up has been a mental health campaign that we’ve been running as a sabb team that I’ve been leading on for the past year',
                'image'         =>  'https://uclu.org/sites/uclu.org/files/styles/large/public/headsupcrew.jpg?itok=9bhpmwpj',
                'link'          =>  '#',

            );

            include('blocks/newscard.php');

        ?>

        </div>

        <div medium="6">

        <?php

            $post = array (

                'title'         =>  'Is your department taking a stand against sexual harassment?',
                'description'   =>  'So far, over half of departments at UCL are working with us towards creating a university that says NO to sexual harassment and sexual violence',
                'image'         =>  'https://uclu.org/sites/uclu.org/files/styles/large/public/zt_logo_for_fb_1.jpg?itok=5dEHkH4g',
                'link'          =>  '#',

            );

            include('blocks/newscard.php');

        ?>

        </div>

        </grid>

    </aside>

</grid>

<?php include('../src/footer.php'); ?>
