<?php

    $title = 'Case studies';

    require '../src/src.php';

    $page = new Page(4201621);
?>

<body>

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 contained pad-verticals-6">
        <h1>
            <?= live($page->introduction, 'sentences|1')?>
        </h1>
    </div>

    <div class="contained spacing pad-verticals-4 bg-2">
    <h2>Filter content</h2>
         <grid>
            <flex direction="column" justify="around" class="pad-sides-1 text-align-center" border="light" small="3" medium-large="2">Completed</flex>
            <flex direction="column" justify="around" class="pad-sides-1 text-align-center" border="light" small="3" medium-large="2">In Progress</flex>
            <flex direction="column" justify="around" class="pad-sides-1 text-align-center" border="light" small="3" medium-large="2">Building regulations</flex>
            <flex direction="column" justify="around" class="pad-sides-1 text-align-center" border="light" small="3" medium-large="2">Fire engineering</flex>
            <flex direction="column" justify="around" class="pad-sides-1 text-align-center" border="light" small="3" medium-large="2">Health & Safety</flex>
            <flex direction="column" justify="around" class="pad-sides-1 text-align-center" border="light" small="3" medium-large="2">Location</flex>
        </grid>
    </div>


<div class="contained spacing pad-verticals-2">
    <grid>
        <?php for ($i=1; $i<13; $i++) : ?>
            <?php include('blocks/project.php'); ?>
        <?php endfor; ?> 
    </grid>
</div>

    <div class="contained spacing pad-verticals-4 text-align-center">
        <h2>
            <?= live($page->testimonials_heading, 'sentences|1')?>
        </h2>
         <grid>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="dark" small="12" medium-large="4"><?= live($page->testimonial1, 'sentences|1')?></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="dark" small="12" medium-large="4"><?= live($page->testimonial2, 'sentences|1')?></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="dark" small="12" medium-large="4"><?= live($page->testimonial3, 'sentences|1')?></div>
        </grid>
    </div>


    <div class="contained spacing pad-verticals-2 text-align-center bg-4">
        <h2>
            <?= live($page->list_of_brands, 'sentences|1')?>
        </h2>

        <?php include('blocks/logos.php'); ?>
        
    </div>

    <?php include('../src/footer.php'); ?>
