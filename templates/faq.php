<?php

    $title = 'Single Club';

    require '../src/src.php';

    $page = new Page(4630299);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <h4><a href="/templates/whats-on.php">&larr; back to Directory</a></h4>

    <div class="spacing push-top-10 max-width-50rm">
        <h1>Frequently Asked Questions</h1>
        <h3>Have a question about joining or running a Students' Union UCL club or society? Hopefully our frequently asked questions below will help you find the answer. But if not, the Clubs and Societies Centre is there to help you.</h3>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <div large="8" class="spacing">

        <?php

            for ($i = 0; $i <= 7; $i++) {

                include('blocks/faqheading.php');

            }

        ?>

    </div>

</grid>

<?php include('../src/footer.php'); ?>
