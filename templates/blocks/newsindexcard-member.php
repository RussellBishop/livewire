
<div class="">

    <a href="<?=$post['link'];?>" class="block bg-3 cover ratio-50 relative" style="background-image: url('<?=$post['image'];?>');">
        <div class="absolute bottom-1 left-1 bg-4 border" style="border-radius: 3px;">
                <div class="bg-5 pad-sides-1"><h1><icon star></icon></h1></div>
        </div>
    </a>

    <div class="pad spacing">
        <div>
            <h3><a href="<?=$post['link'];?>"><?=$post['title'];?></a></h3>
        </div>

        <div class="text-small spacing">
<!--         <grid>
                <div small-medium-large="2" style="border-radius: 100px;" class="bg-4 ratio-100 max-width-1rm"></div>

            <div small-medium-large="10"><p><?= live($page->club_logo, 'names|1')?></p></div>
        </grid> -->
            <p class="o-40">12th May 2017</p>
        </div>
        <p><?=$post['info'];?></p>
        <button>Read more</button>
        <hr/>
    </div>

</div>


