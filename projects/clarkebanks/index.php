<?php
    /*
     * Which template is this?
     * e.g. https://wearelighthouse.gathercontent.com/item/4201435
     */
?>

<?php require('config.php'); ?>

<?php include('../shared/head.php'); ?>

<?php require 'Page.php'; ?>

<?php
    $page = new Page(4311727);
?>

<div>
    <?= $page->intro_statement_tagline ?>
</div>

</body>
</html>
