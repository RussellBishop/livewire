<?php

    $title = 'Home';

    require '../src/src.php';

    $page = new Page(4539848);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'home'; include('blocks/navigation.php'); ?>

<grid justify="centre" direction="column" class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1 min-height-85vh">

    <div class="fill cover z--1" style="opacity: .5; background-image: url('https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-X4WW6qv/0/6074bb88/X3/UCLU_June2017-161-X3.jpg');">
    </div>

    <div class="spacing">
        <h0>Where <u>more</u> happens</h0>
    </div>

</grid>

<div class="contained pad-verticals-2 spacing-3">

    <grid sizes="12|6|6">

        <grid sizes="12|12|6" class="border push-bottom-1" style="margin-bottom: 0;">

            <grid justify="centre" direction="column" class="pad pad-verticals-2" style="margin-bottom: 0;">

                <div class="spacing">

                    <h1><a href="#">Welcome Week 2017</a></h1>

                    <h2>Plan the best introduction to university life possible</h2>

                    <p><a href="#" class="button">Check out Welcome Week</a></p>

                </div>

            </grid>

            <div class="cover ratio-60 relative" style="background-image: url('https://static1.squarespace.com/static/5733512922482eea8ecba1c5/573b23b637013b75a01674dd/57d693c1be65946651adc963/1474359081085/sober-college-san-diego-student-recovery-900x451.jpg?format=750w'); margin-bottom: 0;">
                <button type="button" class="absolute-centre"><icon play-circle-o></icon></button>
            </div>

        </grid>

        <grid sizes="12|12|6" class="border push-bottom-1" style="margin-bottom: 0;">

            <grid justify="centre" direction="column" class="pad pad-verticals-2 spacing" style="margin-bottom: 0;">

                <div class="spacing">

                    <h1>Creating Change</h1>

                    <p><a href="#">What else has the Union done for you?</a></p>
                    <p>Not enough? <a href="#">Suggest another change</a></p>

                </div>

            </grid>

            <grid justify="centre" direction="column" class="bg-3 relative pad" style="margin-bottom: 0;">
                <h3><a href="#"><i>&ldquo;We've worked with UCL to ensure international student fees remain the same throughout their entire degree.&rdquo;</i></a></h3>
            </grid>

        </grid>

    </grid>

    <div class="">

        <h2>Your sabbatical officers</h2>

        <grid sizes="6|2|2" class="pad-verticals-2">
            <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/mark_sqr.jpg');"></div> <div> <h4><a href="">Mark Crawford</a></h4> <p>Postgraduate Students' Officer</p></div></a></div>
            <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/mehj_sqr.jpg');"></div> <div><h4><a href="">Mehj Ahmed</a></h4> <p>Welfare and International Officer</p></div></a></div>
            <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/nick_sqr.jpg');"></div> <div> <h4><a href="">Nick Edmonds</a></h4> <p>Activities and Events Officer</p></div></a></div>
            <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/sam_sqr.jpg');"></div> <div> <h4><a href="">Sam Nicholson</a></h4> <p>Women's Officer</p></div></a></div>
            <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/sayeeda_sqr.jpg');"></div> <div> <h4><a href="">Sayeeda Ali</a></h4> <p>Black and Minority Ethnic Students' Officer</p></div></a></div>
            <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/zak_sqr.jpg');"></div> <div> <h4><a href="">Zakariya Mohran</a></h4> <p>Sustainability, Engagement and Operations Officer</p></div></a></div>
        </grid>

    </div>

    <div class="">
        <h1>News</h1>

        <grid sizes="12|6|3" class="pad-verticals-2">

            <?php

                $post = array (

                    'title'         =>  'Salsa Society - End of Year Party',
                    'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                    'link'          =>  '/templates/single-news.php',

                );

                for ($x = 1; $x <= 3; $x++) {

                    include('blocks/newsindexcard.php');

                }

            ?>

            <div class="bg-3 spacing pad pad-verticals-8 text-align-center">
                <h2><a href="#">More news</a></h2> <icon arrow-right></icon>
            </div>

        </grid>
    </div>


    <div class="">
        <h1>What's On</h1>

        <grid sizes="12|6|3" class="pad-verticals-2">
            <?php

                $post = array (

                    'title'         =>  'Salsa Society - End of Year Party',
                    'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                    'link'          =>  '/templates/single-event.php',

                );

                for ($x = 1; $x <= 3; $x++) {

                    include('blocks/eventcard.php');

                }

            ?>

            <div class="bg-3 spacing pad pad-verticals-8 text-align-center">
                <h2><a href="#">See What's On</a></h2> <icon arrow-right></icon>
            </div>

        </grid>

    </div>

</div>

<?php include('../src/footer.php'); ?>
