<div class="fixed sticky top left right bg-1 z-5">
    <flex justify="between" align="centre" class="pad">
            <div class="blockquote" small="hide"><i>The voice of beer and pub industry</i></div>
            <div large="hide"></div>
            <div class="text-align-center">
                <a href="/templates/index.php" large="hide"><img class="height-3" src="assets/logo.jpg" /></a>
                <a href="/templates/index.php" small-medium="hide"><img class="height-3" src="assets/logo.jpg" /></a>
            </div>
            <flex align="centre">
                <flex align="centre">
                    <button type="submit"><icon search></icon></button>
                </flex>
                <a href="/templates/members-area.php" class="button push-left-2" small="hide"><icon lock></icon> <span small="hide" large="hide">James</span></a>
            </flex>

    </flex>
</div>
<div class="fixed sticky top left right bg-2 z-5">
    <flex justify="between" align="centre" class="pad">
    <div></div>

        <flex grow="1" small-medium="hide" class="pad-sides-2" style="flex-grow: 1; max-width: 1140px;">

            <a href="/templates/news-index.php" data-group="nav" class="<?php if ($active == 'whatson') echo ' is--active'; ?>">News</a>

            <a href="#" data-target="about-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'about') echo ' is--active'; ?>">About <icon arrow-down></icon></a>

            <a href="#" data-target="our-passion-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'ourpassion') echo ' is--active'; ?>">Our Passion <icon arrow-down></icon></a>

            <a href="#" data-target="members-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'members') echo ' is--active'; ?>">Members <icon arrow-down></icon></a>

            <a href="#" data-group="nav" class="<?php if ($active == 'campaigns') echo ' is--active'; ?>">Campaigns</a>

            <a href="/templates/policy.php" data-group="nav" class="<?php if ($active == 'policy') echo ' is--active'; ?>">Policy</a>

            <a href="#" data-target="stats-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'helpandadvice') echo ' is--active'; ?>">Stats <icon arrow-down></icon></a>

            <a href="#" data-group="nav" class="<?php if ($active == 'policy') echo ' is--active'; ?>">Shop</a>
        </flex>
        <div></div>
    </flex>

    <group small-medium="hide" class="contained push-bottom-2">

        <div data-group="subnav-large" data-id="about-subnav-large">
            <div class="pad spacing text-align-center">
                <h1><a href="/make-a-change.php">About</a></h1>  
            </div>
            <div class="nav subnav text-align-center">
                <grid sizes="12|3|3">
                    <?php include('about-subnav.php'); ?>
                </grid>
            </div>
        </div>

        <div data-group="subnav-large" data-id="our-passion-subnav-large">
            <div class="pad spacing text-align-center">
                <h1><a href="/make-a-change.php">Our Passion</a></h1>  
            </div>
            <div class="nav subnav text-align-center">
                <grid sizes="12|3|3">
                    <?php include('our-passion-subnav.php'); ?>
                </grid>
            </div>
        </div>        

        <div data-group="subnav-large" data-id="members-subnav-large">
            <div class="pad spacing text-align-center">
                <h1><a href="/make-a-change.php">Members</a></h1>  
            </div>
            <div class="nav subnav text-align-center">
                <grid sizes="12|3|3">
                    <?php include('members-subnav.php'); ?>
                </grid>
            </div>
        </div> 

        <div data-group="subnav-large" data-id="stats-subnav-large">
            <div class="pad spacing text-align-center">
                <h1><a href="/make-a-change.php">Stats</a></h1>  
            </div>
            <div class="nav subnav text-align-center">
                <grid sizes="12|3|3">
                    <?php include('stats-subnav.php'); ?>
                </grid>
            </div>
        </div> 
    </group>


    <flex justify="between" class="bg-2 pad" large="hide">
        <button data-target="nav members-subnav" data-action="open" class="bg-4">Members <icon arrow-down></icon></button>

        <button data-target="nav" data-action="toggle"><icon bars></icon></button>
    </flex>

    <group class="absolute top-6 left-0 right-0 bg-button z-3" large="hide">

        <grid data-id="nav" class="nav">

            <div small-medium="11" class="subnav">
                <a href="/templates/news-index.php"><button type="button" class="<?php if ($active == 'home') echo ' is--active'; ?>">News</button></a>

                <button data-target="about-subnav" data-action="toggle" type="button" class="<?php if ($active == 'about') echo ' is--active'; ?>">About <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="about-subnav" class="nav subnav">
                            <?php include('blocks/about-subnav.php'); ?>
                        </div>
                    </group>

                <button data-target="our-passion-subnav" data-action="toggle" type="button" class="<?php if ($active == 'ourpassion') echo ' is--active'; ?>">Our Passion <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="our-passion-subnav" class="nav subnav">
                            <?php include('blocks/our-passion-subnav.php'); ?>
                        </div>
                    </group>

                <button data-target="members-subnav" data-action="toggle" type="button" class="<?php if ($active == 'members') echo ' is--active'; ?>">Members <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="members-subnav" class="nav subnav">
                            <?php include('blocks/members-subnav.php'); ?>
                        </div>
                    </group>

                <button type="button" class="<?php if ($active == 'campaigns') echo ' is--active'; ?>">Campaigns</button>

                <a href="/templates/policy.php"><button type="button" class="<?php if ($active == 'policy') echo ' is--active'; ?>">Policy</button></a>

                <button data-target="stats-subnav" data-action="toggle" type="button" class="<?php if ($active == 'stats') echo ' is--active'; ?>">Stats <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="stats-subnav" class="nav subnav">
                            <?php include('blocks/stats-subnav.php'); ?>
                        </div>
                    </group>
                <button type="button" class="<?php if ($active == 'campaigns') echo ' is--active'; ?>">Shop</button>
                <a href="/templates/members-area.php"><button type="button" class="<?php if ($active == 'policy') echo ' is--active'; ?>"><icon lock></icon> Members area</button></a>

            </div>

            <div small-medium="1">

                <button type="button" data-target="nav" data-action="close" style="float: right; width: auto; background-color: rgba(255,0,0,.5);"><icon times></icon></button>

            </div>

        </grid>

    </group>

</div>
