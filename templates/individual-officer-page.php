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
        <h1><?= live($page->officer_name, 'words|2')?></h1>
        <h4><?= live($page->role, 'words|3')?></h4>
        <p><?= live($page->about_me, 'sentences|3')?></p>
        <h2><i class="fa fa-twitter" aria-hidden="true"></i></h2>
        <p><?= live($page->contact_information_block, 'words|3')?></p>

    </div>

    <div class="cover z--1" large="4" style="background-image: url('https://uclu.org/sites/uclu.org/files/styles/medium/public/halima_sqr.jpg?itok=pqOGKE1-');">
    </div>


</grid>



<grid class="contained pad-verticals-2">

    <article large="8" class="spacing push-bottom-4 max-images">



    <section small-medium-large="12" class="pad-verticals-2">

        <h3>As Education and Campaigns Officer, I:</h3>
        <p><?= live($page->about_my_role, 'sentences|3')?></p>

    </section>


    <section small-medium-large="12" class="pad-verticals-2">

        <h3>My election campaign focused on the following topics:</h3>
        <p><?= live($page->my_election_commitments, 'sentences|3')?></p>

    </section>

    <section small-medium-large="12" class="pad-verticals-2">

        <h3>Current projects and campaigns</h3>

    </section>

    <section class="border spacing pad">
        <h4>Promoting the NSS Boycott</h4>
    </section>
    <section class="border spacing pad">
        <h4>More study space for term 3</h4>
    </section>
    <section class="border spacing pad">
        <h4>Lobbying for earlier release of exam timetables for students</h4>
    </section>
        <section class="border spacing pad">
        <h4>Promoting an interest free loan platform for students</h4>
    </section>




    </article>

    <aside large="3" class="spacing text-align-center pad-verticals-2">

        <h2>From Halima <a href="#">Writing</a></h2>

        <grid>

        <div medium="6" small="12" large="12">

        <?php

            $post = array (

                'title'         =>  'We did it! NSS Boycott Success!',
                'link'          =>  '#',

            );

            include('blocks/feedcard.php');

        ?>

        </div>

        <div medium="6" small="12" large="12">

        <?php

            $post = array (

                'title'         =>  'More Study Spaces & A Bouncy Castle',
                'link'          =>  '#',

            );

            include('blocks/feedcard.php');

        ?>

        </div>

        <div medium="6" small="12" large="12">

        <?php

            $post = array (

                'title'         =>  'Exam Timetable Update',
                'link'          =>  '#',

            );

            include('blocks/feedcard.php');

        ?>

        </div>

        <div medium="6" small="12" large="12">
            <div class="bg-2" >

                <div class="pad-verticals-3 pad-sides-2 spacing text-align-center">
                    <div>
                        <h3><a href="https://uclu.org/blog/94047">More at Halima's Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                    </div>

                </div>

            </div>
        </div>
        </grid>

    </aside>

</grid>

<?php include('../src/footer.php'); ?>
