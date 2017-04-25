<?php

    $title = 'Homepage';

    require '../src/src.php';

    $page = new Page(4317255);

?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <section class="contained bg-0 pad-verticals-6">

        <div class="spacing" medium-large="9">

            <h1>
                <?= live($page->intro_statement_tagline, 'sentences|1')?>
            </h1>

            <h3>
                <?= live($page->intro_to_services, 'sentences|2')?>
            </h3>

            <button class="button med">
                <?= live($page->call_to_action, 'words|3')?>
             </button>

        </div>

    </section>

    <grid class="contained pad-verticals-2">

        <blockquote medium-large="6" class="spacing">
            &ldquo;
            <?= live($page->testimonial, 'sentences|1')?>
            &rdquo;
            <p><cite <?= live($page->testimonial, 'names|1')?></cite></p>
        </blockquote>

        <blockquote medium-large="6" class="spacing">
            &ldquo;
            <?= live($page->testimonial, 'sentences|1')?>
            &rdquo;
            <p><cite <?= live($page->testimonial, 'names|1')?></cite></p>
        </blockquote>

    </grid>

    <?php include('../src/footer.php'); ?>
