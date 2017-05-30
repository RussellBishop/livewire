<?php

    $title = 'Navigation';

    require '../src/src.php';

    $page = new Page(4317255);

?>

<body class="bg-1 spacing">

<div class="bg-4" style="max-width: 1400px;">

    <flex large="hide">

        <flex style="position: relative; overflow-y: hidden; overflow-x: scroll; flex-wrap: nowrap;">

            <div style="position: absolute; top: 0; right: 0; width: 7rem; height: 100%; background-image:
    linear-gradient(
      to left,
      white, rgba(255,255,255,0)
    );"></div>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">Home</a>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">Make a change</a>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">Your student life</a>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">Places for you</a>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">Help and advice</a>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">What's on?</a>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">About us</a>

            <a style=" padding: 1rem 0.5rem; white-space: nowrap;" href="/templates/#">Shop</a>

        </flex>

        <button type="button" style="flex-grow: 0;">Menu</button>

    </flex>

    <grid small-medium="hide" class="text-align-center list-style-none bg-white">

        <a href="/templates/#">Home</a>

        <a href="/templates/#">Make a change</a>

        <a href="/templates/#">Your student life</a>

        <a href="/templates/#">Places for you</a>

        <a href="/templates/#">Help and advice</a>

        <a href="/templates/#">What's on?</a>

        <a href="/templates/#">About us</a>

        <a href="/templates/#">Shop</a>

    </grid>

</div>


    <?php /* include('blocks/nav.php'); */ ?>

    <?php include('../src/footer.php'); ?>
