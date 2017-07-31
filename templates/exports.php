<?php

    $title = 'Exports';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Exports</h1></div>
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

                    'title'         =>  'Country profiles',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  '#'
 
                ),

                array (

                    'title'         =>  'Best practice guides',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  '#'

                ),

                array (

                    'title'         =>  'Showcase',
                    'link'          =>  '/templates/showcase.php',
                    'image'         =>  '#'

                ),


            );

            $postsCount = count($posts);

            for ($x = 0; $x < 3; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/policy-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
