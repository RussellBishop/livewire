<?php

    $title = 'Single Licensee Page';

    require '../src/src.php';

    $page = new Page(4630209);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Licensee single</h1></div>
    <hr/>
    <div class="bg-2 pad-sides-12 pad-verticals-4">
        <p>
            <?= live($page->introduction, 'paragraphs|2')?>
        </p>
    </div>
</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">
        <div class="push-bottom-4">
            <flex justify="between" class="push-bottom-2">
                <h2>Guidance</h2>
                <button type="button">See all links</button>
            </flex>

            <grid sizes="12|12|12">
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
                    <div class="pad-sides-2 spacing"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><p><!-- <p class="text-small o-20">Friday 12th May 2017</p> --></p></div>
            </grid>
        </div>
<hr/>
        <div class="push-bottom-4">
            <flex justify="between" class="push-bottom-2">
                <h2>News</h2>
                <button type="button">See all news</button>
            </flex>

            <grid sizes="12|4|4">

        <?php

            $posts = array (

                array (

                    'title'         =>  'BBPA publishes latest cost benchmarking data for tenants and lessees',
                    'link'          =>  '#',
                    'description'   =>  'The BBPA has today published the latest edition of its operating cost guide for tied tenants and lessees.',
                    'image'          =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/83/original/The-beer-people_Prim_Pump_434x250.jpg?1327399641',

                ),

                array (

                    'title'         =>  'Cautious approach needed on minimum wage rates – BBPA submission',
                    'link'          =>  '#',
                    'description'   =>  'The British Beer & Pub Association has urged a cautious approach when it comes.',
                    'image'          =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/23052/original/Barmaid%20434x%20250.jpg?1411989847',

                ),

                array (

                    'title'         =>  'BBPA clarifies codes system for pubs in Scotland',
                    'link'          =>  '#',
                    'description'   =>  'The BBPA has moved to clarify suggestions that there is no code governing pubs in Scotland.',
                    'image'          =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/83/original/The-beer-people_Prim_Pump_434x250.jpg?1327399641',

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 3; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/news-card.php');

            }

        ?>


            </grid>
        </div>

    </article>

    <aside large="3" class="spacing">

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
    </aside>


</grid>


<?php include('../src/footer.php'); ?>
