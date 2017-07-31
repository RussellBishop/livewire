<?php

    $title = 'Meet the Team';

    require '../src/src.php';

    $page = new Page(4539867);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'policy'; $menu = 'policy'; include('blocks/navigation.php'); ?>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Meet the Team</h1></div>
    <hr/>
</div>

<grid class="contained">
    <div large="3" medium="3" small="12" class="relative text-align-left">
        <div><img src="http://s3.amazonaws.com/bbpa-prod/attachments/target/hero_image/1193/original/BrigidHero.jpg?1328099189"/></div>
    </div>
    <div large="6" medium="6" small="12" class="spacing">
        <h3>Brigid Simmonds OBE</h3>
        <p><em>Chief Executive</em></p>
        <p>Brigid Simmonds became Chief Executive of the BBPA in September 2009. The BBPA represents over 90% of the brewing industry and their members own over 20,000 pubs. Brigid was previously Chief Executive of the umbrella organisation Business in Sport and Leisure (BISL), from 1992 to 2009, where she represented over 100 companies across private sector sport and leisure interests.</p>
        <p>She was a former chairman and current Vice-President of the Sport and Recreation Alliance and is also a board member of the Tourism Alliance. She was previously on the Board of Sport England and Leicester City Football Club. She is also a member of the Government’s Future High Streets Executive and a trustee trustee of the Responsible Gambling Trust. In June 2006 she was awarded an OBE for Services to Sport.</p>
    </div>
    <div large="3" medium="3" small="hide" class="text-align-center bg-2 pad-top-2 pad-sides-1">
        <div class="bg-2">
            <div class="pad-verticals-1 pad-sides-1 text-align-center"><h3>Updates from Bridgid</h3><hr/></div>
            <div>
                <?php

                    $posts = array (

                        array (

                            'title'         =>  'BBPA responds to London Mayor’s ‘Culture and the night-time economy’ consultation',

                        ),
                        array (

                            'title'         =>  'Tower Hamlets postpones late-night levy - BBPA comments',

                        ),

                    );

                    $postsCount = count($posts);

                    for ($x = 0; $x < 3; $x++) {

                        $post = $posts[$x % $postsCount];

                        include('blocks/topstory-block.php');

                    }

                ?>
            </div>
           </div>
    </div>
</grid>
<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Management</h1></div>
    <hr/>
</div>
<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|3" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'first'         =>  'David',
                    'last'          =>  'Forde',
                    'position'      =>  'The Chairman',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1745/original/management-forde.jpg?1458208907'
 
                ),

                array (

                    'first'         =>  'David',
                    'last'          =>  'Wilson',
                    'position'      =>  'Public Affairs Director',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1231/original/b&wDW%20hero.png?1433250529'
 
                ),

                array (

                    'first'         =>  'Andy',
                    'last'          =>  'Tighe',
                    'position'      =>  'Policy Director',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1219/original/b&wAT%20hero.png?1433250508'
 
                ),
                array (

                    'first'         =>  'John',
                    'last'          =>  'Wilson FCCA',
                    'position'      =>  'Finance Director',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1214/original/b&wJohn%20Wilson%20Hero.png?1433259209'
 
                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 4; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/team-card.php');

            }

        ?>

    </grid>
</div>

<div class="bg-0 contained pad-top-7 pad-bottom-3 relative z-1">

    <div class="z--1 o-20 text-align-center"><h1>Team</h1></div>
    <hr/>
</div>
<div class="contained spacing pad-verticals-2">

    <grid sizes="12|6|3" class="push-bottom-3">

        <?php

            $posts = array (

                array (

                    'first'         =>  'Neil',
                    'last'          =>  'Williams',
                    'position'      =>  'Head of Media',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1481/original/b&wNW%20hero.png?1433258948'
 
                ),

                array (

                    'first'         =>  'Jim',
                    'last'          =>  'Cathcart',
                    'position'      =>  'Policy Manager, Pub Operations',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1476/original/b&wJC%20hero.png?1433256911'
 
                ),

                array (

                    'first'         =>  'Pamela',
                    'last'          =>  'Bates',
                    'position'      =>  'Assistant to Chief Executive',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1478/original/b&wPB%20hero.png?1433258140'
 
                ),
                array (

                    'first'         =>  'Danitza',
                    'last'          =>  'Alegre',
                    'position'      =>  'Finance Manager',
                    'image'         =>  'http://s3.amazonaws.com/bbpa-prod/attachments/generic_image/1479/original/b&wDA%20hero.png?1433258465'
 
                ),

            );

            $postsCount = count($posts);

            for ($x = 0; $x < 8; $x++) {

                $post = $posts[$x % $postsCount];

                include('blocks/team-card.php');

            }

        ?>

    </grid>
</div>

<?php include('../src/footer.php'); ?>
