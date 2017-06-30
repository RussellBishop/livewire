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

        <!-- <h2><?= live($page->club_logo, 'sentences|2')?></h2> -->

    </div>

</div>

<?php include('blocks/clubs-and-societies-filters.php'); ?>

<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|3" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Amateur Boxing Club',
                    'image'         =>  'http://www.ucluabc.co.uk/images/ucluabc_2015-2016.jpg',
                    'logo'          =>  'https://uclu.org/sites/uclu.org/files/styles/large/public/csc-directory-images/logo_2_0.png',
                    'link'          =>  '/templates/single-club.php',
                    'category'      =>  'Sports',
                    'description'   =>  'UCLUABC provides fitness sessions for all - the best way to get in shape and to get fit. UCLUABC provides boxing lessons from the basics right up to advanced levels.',

                ),

                array (

                    'title'         =>  'American Football Club',
                    'image'         =>  'http://ucluemperors.com/wp-content/uploads/2017/01/D5Q6820.jpg',
                    'logo'          =>  'http://uclu.org/sites/uclu.org/files/styles/thumbnail-150x150/public/csc-directory-images/high_res_emperors_temp.png',
                    'link'          =>  '/templates/single-club.php',
                    'category'      =>  'Sports',
                    'description'   =>  'The UCLU American Football Club was re-established in October 2015. We have just finished an affiliate year and will be participating in BUCS Leagues at the start of the 2016 season.',

                ),

                array (

                    'title'         =>  'Art Society',
                    'image'         =>  'https://scontent-amt2-1.xx.fbcdn.net/v/t31.0-8/17389135_10206976479009927_6742946227513097313_o.jpg?oh=38787390fd2ad9f9654158493b994721&oe=59C88E74',
                    'logo'          =>  'https://uclu.org/sites/uclu.org/files/styles/large/public/csc-directory-images/screen_shot_2016-08-22_at_17.27.56.png',
                    'link'          =>  '/templates/single-club.php',
                    'category'      =>  'Arts',
                    'description'   =>  'The UCLU Art Society provides a creative community through which like minded individuals can look at, talk about and make art together.',

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 12; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/clubcard.php');

            }

        ?>

    </grid>

<!--     <flex justify="around" class="push-bottom-2">
        <div>
            <button type="button" disabled><icon arrow-left></icon></button>
            <span class="push-sides-1">1 of 6</span>
            <button type="button"><icon arrow-right></icon></button>
        </div>
    </flex> -->

    <flex justify="around" class="push-bottom-2">
        <div>
            <button type="button"><span class="push-sides-1">Load more</span><icon spinner></icon></button>
        </div>
    </flex>

</div>

<?php include('../src/footer.php'); ?>
