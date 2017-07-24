<?php

    $title = 'Homepage';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="">


</div>
<div class="contained spacing bg-0 contained pad-top-7 pad-bottom-3 relative z-1">
    <grid>
        <article large="9" medium="9" small="12">
            <div class="ratio-40 cover z--1" style="opacity: 1; background-image: url('http://s3.amazonaws.com/bbpa-prod/attachments/slide/image/135/original/Beer%20story%20banner%20with%20logos%202016%20v2.jpg?1453478640');"></div>    
        </article>
    
        <aside small="hide" large="3">
        <div class="bg-2 text-align-center pad-verticals-5">
            <h2 class="pad-sides-1">Check out our Campaigns</h2>
            <div class="text-align-center pad-sides-1 pad-verticals-1"><button>See all</button></div>
            </div>
        </aside>
    </grid>
   </div> 


        <div class="push-bottom-4 contained">
            <hr/>
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
            <hr/>
        </div>



    <grid sizes="12|6|6" class="push-bottom-3 contained">
    <div class="bg-2 text-align-center pad-verticals-10"><h2>Policies Area</h2></div>
    <div class="bg-2 text-align-center pad-verticals-10"><h2>Campaigns</h2></div>
    <div class="bg-2 text-align-center pad-verticals-10"><h2>Stats Area</h2></div>
    <div class="bg-2 text-align-center pad-verticals-10"><h2>Members Area</h2><div class="text-align-center pad-sides-1 pad-verticals-1"><a href="/templates/members-area.php"><button>Access members area <icon lock></icon></button></a></div></div>
    </grid>
</div>

<?php include('../src/footer.php'); ?>
