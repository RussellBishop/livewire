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

    <article large="9" small="12" class="spacing max-images">
        <div class="bg-2 text-align-center pad-verticals-10">
            <a href="/templates/single-individual-panel-member.php"><button class="med">Logged in user <icon lock></icon></button></a>
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
