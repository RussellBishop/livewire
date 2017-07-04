<?php

    $title = 'Page';

    require '../src/src.php';

    $page = new Page(4630299);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-hDXj63c/0/f6602089/X3/UCLU_June2017-5-X3.jpg');">
    </div>

    <h4><a href="/templates/whats-on.php">&larr; back to Parent Section</a></h4>

    <div class="spacing push-top-10 max-width-50rm">
        <h1>Page title</h1>
        <h3><?= live($page->nothing, 'sentences|2')?></h3>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">

        <?= live($page->nothing, 'paragraphs|3')?>

        <img src="https://photos.smugmug.com/Other/UCLU-FINAL-CUT/i-hDXj63c/0/f6602089/X3/UCLU_June2017-5-X3.jpg" />

        <?= live($page->nothing, 'paragraphs|3')?>

    </article>


    <aside large="3" class="spacing">


        <h2>This Section</h2>
<!--         <p>Introduction to the section. Introduction to the section. Introduction to the section. </p> -->
        <grid sizes="12|6|12">
            <div class="bg-3 pad-sides-2 pad-verticals-1 spacing">
                <div><a href="Children page">Children page</a></div>
                <div><a href="Children page">Children page</a></div>
                <div><a href="Children page">Children page</a></div>
                <div><a href="Children page">Children page</a></div>
            </div>


            <div>

                <?php

                    $post = array (

                        'title'         =>  'Impact content element',
                        'description'   =>  'Sentences',
                        'link'          =>  '#',

                    );

                    include('blocks/impactstory.php');

                ?>

            </div>

            <h2>Related content</h2>
            <div class="bg-3 pad-sides-2 pad-verticals-1 spacing">
                <div><a href="Children page">Example Link</a></div>
                <div><a href="Children page">Example Link</a></div>
                <div><a href="Children page">Example Link</a></div>
                <div><a href="Children page">Example Link</a></div>
            </div>

        </grid>
        <div class="bg-2 spacing pad-2 border">
            <h3>Contact information</h3>
            <p>Name Surname</p>
            <p>Email: uczxjaz@ucl.ac.uk </p>
        </div>
    </aside>


</grid>

<?php include('blocks/section-footer.php'); ?>

<?php include('../src/footer.php'); ?>
