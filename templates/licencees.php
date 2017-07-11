<?php

    $title = 'Licensees';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'members'; $menu = 'members'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Licensees</h2></div>
    <hr/>
    <div class="bg-2 contained pad-verticals-4">
        <h3>
            <?= live($page->introduction, 'paragraphs|2')?>
        </h3>
    </div>
</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">
<div class="spacing">

    <grid sizes="12|6|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Licensee',
                    'link'          =>  '#',

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 9; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/licencees-card.php');

            }

        ?>

    </grid>

    <div class="pad-verticals-4">
        <h2 class="text-align-center push-bottom-4">What we offer</h2>
        <p class="pad-verticals-2">
            <?= live($page->whatweoffer, 'paragraphs|1')?>
        </p>
        <ul>
            <li><?= live($page->whatweoffer, 'words|10')?></li>
            <li><?= live($page->whatweoffer, 'words|10')?></li>
            <li><?= live($page->whatweoffer, 'words|10')?></li>
        </ul>
        <p class="pad-verticals-2">
            <?= live($page->whatweoffer, 'paragraphs|1')?>
        </p>
    </div>    

</div>

    </article>


    <aside large="3" class="spacing">


        
<!--         <p>Introduction to the section. Introduction to the section. Introduction to the section. </p> -->
        <grid sizes="12|6|12">
            <div class="border pad-sides-2 pad-verticals-1 spacing">
                <h2 class="text-align-center push-bottom-2">Contact form</h2>
                <p><?= live($page->whatweoffer, 'sentences|1')?></p>
                <fieldset>

                    <label for="edit-title">Email</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Pub name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Postcode</label>

                    <input type="text" id="edit-title">

                </fieldset>

                <button>Submit</button>

            </div>



        </grid>

    </aside>


</grid>



<?php include('../src/footer.php'); ?>

