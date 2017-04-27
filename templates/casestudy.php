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

    <div class="contained spacing pad-verticals-2 bg-4">
    
        <h2>
            <?= live($page->completed_projects_heading, 'words|3')?>
        </h2>
    </div>

    <div class="contained spacing pad-verticals-4 bg-5">
        <grid>
            <div class="spacing" small="12" medium-large="9">
                <p>
                    <?= live($page->completed_project1, 'sentences|4')?>
                </p>
             <p>
                    <a href="/templates/casestudysingle.php">
                        Read more
                    </a>
                </p>
            </div>
            <div class="bg-3 ratio-50 text-align-center" small="12" medium="3" large="3" caption="Image"></div>
        </grid>
    </div>

    <div class="contained spacing pad-verticals-4 bg-4">
        <grid>
            <div class="spacing" small="12" medium-large="9">
                <p>
                    <?= live($page->completed_project2, 'sentences|4')?>
                </p>
                <p>
                    <a href="/templates/casestudysingle.php">
                        Read more
                    </a>
                </p>
            </div>
            <div class="bg-3 ratio-50 text-align-center" small="12" medium="3" large="3" caption="Image"></div>
        </grid>
    </div>


    <div class="contained spacing pad-verticals-1 bg-3">
    
        <h2>
            <?= live($page->works_in_progress_heading, 'words|3')?>
        </h2>
    </div>

    <div class="contained spacing pad-verticals-4 bg-3">
        <grid>
            <div class="spacing" small="12" medium-large="9">
                <p>
                    <?= live($page->work_in_progress1, 'sentences|4')?>
                </p>
                <p>
                    <a href="/templates/casestudysingle.php">
                        Read more
                    </a>
                </p>
            </div>

            <div class="bg-2 ratio-50 text-align-center" small="12" medium="3" large="3" caption="Image"></div>
        </grid>
    </div>

    <div class="contained spacing pad-verticals-4 bg-4">
        <grid>
            <div class="spacing" small="12" medium-large="9">
                <p>
                    <?= live($page->work_in_progress2, 'sentences|4')?>
                </p>
                <p>
                    <a href="/templates/casestudysingle.php">
                        Read more
                    </a>
                </p>
            </div>
            <div class="bg-3 ratio-50 text-align-center" small="12" medium="3" large="3" caption="Image"></div>
        </grid>
    </div>

   
    <div class="contained spacing pad-verticals-4 bg-3">
        <h2>
            <?= live($page->services_heading, 'sentences|1')?>
        </h2>

        <p>
            <?= live($page->list_of_services, 'sentences|1')?>
        </p>


    </div>
    <div class="contained spacing pad-verticals-4 bg-2">
        <p>
            <?= live($page->list_of_locations, 'sentences|1')?>
        </p>
         <grid>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="light" small="12" medium-large="4"><?= live($page->location1, 'words|1')?></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="light" small="12" medium-large="4"><?= live($page->location2, 'words|1')?></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="light" small="12" medium-large="4"><?= live($page->location3, 'words|1')?></div>
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
