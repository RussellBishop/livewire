<?php

    $title = 'What we do';

    require '../src/src.php';

    $page = new Page(5550150);
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

<div>

        <?php for ($i=0; $i<1; $i++) : ?>
            <?php include('blocks/casestudy.php');?>
        <?php endfor; ?>

</div>

    <div class="contained spacing pad-verticals-3 bg-2">
    <div class="hA pad-verticals-1">See other projects</div>
         <grid>
            <div class="border pad-verticals-1 pad-sides-1">Completed</div>
            <div class="border pad-verticals-1 pad-sides-1">In Progress</div>
            <div class="border pad-verticals-1 pad-sides-1">Building regulations</div>
            <div class="border pad-verticals-1 pad-sides-1">Fire engineering</div>
            <div class="border pad-verticals-1 pad-sides-1">Health and Safety</div>
            <div class="border pad-verticals-1 pad-sides-1">Location</div>
        </grid>
    </div>

<grid sizes="12|6|6" class="contained bg-5 pad-verticals-5">

        <?php for ($i=0; $i<6; $i++) : ?>
            <?php include('blocks/project.php');?>
        <?php endfor; ?>

</grid>


    <?php include('../src/footer.php'); ?>
