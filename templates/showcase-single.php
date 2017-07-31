<?php

    $title = 'Individual Company';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Heineken</h1></div>
    <hr/>
    <flex justify="between">
    <div> </div>
    <img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21326/original/heineken%20hero.png?1431426550"/>
    <div> </div>
    </flex>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            <p>Heineken is the UK’s leading cider and beer producer and the name behind iconic drinks brands such as Strongbow, Bulmers, Heineken®, Foster's, Kronenbourg 1664 and Desperados, together with a full range of speciality brands.</p><p>We employ around 2,000 people across our 8 sites in the UK. We have breweries, cider plants and offices in Edinburgh, Livingston, Tadcaster, Manchester, London, Hereford and Ledbury.</p><p>More than 90% of our beer sold in the UK is brewed in the UK and we are a major supporter of British agriculture, sourcing 100% of our malt and barley for our UK brewed beer from UK farms and maltsters. Around 30% of all UK apples are used to produce our ciders.</p>
        </h3>
    </div>
</div>



<div class="contained spacing pad-verticals-2">

    <grid sizes="6|3|3" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Beer brand',
                    'link'          =>  'http://www.beerforthat.com/explorer/beer/intrepid-porter',
                    'image'         =>  'http://c00fd98932c6cb6a833b-b82db0d14c7ca90421a316af2af13d02.r66.cf3.rackcdn.com/beer/577a6c3a2d073.jpg'
 
                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 8; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/beerbrand-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
