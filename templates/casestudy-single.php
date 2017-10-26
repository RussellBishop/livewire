<?php

    $title = 'What we do';

    require '../src/src.php';

    $page = new Page(5550846);
?>


<body>

    <?php include('blocks/nav.php'); ?>


<div class="u-full-height bg-4 relative">

    <div class="fill cover z-1 o-50" style="background-image: url('/assets/img/building.jpg');"></div>

    <div class="z-2 relative">
        <grid large="10" class="contained pad-top-5">
            <div>
                <div class="pad-verticals-3">The project</div>
                <div class="h0"><?= live($page->title, 'sentences|1')?></div>
            </div>
        </grid>
        <grid class="contained pad-verticals-5 push-top-10">
            <div>
                &nbsp;
            </div>
            <div class="text-align-left" large="9">
                <div class="pad-verticals-3">The vision</div>
                <h2 class="">
                    <?= live($page->vision, 'sentences|1')?>
                </h2>

            </div>

        </grid>
    </div>

</div>
<div class="u-full-height bg-4 relative">

    <div class="fill cover z-1 o-20" style="background-image: url('/assets/img/building2.jpg');"></div>

    <div class="z-2 relative">
        <grid sizes="12|6|6" class="contained spacing pad-verticals-5">
            <div>
                &nbsp;
            </div>
            <div class="text-align-left">

                <h1 class="">
                    <?= live($page->testimonial, 'sentences|1')?>
                </h1>
                <h2 class="">
                    <?= live($page->testimonial_author, 'sentences|1')?>
                </h2>

            </div>

        </grid>

        <grid class="contained pad-verticals-5 push-top-10">

            <div class="text-align-left" large="9">
                <div class="pad-verticals-3">How we added value</div>
                <h2 class="">
                    <?= live($page->value, 'sentences|1')?>
                </h2>

            </div>
            <div>
                &nbsp;
            </div>
        </grid>
    </div>
</div>

<grid sizes="4|4|4" class="contained bg-5 pad-verticals-5">

        <?php for ($i=0; $i<3; $i++) : ?>
            <?php include('blocks/project.php');?>
        <?php endfor; ?>

</grid>



    <?php include('../src/footer.php'); ?>
