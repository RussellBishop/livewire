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
    
    <div class="bg-3 contained pad-verticals-6">
        <p>
            <?= live($page->intro_to_services, 'sentences|3')?>
        </p>
    </div>


    <div class="contained spacing pad-verticals-2 text-align-center">
        <h2>
            <?= live($page->testimonials_heading, 'sentences|1')?>
        </h2>
    </div>

    <div class="contained spacing pad-verticals-2">
         <grid>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="dark" small="12" medium="4" large="4"><?= live($page->testimonial1, 'sentences|1')?></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="dark" small="12" medium="4" large="4"><?= live($page->testimonial2, 'sentences|1')?></div>
                <div class="pad-sides-1 pad-verticals-2 text-align-center" border="dark" small="12" medium="4" large="4"><?= live($page->testimonial3, 'sentences|1')?></div>
        </grid>
    </div>

    <div class="bg-3 contained pad-verticals-4 text-align-center">
    <div class="pad-verticals-1">
        <p>
            <?= live($page->call_to_action_intro, 'sentences|1')?>
        </p>
    </div>
        <button class="button med">
            <?= live($page->call_to_action, 'words|2')?>
        </button>
    </div>    

    <div class="contained spacing pad-verticals-2 text-align-center">
        <h2>
            <?= live($page->brand_logos, 'sentences|1')?>
        </h2>

        <?php include('blocks/logos.php'); ?>
        
    </div>
  
    

    <?php include('../src/footer.php'); ?>
