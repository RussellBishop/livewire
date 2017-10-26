<?php

    $title = 'Process';

    require '../src/src.php';

    $page = new Page(4426978);
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

<div class="bg-3 contained pad-verticals-3">
        
    <grid sizes="4|4|4" class="pad-verticals-5">
        <div class="pad-verticals-2">
            <h1><?= live($page->stage_1_title, 'words|4')?></h1>
            <h2 class="pad-verticals-2"><?= live($page->stage_1_intro, 'words|4')?></h2>
            <h4><?= live($page->stage_1_text, 'words|4')?></h4>
        </div>

        <div class="pad-verticals-2">
            <h1><?= live($page->stage_2_title, 'words|4')?></h1>
            <h2 class="pad-verticals-2"><?= live($page->stage_2_intro, 'words|4')?></h2>
            <h4><?= live($page->stage_2_text, 'words|4')?></h4>
        </div>

        <div class="pad-verticals-2">
            <h1><?= live($page->stage_3_title, 'words|4')?></h1>
            <h2 class="pad-verticals-2"><?= live($page->stage_3_intro, 'words|4')?></h2>
            <h4><?= live($page->stage_3_text, 'words|4')?></h4>
        </div>

        <div class="pad-verticals-2">
            <h1><?= live($page->stage_4_title, 'words|4')?></h1>
            <h2 class="pad-verticals-2"><?= live($page->stage_4_intro, 'words|4')?></h2>
            <h4><?= live($page->stage_4_text, 'words|4')?></h4>
        </div>

        <div class="pad-verticals-2">
            <h1><?= live($page->stage_5_title, 'words|4')?></h1>
            <h2 class="pad-verticals-2"><?= live($page->stage_5_intro, 'words|4')?></h2>
            <h4><?= live($page->stage_5_text, 'words|4')?></h4>
        </div>

        <div class="pad-verticals-2">
            <h1><?= live($page->stage_6_title, 'words|4')?></h1>
            <h2 class="pad-verticals-2"><?= live($page->stage_6_intro, 'words|4')?></h2>
            <h4><?= live($page->stage_6_text, 'words|4')?></h4>
        </div>

    </grid>
</div>



    <?php include('../src/footer.php'); ?>
