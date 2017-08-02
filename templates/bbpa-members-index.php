<?php

    $title = 'BBPA Members';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>BBPA membership page</h1></div>
    <hr/>
    <div class="bg-2 pad-verticals-3 pad-sides-6">
        <h3>
            The BBPA is the leading organisation representing the brewing and pub sector in the UK. We already represent around 90% of the beer brewed here and just under half of the UK’s pubs. As a BBPA member, you are uniquely placed to shape the strategic direction of the sector, campaign for change on the issues that matter to you most, and come together with like-minded people to champion the sector that we all love. Upon joining the BBPA, you will receive a guide to help you make the most of your membership. Whether you are an international brewer or a small and ambitious pub company, we would be happy to talk to you about becoming a member. 
        </h3>
    </div>
</div>
<div class="contained spacing pad-verticals-2">
    <grid>
        <article large="9">
            <div>
                <h2 class="text-align-center push-bottom-4 o-20">Benefits of BBPA membership:</h2><hr/>
                <grid sizes="12|6|6">
                    <div><h4 class="push-bottom-1">BBPA panel membership</h4></div><div>the BBPA facilitates a range of membership panels to set the strategic direction of our policy, communications and campaigns functions<hr/></div>
                    <div><h4 class="push-bottom-1">Insights, briefings and updates</h4></div><div>the BBPA regularly updates members on key issues and provides detailed briefings across all issues impacting upon the sector. You will also receive a daily update on sector issues, a more comprehensive monthly round-up and a regular update from the BBPA CEO<hr/></div>
                    <div><h4 class="push-bottom-1">Events</h4></div><div>the BBPA holds a number of events throughout the year. Some are annual, notably the BBPA Dinner and Awards, and the joint BBPA/All-Party Parliamentary Beer Group Christmas reception. Others are organised on an ad-hoc basis to tackle specific sector issues<hr/></div>
                    <div><h4 class="push-bottom-1">Leading industry statistics</h4></div><div>as a member, you will receive unrivalled statistics on the beer and pub industry free of charge. This includes the annual BBPA statistics handbook, annual barrelage survey and monthly beer sales volume survey. Further, through our partnership with CGA, you will also have access to key regional trends across the drinks categories<hr/></div>
                    <div><h4 class="push-bottom-1">Access to SUSTAIN</h4></div><div>the government rewards companies who meet the targets set out in the CCAs<hr/></div>
                    <div><h4 class="push-bottom-1">Compliance assistance with Climate Change Agreements (CCAs)</h4></div><div>the government rewards companies who meet the targets set out in the CCAs<hr/></div>
                    <div><h4 class="push-bottom-1">Ongoing support from the BBPA team</h4></div><div>the BBPA team holds specialist industry knowledge over a range of policy, communications and public affairs areas<hr/></div>
                </grid>
            </div>    
        </article>
    
        <aside small="hide" large="3">
            <div class="text-align-center bg-2 pad-sides-1 pad-verticals-1"><a href="/templates/members-area.php"><button>Access members area <icon lock></icon></button></a></div>
            <hr/>
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
<hr/>
<div class="contained spacing pad-verticals-2">
    <div class="z--1 o-20 text-align-center"><h2>Our Members</h2></div>
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

            for ($x = 0; $x < 14; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/member-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
