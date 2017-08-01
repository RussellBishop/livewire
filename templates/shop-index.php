<?php

    $title = 'Shop';

    require '../src/src.php';

    $page = new Page(4630299);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'members'; $menu = 'members'; include('blocks/navigation.php'); ?>

<div class="contained spacing pad-verticals-2 pad-top-7">
<div class="z--1 o-20 text-align-center"><h1>Shop</h1></div>
<hr/>
<grid>
    <div large="12">
    <div class="bg-2 push-bottom-1 pad-verticals-1">
        <flex justify="between">
            <div class="pad-sides-1">Show:</div>
            <flex>
            <flex align="center" class="pad-sides-1 push-bottom-1 bg-3 text-align-left"><div class="push-right-1"><input type="checkbox" /></div><a href="">Products</a></flex>
            <flex align="center" class="pad-sides-1 push-bottom-1 bg-3 text-align-left"><div class="push-right-1"><input type="checkbox" /></div><a href="">Stats</a></flex>
            </flex>
            <div class="pad-sides-2"><icon shopping-basket></icon></div>
        </flex>
    </div>
    
        <grid sizes="6|4|3" class="push-bottom-3">

            <?php

                $post = array (


                            'title'         =>  'Product name',
                            'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                            'link'          =>  '/templates/shop-single.php',
                            'info'          =>  'Description product info description product info',
                            'memberprice'   =>  '£10',
                            'regulaprice'   =>  '£100',



                );

                for ($x = 1; $x <= 16; $x++) {

                    include('blocks/shopindexcard.php');

                }

            ?>

        </grid>
    </div>
</grid>

</div>

<?php include('../src/footer.php'); ?>
