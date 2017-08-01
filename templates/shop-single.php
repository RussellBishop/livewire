<?php

    $title = 'Shop';

    require '../src/src.php';

    $page = new Page(4630299);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'members'; $menu = 'members'; include('blocks/navigation.php'); ?>

<div class="contained spacing pad-verticals-2 pad-top-7">
    <div class="bg-2 push-bottom-1 pad-verticals-1">
        <flex justify="between">
            <div class="pad-sides-1"> </div>
            <div class="z--1 o-40 text-align-center"><h1>Shop</h1></div>
            <div class="pad-sides-2"><icon shopping-basket></icon></div>
        </flex>
    </div>
<grid>
    <div large="6" medium="6" small="12" class="spacing">
    <img src="http://lorempixel.com/1000/750/nightlife/"/>
    <div class="push-bottom-1 pad-verticals-1">
        <flex justify="between">
            <div large="3" medium="3" small="3" class="bg-2 ratio-100 fill pad-sides-1 cover z--1" style="opacity: .8; background-image: url('http://lorempixel.com/1000/750/nightlife/');"></div>
            <div large="3" medium="3" small="3" class="bg-2 ratio-100 fill pad-sides-1 cover z--1" style="opacity: .8; background-image: url('http://lorempixel.com/1000/750/nightlife/');"></div>
            <div large="3" medium="3" small="3" class="bg-2 ratio-100 fill pad-sides-1 cover z--1" style="opacity: .8; background-image: url('http://lorempixel.com/1000/750/nightlife/');"></div>
            <div large="3" medium="3" small="3" class="bg-2 ratio-100 fill pad-sides-1 cover z--1" style="opacity: .8; background-image: url('http://lorempixel.com/1000/750/nightlife/');"></div>
        </flex>
    </div>
    </div>

    <div large="6" medium="6" small="12" class="spacing pad-right-5">
        <h2>Product name</h2>
        <em>Item number</em>
        
        <div class="text-align-right spacing">
            <p>Member price: <strong>£10</strong></p>
            <p>Member price: <strong>£100</strong></p>
        </div>
        <p>Description description info info lorem ipsum. Description description info info lorem ipsum. Description description info info lorem ipsum. Description description info info lorem ipsum. Description description info info lorem ipsum. Description description info info lorem ipsum.</p>
        <flex justify="between"><p>Shipping + <strong>£2.8</strong></p><a href="#">More info for bulk orders</a></flex>
        <flex justify="between"><p>Instant download available <strong><icon check></icon></strong></p></flex>
        <flex justify="between"><p>Payment info:</p><div class="bg-3 pad-sides-1">Visa</div><div class="bg-3 pad-sides-1">Paypal</div><div class="bg-3 pad-sides-1">Mastercard</div></flex>

        <flex justify="between" class="pad-verticals-2"><button>Add to cart</button></flex>
    </div>
</grid>

</div>

<?php include('../src/footer.php'); ?>
