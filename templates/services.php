<?php

    $title = 'What we offer';

    require '../src/src.php';

    $page = new Page(5549824);
?>


<body>

    <?php include('blocks/nav.php'); ?>
<grid class="bg-4 u-full-height">
    <div class="contained text-align-left u-full-height" large="10">
        <div class="h0 pad-verticals-8">
            <?= live($page->title, 'sentences|1')?>
        </div>
        <div class="hA">
            <?= live($page->intro, 'sentences|1')?>
        </div>
    </div>
</grid>

<div class="bg-3 contained pad-verticals-5 text-align-left">
        <div class="hA pad-sides-3">
                <?= live($page->heading, 'sentences|3')?>
        </div>

    <div class="bg-3 spacing pad-verticals-3 pad-sides-2">
        <grid class="pad-verticals-5">
                <div class="pad-sides-1" small="12" medium="4" large="6">
                    <div class="spacing">
                        <h1><?= live($page->service_1_title, 'words|3')?></h1>
                        <h2><?= live($page->service_1_intro, 'sentences|3')?></h2>
                        <h4><?= live($page->service_1_text, 'sentences|3')?></h4>
                    </div>
                </div>
                <div class="pad-sides-1" small="12" medium="4" large="6">
                    <div class="spacing">
                        <h1><?= live($page->service_2_title, 'words|3')?></h1>
                        <h2><?= live($page->service_2_intro, 'sentences|3')?></h2>
                        <h4><?= live($page->service_2_text, 'sentences|3')?></h4>
                    </div>
                </div>
        </grid>
    </div>
</div>

<div class="bg-2 contained pad-verticals-10 text-align-left">
        <div class="hA pad-sides-3 pad-bottom-3">
                <?= live($page->heading_2, 'sentences|3')?>
        </div>
        <grid sizes="12|6|6">
            <div class="hB pad-sides-3">
                    <?= live($page->intro_2, 'sentences|3')?>
            </div>
            <div class="push-top-3">
                <button class="m pad-sides-3">
                        <?= live($page->cta, 'sentences|3')?>
                </button>
            </div>
        </grid>
</div>

    <div class="contained spacing pad-verticals-5 text-align-center">

        <h1 class="pad-verticals-3">
            <?= live($page->testimonial_1, 'sentences|1')?>
        </h1>
        <h2 class="pad-verticals-3">
            <?= live($page->testimonial_1_author, 'sentences|1')?>
        </h2>

    </div>


<grid sizes="4|4|4" class="contained bg-4 pad-verticals-5">

        <?php for ($i=0; $i<3; $i++) : ?>
            <?php include('blocks/project.php');?>
        <?php endfor; ?>

</grid>

    <?php include('../src/footer.php'); ?>
