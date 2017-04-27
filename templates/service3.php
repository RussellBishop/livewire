<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201623);

    $buildingregulations = new Page(4201635);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <p>
        <?= live($page->vision, 'sentences|1')?>
    </p>

    <div class="contained spacing pad-verticals-2">
         <grid>
                <div class="pad-sides-1 pad-verticals-2 text-align-center bg-3" border="dark" small="12" medium="4" large="4"><a>Building regulations</a></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center bg-3" border="dark" small="12" medium="4" large="4"><a>Fire engineering</a></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center bg-3" border="dark" small="12" medium="4" large="4"><a>Health and Safety</a></div>
        </grid>
    </div>

    <p>
        <?= live($page->strategy, 'sentences|1')?>
    </p>

    <p>
        <?= live($page->story, 'sentences|1')?>
    </p>

    <p>
        <?= live($page->senior_team, 'sentences|1')?>
    </p>

    <p>
        <?= live($buildingregulations->service_introduction, 'sentences|1')?>
    </p>


    <?php include('../src/footer.php'); ?>
