<?php

    $title = 'Clubs and Societies';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1 o-20" style="background-image: url('https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-2Crfn8X/0/a8b83e8c/X3/UCLU_June2017-343-X3.jpg');">
    </div>

    <h4><a href="/templates/your-student-life.php">&larr; back to Your Student Life</a></h4>

    <div class="spacing push-top-10 max-width-50rm">

        <h1>Clubs and Societies</h1>

        <h2><?= live($page->club_logo, 'sentences|2')?></h2>

    </div>

</div>

<?php include('blocks/clubs-and-societies-filters.php'); ?>

<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|3" class="push-bottom-3">

        <?php

            $post = array (

                'title'         =>  'American Football Club',
                'image'         =>  'http://ucluemperors.com/wp-content/uploads/2017/01/D5Q6820.jpg',
                'logo'          =>  'http://uclu.org/sites/uclu.org/files/styles/thumbnail-150x150/public/csc-directory-images/high_res_emperors_temp.png?itok=PgI4gJde',
                'link'          =>  '/templates/single-club.php',
                'category'      =>  'Sports',
                'description'   =>  'The UCLU American Football Club was re-established in October 2015. We have just finished an affiliate year and will be participating in BUCS Leagues at the start of the 2016 season.',

            );

            for ($x = 1; $x <= 12; $x++) {

                include('blocks/clubcard.php');

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
