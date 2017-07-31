<?php

    $title = 'Policy';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Tax, trade and the economy</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            These are all issues that are important to the beer and pub industry and this section explains taxes and duties including hot topics like beer duty and business rates. You’ll find out what we’re campaigning about and how we support measures to prevent fraud.
        </h3>
    </div>
</div>



<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Business Rates',
                    'link'          =>  '/templates/single-policy.php',
 
                ),

                array (

                    'title'         =>  'Beer Duty',
                    'link'          =>  '/templates/single-policy.php',

                ),

                array (

                    'title'         =>  'Exports',
                    'link'          =>  '/templates/single-policy.php',

                ),

                array (

                    'title'         =>  'Duty fraud',
                    'link'          =>  '/templates/single-policy.php',

                ),

                array (

                    'title'         =>  'Machine games duty',
                    'link'          =>  '/templates/single-policy.php',

                ),

                array (

                    'title'         =>  'VAT',
                    'link'          =>  '/templates/single-policy.php',

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
