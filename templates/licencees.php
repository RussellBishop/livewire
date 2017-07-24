<?php

    $title = 'Licensees';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'members'; $menu = 'members'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Licensee Forum page</h1></div>
    <hr/>
    <div class="bg-2 pad-sides-6 pad-verticals-4">
        <h3>
            The BBPA Licensee Forum provides an opportunity for the BBPA to engage directly with pub licensees. It is crucial that we are able to understand the issues that matter most to you so that we can best represent the sector. At the same time, we are uniquely placed, as the leading body representing the UK pub and brewing sector, to offer expert advice and guidance on the wide-ranging issues that licensees may face. Our vision is to create an effective dialogue so that we can all champion the sector that we love.<br/><br/>
            A great number of us enjoy the pub trade responsibly as customers. Yet behind the bar, pubs embody a highly regulated and complex business model. Success as a pub operator requires knowledge that covers a vast range of issues and procedures. Prospective and new licensees will need a good understanding of the legislation that affects the sector, and existing licensees will find that regulations, laws and procedures are continually altered and updated. Here, you can find an extensive list of industry guidance and related resources, continually updated by the BBPA.
        </h3>
    </div>
</div>

<grid class="contained pad-verticals-2">

    <article large="8" class="spacing max-images">
<div class="spacing">

    <grid sizes="12|6|4" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'title'         =>  'Licensee',
                    'link'          =>  '/templates/single-licencee.php',

                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 9; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/licencees-card.php');

            }

        ?>

    </grid>

    <div class="pad-verticals-4">
        <h2 class="text-align-center push-bottom-4">BBPA Licensee Forum</h2>
        <p class="pad-verticals-2">
            For further benefits, <a href="#">sign up as a member of the BBPA Licensee Forum</a>. In addition to the guidance provided here, you will receive:
        </p>
        <grid sizes="12|4|4">
            <div><h4 class="push-bottom-1">A regular newsletter</h4> including important updates on changes within the sector, further guidance on running your pub and a range of free resources </div>
            <div><h4 class="push-bottom-1">Opportunity to have your say at the highest levels</h4>the BBPA will regularly request licensee input to inform consultation responses to Government or discussions with senior MPs and Civil Servants. We want to hear what matters to you</div>
            <div><h4 class="push-bottom-1">Opportunities to win £500</h4> through responding to BBPA requests for input, you will automatically enter into a prize draw to win £500</div>
        </grid>
    </div>    

</div>

    </article>


    <aside large="3" class="spacing">


        
<!--         <p>Introduction to the section. Introduction to the section. Introduction to the section. </p> -->
        <grid sizes="12|12|12">
            <div class="bg-2 pad-sides-2 pad-verticals-1 spacing">
                <h2 class="text-align-center push-bottom-2">Contact form</h2>
                <p><?= live($page->whatweoffer, 'sentences|1')?></p>
                <fieldset>

                    <label for="edit-title">Name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Email</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Pub name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Postcode</label>

                    <input type="text" id="edit-title">

                </fieldset>

                <button>Submit</button>

            </div>



        </grid>

    </aside>


</grid>



<?php include('../src/footer.php'); ?>

