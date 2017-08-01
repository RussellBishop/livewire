<?php

    $title = 'Statistics';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>
<a name="consumption">
    <div class="bg-0 contained pad-top-7 pad-bottom-12 relative z-1">

        <div class="z--1 text-align-center"><h1>Consumption</h1></div>
        <hr/>
        <div class="bg-2 pad-verticals-20 pad-sides-6 text-align-center">
            <h3>
                Consumption
            </h3>
        </div>
    </div>
</a>
<a name="breweries">
    <div class="bg-0 contained pad-top-7 pad-bottom-12 relative z-1">

        <div class="z--1 text-align-center"><h1>Breweries &amp; Pubs</h1></div>
        <hr/>
        <div class="bg-2 pad-verticals-20 pad-sides-6 text-align-center">
            
                <h3>
                    Breweries &amp; Pubs
                </h3>

        </div>
    </div>
</a>
<a name="price">
    <div class="bg-0 contained pad-top-7 pad-bottom-12 relative z-1">

        <div class="z--1 text-align-center"><h1>Price</h1></div>
        <hr/>
        <div class="bg-2 pad-verticals-20 pad-sides-6 text-align-center">
            <h3>
                Price
            </h3>
        </div>
    </div>
</a>
<a name="export">
    <div class="bg-0 contained pad-top-7 pad-bottom-12 relative z-1">

        <div class="z--1 text-align-center"><h1>Export</h1></div>
        <hr/>
        <div class="bg-2 pad-verticals-20 pad-sides-6 text-align-center">
            <h3>
                Export
            </h3>
        </div>
    </div>
</a>
<?php include('../src/footer.php'); ?>
