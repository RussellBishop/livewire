<?php

    $title = 'Single Club';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('http://lorempixel.com/1000/750/nightlife/');">
    </div>

    <h4><a href="/templates/whats-on.php">&larr; back to Directory</a></h4>

    <div class="spacing push-top-10 max-width-50rm">
        <div class="max-width-10vw min-width-5rm">
            <?= live($page->Club_logo, 'logos|1')?>
        </div>
        <h1>UCL Jazz Society</h1>
        <p class="o-60 text-caps">Arts</p>
        <h3>UCL Jazz Society is an eclectic group of musicians who share a common love of jazz. We are open to all ages and abilities, regardless of previous experience, and strive to ensure everyone improves and enjoys their time playing and listening to jazz.</h3>
        <h1>
            <a href="#facebook"><icon globe></icon></a>
            <a href="#facebook"><icon facebook-square></icon></a>
            <a href="#facebook"><icon twitter></icon></a>
            <a href="#facebook"><icon instagram></icon></a>
        </h1>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="">

        <div class="spacing-article max-images">

            <?= live($page->additional_written_content_about_club, 'sentences|12')?>

        </div>

    </article>

    <aside large="4" class="spacing">

        <div class="bg-2 spacing pad-2 border">
            <h3>Membership</h3>
            <button type="button">Buy £5 membership</button>
        </div>

        <div class="bg-2 spacing pad-2 border">
            <h3>Contact information</h3>
            <?= live($page->committee_and_contact_information, 'sentences|2')?>
        </div>
    </aside>

</grid>

<div class="contained spacing pad-verticals-2">

    <flex justify="between" class="push-bottom-2">
        <h1>Upcoming Events</h1>
        <div>
            <button type="button" disabled><icon arrow-left></icon></button>
            <button type="button"><icon arrow-right></icon></button>
        </div>
    </flex>

    <grid class="push-bottom-3">

        <div small="12" medium="6" large="3">
            <?php

                $post = array (

                    'title'         =>  'Salsa Society - End of Year Party',
                    'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                    'link'          =>  '/templates/single-event.php',

                );

                include('blocks/eventcard.php');

            ?>
        </div>

        <div small="12" medium="6" large="3">
            <?php

                include('blocks/eventcard.php');

            ?>
        </div>

        <div small="12" medium="6" large="3">
            <?php

                include('blocks/eventcard.php');

            ?>
        </div>

        <div small="12" medium="6" large="3">
            <?php

                include('blocks/eventcard.php');

            ?>
        </div>

    </grid>

    <flex justify="between" class="push-bottom-2">
        <h1>Recent Events</h1>
        <button type="button">See all events</button>
    </flex>

    <?php

        include('blocks/textevent.php');
        include('blocks/textevent.php');
        include('blocks/textevent.php');
        include('blocks/textevent.php');
        include('blocks/textevent.php');
        include('blocks/textevent.php');

    ?>

    <?php /*

    <grid>

        <div small="12" medium="6" large="3">
            <?php

                $post = array (

                    'title'         =>  'Salsa Society - End of Year Party',
                    'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                    'link'          =>  '/templates/single-event.php',

                );

                include('blocks/eventcard.php');

            ?>
        </div>

        <div small="12" medium="6" large="3">
            <?php

                include('blocks/eventcard.php');

            ?>
        </div>

        <div small="12" medium="6" large="3">
            <?php

                include('blocks/eventcard.php');

            ?>
        </div>

        <div small="12" medium="6" large="3">
            <?php

                include('blocks/eventcard.php');

            ?>
        </div>

    </grid>

    */ ?>

</div>

<?php include('../src/footer.php'); ?>
