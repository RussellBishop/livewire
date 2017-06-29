<?php

    $title = 'Your sabbatical officers : Halima Begum';

    require '../src/src.php';

    $page = new Page(4540650);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'makeachange'; include('blocks/navigation.php'); ?>

<grid class="bg-5 contained relative z-1">

    <div large="8" class="spacing push-top-10 pad-verticals-2">
        <h4 class="pad-verticals-4"><a href="/templates/news.php">&larr; back to Make a change</a></h4>
        <h1><?= live($page->officer_name, 'words|2')?></h1>
        <h4><?= live($page->role, 'words|3')?></h4>
        <p><?= live($page->about_me, 'sentences|3')?></p>

        <div class="spacing pad-verticals-1">
            <grid>
                <div small-medium-large="4" class="bg-4 pad-verticals-1 pad-sides-2 text-align-center">
                    <?php include('blocks/share.php'); ?>
                </div>
                <div small-medium-large="4" class="bg-4 pad-verticals-1 text-align-center"><p><?= live($page->contact_information_block, 'words|3')?></p></div>
                <div small-medium-large="4" class="bg-4 pad-verticals-1 pad-sides-2"><p><icon phone></icon>  020 7679 7893</p></div>
            </grid>
        </div>

    </div>

    <div class="cover z--1" large="4" style="background-image: url('https://uclu.org/sites/uclu.org/files/styles/medium/public/halima_sqr.jpg?itok=pqOGKE1-');">
    </div>

</grid>


<grid class="contained pad-verticals-2">

    <article large="8" class="spacing push-bottom-4 max-images">

        <section small-medium-large="12" class="pad-verticals-2">
            <h2>Current projects and campaigns</h2>
        </section>
        <a href="">
            <section class="border spacing pad">
                <h4>Promoting the NSS Boycott</h4>
            </section>
        </a>
        <a href="">
            <section class="border spacing pad">
                <h4>More study space for term 3</h4>
            </section>
        </a>
        <a href="">
            <section class="border spacing pad">
                <h4>Lobbying for earlier release of exam timetables for students</h4>
            </section>
        </a>
        <a href="">
            <section class="border spacing pad">
                <h4>Promoting an interest free loan platform for students</h4>
            </section>
        </a>
            <section small-medium-large="12" class="pad-verticals-2">
                <h3>As Education and Campaigns Officer, I:</h3>
                <p><?= live($page->about_my_role, 'sentences|3')?></p>
            </section>
    </article>

    <aside large="3" class="spacing pad-verticals-2">

        <h2>From Halima <a href="#">Writing</a></h2>

        <grid sizes="6|12|12">

            <div>

                <?php

                    $post = array (

                        'title'         =>  'We did it! NSS Boycott Success!',
                        'link'          =>  '#',

                    );

                    include('blocks/feedcard.php');

                ?>

            </div>

            <div>

                <?php

                    $post = array (

                        'title'         =>  'More Study Spaces & A Bouncy Castle',
                        'link'          =>  '#',

                    );

                    include('blocks/feedcard.php');

                ?>

            </div>

            <div>

                <?php

                    $post = array (

                        'title'         =>  'Exam Timetable Update',
                        'link'          =>  '#',

                    );

                    include('blocks/feedcard.php');

                ?>

            </div>

        </grid>

    </aside>

</grid>

<grid class="pad-verticals-2 bg-3">
    <section small-medium-large="12" class="pad-verticals-2 spacing">

        <flex justify="between" class="push-bottom-2 contained">
            <h3>Halima's Events</h3>
            <button type="button">Explore more events</button>
        </flex>

        <grid sizes="12|3|3" class="contained">

            <div class="border">
                <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-50" style="background-image: url('http://uclu.org/sites/uclu.org/files/styles/large/public/young_hackney_0.jpg?itok=BjdxRcOw');"></a>
                <div class="pad spacing">
                    <div>
                        <h3><a href="<?=$post['link'];?>">Personal Best Finals with Young Hackney</a></h3>
                        <p>UCL Jazz Society</p>
                    </div>

                    <div class="text-small">
                        <p>The Institute Bar</p>
                        <p class="o-40">Friday 12th May 2017, 11pm - 2am</p>
                    </div>
                </div>

            </div>

            <div class="border">
                <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-50" style="background-image: url('http://uclu.org/sites/uclu.org/files/styles/large/public/screen_shot_2017-04-26_at_17.06.00.png?itok=V0MHMbdZ');"></a>
                <div class="pad spacing">
                    <div>
                        <h3><a href="<?=$post['link'];?>">End of Year Party</a></h3>
                        <p>UCL Jazz Society</p>
                    </div>

                    <div class="text-small">
                        <p>The Institute Bar</p>
                        <p class="o-40">Friday 12th May 2017, 11pm - 2am</p>
                    </div>
                </div>
            </div>

            <div class="border">
                <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-50" style="background-image: url('http://uclu.org/sites/uclu.org/files/styles/large/public/young_hackney_0.jpg?itok=BjdxRcOw');"></a>
                <div class="pad spacing">
                    <div>
                        <h3><a href="<?=$post['link'];?>">Personal Best Finals with Young Hackney</a></h3>
                        <p>UCL Jazz Society</p>
                    </div>

                    <div class="text-small">
                        <p>The Institute Bar</p>
                        <p class="o-40">Friday 12th May 2017, 11pm - 2am</p>
                    </div>
                </div>
            </div>

            <div class="border">
                <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-50" style="background-image: url('http://uclu.org/sites/uclu.org/files/styles/large/public/young_hackney_0.jpg?itok=BjdxRcOw');"></a>
                <div class="pad spacing">
                    <div>
                        <h3><a href="<?=$post['link'];?>">Personal Best Finals with Young Hackney</a></h3>
                        <p>UCL Jazz Society</p>
                    </div>

                    <div class="text-small">
                        <p>The Institute Bar</p>
                        <p class="o-40">Friday 12th May 2017, 11pm - 2am</p>
                    </div>
                </div>
            </div>

        </grid>   

    </section>
</grid>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing push-bottom-4 max-images">

        <section small-medium-large="12" class="pad-verticals-2">
            <h3>My election campaign focused on the following topics:</h3>
            <p><?= live($page->my_election_commitments, 'sentences|3')?></p>
        </section>


    </article>

</grid>
<div class="contained">
<h3>Meet other officers</h3>
<grid sizes="12|2|2" class="pad-verticals-2">
    <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/mark_sqr.jpg');"></div> <div> <h4><a href="">Mark Crawford</a></h4> <p>Postgraduate Students' Officer</p></div></a></div> 
    <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/mehj_sqr.jpg');"></div> <div><h4><a href="">Mehj Ahmed</a></h4> <p>Welfare and International Officer</p></div></a></div>
    <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/nick_sqr.jpg');"></div> <div> <h4><a href="">Nick Edmonds</a></h4> <p>Activities and Events Officer</p></div></a></div>
    <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/sam_sqr.jpg');"></div> <div> <h4><a href="">Sam Nicholson</a></h4> <p>Women's Officer</p></div></a></div>
    <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/sayeeda_sqr.jpg');"></div> <div> <h4><a href="">Sayeeda Ali</a></h4> <p>Black and Minority Ethnic Students' Officer</p></div></a></div>
    <div class="spacing"><a href=""><div class="block bg-3 cover ratio-100" style="background-image: url('/assets/img/zak_sqr.jpg');"></div> <div> <h4><a href="">Zakariya Mohran</a></h4> <p>Sustainability, Engagement and Operations Officer</p></div></a></div>
</grid>
</div>
<?php include('../src/footer.php'); ?>
