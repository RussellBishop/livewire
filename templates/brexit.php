<?php

    $title = 'Brexit';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Brexit</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            Britain’s pubs and brewers are committed to delivering a great customer experience, rewarding careers and fantastic development opportunities. The sector has a unique role in enhancing Britain’s reputation overseas and is well placed to be a driving force for growth as the UK prepares to leave the European Union. For British businesses to thrive in a post-Brexit world we should strive to operate the most competitive tax and regulatory regime in Europe. From a resurgence in British beer exports, to major job creation in pubs and the provision of great hospitality for millions of tourists each year, delivering a highly competitive tax and regulatory environment for beer and pubs will reap major rewards for UK plc
        </h3>
    </div>
</div>




<grid class="contained pad-verticals-2">
   <article large="9" class="spacing max-images">
<div class="spacing pad-verticals-2">

    <grid sizes="12|12|12" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'image'         =>  'Pictogram',
                    'title'         =>  'Promoting Great British Beer &amp; Pubs',
                    'info'          =>  'British brewing and pub industries have been enormous beneficiaries of overseas tourism. For many tourists, our food and drink is an essential part of a visit to the UK.',
                    'points'        =>  '<ul><li>Greater support for promotion of British goods in the UK and overseas markets</li><li>Government and Visit Britain to bolster activity to communicate the UK as a welcoming destination in overseas markets</li><li>Government to clarify no change in the entry requirements for visitors to the UK for at least two years</li><li>The UK to maintain access to Regional Protected Status for food and drink products that have traditional or regional characteristics or qualities</li><li>Simplification of visa requirements for visitors from non-EU countries</li></ul>'
 
                ),
                array (

                    'image'         =>  'Pictogram',
                    'title'         =>  'Attracting skills and labour',
                    'info'          =>  'It is vital for brewers and pubs that there remains access to the skills and labour the sector needs to grow and that we retain a business environment that provides for a productive and motivated workforce.',
                    'points'        =>  '<ul><li>No changes to the rights of existing overseas workers in the industry and within the supply chain</li><li>Any future immigration system to support ffectively the necessary levels of staffing for UK businesses</li><li>Any quota system to take account of the service sector and areas of staff shortages (such as pub chefs)</li><li>Maintaining strong working practices with no erosion of current employment rights</li></ul>'
 
                ),
                array (

                    'image'         =>  'Pictogram',
                    'title'         =>  'Trading as freely as possible',
                    'info'          =>  'It is vital for British brewers that trading relationships are free and open, so that our sector can continue to flourish and create jobs and growth: and the rest of the world can experience the pleasure of a great British beer.',
                    'points'        =>  '<ul><li>A free trade deal with the EU as a priority with no tariffs or additional paperwork for beer exports</li><li>Free trade deals with key third-country partners and the rest of the world that benefit beer exports</li><li>No introduction of minimum pricing which would be inconsistent with free trade and open markets</li><li>Maintaining a food safety system that is compliant with the demands of leading trade partners around the world</li><li>A review of where state aid and free movement rules are hampering business support</li></ul>'
 
                ),
                array (

                    'image'         =>  'Pictogram',
                    'title'         =>  'A favourable tax regime',
                    'info'          =>  'We need a tax regime that encourages investment in Britain’s pubs and breweries to ensure a great customer experience. The UK currently has the second highest excise levels in the EU and it is vital this burden is reduced to allow our sector to compete following Brexit.',
                    'points'        =>  '<ul><li>A more competitive excise duty regime that supports growth in exports of British beer, encourages the consumption of lowerstrength drinks and supports pubs</li><li>Reduced VAT on pub meals</li><li>An increase in Climate Change Agreement discounts and the EU Emissions Trading Scheme to be replaced by a simpler system.</li><li>Partnership working with industry to consider new opportunities to tackle duty fraud.</li><li>Support for the domestic production of key raw materials for brewing such as malting barley and hops through an effective subsidy regime for Britain’s farmers</li></ul>'
 
                ),
                array (

                    'image'         =>  'Pictogram',
                    'title'         =>  'Effective and proportionate regulation',
                    'info'          =>  'The sector faces a very significant regulatory burden. The removal or adoption of EU Directives must cause minimal disruption to business whilst taking the opportunity to establish a more competitive business environment that supports a thriving beer and pub sector.',
                    'points'        =>  '<ul><li>Adoption of EU Competition Law</li><li>A better, more cost effective framework for recycling</li><li>Adopt the existing EU food labelling regime</li><li>Maintain standard product measurements</li><li>Effective regulation of approved pesticides, with a strong, central role for DEFRA</li><li>Adoption of the EU copyright system</li><li>Work with industry to identify other opportunities to develop a more effective and light touch regulatory regime particularly for SMEs</li><li>EU legislation currently implemented to be the default starting point where time is needed to get regulation right for UK business</li></ul>'
 
                ),
            );

            $postsCount = count($posts);

            for ($x = 0; $x < 5; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/brexit-card.php');

            }

        ?>
</div>
    </grid>
        <div class="push-bottom-4">
            <flex justify="between" class="push-bottom-2">
                <h2>Briefings</h2>
                <button type="button">See all briefings</button>
            </flex>

            <grid sizes="12|12|12">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p><p class="text-small o-20">Friday 12th May 2017</p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><icon download></icon></flex><p><p class="text-small o-20">Friday 12th May 2017</p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p><p class="text-small o-20">Friday 12th May 2017</p></p></div>
            </grid>
        </div>
<hr/>
        <div class="push-bottom-4">
            <flex justify="between" class="push-bottom-2">
                <h2>News</h2>
                <a href="/templates/news-index.php"><button type="button">See all news</button></a>
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

            <div class="border pad-sides-2 pad-verticals-1 spacing">
                <h2 class="text-align-center push-bottom-2">Relevant Panels</h2>
                <p><?= live($page->whatweoffer, 'sentences|1')?></p>
                <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><a href="/templates/single-individual-panel.php">Future Beer Group</a></div>
                <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><a href="/templates/single-individual-panel.php">Environment, Health &amp; Safety Panel</a></div>
                <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><a href="/templates/single-individual-panel.php">Duty Operations Panel</a></div>


            </div>
    </aside>
</grid>
<?php include('../src/footer.php'); ?>
