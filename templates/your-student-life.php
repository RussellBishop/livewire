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

        <div small="12" medium-large="6" class="pad pad-verticals-2 spacing">

            <?php $welcomeFestival = new Page(4540027); ?>

            <h2><a href="#"><?= live($welcomeFestival->heading_1, 'sentences|1')?></a></h2>

            <p class="max-60 dummy">We're excited, you're excited and things are about to get even more exciting than that! You've made it into the best uni in the best city. It's time to start planning the best introduction to university life possible.</p>

            <p><a href="/templates/welcomefestival.php" class="button">Global</a> <a href="/templates/welcomefestival.php" class="button">Freshers</a> <a href="/templates/welcomefestival.php" class="button">Grads</a></p>

        </div>

        <div small="12" class="cell-auto cover ratio-60" style="background-image: url('/dist/img/welcomefestival.jpg');"></div>

    </grid>

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

            <p class=" dummy">We're excited, you're excited and things are about to get even more exciting than that! You've made it into the best uni in the best city. It's time to start planning the best introduction to university life possible.</p>

            <grid>

                <div medium-large="6">

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

                <div medium-large="6">

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

            </grid>

        </section>

        <section large="6" class="border spacing pad">

            <h2>Discounts and offers</h2>

            <p class=" dummy">If you are a university student with a valid student card, join online today for free  and take advantage of unsold tickets for productions by The Royal Ballet and The Royal Opera – for the bargain price of only £10.</p>

            <grid>

                <div medium-large="6">

                    <?php

                        $post = array (

                            'title'         =>  'National Theatre Entry Pass',
                            'description'   =>  'Entry Pass is a free membership scheme for anyone aged 16-25. As an Entry Pass member you receive £5 tickets to all NT productions',
                            'image'         =>  'https://www.nationaltheatre.org.uk/sites/default/files/entrypass_960x263.jpg',
                            'link'          =>  '#',

                        );

                        include('blocks/newscard.php');

                    ?>

                </div>

                <div medium-large="6">

                    <?php

                        $post = array (

                            'title'         =>  'Old Vic Theatre',
                            'description'   =>  'Under 25? Strapped for cash? Love the theatre? Old Vic has just the thing for you – 100 PwC tickets for under 25s, priced at £12',
                            'image'         =>  'http://oldvictheatre-assets.s3.amazonaws.com/assets/Image/5587-fitandcrop-400x400.jpg',
                            'link'          =>  '#',

                        );

                        include('blocks/newscard.php');

                    ?>

                </div>

            </grid>

        </section>

    </grid>

</div>

<?php include('../src/footer.php'); ?>
