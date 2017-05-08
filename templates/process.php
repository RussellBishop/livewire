<?php

    $title = 'Process';

    require '../src/src.php';

    $page = new Page(4426978);
?>

<body>

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 spacing contained pad-verticals-6">
        <h1>
            <?= live($page->page_title, 'words|2')?>
        </h1>
        <h1>
            <?= live($page->introduction, 'sentences|1')?>
        </h1>
    </div>

<div class="contained spacing pad-verticals-2">
    <grid class="bg-4">
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">
            <h2><?= live($page->stage_1_title, 'words|3')?></h2>
        </div> 
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="8">
            <p><?= live($page->stage_1_text, 'sentences|4')?></p>
        </div> 
    </grid>
</div>
<div class="contained spacing pad-verticals-2">
    <grid class="bg-4">
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">
            <h2><?= live($page->stage_2_title, 'words|3')?></h2>
        </div> 
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="8">
            <p><?= live($page->stage_2_text, 'sentences|4')?></p>
        </div> 
    </grid>
</div>
<div class="contained spacing pad-verticals-2">
    <grid class="bg-4">
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">
            <h2><?= live($page->stage_3_title, 'words|3')?></h2>
        </div> 
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="8">
            <p><?= live($page->stage_3_text, 'sentences|4')?></p>
        </div> 
    </grid>
</div>
<div class="contained spacing pad-verticals-2">
    <grid class="bg-4">
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">
            <h2><?= live($page->stage_4_title, 'words|3')?></h2>
        </div> 
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="8">
            <p><?= live($page->stage_4_text, 'sentences|4')?></p>
        </div> 
    </grid>
</div>
<div class="contained spacing pad-verticals-2">
    <grid class="bg-4">
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">
            <h2><?= live($page->stage_5_title, 'words|3')?></h2>
        </div> 
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="8">
            <p><?= live($page->stage_5_text, 'sentences|4')?></p>
        </div> 
    </grid>
</div>
<div class="contained spacing pad-verticals-2">
    <grid class="bg-4">
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">
            <h2><?= live($page->stage_6_title, 'words|3')?></h2>
        </div> 
        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="8">
            <p><?= live($page->stage_6_text, 'sentences|4')?></p>
        </div> 
    </grid>
</div>


    <?php include('../src/footer.php'); ?>
