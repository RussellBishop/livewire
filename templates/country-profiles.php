<?php

    $title = 'Country profiles';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Country profiles</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            <?= live($page->introduction, 'paragraphs|1')?>
        </h3>
    </div>
</div>



<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'USA',
                    'link'          =>  '/templates/country-single.php',
 
                ),

                array (

                    'title'         =>  'China',
                    'link'          =>  '/templates/country-single.php',

                ),

                array (

                    'title'         =>  'Belgium',
                    'link'          =>  '/templates/country-single.php',

                ),

                array (

                    'title'         =>  'Germany',
                    'link'          =>  '/templates/country-single.php',

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 6; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/licencees-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
