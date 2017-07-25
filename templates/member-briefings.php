<?php

    $title = 'Member briefings';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Member briefings</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            Select the policy area
        </h3>
    </div>
</div>



<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Tax, trade and the economy',
                    'link'          =>  '/templates/single-member-briefing.php',
 
                ),

                array (

                    'title'         =>  'Licensing',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'Responsibility',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'People',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'Brexit',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'Supply chain',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'Property and planning',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'Environment, Health and safety',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'Product assurance and food safety',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

                array (

                    'title'         =>  'Exports',
                    'link'          =>  '/templates/single-member-briefing.php',

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 10; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/licencees-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
