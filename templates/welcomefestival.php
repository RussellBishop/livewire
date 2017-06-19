<?php

    $title = 'Welcome Festival 2017';

    require '../src/src.php';

    $page = new Page(4540027);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'yourstudentlife'; $menu = 'clubsandsocieties'; include('blocks/navigation.php'); ?>

<div class="bg-5 contained pad-top-2 pad-bottom-3 relative z-1">

    <div class="fill cover z--1" style="opacity: .2; background-image: url('assets/video-1.png');">

    </div>

    <h4><a href="/templates/news.php">&larr; back to Your student life</a></h4>

    <div class="text-align-center pad-verticals-6">
        <h1><icon play-circle-o></icon></h1>
    </div>

    <div class="spacing"> 
        <h1><?= live($page->heading_1, 'sentences|1')?></h1>
    </div>

</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">
        <?= live($page->introduction, 'sentences|12')?>
    </article>

    <aside large="4">
        <div small-medium-large="12" class="bg-3 pad-verticals-1 pad-sides-2 text-align-center">
            <grid>
                <div small-medium-large="4"><h2><icon facebook-square></icon></h2></div>
                <div small-medium-large="4"><h2><icon twitter></icon></h2></div>
                <div small-medium-large="4"><h2><icon instagram></icon></h2></div>
            </grid>
        </div>
    </aside>

</grid>
<grid class="contained pad-verticals-4">

    <div class="spacing" medium="4" small="12" large="4">
        <div class="bg-2">
            <div class="pad-verticals-3 pad-sides-3 spacing text-align-center">
                <div>
                    <p class="o-40">GLOBAL LOGO</p>
                </div>
            </div>
        </div>
        <p class="o-40"><?= live($page->pathway_1, 'sentences|1')?></p>
    </div>

    <div class="spacing" medium="4" small="12" large="4">
        <div class="bg-2">
            <div class="pad-verticals-3 pad-sides-3 spacing text-align-center">
                <div>
                    <p class="o-40">FRESHERS' LOGO</p>
                </div>
            </div>
        </div>
        <p class="o-40"><?= live($page->pathway_2, 'sentences|1')?></p>
    </div>

    <div class="spacing" medium="4" small="12" large="4">
        <div class="bg-2">
            <div class="pad-verticals-3 pad-sides-3 spacing text-align-center">
                <div>
                    <p class="o-40">GRADS LOGO</p>
                </div>
            </div>
        </div>
        <p class="o-40"><?= live($page->pathway_3, 'sentences|1')?></p>
    </div>

</grid>

<grid class="contained pad-verticals-2">
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel1.jpg');" medium="4" small="6" large="3"></div>
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel2.jpg');" medium="4" small="6" large="3"></div>   
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel3.jpg');" medium="4" small="6" large="3"></div>  
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel4.jpg');" medium="4" small="6" large="3"></div>    
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel5.jpg');" medium="4" small="6" large="3"></div>
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel6.jpg');" medium="4" small="6" large="3"></div>   
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel7.jpg');" medium="4" small="6" large="3"></div>  
    <div class="block bg-3 cover ratio-100" style="background-image: url('assets/wel8.jpg');" medium="4" small="6" large="3"></div>
</grid>



<?php include('../src/footer.php'); ?>
