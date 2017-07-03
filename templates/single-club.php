<?php

    $title = 'Single Club';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('http://lorempixel.com/1000/400/people/');">
    </div>

    <h4><a href="/templates/whats-on.php">&larr; back to Directory</a></h4>

    <div class="spacing push-top-5 max-width-50rm">
        <div class="max-width-10vw min-width-5rm bg-2 border" style="border-radius: 2px;">
            <?= live($page->club_logo, 'logos|1')?>
        </div>
        <h1>UCL Jazz Society</h1>
        <div large="2" class="pad-sides-2 bg-4 text-align-center text-small text-caps">Arts</div>
        <h3>UCL Jazz Society is an eclectic group of musicians who share a common love of jazz. We are open to all ages and abilities, regardless of previous experience, and strive to ensure everyone improves and enjoys their time playing and listening to jazz.</h3>

        <div class="border text-align-center" large="3"><a href=""><h3><icon globe></icon> Visit our website</h3></a></div>
        <h1>
            
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

        <grid sizes="4|2|2" class="push-top-2">
            <div class="border" style="border-radius: 2px;">
                <a href="http://uclu.org/sexualharassment"><img src="http://uclu.org/sites/uclu.org/files/styles/large/public/campaigns/zt_logo_for_fb_0.jpg?itok=YtiGvqyI"/></a>
            </div>
            <div class="border" style="border-radius: 2px;">
                <a href="http://uclu.org/prideinsport"><img src="http://uclu.org/sites/uclu.org/files/styles/large/public/campaigns/prideinsportlogo.png?itok=bt12BkrN"/></a>
            </div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
        </grid>

        <div class="push-top-2">Date established: January 2015</div>

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
        <h1>Future Events</h1>
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

</div>

    <grid sizes="12|3|4" class="contained push-bottom-3">
        <div>See other categories: </div>
        <div large="4" class="pad-sides-2 bg-3 text-align-center text-small text-caps"><a href="">Arts</a></div>
        <div large="4" class="pad-sides-2 bg-3 text-align-center text-small text-caps"><a href="">Sport</a></div>
    </grid>

<?php include('../src/footer.php'); ?>
