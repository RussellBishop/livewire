<?php

    $title = 'Case study';

    require '../src/src.php';

    $page = new Page(4201789);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <p>
        <?= live($page->case_study_image, 'sentences|1')?>
    </p>

    <p>
        <?= live($page->location, 'sentences|1')?>
    </p>

    <p>
        <?= live($page->services, 'sentences|1')?>
    </p>

    <p>
        <?= live($page->case_study_text, 'sentences|1')?>
    </p>

    <p>
        <?= live($page->client_testimonial, 'sentences|1')?>
    </p>

    <button class="button med">
        <?= live($page->call_to_action, 'words|2')?>
    </button>


    <?php include('../src/footer.php'); ?>
