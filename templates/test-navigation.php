<?php

    $title = 'Navigation';

    require '../src/src.php';

    $page = new Page(4317255);

?>

<?php include('styles/navigation.styles.php'); ?>

<body class="spacing">

<div class="bg-4">

    <?php $active = 'home'; include('blocks/navigation.php'); ?>

</div>

<?php include('../src/footer.php'); ?>
