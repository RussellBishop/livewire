<?php

    $title = 'Praise';

    require '../src/src.php';

    $page = new Page(5551615);
?>


<body>

    <?php include('blocks/nav.php'); ?>
<grid class="bg-4">
    <div class="contained text-align-left" large="10">
        <div class="h0 pad-verticals-8">
            <?= live($page->title, 'sentences|1')?>
        </div>
    </div>
</grid>

<grid class="contained bg-2 pad-verticals-8">
    <div large="8" medium="8" small="9">
        <h1><?= live($page->praise_1, 'sentences|1')?></h1>
        <h3><?= live($page->praise_1_author, 'sentences|1')?></h3>
    </div>
    <div large="2" medium="3" small="3">
        <div data-forcefeed="logos|1"></div>
    </div>
</grid>


<grid class="contained bg-3 pad-verticals-8">
    <div large="2" medium="3" small="3">
        <div data-forcefeed="logos|1"></div>
    </div>
    <div large="8" medium="8" small="9">
        <h1><?= live($page->praise_2, 'sentences|1')?></h1>
        <h3><?= live($page->praise_2_author, 'sentences|1')?></h3>
    </div>

</grid>

<grid class="contained bg-2 pad-verticals-8">
    <div large="8" medium="8" small="9">
        <h1><?= live($page->praise_3, 'sentences|1')?></h1>
        <h3><?= live($page->praise_3_author, 'sentences|1')?></h3>
    </div>
    <div large="2" medium="3" small="3">
        <div data-forcefeed="logos|1"></div>
    </div>
</grid>


<grid class="contained bg-3 pad-verticals-8">
    <div large="2" medium="3" small="3">
        <div data-forcefeed="logos|1"></div>
    </div>
    <div large="8" medium="8" small="9">
        <h1><?= live($page->praise_4, 'sentences|1')?></h1>
        <h3><?= live($page->praise_5_author, 'sentences|1')?></h3>
    </div>

</grid>


<grid sizes="4|4|4" class="contained bg-5 pad-verticals-5">

        <?php for ($i=0; $i<3; $i++) : ?>
            <?php include('blocks/project.php');?>
        <?php endfor; ?>

</grid>


    <?php include('../src/footer.php'); ?>
