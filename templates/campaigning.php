<?php

    $title = 'Campaigning';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Campaigning</h1></div>
    <hr/>

</div>

<div class="contained spacing bg-0 contained pad-bottom-3 relative z-1">
    <grid>
        <article large="9" medium="9" small="12">
            <a href="/templates/campaign-single.php">
                <div class="bg-4 relative cover z--1" style="opacity: 1; background-image: url('http://s3.amazonaws.com/bbpa-prod/attachments/slide/image/144/original/duty%20campaign%20banner%202.jpg?1484652640');">
                <div class="pad-sides-2 pad-top-2 pad-bottom-18"><h2>#cutbeertax<br/>Ask your MP to support a cut in beer tax</h2></div>
                </div>   
            </a> 
        </article>
    
        <aside small="12" medium="3" large="3">
        <div class="bg-2 text-align-center">
            <p class="pad-verticals-1">Download the BBPA's new The Beer &amp; Pub Story: Facts on Tap leaflet</p>
            <div class="pad-sides-2"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1729/original/cover%20for%20website.jpg?1499782821"/></div>
            <div class="text-align-center pad-sides-1 pad-verticals-1"><a href="http://s3.amazonaws.com/bbpa-prod/attachments/documents/uploads/24683/original/Beer%20Story_2017_single%20pages.pdf?1499680304"><button>Download</button></a></div>
            </div>
        </aside>
    </grid>
   </div> 

<div class="contained spacing pad-verticals-2">
    <div class="bg-2 push-bottom-1 pad-verticals-1">
        <flex justify="between">
            <div class="pad-sides-1">Show:</div>
            <flex>
                <div class="pad-sides-1"><button class="pad-sides-1">Issues</button></div>
                <div class="pad-sides-1"><button class="pad-sides-1">Events &amp; Awards</button></div>
            </flex>
            <div> </div>
        </flex>
    </div>
    <grid sizes="12|4|3" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Beer Duty',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23516/original/link.png?1430146206'
 
                ),

                array (

                    'title'         =>  'Cut Beer Tax',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/24441/original/beerandpubjobs%20link.png?1484652568'

                ),

                array (

                    'title'         =>  'Better Rates for Pubs',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/22336/original/Better%20Rates%20for%20Pubs%20linkbox.jpg?1383733110'

                ),

                array (

                    'title'         =>  'Kegaware',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/21450/original/kegawarelinkbox.jpg?1337865123'

                ),

                array (

                    'title'         =>  'Challenge 21',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23590/original/c21%20link.png?1433516873'

                ),

                array (

                    'title'         =>  'Unit Awareness Campaign',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/24259/original/unit%20poster%20jpeg.jpg?1470064823'

                ),

                array (

                    'title'         =>  'Environment',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23958/original/Many%20hops.jpg?1459759538'

                ),

                array (

                    'title'         =>  'The Law - Serving Drunks',
                    'link'          =>  '/templates/campaign-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23381/original/mate%20in%20a%20state%20link.jpg?1425983333'

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 8; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/campaign-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
