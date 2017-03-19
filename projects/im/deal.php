<?php include('../shared/head.php'); ?>

<?php include('blocks/header.php'); ?>

<section class="contained bg-4 pad-verticals-2 spacing">

    <h1 class="h1">BEX AU - AD</h1>

    <p data-forcefeed="sentences|3|6"></p>

    <grid type="auto">
        <li>Bids <h3><?= number_format(rand(1000000,99000000)) ?></h3></li>
        <li>Impressions <h3><?= number_format(rand(1000000,99000000)) ?></h3></li>
        <li>Clicks <h3><?= number_format(rand(10000,990000)) ?></h3></li>
        <li>Conversions <h3><?= number_format(rand(50,5000)) ?></h3></li>
        <li>Win Rate <h3><?= rand(0,1000) / 10 ?>%</h3></li>
        <li><abbr title="Click through rate">CTR</abbr> <h3><?= rand(0,10) / 10 ?>%</h3></li>
        <li><abbr title="Cost per click">CPC</abbr> <h3>£<?= rand(50,100) / 50 ?></h3></li>
        <li><abbr title="Cost per acquisition">CPA</abbr> <h3>£<?= rand(50,100) / 5 ?></h3></li>
    </grid>

</section>

<section class="contained pad-verticals-3 spacing-2">

    <grid class="vertical-centre">
        <div>Time Zone <h3>Australia/Syndey</h3></div>

        <nav>
            <li><button class="button">1 hour</button></li>
            <li><button class="button" disabled>4 hours</button></li>
            <li><button class="button" disabled>Day</button></li>
            <li><button class="button" disabled>Week</button></li>
        </nav>
    </grid>

    <grid>
        <div small="12" medium="6" large="4" class="spacing text-align-center">
            <p>Bids</p>
            <div class="ratio-50 bg-4" caption="Graph"></div>
        </div>

        <div small="12" medium="6" large="4" class="spacing text-align-center">
            <p>Impressions / Views</p>
            <div class="ratio-50 bg-4" caption="Graph"></div>
        </div>

        <div small="12" medium="6" large="4" class="spacing text-align-center">
            <p>Win Rate</p>
            <div class="ratio-50 bg-4" caption="Graph"></div>
        </div>
    </grid>

</section>

<section class="contained bg-4 pad-verticals-3 spacing">

    <h2>Profiles</h2>

    <grid class="vertical-centre">
        <div>Flight Budget <h3>$<?= number_format(rand(1000000,99000000)) ?></h3></div>

        <nav>
            <li><button class="button">Pacing</button></li>
            <li><button class="button" disabled>Performance</button></li>

            <li class="push-left-1"><button class="button">Live</button></li>
            <li><button class="button" disabled>All</button></li>
            <li><button class="button" disabled>Archived</button></li>
        </nav>
    </grid>

    <div class="bg-5 ratio-75" caption="Profiles Tree View" border="light">
        <div class="pad absolute top left">
            Last Data Update <h3><?= rand(12, 23) ?>:00</h3>
        </div>
    </div>

</section>

</body>
</html>
