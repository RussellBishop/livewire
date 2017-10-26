<?php

    $title = 'About';

    require '../src/src.php';

    $page = new Page(4201623);
?>


<body>

    <?php include('blocks/nav.php'); ?>
<grid class="bg-4 u-full-height">
    <div class="contained text-align-left u-full-height" large="10">
        <div class="h0 pad-verticals-8">
            <?= live($page->title, 'sentences|1')?>
        </div>
        <div class="hA">
            <?= live($page->about, 'sentences|1')?>
        </div>
    </div>
</grid>

<div class="bg-3 contained pad-verticals-3">
    <div class="hA">Meet the team</div>
        
    <grid sizes="4|4|4" class="pad-verticals-5">

            <?php for ($i=0; $i<6; $i++) : ?>
                <?php include('blocks/team.php');?>
            <?php endfor; ?>
    </grid>
</div>
    <div class="contained spacing pad-verticals-5 text-align-center">

        <h1 class="pad-verticals-3">
            <?= live($page->testimonial, 'sentences|1')?>
        </h1>
        <h2 class="pad-verticals-3">
            <?= live($page->testimonial_author, 'sentences|1')?>
        </h2>

    </div>


    <?php include('../src/footer.php'); ?>
