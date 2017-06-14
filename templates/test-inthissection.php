<?php

    $title = 'In This Section';

    require '../src/src.php';

    $page = new Page(4317255);

?>

<?php include('styles/navigation.styles.php'); ?>

<body class="bg-4">

<div class="bg-4">

    <?php $active = 'yourstudentlife'; $menu = 'volunteering'; include('blocks/navigation.php'); ?>

</div>

<div class="bg-0 contained pad-top-3 pad-bottom-1">

    <h4><a href="#">&larr; back to Get Involved</a></h4>

    <h1>Summer Volunteering</h1>

</div>

<grid class="contained pad-verticals-2">

    <article data-forcefeed="sentences|6" large="8">

    </article>

    <section class="pad bg-4 spacing" small-medium="12" large="3" style="background-color: rgba(0,0,0,.05);">

        <h3>More in Get Involved</h3>

        <ul class="spacing">
            <p><a href="#">Volunteering directory</a></p>
            <p><a href="#"><u>Summer Volunteering</u></a></p>
            <p><a href="#">Student Led Volunteering</a></p>
            <p><a href="#">Volunteering Events</a></p>
            <p><a href="#">Student and Alumni stories</a></p>
            <p><a href="#">Volunteering Procedures</a></p>
            <p><a href="#">Volunteering internationally</a></p>
            <p><a href="#">Information for Postgraduates</a></p>
            <p><a href="#">Information for International Students</a></p>
            <p><a href="#">Information for Students with Disabilities</a></p>
        </ul>
    </section>

</grid>

<?php include('../src/footer.php'); ?>
