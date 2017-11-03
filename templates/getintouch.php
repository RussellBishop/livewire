<?php

    $title = 'Get In Touch';

    require '../src/src.php';

    $page = new Page(4430544);
?>


<body>

<?php include('blocks/nav.php'); ?>



    <grid class="u-full-height">

            <flex direction="column" justify="center" small="12" medium="12" large="4" class="bg-1">

                <div class="pad-2 spacing-2">

                    <h1 class="h0"><?= live($page->contact_page_heading, 'words|3')?></h1>

                    <div><?= live($page->office1, 'listitems|2')?></div>

                    <div><?= live($page->office2, 'listitems|2')?></div>

                    <div><?= live($page->office3, 'listitems|2')?></div>

                </div>

            </flex>

            <a href="#" small="12" medium="12" large="8" class="cover" style="background-image: url('/assets/img/map-markers.jpg');">

                <div class="ratio-100"></div> <!-- works as a min-height for the map when it's not full-screened -->

            </a>

    </grid>



<div class="bg-3 contained pad-verticals-20 spacing">

    <h1 class="h0 o-10">What we offer</h1>
    <h1 class="h0"><a href="#">BUILDING CONTROL APPROVAL</a></h1>
    <h1 class="h0"><a href="#">FIRE SAFETY</a></h1>

</div>



    <?php include('../src/footer.php'); ?>
