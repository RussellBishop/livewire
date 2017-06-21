<?php

    $title = 'Clubs and Societies';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-2Crfn8X/0/a8b83e8c/X3/UCLU_June2017-343-X3.jpg');">
    </div>

    <h4><a href="/templates/your-student-life.php">&larr; back to Your Student Life</a></h4>

    <div class="spacing push-top-10 max-width-50rm">

        <h1>Clubs and Societies</h1>

        <h2><?= live($page->club_logo, 'sentences|2')?></h2>

    </div>

</div>

<div class="contained pad-verticals-1 bg-2">

    <form>

        <grid sizes="12|3|2" justify="between">

            <fieldset>

                <label for="edit-field-category-tid">Category</label>

                <select id="edit-field-category-tid">
                    <option value="All" selected="selected">- Any -</option>
                    <option value="2757">Arts</option>
                    <option value="2759">General Interest</option>
                    <option value="2758">Sports</option>
                </select>

            </fieldset>

            <fieldset>

                <label for="edit-title">Name</label>

                <input type="text" id="edit-title">

            </fieldset>

            <fieldset>

                <label for="edit-sort-by">Sort by</label>
                <select id="edit-sort-by" class="form-select">
                    <option value="title" selected="selected">Name</option>
                </select>

            </fieldset>


            <fieldset>

                <label for="edit-sort-order">Order by</label>
                <select id="edit-sort-order">
                    <option value="ASC" selected="selected">Asc</option>
                    <option value="DESC">Desc</option>
                </select>

            </fieldset>

            <fieldset>

                <button type="button" class="button button--full">Apply</button>

            </fieldset>

        </grid>

    </form>

</div>

<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|3" class="push-bottom-3">

        <?php

            $post = array (

                'title'         =>  'Salsa Society - End of Year Party',
                'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                'link'          =>  '/templates/single-event.php',

            );

            for ($x = 1; $x <= 12; $x++) {

                include('blocks/clubcard.php');

            }

        ?>

    </grid>

    <flex justify="around" class="push-bottom-2">
        <div>
            <button type="button" disabled><icon arrow-left></icon></button>
            <span class="push-sides-1">1 of 6</span>
            <button type="button"><icon arrow-right></icon></button>
        </div>
    </flex>

</div>

<?php include('../src/footer.php'); ?>
