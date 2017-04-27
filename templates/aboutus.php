<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201623);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>
    <div class="contained spacing pad-verticals-6 bg-5">
        <h1>
            <?= live($page->vision, 'sentences|4')?>
        </h1>
    </div>    
    <div class="contained spacing pad-verticals-4 bg-4">
        <h2>
            <?= live($page->strategy_heading, 'words|2')?>
        </h2>
        <p>
            <?= live($page->strategy, 'sentences|4')?>
        </p>
    </div>
    <div class="contained spacing pad-verticals-4 bg-5">
        <h2>
            <?= live($page->story_heading, 'words|2')?>
        </h2>
        <p>
            <?= live($page->story, 'sentences|4')?>
        </p>
    </div>
    <div class="contained spacing pad-verticals-4 bg-4">
        <h2>
            <?= live($page->senior_team_heading, 'words|2')?>
        </h2>
        <p>
            <?= live($page->senior_team, 'sentences|1')?>
        </p>

            <grid>
                <div small="12" medium="4" large="4">
                    <div class="bg-3 ratio-125"></div> 
                        <div class="text-align-center"> 
                        <p>Name Surname</p>
                        <p>Role</p>
                    </div>
                </div>
                <div small="12" medium="4" large="4">
                    <div class="bg-3 ratio-125"></div> 
                        <div class="text-align-center"> 
                        <p>Name Surname</p>
                        <p>Role</p>
                    </div>
                </div>
                <div small="12" medium="4" large="4">
                    <div class="bg-3 ratio-125"></div> 
                        <div class="text-align-center"> 
                        <p>Name Surname</p>
                        <p>Role</p>
                    </div>
                </div>
                <div small="12" medium="4" large="4">
                    <div class="bg-3 ratio-125"></div> 
                        <div class="text-align-center"> 
                        <p>Name Surname</p>
                        <p>Role</p>
                    </div>
                </div>
                <div small="12" medium="4" large="4">
                    <div class="bg-3 ratio-125"></div> 
                        <div class="text-align-center"> 
                        <p>Name Surname</p>
                        <p>Role</p>
                    </div>
                </div>
                <div small="12" medium="4" large="4">
                    <div class="bg-3 ratio-125"></div> 
                        <div class="text-align-center"> 
                        <p>Name Surname</p>
                        <p>Role</p>
                    </div>
                </div>
            </grid>
    </div>

        <?php include('../src/footer.php'); ?>
