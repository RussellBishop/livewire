<?php

    $title = 'About us';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>British Beer and Pub Association</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6 spacing">
        <h3>
            <p>The British Beer &amp; Pub Association champions issues that matter to the beer and pub industry. These are causes our members are passionate about: whether that’s promoting beer as the nation’s drink, or lobbying against increases in beer duty.</p>
            <p>Our members are responsible for 90% of beer brewed in Britain today and we represent around half of the country’s pubs.</p><p>They include international brewers, family brewers, managed locals and the nation’s largest tenanted pub companies.</p><p>It’s a diverse group but we are passionate about representing, supporting and campaigning for the interests of the beer and pub sector.</p><p>The BBPA is now more than 100 years old. We were founded in 1904 and have a unique identity and a powerful voice which we use to influence public opinion, in the interests of our members.</p>
        </h3>
    </div>

</div>


<?php include('../src/footer.php'); ?>
