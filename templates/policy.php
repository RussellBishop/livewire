<?php

    $title = 'Policy';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Policy</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            As the voice of the UK’s brewing and pub sector, the BBPA works across a range of substantial policy areas to research, advise and influence on behalf of its members.
        </h3>
    </div>
</div>



<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Tax, trade and the economy',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/tax.jpg'
 
                ),

                array (

                    'title'         =>  'Licensing',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/licensing.jpg'

                ),

                array (

                    'title'         =>  'Responsibility',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/respon.jpg'

                ),

                array (

                    'title'         =>  'People',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/people.jpg'

                ),

                array (

                    'title'         =>  'Brexit',
                    'link'          =>  '/templates/brexit.php',
                    'image'         =>  'assets/brexit.jpg'

                ),

                array (

                    'title'         =>  'Supply chain',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/supply.jpg'

                ),

                array (

                    'title'         =>  'Property and planning',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/property.jpg'

                ),

                array (

                    'title'         =>  'Environment, Health and safety',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/environment.jpg'

                ),

                array (

                    'title'         =>  'Product assurance and food safety',
                    'link'          =>  '/templates/policy-sub.php',
                    'image'         =>  'assets/food.jpg'

                ),

                array (

                    'title'         =>  'Exports',
                    'link'          =>  '/templates/exports.php',
                    'image'         =>  'assets/exports.jpg'

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 10; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/policy-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
