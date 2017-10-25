<?php

    $title = 'News index';

    require '../src/src.php';

    $page = new Page(4630299);

?>

<?php include('styles/navigation.styles.php'); ?>

<body>

<?php $active = 'members'; $menu = 'members'; include('blocks/navigation.php'); ?>

<div class="contained spacing pad-verticals-2 pad-top-7">
<grid>
    <article large="9" >
        <div>

                <a href="<?=$post['link'];?>" class="block bg-2 cover ratio-40 relative">
                <div class="absolute bottom-1 left-1 bg-4 border" style="border-radius: 3px;">
                </div>
            </a>

        <div class="pad spacing text-align-center">
                    <div class="text-small">
                <p class="o-40">Business Rates / 24th November</p>
            </div>
            <div class="pad-verticals-1 pad-sides-2">
                <h3><a href="<?=$post['link'];?>">Election 2017 – BBPA manifesto urges all parties to back policies for unlocking growth and investment in British beer and pubs</a></h3>
            </div>

            <div class="text-align-left pad-sides-2">
                <p class="push-bottom-1">
                    Britain’s pubs carry one of the heaviest tax burdens in the UK economy, says a new report from Oxford Economics for the British Beer &amp; Pub Association (BBPA).<br/><br/>
                    The full report shows that the industry’s total tax bill amounts to a staggering £7.3 billion, or £140,000 for every pub, representing 34 pence in every pound of turnover…

                </p>
                <button>Read more</button>
            </div>
        </div>

    </div>


    </article>

    <aside small="hide" large="3">
        <div class="bg-2">
            <div class="pad-verticals-1 pad-sides-1 text-align-center"><h3>Most popular stories</h3><hr/></div>
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

                    for ($x = 0; $x < 4; $x++) {

                        $post = $posts[$x % $postsCount];

                        include('blocks/topstory-block.php');

                    }

                ?>
            </div>
           </div>

            <div  class="spacing">

            </div>
        </aside>

</grid>

    <hr/>
<grid>
    <div large="9">
    <div class="bg-2 push-bottom-1 pad-verticals-1">
        <flex justify="between">
            <div class="pad-sides-1">Filter content:</div>
            <flex>
                <div class="pad-sides-1"><button class="pad-sides-1">News</button></div>
                <div class="pad-sides-1"><button class="pad-sides-1">Blog</button></div>
            </flex>
            <div> </div>
        </flex>
    </div>
    
        <grid sizes="12|6|4" class="push-bottom-3">

            <?php

                $post = array (


                            'title'         =>  'Tower Hamlets postpones late-night levy - BBPA comments',
                            'image'         =>  'http://lorempixel.com/1000/750/nightlife/',
                            'link'          =>  '/templates/single-news.php',
                            'info'   =>  'The British Beer & Pub Association has responded the London Mayor Sadiq Khan’s Culture and the night-time economy consultation…',



                );

                for ($x = 1; $x <= 9; $x++) {

                    include('blocks/newsindexcard.php');

                }

            ?>

        </grid>
    </div>
    <div large="3" medium="3" small="12">
    <?php include('blocks/categories-block.php');?>
    </div>
</grid>

    <div class="contained pad-verticals-2">

        <div class="pad-verticals spacing" id="meettheteam">

            <h1>Meet the team</h1>

            <p><?= live($page->testing, 'sentences|1')?></p>

            <grid sizes="6|3|2">

                <?php

                    for ($x = 1; $x <= 12; $x++) {
                        include('../components/team-member.php');
                    }

                ?>

            </grid>

        </div>

    </div>

</div>

<?php include('../src/footer.php'); ?>
