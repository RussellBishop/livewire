<?php

    $title = 'Enquiries';

    require '../src/src.php';

    $page = new Page(4430544);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

     <div class="bg-0 contained pad-verticals-6">
        <h1>
            <?= live($page->contact_page_heading, 'words|3')?>
        </h1>
    </div> 

<div class="spacing contained pad-verticals-2 bg-5">
    <h2><?= live($page->location_heading, 'words|2')?></h2>
    <grid>

        <div class="spacing" small="12" medium-large="3">
            <div class="pad-verticals pad-sides" border="light"><p><?= live($page->office1, 'words|1')?></p></div>
            <div class="pad-verticals pad-sides" border="light"><p><?= live($page->office2, 'words|1')?></p></div>
            <div class="pad-verticals pad-sides" border="light"><p><?= live($page->office3, 'words|1')?></p></div>
        </div>


        <div class="bg-3 ratio-50"  small="12" medium-large="9" caption="Map"></div>

    </grid>
</div>

<div class="spacing contained pad-verticals-2 bg-3">
    <h2><?= live($page->contact_heading, 'words|2')?></h2>
</div>

<div class="spacing pad-verticals-2 bg-3">
    <div class="spacing contained">
        <form>
            <grid>
                <div medium-large="8" small="12"></div>

                <div medium-large="8" small="12">
                    <label><?= live($page->label1, 'words|1')?></label>
                    <input type="text" />
                </div>
                <div medium-large="8" small="12"></div>


                <div medium-large="8" small="12"></div>

                <div medium-large="8" small="12">
                    <label><?= live($page->label2, 'words|1')?></label>
                    <input type="text" />
                </div>
                <div medium-large="8" small="12"></div>
                <div medium-large="8" small="12">
                    <label for="field3"><?= live($page->label3, 'words|1')?></label>
                    <textarea id="field3" rows="4"></textarea>
                </div>

            </grid>
        </form>
    </div>
</div>



</div>








</div>
<div class="contained spacing pad-verticals-2 bg-2">
    <grid>
        <div class="bg-3 ratio-100"  small="6" medium-large="3" caption="Contact"></div>
        <div small="6" medium-large="3"><?= live($page->main_contact1, 'words|5')?></div>
        <div class="bg-3 ratio-100"  small="6" medium-large="3" caption="Contact"></div>
        <div small="6" medium-large="3"><?= live($page->main_contact2, 'words|5')?></div>
    </grid>
</div>

    <?php include('../src/footer.php'); ?>
