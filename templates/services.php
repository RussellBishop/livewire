<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201623);

    $buildingregulations = new Page(4201635);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 spacing contained pad-verticals-6">
        <h1>
            <?= live($page->services_heading, 'words|2')?>
        </h1>
    
    <p>
        <?= live($page->introduction, 'sentences|1')?>
    </p>
</div>

    <div class="contained spacing pad-verticals-4">
         <grid>
                <div class="pad-sides-1 pad-verticals-2 text-align-center bg-3" border="dark" small="12" medium="4" large="4"><a href="/templates/service1.php">Building regulations</a></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center bg-3" border="dark" small="12" medium="4" large="4"><a href="/templates/service2.php">Fire engineering</a></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center bg-3" border="dark" small="12" medium="4" large="4"><a href="/templates/service3.php">Health and Safety</a></div>
        </grid>
    </div>




    <?php include('../src/footer.php'); ?>
