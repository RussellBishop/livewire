<?php

    $title = 'Navigation';

    require '../src/src.php';

    $page = new Page(4317255);

?>

<style>

    .fade {
        position: absolute;
        top: 0;
        right: 0;
        width: 25%;
        height: 100%;
        margin: 0 !important;
        pointer-events: none;
    }

    .fade-white {
        background-image: linear-gradient(to left, white, rgba(255,255,255,0));
    }

    .fade-button {
        background-image: linear-gradient(to left, rgba(30,135,240,1), rgba(30,135,240,0));
    }

    .subnav {
        padding: .5rem;
    }

    .subnav > * {
        display: block;
        width: 100%;
        text-align: left;
        padding: .8rem;
        white-space: nowrap;
        border: 1px solid rgba(0,0,0,.1);
    }


</style>

<body class="bg-1 spacing">

<div class="bg-4">

    <div class="contained pad-verticals-1">

        <flex justify="between">

            <a href="#"><img class="height-3" src="/dist/img/suucl-logo.svg" /></a>

            <flex align="centre">
                <input type="text" placeholder="Search&hellip;" style="" required />
                <button type="submit">&rarr;</button>
            </flex>

        </flex>

    </div>

    <tabs class="nav" style="position: relative;">

        <div class="fade fade-white" large="hide"></div>

        <button href="#" class="plain" data-group="nav" style="padding: 1rem 1rem; white-space: nowrap; text-decoration: underline;">Home</button>

        <button type="button" class="plain arrow-down" data-group="nav" data-target="makeachange-subnav" style="padding: 1rem 1rem; white-space: nowrap;">Make a change</button>

        <button type="button" class="plain arrow-down" data-group="nav" data-target="yourstudentlife-subnav" style="padding: 1rem 1rem; white-space: nowrap;">Your student life</button>

        <button type="button" class="plain arrow-down" data-group="nav" data-target="placesforyou-subnav" style="padding: 1rem 1rem; white-space: nowrap;">Places for you</button>

        <button type="button" class="plain arrow-down" data-group="nav" data-target="helpandadvice-subnav" style="padding: 1rem 1rem; white-space: nowrap;">Help and advice</button>

        <button type="button" class="plain" data-group="nav" style="padding: 1rem 1rem; white-space: nowrap;">What's on?</button>

        <button type="button" class="plain arrow-down" data-group="nav" data-target="aboutus-subnav" style="padding: 1rem 1rem; white-space: nowrap;">About us</button>

        <button type="button" class="plain" data-group="nav" style="padding: 1rem 1rem; white-space: nowrap;">Shop</button>

    </tabs>

    <group>

        <div data-group="subnav" data-id="makeachange-subnav" class="nav subnav bg-button">

            <!-- <div class="fade fade-button" large="hide"></div> -->

            <button type="button">Who represents you?</button>
            <button type="button">Union democracy</button>
            <button type="button">Elections</button>
            <button type="button">Our impact</button>
            <button type="button">Networks</button>
            <button type="button"><?php /* Contact the */ ?>Representation &amp; Campaigns Team</button>


        </div>

        <div data-group="subnav" data-id="yourstudentlife-subnav" class="nav subnav bg-button">

            <!-- <div class="fade fade-button" large="hide"></div> -->

            <button type="button">Clubs and societies</button>
            <button type="button">Sport</button>
            <button type="button">Volunteering</button>
            <button type="button">London life</button>
            <button type="button">Discounts and offers</button>
            <button type="button">Resources</button>

        </div>

        <div data-group="subnav" data-id="placesforyou-subnav" class="nav subnav bg-button">

            <!-- <div class="fade fade-button" large="hide"></div> -->

            <button type="button">Bars</button>
            <button type="button">Cafes</button>
            <button type="button">Bloomsbury Fitness</button>
            <button type="button">Study spaces</button>
            <button type="button">Shop</button>
            <button type="button">Book a venue</button>

        </div>

        <div data-group="subnav" data-id="helpandadvice-subnav" class="nav subnav bg-button">

            <!-- <div class="fade fade-button" large="hide"></div> -->

            <button type="button">About the Rights and Advice Centre</button>
            <button type="button">Personal support</button>
            <button type="button">Academic support</button>
            <button type="button">Housing and accommodation</button>
            <button type="button">Financial support</button>
            <button type="button">Employment advice</button>
            <button type="button">JobShop</button>
            <button type="button">Skills4Work</button>
            <button type="button">Postgraduate students</button>
            <button type="button">International students</button>

        </div>

        <div data-group="subnav" data-id="aboutus-subnav" class="nav subnav bg-button">

            <!-- <div class="fade fade-button" large="hide"></div> -->

            <button type="button">New to UCL?</button>
            <button type="button">Membership</button>
            <button type="button">News</button>
            <button type="button">Our history</button>
            <button type="button">Governance and policies</button>
            <button type="button">Sustainability</button>
            <button type="button">Advertise with us</button>
            <button type="button">Find us</button>
            <button type="button">Contact us</button>

        </div>

    </group>

</div>


    <?php /* include('blocks/nav.php'); */ ?>

    <?php include('../src/footer.php'); ?>
