<?php

    $title = 'Technical Circular';

    require '../src/src.php';

    $page = new Page(4630209);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Technical circulars</h1></div>
    <hr/>
</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">
        <div class="push-bottom-4">
        <h2>Documents</h2>
<!--             <flex justify="between" class="push-bottom-2">
                <h2>Guidance</h2>
                <button type="button">See all links</button>
            </flex> -->

            <grid class="pad-verticals-2" sizes="12|12|12">
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                     <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?> <icon download></icon></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
            </grid>
        </div>


    </article>

<!--     <aside large="3" class="spacing">

    <div class="bg-2 pad-sides-2 pad-verticals-1 spacing">
                <h2 class="text-align-center push-bottom-2">Contact form</h2>
                <p><?= live($page->whatweoffer, 'sentences|1')?></p>
                <fieldset>

                    <label for="edit-title">Name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Email</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Pub name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Postcode</label>

                    <input type="text" id="edit-title">

                </fieldset>

                <button>Submit</button>

            </div>
    </aside> -->


</grid>


<?php include('../src/footer.php'); ?>
