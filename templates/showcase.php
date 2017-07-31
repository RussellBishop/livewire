<?php

    $title = 'Showcase';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Showcase</h1></div>
    <hr/>

</div>

<div class="contained spacing bg-0 contained pad-bottom-3 relative z-1">
    <grid>
        <article large="9" medium="9" small="12">
        <div class="bg-2 pad-verticals-4 pad-sides-6">
            <h3>
                <?= live($page->introduction, 'paragraphs|1')?>
            </h3>
        </div>

<div class="spacing pad-verticals-2">

    <grid sizes="12|4|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Heineken',
                    'link'          =>  '/templates/showcase-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21326/original/heineken%20hero.png?1431426550',
                    'info'          =>  'Heineken is the UK’s leading cider and beer producer with a full range of speciality brands.'
 
                ),

                array (

                    'title'         =>  'Fuller Smith and Turner plc',
                    'link'          =>  '/templates/showcase-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/link_box_image/21320/original/fullers%20link%20link.png?1448274858',
                    'info'          =>  'Fuller Smith & Turner PLC is London last remaining traditional family brewer.'

                ),

                array (

                    'title'         =>  'Everards',
                    'link'          =>  '/templates/showcase-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21280/original/Everards%20Full%20Colour%20for%20Pale%20Backgrounds.jpg?1467985358',
                    'info'          =>  'Everards Brewery is very much a family run company with values that echo that of William Everard.'

                ),

                array (

                    'title'         =>  'Titanic Brewing Co Ltd',
                    'link'          =>  '/templates/showcase-single.php',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/21356/original/titanic%20hero.png?1431433054',
                    'info'          =>  'Founded in Burslem Stoke on Trent in 1985 and from humble beginnings has grown beyond all expectations.'

                ),
            );

            $postsCount = count($posts);

            for ($x = 0; $x < 12; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/showcase-card.php');

            }

        ?>

    </grid>
</div>

        </article>
    
        <aside small="hide" large="3">
            <div class="pad-sides-2 bg-2 pad-verticals-1 spacing">
                <h2 class="text-align-center push-bottom-2">Contact form</h2>
                <p>Please enter your details below to enquire about working with BBPA.</p>
                <fieldset>

                    <label for="edit-title">Name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Email</label>

                    <input type="text" id="edit-title">

                </fieldset>

                <button>Submit</button>

            </div>
        </aside>
    </grid>
   </div> 



<?php include('../src/footer.php'); ?>
