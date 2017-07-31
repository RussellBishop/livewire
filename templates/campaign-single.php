<?php

    $title = 'Beer Duty';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Beer Duty</h1></div>
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
            <div class="ratio-40 cover z--1 push-bottom-2" style="opacity: 1; background-image: url('http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/23516/original/Hero.png?1430146202');"></div>  


<grid large="9" medium="12" small="12">

    <div class="spacing">

        <?php

            $faqs = array (

                array (

                    'title'         =>  'A history of duty hikes',
                    'content'         =>  '<p>Between 2008 and 2013, the beer duty escalator, which increased beer duty automatically, by 2% above the rate of inflation each year, hugely damaged the beer and pub industry.</p><p>Tax on beer rose by more than 40% during this time, with over a third of the price of a pint going straight to the taxman. Around 7,000 pubs closed and 58,000 jobs in the beer and pub industry were lost.</p>',

                ),

                array (

                    'title'         =>  'Beer tax breakthrough',
                    'content'       =>  '<p>The one penny tax cut in 2013’s Budget was a turning point for the beer and pub industry.</p><p>Up to that point, brewers and publicans had endured six above-inflation duty increases in five years; they were left feeling that the Government didn’t appreciate the contribution the beer industry made to the economy.</p>',

                ),

                array (

                    'title'         =>  'A brighter future?',
                    'content'       =>  '<p>The 2013, 2014 and 2015 Budgets recognised the unique economic and social value of beer and pubs, with an unprecedented hat-trick of beer duty cuts. This was followed by a freeze in the duty rate in 2016.</p><p>These measures secured thousands of jobs in the sector and boosted investment in pubs by hundreds of millions of pounds. 
Currently beer price increases in pubs are at their lowest since the 1980’s.</p>',

                ),

                array (

                    'title'         =>  'March 2017 Budget',
                    'content'       =>  '<p>In the March 2017 Budget, Chancellor Philip Hammond announced that the government would be reverting to previously planned \'uprisings\' of duties on alcohol.
This meant a 2p-a-pint increase in beer duty, the first rise in five years and £19.08/hl/% abv.</p><p>The increase was linked to inflation, which is currently running at 3.9%, so effectively a tax of almost £130 million on beer. This effectively ended a freeze that had protected beer from further duty increases.  There was some small respite:  the Chancellor also announced pubs would receive extra help with their business rates bill with a rate relief for one year.</p><p>This meant £1,000 off rates for all pubs with a rateable value of less than £100,000.</p>',

                ),

                array (

                    'title'         =>  'Existing Issues',
                    'content'       =>  '<p>After years of above inflation duty increases (between 2008 and 2013 beer duty increased by a staggering 42%) the BBPA feels beer is still overtaxed. Britons pay almost 40% of all EU beer duty but only consume 12% of the beer.</p><p>Even with the recent duty cuts, the industry is under severe pressure. Beer duty is one of the many cost increases crippling pubs, alongside other factors such as business rates, national minimum wage and movements to moderate alcohol consumption. The smoking ban of 2007 has also impacted negatively on pubs.</p><p>The Beer and Pub Association feels the tax burden on pubs is unfair and disproportionate when compared to other sectors such as agriculture and charities, who receive much more help.  We think efforts need to be intensified to tackle the issue of pub closures and job losses in such an historic and uniquely British field.</p><p>Any future tax increases will curtail renewed ambition, damage jobs and inhibit investment in manufacturing and skills.</p><p>We want beer to remain affordable for Britain’s 32 million pub goers. Visit the <a href="http://cutbeertax.com/#/?_k=uf7ppa">Cut Beer Tax</a> website to email your MP asking them to support a cut in beer duty.</p>',

                ),

            );


            $faqsCount = count($faqs);

            for ($i = 0; $i < $faqsCount; $i++) {

                $faq = $faqs[$i % $faqsCount];

                include('blocks/campaignheading.php');

            }

        ?>

    </div>
</grid>
<div class="text-align-center">
    <h3>Our partners</h3>
    <hr/>
    <grid sizes="6|3|3">
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23180/original/ALMR.png?1416484999"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23181/original/BFBI.png?1416485870"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23182/original/BII.png?1416487183"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23187/original/PMA.png?1416488894"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23188/original/SIBA.png?1416489190"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23189/original/CIU.png?1416489635"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23180/original/ALMR.png?1416484999"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23181/original/BFBI.png?1416485870"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23182/original/BII.png?1416487183"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23187/original/PMA.png?1416488894"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23188/original/SIBA.png?1416489190"/></a>
        <a href="#"><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/23189/original/CIU.png?1416489635"/></a>
    </grid>
</div>
        </article>
    
        <aside class="spacing" small="hide" large="3">
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Policy</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Single Campaign</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Download documents</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Link</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Image Link</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">News</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Beer Fact</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Twitter</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Related content</h3>
            </div>
            <div class="bg-2 text-align-center">
                <h3 class="pad pad-verticals-2">Related content image</h3>
            </div>
        </aside>
    </grid>
   </div> 



<?php include('../src/footer.php'); ?>
