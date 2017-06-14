<section small="12" medium="6" large="4" class="border spacing pad pad-verticals-2">

    <h2><a href="#"><?=$section['title']?></a></h2>

    <p class="text-small"><?= live($page->nothing, 'sentences|1')?></p>

    <grid class="text-small" margins=".5">
        <?php foreach ($section['links'] as $link) : ?>
            <p small-medium="12" large="6"><a href="#"><?=$link?></a></p>
        <?php endforeach; ?>
    </grid>

</section>
