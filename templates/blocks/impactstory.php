<div class="border">

<!--     <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-50" style="background-image: url('<?=$post['image'];?>');"></a> -->

    <div class="pad spacing">
        <div>
            <h3><a href="<?=$post['link'];?>"><?=$post['title'];?></a></h3>
        </div>

        <p class="text-small"><?= live($page->nothing, 'sentences|2')?></p>
    </div>

</div>