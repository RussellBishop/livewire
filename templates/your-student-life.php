<?php

    $title = 'Your Student Life : Index';

    require '../src/src.php';

    $page = new Page(4539864);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .5; background-image: url('https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-qJCSs9H/0/34cc6c13/X3/UCLU_June2017-44-X3.jpg');">
    </div>

    <div class="spacing push-top-15 max-30">
        <h1><?= live($page->page_title, 'sentences|1')?></h1>
        <h2><?= live($page->section_description, 'sentences|2')?></h2>
    </div>

</div>

<div class="contained pad-verticals-2 spacing">

    <grid class="border push-bottom-1" type="nowrap">

        <div small="12" medium-large="6" class="pad pad-verticals-2 spacing ">

            <?php $welcomeFestival = new Page(4540027); ?>

            <h2><a href="#"><?= live($welcomeFestival->heading_1, 'sentences|1')?></a></h2>

            <p class="max-60 dummy">We're excited, you're excited and things are about to get even more exciting than that! You've made it into the best uni in the best city. It's time to start planning the best introduction to university life possible.</p>

            <p><a href="/templates/welcomefestival.php" class="button">Global</a> <a href="/templates/welcomefestival.php" class="button">Freshers</a> <a href="/templates/welcomefestival.php" class="button">Grads</a></p>

        </div>

        <div small="12" class="cell-auto cover ratio-60" style="background-image: url('/dist/img/welcomefestival.jpg');"></div>

    </grid>
    <grid sizes="12|6|3" class="pad-verticals-2">
        <?php

            $post = array (

                'title'         =>  'Salsa Society - End of Year Party',
                'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                'link'          =>  '/templates/single-event.php',

            );

            for ($x = 1; $x <= 2; $x++) {

                include('blocks/newscard.php');

            }

        ?>
        <?php

            $post = array (

                'title'         =>  'Salsa Society - End of Year Party',
                'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                'link'          =>  '/templates/single-event.php',

            );

            for ($x = 1; $x <= 1; $x++) {

                include('blocks/eventcard.php');

            }

        ?>
        <section class="bg-3 spacing pad pad-verticals-8 text-align-center">
            <h2><a href="#">A-Z of clubs and societies</a></h2> <icon arrow-right></icon>
        </section>
    </grid>
    </div>

    <grid sizes="12|6|6">

        <section class="bg-3 spacing pad pad-verticals-8 text-align-center">
            <h2><a href="#">Resources for clubs</a></h2> 
        </section>

        <section class="bg-3 spacing pad pad-verticals-8 text-align-center">
            <h2><a href="#">Join a club or society</a></h2> <icon arrow-right></icon>
        </section>

    </grid>
<div class="contained pad-verticals-2 spacing">


<!--     <grid sizes="12|6|4" class="push-top-4">

        <?php

            $section = array (

                'title'         =>  'Clubs and societies',
                'links'         =>  array ('Directory A-Z','Join','Start your own','Resources for clubs and societies','FAQs'),

            );

            include('blocks/sectioncard.php');

        ?>

        <?php

            $section = array (

                'title'         =>  'Sport',
                'links'         =>  array ('Club Sport','Project Active','London Varsity Series','Facilities','Alumni'),

            );

            include('blocks/sectioncard.php');

        ?>

        <?php

            $section = array (

                'title'         =>  'Volunteering',
                'links'         =>  array ('Get involved', 'Resources for current volunteers', 'Volunteering Services Unit', 'Support for UCL Departments', 'Information for Organisations'),

            );

            include('blocks/sectioncard.php');

        ?>

    </grid> -->
<!-- 
    <grid sizes="12|6|3" class="push-bottom-3">

        <?php

            $post = array (

                'title'         =>  'Salsa Society - End of Year Party',
                'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                'link'          =>  '/templates/single-event.php',

            );

            for ($x = 1; $x <= 4; $x++) {

                include('blocks/newsindexcard.php');

            }

        ?>

    </grid> -->
</div>
    <grid sizes="12|6|6">

        <section class="bg-3 spacing pad pad-verticals-8 text-align-center">
            <h2><a href="#">Look for volunteering opportunities</a></h2> 
        </section>

        <section class="bg-3 spacing pad pad-verticals-8 text-align-center">
            <h2><a href="#">Find out about sport at UC</a></h2> <icon arrow-right></icon>
        </section>

    </grid>

<div class="pad-verticals-2 spacing">

    <grid>

        <section large=6 class="bg-3 spacing pad pad-verticals-8 text-align-center">
            <h2><a href="#">Living in London</a></h2></icon>
        </section>

        <section large=6 class="bg-3 spacing pad pad-verticals-8 text-align-center">
            <h2><a href="#">Find student discounts</a></h2> <icon search></icon>
        </section>

        </section>

    </grid>

</div>

<?php include('../src/footer.php'); ?>
