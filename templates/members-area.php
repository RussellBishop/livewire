<?php

    $title = 'Members Area';

    require '../src/src.php';

    $page = new Page(4630209);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Members Area</h1></div>
    <hr/>
    <div class="bg-2 pad-sides-6 pad-verticals-4">
        <p>
            <?= live($page->introduction, 'paragraphs|1')?> 
        </p>
    </div>
</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">

        <div class="push-bottom-4">

                <h2>Panels</h2>

<grid sizes="12|6|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Environment, Health & Safety Panel',
                    'link'          =>  '/templates/policy-sub.php',
 
                ),

                array (

                    'title'         =>  'Export Delivery Group',
                    'link'          =>  '/templates/policy-sub.php',

                ),

                array (

                    'title'         =>  'Industry Statistics Panel',
                    'link'          =>  '/templates/policy-sub.php',

                ),

                array (

                    'title'         =>  'Small Brewer Relief WG',
                    'link'          =>  '/templates/policy-sub.php',

                ),

                array (

                    'title'         =>  'Logistics Health and Safety Panel',
                    'link'          =>  '/templates/policy-sub.php',

                ),

                array (

                    'title'         =>  'Duty Operations Panel',
                    'link'          =>  '/templates/policy-sub.php',

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 6; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/licencees-card.php');

            }

        ?>

    </grid>

        </div>

        <hr/>
        <div class="push-bottom-4">
            <flex justify="between" class="push-bottom-2">
                <h2>News</h2>
                <a href="/templates/news-index-member.php"><button type="button">See all news</button></a>
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

<!--         <div class="push-bottom-4">

            <flex justify="between" class="push-bottom-2">
                <h2>Minutes</h2>
                <button type="button">See all minutes</button>
            </flex>

            <grid sizes="12|4|4">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
            </grid>
        </div>
        <hr/>

        <div class="push-bottom-4">
        
            <flex justify="between" class="push-bottom-2">
                <h2>Other relevant documents</h2>
                <button type="button">See all documents</button>
            </flex>

            <grid sizes="12|4|4">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
            </grid>
        </div> -->

        <div class="push-bottom-4">
        
            <flex justify="between" class="push-bottom-2">
                <h2>Next meetings</h2>
                <button type="button">See all meetings</button>
            </flex>

            <grid sizes="6|4|4">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><h2>24th August</h2><p>Friday</p><p class="text-align-right pad-top-3">1.30 PM</p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><h2>26th November</h2><p>Friday</p><p class="text-align-right pad-top-3">1.30 PM</p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><h2>28th December</h2><p>Friday</p><p class="text-align-right pad-top-3">1.30 PM</p></div>
            </grid>
        </div>


    </article>

    <aside large="3" class="spacing">

            <div class="bg-2 pad-sides-1 pad-verticals-1 spacing text-align-center">
                <div class="push-bottom-1"><a href="/templates/single-technical-circular.php"><button class="med">Technical Circulars</button></a></div>
                <div class="push-bottom-1"><a href="/templates/member-briefings.php"><button class="med">Members Briefings</button></a></div>



            </div>
    </aside>


</grid>


<?php include('../src/footer.php'); ?>
