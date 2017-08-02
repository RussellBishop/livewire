<?php

    $title = 'Country profiles';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Country profiles</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-4 pad-sides-6">
        <h3>
            <?= live($page->introduction, 'paragraphs|1')?>
        </h3>
    </div>
</div>



<div class="contained spacing pad-verticals-2">

    <h3 data-target="faqe<?=$i?>" data-action="toggle"><a href="#">Europe</a></h3>

    <group>
        <div data-id="faqe<?=$i?>">
            <div class=" spacing pad-verticals-2">

                <grid sizes="12|6|4" class="push-bottom-3">

                    <?php

                        $posts = array (

                            array (

                                'title'         =>  'France',
                                'link'          =>  '/templates/country-single.php',
             
                            ),

                            array (

                                'title'         =>  'Italy',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Ireland',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Germany',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Netherlands',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Sweden',
                                'link'          =>  '/templates/country-single.php',

                            ),
                            array (

                                'title'         =>  'Belgium',
                                'link'          =>  '/templates/country-single.php',
             
                            ),

                            array (

                                'title'         =>  'Spain',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Norway',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Switzerland',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Russia',
                                'link'          =>  '/templates/country-single.php',

                            ),
                        );

                        $postsCount = count($posts);

                        for ($x = 0; $x < 11; $x++) {

                            $post = $posts[$x % $postsCount];

                            include('blocks/licencees-card.php');

                        }

                    ?>

                </grid>
            </div>

        </div>
    </group>

<hr />

</div>



<div class="contained spacing pad-verticals-2">

    <h3 data-target="faqn<?=$i?>" data-action="toggle"><a href="#">North America</a></h3>

    <group>
        <div data-id="faqn<?=$i?>">


            <div class=" spacing pad-verticals-2">

                <grid sizes="12|6|4" class="push-bottom-3">

                    <?php

                        $posts = array (

                            array (

                                'title'         =>  'Canada',
                                'link'          =>  '/templates/country-single.php',
             
                            ),

                            array (

                                'title'         =>  'USA',
                                'link'          =>  '/templates/country-single.php',

                            ),

                        );

                        $postsCount = count($posts);

                        for ($x = 0; $x < 2; $x++) {

                            $post = $posts[$x % $postsCount];

                            include('blocks/licencees-card.php');

                        }

                    ?>

                </grid>
            </div>
        </div>
    </group>

<hr />

</div>



<div class="contained spacing pad-verticals-2">

    <h3 data-target="faqa<?=$i?>" data-action="toggle"><a href="#">Asia</a></h3>

    <group>
        <div data-id="faqa<?=$i?>">
            <div class=" spacing pad-verticals-2">

                <grid sizes="12|6|4" class="push-bottom-3">

                    <?php

                        $posts = array (

                            array (

                                'title'         =>  'China',
                                'link'          =>  '/templates/country-single.php',
             
                            ),

                            array (

                                'title'         =>  'Japan',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'South Korea',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'Russia',
                                'link'          =>  '/templates/country-single.php',

                            ),

                            array (

                                'title'         =>  'UAE',
                                'link'          =>  '/templates/country-single.php',

                            ),

                        );

                        $postsCount = count($posts);

                        for ($x = 0; $x < 5; $x++) {

                            $post = $posts[$x % $postsCount];

                            include('blocks/licencees-card.php');

                        }

                    ?>

                </grid>
            </div>

        </div>
    </group>

<hr />

</div>










<div class="contained spacing pad-verticals-2">

    <h3 data-target="faqc<?=$i?>" data-action="toggle"><a href="#">Australia</a></h3>

    <group>
        <div data-id="faqc<?=$i?>">
            <div class=" spacing pad-verticals-2">

                <grid sizes="12|6|4" class="push-bottom-3">

                    <?php

                        $posts = array (

                            array (

                                'title'         =>  'Australia',
                                'link'          =>  '/templates/country-single.php',
             
                            ),


                        );

                        $postsCount = count($posts);

                        for ($x = 0; $x < 1; $x++) {

                            $post = $posts[$x % $postsCount];

                            include('blocks/licencees-card.php');

                        }

                    ?>

                </grid>
            </div>

        </div>
    </group>

<hr />

</div>



<div class="contained spacing pad-verticals-2">

    <h3 data-target="faqb<?=$i?>" data-action="toggle"><a href="#">South America</a></h3>

    <group>
        <div data-id="faqb<?=$i?>">
            <div class=" spacing pad-verticals-2">

                <grid sizes="12|6|4" class="push-bottom-3">

                    <?php

                        $posts = array (

                            array (

                                'title'         =>  'Brazil',
                                'link'          =>  '/templates/country-single.php',
             
                            ),


                        );

                        $postsCount = count($posts);

                        for ($x = 0; $x < 1; $x++) {

                            $post = $posts[$x % $postsCount];

                            include('blocks/licencees-card.php');

                        }

                    ?>

                </grid>
            </div>

        </div>
    </group>

<hr />

</div>




<?php include('../src/footer.php'); ?>
