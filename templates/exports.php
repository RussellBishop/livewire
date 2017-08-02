<?php

    $title = 'Exports';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Exports</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            <?= live($page->introduction, 'paragraphs|1')?>
        </h3>
    </div>
</div>



<div class="contained spacing pad-verticals-2">
<grid>
        <article large="9" medium="9" small="12">
            <div class="spacing">
                <grid sizes="12|6|4" class="push-bottom-3">

                    <?php

                        $posts = array (

                            array (

                                'title'         =>  'Country profiles',
                                'link'          =>  '/templates/country-profiles.php',
                                'image'         =>  '#'
             
                            ),

                            array (

                                'title'         =>  'Best practice guides',
                                'link'          =>  '/templates/best-practices.php',
                                'image'         =>  '#'

                            ),

                            array (

                                'title'         =>  'Showcase',
                                'link'          =>  '/templates/showcase.php',
                                'image'         =>  '#'

                            ),


                        );

                        $postsCount = count($posts);

                        for ($x = 0; $x < 3; $x++) {

                            $post = $posts[$x % $postsCount];

                            include('blocks/policy-card.php');

                        }

                    ?>

                </grid>



                </div>  
        </article>
        <aside small="12" medium="3" large="3">
        <div class="bg-2 text-align-center">
            <p class="pad-verticals-1 pad-sides-1">Download the Export Strategy document</p>
            <div class="pad-sides-2 ratio-50 bg-4"></div>
            <div class="text-align-center pad-sides-1 pad-verticals-1"><a href="http://s3.amazonaws.com/bbpa-prod/attachments/documents/uploads/24683/original/Beer%20Story_2017_single%20pages.pdf?1499680304"><button>Download</button></a></div>
            </div>
        </aside>

    </grid>

</div>

<?php include('../src/footer.php'); ?>
