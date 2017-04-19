<?php
    /*
     * Which template is this?
     * e.g. https://wearelighthouse.gathercontent.com/item/4201435
     */
?>

<?php require 'Page.php'; ?>

<?php include('../shared/head.php'); ?>

<header class="contained pad-verticals">

    <img src="/dist/img/im-logo.jpeg" class="height-3" />

</header>

<?php
    $page = new Page(4317255);
?>

<?php

    function live($fieldName, $structure)
    {

        $fieldReturn = '';

        // is it empty?
        if(empty($fieldName)) {
            $fieldReturn .= 'data-forcefeed="'.$structure.'"';
        }

        // end the tag
        $fieldReturn .= '>';

        // add the contents of that field before the closing tag
        $fieldReturn .= $fieldName;

        return $fieldReturn;
    }

?>

<div class="spacing">

    <section class="contained bg-4 pad-verticals-6 spacing">

        <h1 <?= live($page->intro_statement_tagline, 'sentences|1')?></h1>

        <h3 <?= live($page->intro_to_services, 'sentences|2')?></h3>

        <button class="button med" <?= live($page->testimonial, 'words|3')?></button>

    </section>

    <grid class="contained pad-verticals-2">

        <blockquote medium-large="6" class="spacing">
            &ldquo;
            <span <?= live($page->testimonial, 'sentences|1')?></span>
            &rdquo;
            <p><cite <?= live($page->testimonial, 'names|1')?></cite></p>
        </blockquote>

        <blockquote medium-large="6" class="spacing">
            &ldquo;
            <span <?= live($page->testimonial, 'sentences|1')?></span>
            &rdquo;
            <p><cite <?= live($page->testimonial, 'names|1')?></cite></p>
        </blockquote>

    </grid>

    <?php print_r($page->logos) ?>

</div>

<script src="/dist/js/bundle.js"></script>

</body>
</html>
