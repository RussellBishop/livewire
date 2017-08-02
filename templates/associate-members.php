<?php

    $title = 'BBPA associate membership page';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>BBPA associate membership page</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-3 pad-sides-6">
        <h3>
            The BBPA has a range of valued associate members, who are connected to the sector but do not require the benefits of full membership. Associate members fall into two categories, Supply Chain partner and Commercial partner. This is because our associate members require different relationships with the BBPA and we look to ensure that each associate members receives a tailored package of benefits. 
        </h3>
    </div>
</div>
<div class="contained spacing pad-verticals-2">
    <grid>
        <article large="9" medium="9" small="12">
            <div class="spacing">
                <grid sizes="12|6|6">
                    <div><h4 class="push-bottom-1">Supply Chain Partners</h4></div><div><p>Our Supply Chain Partners are those organisations that have a more direct and demonstrable working relationship with brewing or pub companies throughout the supply chain. They can benefit from active involvement in the work of the BBPA, for example representation at relevant technical panels, as well as greater opportunities for networking and contact with full members.</p><hr/></div>
                    <div><h4 class="push-bottom-1">Commercial Partners</h4></div><div><p>Our Commercial Partners are normally stakeholders with a strong interest in the beer and pub sector but whom will have a less direct working relationship with brewers or pubs, and therefore will not require the full range of Supply Chain Partner benefits. The principle benefits of Commercial Partner membership would be discounted rates to attend BBPA events and opportunities to raise awareness of products or services to other members via the BBPA website or communications.</p><hr/></div>
                    <div><h4 class="push-bottom-1">Enquire about associate membership</h4></div><div><p>Associate membership fees and benefits are always tailored to specific circumstances and will be set to reflect the level of engagement with BBPA activities. We would, therefore, encourage you to enquire below through submitting your details so that we can discuss options for associate membership.</p><hr/></div>
                    
                </grid>



                </div>  
        </article>
            <aside small="hide" large="3">
            <div class="pad-sides-2 bg-2 pad-verticals-1 spacing">
                <h2 class="text-align-center push-bottom-2">Contact form</h2>
                <p>Please enter your details below to enquire about becoming a BBPA member.</p>
                <fieldset>

                    <label for="edit-title">Name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Email</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Company name</label>

                    <input type="text" id="edit-title">

                </fieldset>
                <fieldset>

                    <label for="edit-title">Phone number</label>

                    <input type="text" id="edit-title">

                </fieldset>

                <button>Submit</button>

            </div>
        </aside>

    </grid>
   </div> 
<div class="contained spacing pad-verticals-2">
    <div class="z--1 o-20 text-align-center"><h2>Our Associate Members</h2></div>
    <hr/>

    <grid sizes="12|6|6" class="push-bottom-3">



        <?php

            $posts = array (

                array (

                    'title'         =>  'Tax, trade and the economy',
                    'link'          =>  '/templates/policy-sub.php',
 
                ),



            );

            $postsCount = count($posts);

            for ($x = 0; $x < 8; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/member-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
