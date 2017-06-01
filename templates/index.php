<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4201435);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

    <div class="bg-0 contained pad-verticals-6 text-align-center">
        <h1>
            <?= live($page->intro_statement_or_tagline, 'sentences|1')?>
        </h1>
    </div>

    <div class="bg-3 contained pad-verticals-3">
        <div class="pad-sides-3">
            <h3>
                <?= live($page->intro_to_services, 'sentences|3')?>
            </h3>
        </div>

    <div class="bg-3 spacing pad-verticals-3 pad-sides-2">
         <grid>
                <div class="pad-sides-1" small="12" medium="4" large="4">
                    <div class="spacing">
                        <p><?= live($page->intro_to_services_title1, 'words|3')?></p>
                        <p><?= live($page->intro_to_services1, 'sentences|3')?></p>
                    </div>
                </div>
                <div class="pad-sides-1" small="12" medium="4" large="4">
                    <div class="spacing">
                        <p><?= live($page->intro_to_services_title2, 'words|3')?></p>
                        <p><?= live($page->intro_to_services2, 'sentences|3')?></p>
                    </div>
                </div>
                <div class="pad-sides-1" small="12" medium="4" large="4">
                    <div class="spacing">
                        <p><?= live($page->intro_to_services_title3, 'words|3')?></p>
                        <p><?= live($page->intro_to_services3, 'sentences|3')?></p>
                    </div>
                </div>

        </grid>
    </div>
</div>



    <div class="contained spacing pad-verticals-3 text-align-center">
        <h2>
            <?= live($page->testimonials_heading, 'sentences|1')?>
        </h2>
    </div>

    <div class="contained spacing pad-verticals-2">
         <grid>
                <div class="pad-sides-1 pad-verticals-2" border="dark" small="12" medium="4" large="4"><?= live($page->testimonial1, 'sentences|1')?></div>
                <div class="pad-sides-1 pad-verticals-2" border="dark" small="12" medium="4" large="4"><?= live($page->testimonial2, 'sentences|1')?></div>
                <div class="pad-sides-1 pad-verticals-2" border="dark" small="12" medium="4" large="4"><?= live($page->testimonial3, 'sentences|1')?></div>
        </grid>
    </div>

    <div class="bg-3 contained pad-verticals-4 text-align-center spacing pad-sides-12">
        <h2><?= live($page->call_to_action_intro, 'sentences|1')?></h2>
        <a href="/templates/enquiryform.php"><?= live($page->call_to_action_link, 'sentences|1')?></a>
        <p><?= live($page->call_to_action, 'sentences|2')?></p>
    </div>

    <div class="contained spacing pad-verticals-2 text-align-center">
        <h2>
            <?= live($page->brand_logos, 'sentences|1')?>
        </h2>

        <?php include('blocks/logos.php'); ?>

    </div>

    <?php include('../src/footer.php'); ?>
