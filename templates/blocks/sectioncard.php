<section small="12" medium="6" large="4" class="border spacing pad">

    <h3><a href="#"><?=$section['title']?></a></h3>

    <p class="text-small"><?= live($page->nothing, 'sentences|1')?></p>

    <grid class="text-small">
        <?php foreach ($section['links'] as $link) : ?>
            <p large="6">&middot; <a href="#"><?=$link?></a></p>
        <?php endforeach; ?>
    </grid>

</section>
