<div class="border">

    <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-50 relative" style="background-image: url('<?=$post['image'];?>');">
        <div class="absolute bottom-1 left-1 bg-2 border" style="border-radius: 3px;">
            <div class="ratio-100 min-width-5rm max-width-5rm">
                <img class="absolute top left pad" src="<?=$post['logo'];?>" />
            </div>
        </div>
    </a>

    <div class="pad spacing">
        <div>
            <h3><a href="<?=$post['link'];?>"><?=$post['title'];?></a></h3>
            <p class="o-60 text-caps"><?=$post['category'];?></p>
        </div>

        <div class="text-small">
            <p><?=$post['description'];?></p>
        </div>
    </div>

</div>
