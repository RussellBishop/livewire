
<div class="">

    <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-100 relative" style="background-image: url('<?=$post['image'];?>');">
        <div class="absolute bottom-1 left-1 bg-4 border" style="border-radius: 3px;">

        </div>
    </a>

    <div class="pad spacing">
        <div>
            <h3><a href="<?=$post['link'];?>"><?=$post['title'];?></a></h3>
        </div>
        <p><?=$post['info'];?></p>
        <div class="text-align-right spacing">
            <p>Member price: <strong><?=$post['memberprice'];?></strong></p>
            <p>Member price: <strong><?=$post['regulaprice'];?></strong></p>
        </div>
        <hr/>
    </div>

</div>


