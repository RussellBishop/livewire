<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201435);
?>

<body>
    <?php include('blocks/nav.php'); ?>

    <grid class="bg-4">
        <div class="contained u-full-height text-align-left" large="10">
            <div class="hXL push-top-10">
                <?= live($page->intro_tagline, 'sentences|1')?>
            </div>
        </div>
    </grid>

    <grid class="bg-5">
        <div class="contained u-full-height text-align-left" large="10">
            <div class="h0 pad-verticals-10">
                <?= live($page->intro_statement, 'sentences|1')?>
            </div>
            <!--<button class="l">Find out more</button>-->
        </div>
    </grid>

    <div class="bg-3 contained pad-verticals-5 text-align-left">

        <div class="hA pad-sides-3">
            <?= live($page->intro_to_services, 'sentences|3')?>
        </div>

        <div class="bg-3 spacing pad-verticals-3 pad-sides-2">
            <grid class="pad-verticals-5">

                    <div class="pad-sides-1" small="12" medium="4" large="6">
                        <div class="spacing">
                            <h1><?= live($page->intro_to_services_title1, 'words|3')?></h1>
                            <h2><?= live($page->intro_to_services1, 'sentences|3')?></h2>
                        </div>
                    </div>

                    <div class="pad-sides-1" small="12" medium="4" large="6">
                        <div class="spacing">
                            <h1><?= live($page->intro_to_services_title2, 'words|3')?></h1>
                            <h2><?= live($page->intro_to_services2, 'sentences|3')?></h2>
                        </div>
                    </div>

            </grid>
        </div>
    </div>

    <div class="contained spacing pad-verticals-5 text-align-center">
        <h1 class="pad-verticals-3">
            <?= live($page->testimonial, 'sentences|1')?>
        </h1>
        <h2 class="pad-verticals-3">
            <?= live($page->testimonial_author, 'sentences|1')?>
        </h2>
    </div>

    <grid sizes="4|4|4" class="contained bg-5 pad-verticals-5">

        <?php for ($i=0; $i<3; $i++) : ?>
            <?php include('blocks/project.php');?>
        <?php endfor; ?>

    </grid>




    <?php include('../src/footer.php'); ?>
