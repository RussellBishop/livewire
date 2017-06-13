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

<div class="contained pad-verticals-2 spacing">

    <section class="border spacing pad">

        <?php $welcomeFestival = new Page(4540027); ?>

        <h2><?= live($welcomeFestival->heading_1, 'sentences|1')?></h2>

        <p class="max-60">We're excited, you're excited and things are about to get even more exciting than that! You've made it into the best uni in the best city. It's time to start planning the best introduction to university life possible.</p>

    </section>

    <grid class="push-top-4">

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

    </grid>

    <grid>

        <section large="6" class="border spacing pad">

            <h2>London Life</h2>

            <p> We're excited, you're excited and things are about to get even more exciting than that! You've made it into the best uni in the best city. It's time to start planning the best introduction to university life possible.</p>

        </section>

        <section large="6" class="border spacing pad">

            <h2>Discounts and offers</h2>

            <p> We're excited, you're excited and things are about to get even more exciting than that! You've made it into the best uni in the best city. It's time to start planning the best introduction to university life possible.</p>

        </section>

    </grid>

</div>

<?php include('../src/footer.php'); ?>
