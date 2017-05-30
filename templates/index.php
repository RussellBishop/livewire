<?php

    $title = 'Homepage';

    require '../src/src.php';

    $page = new Page(4317255);

?>

<body class="bg-4 spacing">

    <?php include('blocks/nav.php'); ?>

    <grid class="contained">

        <?php for ($i=1; $i<6; $i++) : ?>
            <div data-forcefeed="logos|1" small="4" medium="3" large="2"></div>
        <?php endfor; ?>

    </grid>

    <grid class="contained">
        <div class="bg-3 ratio-75" medium-large="6"></div>
        <div class="bg-3 ratio-75" medium-large="6"></div>
    </grid>

    <section class="contained bg-0 pad-verticals-6">

        <div class="spacing" medium-large="9">

            <h1>
                <?= live($page->intro_statement_tagline, 'sentences|1')?>
            </h1>

            <ul data-forcefeed="listitems|5">

            </ul>

            <h3>
                <?= live($page->intro_to_services, 'sentences|2')?>
            </h3>

            <button class="button med">
                <?= live($page->call_to_action, 'words|3')?>
            </button>

        </div>

    </section>

    <grid class="contained pad-verticals-2">

        <div medium-large="6" class="spacing">
            <blockquote>
                &ldquo;
                <?= live($page->testimonial, 'sentences|1')?>
                &rdquo;
            </blockquote>

            <p><?= live($page->testimonial, 'names|1')?></p>
        </div>

        <div medium-large="6" class="spacing">
            <blockquote>
                &ldquo;
                <?= live($page->testimonial, 'sentences|1')?>
                &rdquo;
            </blockquote>

            <p><?= live($page->testimonial, 'names|1')?></p>
        </div>

    </grid>

    <?php include('../src/footer.php'); ?>
