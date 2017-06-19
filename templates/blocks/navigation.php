<div class="fixed sticky top left right bg-2 z-5">

    <flex justify="between" align="centre" class="pad">

        <a href="#" large="hide"><img class="height-2" src="/dist/img/suucl-logo.svg" /></a>
        <a href="#" small-medium="hide"><img class="height-2" src="/dist/img/suucl-logo-u.svg" /></a>

        <flex grow="1" small-medium="hide" class="pad-sides-2" style="flex-grow: 1; max-width: 1140px;">

            <a href="#" data-target="makeachange-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'makeachange') echo ' is--active'; ?>">Make a change <icon arrow-down></icon></a>

            <a href="#" data-target="yourstudentlife-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'yourstudentlife') echo ' is--active'; ?>">Your student life <icon arrow-down></icon></a>

            <a href="#" data-target="placesforyou-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'placesforyou') echo ' is--active'; ?>">Places for you <icon arrow-down></icon></a>

            <a href="#" data-target="helpandadvice-subnav-large" data-action="toggle" data-group="nav" class="<?php if ($active == 'helpandadvice') echo ' is--active'; ?>">Help and advice <icon arrow-down></icon></a>

            <a href="#" data-group="nav" class="<?php if ($active == 'whatson') echo ' is--active'; ?>">What's on?</a>

        </flex>

        <flex align="centre">

            <flex align="centre">
                <input small="hide" large="hide" class="max-10" placeholder="Search&hellip;" type="text" required  />
                <button type="submit"><icon search></icon></button>
            </flex>

            <a href="#" class="button push-left-2"><icon user></icon> <span small="hide" large="hide">James</span></a>

        </flex>

    </flex>

    <group small-medium="hide" class="contained">
        <grid data-group="subnav-large" data-id="makeachange-subnav-large" class="pad">
            <div large="5" class="pad spacing">
                <h1><a href="/make-a-change.php">Make a change</a></h1>
                <?= live($page->blank, 'sentences|2')?>
            </div>
            <div large="7" class="nav subnav">
                <grid sizes="12|6|6">
                    <?php include('makeachange-subnav.php'); ?>
                </grid>
            </div>
        </grid>

        <grid data-group="subnav-large" data-id="yourstudentlife-subnav-large" class="pad">
            <div large="5" class="pad spacing">
                <h1><a href="your-student-life.php">Your Student Life</a></h1>
                <?= live($page->blank, 'sentences|2')?>
            </div>
            <div large="7" class="nav subnav">
                <grid sizes="12|6|6">
                    <?php include('yourstudentlife-subnav.php'); ?>
                </grid>
            </div>
        </grid>

        <grid data-group="subnav-large" data-id="placesforyou-subnav-large" class="pad">
            <div large="5" class="pad spacing">
                <h1><a href="places-for-you.php">Places for you</a></h1>
                <?= live($page->blank, 'sentences|2')?>
            </div>
            <div large="7" class="nav subnav">
                <grid sizes="12|6|6">
                    <?php include('placesforyou-subnav.php'); ?>
                </grid>
            </div>
        </grid>

        <grid data-group="subnav-large" data-id="helpandadvice-subnav-large" class="pad">
            <div large="5" class="pad spacing">
                <h1><a href="help-and-advice.php">Help and Advice</a></h1>
                <?= live($page->blank, 'sentences|2')?>
            </div>
            <div large="7" class="nav subnav">
                <grid sizes="12|6|6">
                    <?php include('helpandadvice-subnav.php'); ?>
                </grid>
            </div>
        </grid>
    </group>

    <flex justify="between" class="bg-3 pad" large="hide">
        <button data-target="nav yourstudentlife-subnav" data-action="open" class="bg-4">Your Student Life <icon arrow-down></icon></button>

        <button data-target="nav" data-action="toggle"><icon bars></icon></button>
    </flex>

    <group class="absolute top-6 left-0 right-0 bg-button z-3" large="hide">

        <grid data-id="nav" class="nav">

            <div small-medium="11" class="subnav">
                <button type="button" class="<?php if ($active == 'home') echo ' is--active'; ?>">Home</button>

                <button data-target="makeachange-subnav" data-action="toggle" type="button" class="<?php if ($active == 'makeachange') echo ' is--active'; ?>">Make a change <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="makeachange-subnav" class="nav subnav">
                            <?php include('blocks/makeachange-subnav.php'); ?>
                        </div>
                    </group>

                <button data-target="yourstudentlife-subnav" data-action="toggle" type="button" class="<?php if ($active == 'yourstudentlife') echo ' is--active'; ?>">Your Student Life <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="yourstudentlife-subnav" class="nav subnav">
                            <?php include('blocks/yourstudentlife-subnav.php'); ?>
                        </div>
                    </group>

                <button data-target="placesforyou-subnav" data-action="toggle" type="button" class="<?php if ($active == 'placesforyou') echo ' is--active'; ?>">Places for you <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="placesforyou-subnav" class="nav subnav">
                            <?php include('blocks/placesforyou-subnav.php'); ?>
                        </div>
                    </group>

                <button data-target="helpandadvice-subnav" data-action="toggle" type="button" class="<?php if ($active == 'helpandadvice') echo ' is--active'; ?>">Help and advice <icon arrow-down></icon></button>

                    <group>
                        <div data-group="subnav" data-id="helpandadvice-subnav" class="nav subnav">
                            <?php include('blocks/helpandadvice-subnav.php'); ?>
                        </div>
                    </group>

                <button type="button" class="<?php if ($active == 'whatson') echo ' is--active'; ?>">What's on?</button>

            </div>

            <div small-medium="1">

                <button type="button" data-target="nav" data-action="close" style="float: right; width: auto; background-color: rgba(255,0,0,.5);"><icon times></icon></button>

            </div>

        </grid>

    </group>

</div>
