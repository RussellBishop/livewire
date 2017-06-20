<?php

    $title = 'Case studies';

    require '../src/src.php';

    $page = new Page(4201621);
?>

<body>

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 contained text-align-center pad-verticals-6">
        <h1>
            <?= live($page->introduction, 'sentences|1')?>
        </h1>
    </div>

    <div class="contained spacing pad-verticals-3 bg-2">
    <h3>Filter content</h3>
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


        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">

            <div class="bg-3"><img src="/dist/img/building.jpg"/></div>
            <h3>RIBA award shortlisted “Southwark Old Town Hall”</h3>
            <grid>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Brand</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Location</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Section</div>
            </grid>
            <p><?= live($page->completed_project1, 'sentences|1')?></p>
            <a href="/templates/casestudysingle1.php">Read more</a>
        </div> 

        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">

            <div class="bg-3"><img src="/dist/img/building.jpg"/></div>
            <h3>Elegant warehouse conversion in Primrose Hill</h3>
            <grid>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Brand</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Location</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Section</div>
            </grid>
            <p><?= live($page->completed_project2, 'sentences|1')?></p>
            <a href="/templates/casestudysingle2.php">Read more</a>
        </div> 


        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">

            <div class="bg-3"><img src="/dist/img/building.jpg"/></div>
            <h3>Innovative safety solutions for city centre hotel </h3>
            <grid>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Brand</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Location</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Section</div>
            </grid>
            <p><?= live($page->completed_project3, 'sentences|1')?></p>
            <a href="/templates/casestudysingle3.php">Read more</a>
        </div> 

        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">

            <div class="bg-3"><img src="/dist/img/forest.jpg"/></div>
            <h3>Award-winning luxury Forest Holiday sites</h3>
            <grid>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Brand</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Location</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Section</div>
            </grid>
            <p><?= live($page->completed_project4, 'sentences|1')?></p>
            <a href="/templates/casestudysingle4.php">Read more</a>
        </div> 


        <div class="spacing pad-verticals-1 pad-sides-1 bg-4" small="12" medium-large="4">

            <div class="bg-3"><img src="/dist/img/middle.jpg"/></div>
            <h3>New £700 million Middlewood Locks Development</h3>
            <grid>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Brand</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Location</div>
                    <div class="bg-1 pad-sides-1 text-small" small-medium-large="4">Section</div>
            </grid>
            <p><?= live($page->completed_project5, 'sentences|1')?></p>
            <a href="/templates/casestudysingle5.php">Read more</a>
        </div> 

        <?php for ($i=1; $i<8; $i++) : ?>
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
