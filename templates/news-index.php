<?php

    $title = 'News index';

    require '../src/src.php';

    $page = new Page(4630299);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1 o-20" style="background-image: url('https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-2Crfn8X/0/a8b83e8c/X3/UCLU_June2017-343-X3.jpg');">
    </div>

    <h4><a href="/templates/your-student-life.php">&larr; back to Your Student Life</a></h4>

    <div class="spacing push-top-10 max-width-50rm">

        <h1>News</h1>

    </div>

</div>
<!--
<?php include('blocks/clubs-and-societies-filters.php'); ?>
 -->
<div class="contained spacing pad-verticals-2">
<grid>
    <article large="9">
        <div class="border">

                <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-40 relative" style="background-image: url('http://uclu.org/sites/uclu.org/files/styles/large/public/v220170601-185056.jpg?itok=1RywBESH');">
                <div class="absolute bottom-1 left-1 bg-4 border" style="border-radius: 3px;">
                </div>
            </a>

        <div class="pad spacing">
            <div>
                <h3><a href="<?=$post['link'];?>">Zero Tolerance to Sexual Harassment Award Ceremony</a></h3>
            </div>

            <div class="text-small">
                <p>By <?= live($page->club_logo, 'names|1')?></p>
                <p class="o-40">Friday 12th May 2017, 11:22am</p>
            </div>
            <p>
                On Wednesday 14 June, the Students’ Union held the Zero Tolerance To Sexual Harassment Awards to celebrate the work of departments over the past year in creating a Zero Tolerance environment at UCL.
            </p>
        </div>

    </div>
    </article>

           <aside small="hide" large="3">

            <div  class="spacing">

            <h2>What's On?</h2>
            <div>

                <?php

                    $post = array (

                        'title'         =>  'Heads Up! A Mental Health Awareness Year',
                        'description'   =>  'Heads Up has been a mental health campaign that we’ve been running as a sabb team that I’ve been leading on for the past year',
                        'link'          =>  '#',

                    );

                    include('blocks/newsfeedcard.php');

                ?>

            </div>

            <div>

                <?php

                    $post = array (

                        'title'         =>  'Is your department taking a stand against sexual harassment?',
                        'description'   =>  'So far, over half of departments at UCL are working with us towards creating a university that says NO to sexual harassment and sexual violence',
                        'link'          =>  '#',

                    );

                    include('blocks/newsfeedcard.php');

                ?>

            </div>
</div>
        </aside>

</grid>
    <grid sizes="12|6|3" class="push-bottom-3">

        <?php

            $post = array (

                'title'         =>  'Salsa Society - End of Year Party',
                'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                'link'          =>  '/templates/single-event.php',

            );

            for ($x = 1; $x <= 12; $x++) {

                include('blocks/newsindexcard.php');

            }

        ?>

    </grid>

    <flex justify="around" class="push-bottom-2">
        <div>
            <button type="button" disabled><icon arrow-left></icon></button>
            <span class="push-sides-1">1 of 6</span>
            <button type="button"><icon arrow-right></icon></button>
        </div>
    </flex>

</div>

<?php include('../src/footer.php'); ?>
