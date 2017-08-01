<?php

    $title = 'USA';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>USA</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            <?= live($page->introduction, 'paragraphs|1')?>
        </h3>
    </div>
</div>
    
<div class="contained spacing bg-0 contained pad-bottom-3 relative z-1">
    <grid>
        <article large="9" medium="9" small="12">
            <div class="spacing">

                    <?php

                        $faqs = array (

                            array (

                                'title'         =>  'Alcoholic drinks market',
                                'content'         =>  '<p>Between 2008 and 2013, the beer duty escalator, which increased beer duty automatically, by 2% above the rate of inflation each year, hugely damaged the beer and pub industry.</p><p>Tax on beer rose by more than 40% during this time, with over a third of the price of a pint going straight to the taxman. Around 7,000 pubs closed and 58,000 jobs in the beer and pub industry were lost.</p>',

                            ),

                            array (

                                'title'         =>  'Local experience',
                                'content'       =>  '<p>The one penny tax cut in 2013’s Budget was a turning point for the beer and pub industry.</p><p>Up to that point, brewers and publicans had endured six above-inflation duty increases in five years; they were left feeling that the Government didn’t appreciate the contribution the beer industry made to the economy.</p>',

                            ),

                        );


                        $faqsCount = count($faqs);

                        for ($i = 0; $i < $faqsCount; $i++) {

                            $faq = $faqs[$i % $faqsCount];

                            include('blocks/campaignheading.php');

                        }

                    ?>

                </div>

            <div class="spacing pad-verticals-2 text-align-center">
                <h3>Brewers</h3>
                <hr/>
                <grid sizes="6|3|3">
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21356/original/titanic%20hero.png?1431433054"/></a>
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21326/original/heineken%20hero.png?1431426550"/></a>
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/21320/original/fullers%20link%20link.png?1448274858"/></a>
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21356/original/titanic%20hero.png?1431433054"/></a>
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21326/original/heineken%20hero.png?1431426550"/></a>
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/21320/original/fullers%20link%20link.png?1448274858"/></a>
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21326/original/heineken%20hero.png?1431426550"/></a>
                    <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/21320/original/fullers%20link%20link.png?1448274858"/></a>
                </grid>

            </div>
    </article>
    <aside class="spacing" small="hide" large="3">
            <div class="text-align-center bg-2 pad-sides-1 pad-verticals-1"><a href="/templates/stats.php"><button>Check the USA Export stats</icon></button></a></div>
    </aside>
</grid>
</div>
<?php include('../src/footer.php'); ?>
