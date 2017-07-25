<?php

    $title = 'Single Policy Page';

    require '../src/src.php';

    $page = new Page(4630209);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Future Beer Group</h1></div>
    <hr/>
    <div class="bg-2 pad-sides-6 pad-verticals-4">
        <p>
            The co-ordinating policy body for all issues affecting the brewing industry and oversees delivery of beer element of BBPA strategy and key campaigns such as beer duty. All BBPA beer-related committees report into to FBG for endorsement of activity undertaken, policy development and pro-active industry initiatives / good practice guidance developed  
        </p>
    </div>
</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">

        <div class="push-bottom-4">

            <flex justify="between" class="push-bottom-2">
                <h2>Agendas</h2>
                <button type="button">See all agendas</button>
            </flex>

            <grid sizes="12|4|4">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
            </grid>

        </div>

        <hr/>

        <div class="push-bottom-4">

            <flex justify="between" class="push-bottom-2">
                <h2>Minutes</h2>
                <button type="button">See all minutes</button>
            </flex>

            <grid sizes="12|4|4">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
            </grid>
        </div>
        <hr/>

        <div class="push-bottom-4">
        
            <flex justify="between" class="push-bottom-2">
                <h2>Other relevant documents</h2>
                <button type="button">See all documents</button>
            </flex>

            <grid sizes="12|4|4">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|5')?></h4></a><icon download></icon></flex><p></p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><flex justify="between"><a href="Children page"><h4><?= live($page->nothing, 'words|4')?></h4></a><icon download></icon></flex><p></p></div>
            </grid>
        </div>

        <div class="push-bottom-4">
        
            <flex justify="between" class="push-bottom-2">
                <h2>Next meetings</h2>
                <button type="button">See all meetings</button>
            </flex>

            <grid sizes="6|4|4">
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><h2>24th August</h2><p>Friday</p><p class="text-align-right pad-top-3">1.30 PM</p></div>
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><h2>26th November</h2><p>Friday</p><p class="text-align-right pad-top-3">1.30 PM</p></div> 
                    <div class="bg-3 pad-sides-2 pad-verticals-1 spacing"><h2>28th December</h2><p>Friday</p><p class="text-align-right pad-top-3">1.30 PM</p></div>
            </grid>
        </div>

    </article>

    <aside large="3" class="spacing">

            <div class="bg-2 pad-sides-1 pad-verticals-1 spacing">
                <h2 class="text-align-center push-bottom-2">Members</h2>
                <p><?= live($page->whatweoffer, 'sentences|1')?></p>
                <hr/>
                <h4>Chair</h4>
                <flex justify="between">
                    <p>Bruce Ray </p> <a href="#">Carlsberg</a>
                </flex>
                <h4>Members</h4>
                <flex justify="between">
                    <p>Name Surame</p> <a href="#">Company</a>
                </flex>
                <flex justify="between">
                    <p>Name Surname</p> <a href="#">Company</a>
                </flex>

            </div>
    </aside>


</grid>


<?php include('../src/footer.php'); ?>
