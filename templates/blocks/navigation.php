<div class="bg-2">

    <flex justify="between" align="centre" class="pad">

        <a href="#" large="hide"><img class="height-2" src="/dist/img/suucl-logo.svg" /></a>
        <a href="#" small-medium="hide"><img class="height-2" src="/dist/img/suucl-logo-u.svg" /></a>

        <flex grow="1" small-medium="hide">

            <a href="#" data-group="nav" class="<?php if ($active == 'home') echo ' bg-2'; ?>">Home</a>

            <a href="#" data-group="nav" class="<?php if ($active == 'makeachange') echo ' bg-2'; ?>" data-target="makeachange-subnav" data-action="toggle">Make a change</a>

            <a href="#" id="yourstudentlife" data-group="nav" class="<?php if ($active == 'yourstudentlife') echo ' bg-2'; ?>" data-target="yourstudentlife-subnav" data-action="toggle">Your student life</a>

            <a href="#" id="placesforyou" data-group="nav" class="<?php if ($active == 'placesforyou') echo ' bg-2'; ?>" data-target="placesforyou-subnav" data-action="toggle">Places for you</a>

            <a href="#" data-group="nav" class="<?php if ($active == 'helpandadvice') echo ' bg-2'; ?>" data-target="helpandadvice-subnav" data-action="toggle">Help and advice</a>

            <a href="#" data-group="nav" class="<?php if ($active == 'whatson') echo ' bg-2'; ?>">What's on?</a>

            <a href="#" id="aboutus" data-group="nav" class="<?php if ($active == 'aboutus') echo ' bg-2'; ?>" data-target="aboutus-subnav" data-action="toggle">About us</a>

            <a href="#" data-group="nav" class="<?php if ($active == 'shop') echo ' bg-2'; ?>">Shop</a>

        </flex>

        <flex align="centre">

            <flex align="centre">
                <input small="hide" large="hide" class="max-10" placeholder="Search&hellip;" type="text" required  />
                <button type="submit"><icon search /></button>
            </flex>

            <a href="#" class="button push-left-2"><icon user /> <span small="hide" large="hide">James</span></a>

        </flex>

    </flex>

    <flex justify="between" class="bg-3 pad" large="hide">
        <button class="bg-4">Your Student Life <icon arrow-down /></button>

        <button data-target="nav" data-action="toggle"><icon bars /></button>
    </flex>

    <group class="fixed top-6 left-0 right-0 bg-button z-3 shadow-l">

        <grid data-id="nav" class="nav">

            <div small-medium="11" class="subnav">
                <button type="button" class="<?php if ($active == 'home') echo ' is--active'; ?>">Home</button>
                <button type="button" class="<?php if ($active == 'makeachange') echo ' is--active'; ?>">Make a change</button>
                <button data-target="yourstudentlife-subnav" data-action="toggle" type="button" class="<?php if ($active == 'yourstudentlife') echo ' is--active'; ?>">Your Student Life <icon arrow-down /></button>

                <group>
                    <div data-group="subnav" data-id="yourstudentlife-subnav" class="nav subnav">
                        <button type="button" class="<?php if ($menu == 'clubsandsocieties') echo ' is--active'; ?>">Clubs and societies</button>
                        <button type="button">Sport</button>
                        <button type="button" class="<?php if ($menu == 'volunteering') echo ' is--active'; ?>">Volunteering</button>
                        <button type="button">London life</button>
                        <button type="button">Discounts and offers</button>
                        <button type="button">Resources</button>
                    </div>
                </group>

                <button data-target="placesforyou-subnav" data-action="toggle" type="button" class="<?php if ($active == 'placesforyou') echo ' is--active'; ?>">Places for you <icon arrow-down /></button>

                <group>
                    <div data-group="subnav" data-id="placesforyou-subnav" class="nav subnav">
                        <button type="button" class="<?php if ($menu == 'bars') echo ' is--active'; ?>">Bars</button>
                        <button type="button" class="<?php if ($menu == 'cafes') echo ' is--active'; ?>">Cafes</button>
                        <button type="button" class="<?php if ($menu == 'bloomsburyfitness') echo ' is--active'; ?>">Bloomsbury Fitness</button>
                        <button type="button" class="<?php if ($menu == 'studyspaces') echo ' is--active'; ?>">Study spaces</button>
                        <button type="button" class="<?php if ($menu == 'shop') echo ' is--active'; ?>">Shop</button>
                        <button type="button" class="<?php if ($menu == 'bookavenue') echo ' is--active'; ?>">Book a venue</button>
                    </div>
                </group>

                <button type="button" class="<?php if ($active == 'helpandadvice') echo ' is--active'; ?>">Help and advice</button>
                <button type="button" class="<?php if ($active == 'whatson') echo ' is--active'; ?>">What's on?</button>

            </div>

            <div small-medium="1">

                <button type="button" data-target="nav" data-action="close" style="float: right; width: auto; background-color: rgba(255,0,0,.5);"><icon times /></button>

            </div>

        </grid>

    </group>



    <?php /* <tabs class="nav relative">

        <div class="fade fade-white" large="hide"></div>

        <a href="#" data-group="nav" class="<?php if ($active == 'home') echo ' bg-2'; ?>">Home</a>

        <a href="#" data-group="nav" class="<?php if ($active == 'makeachange') echo ' bg-2'; ?>" data-target="makeachange-subnav" data-action="toggle">Make a change</a>

        <a href="#" id="yourstudentlife" data-group="nav" class="<?php if ($active == 'yourstudentlife') echo ' bg-2'; ?>" data-target="yourstudentlife-subnav" data-action="toggle">Your student life</a>

        <a href="#" id="placesforyou" data-group="nav" class="<?php if ($active == 'placesforyou') echo ' bg-2'; ?>" data-target="placesforyou-subnav" data-action="toggle">Places for you</a>

        <a href="#" data-group="nav" class="<?php if ($active == 'helpandadvice') echo ' bg-2'; ?>" data-target="helpandadvice-subnav" data-action="toggle">Help and advice</a>

        <a href="#" data-group="nav" class="<?php if ($active == 'whatson') echo ' bg-2'; ?>">What's on?</a>

        <a href="#" id="aboutus" data-group="nav" class="<?php if ($active == 'aboutus') echo ' bg-2'; ?>" data-target="aboutus-subnav" data-action="toggle">About us</a>

        <a href="#" data-group="nav" class="<?php if ($active == 'shop') echo ' bg-2'; ?>">Shop</a>

    </tabs>

    <group>

        <div data-group="subnav" data-id="makeachange-subnav" class="nav subnav bg-button">

            <button type="button">Who represents you?</button>
            <button type="button">Union democracy</button>
            <button type="button">Elections</button>
            <button type="button">Our impact</button>
            <button type="button">Networks</button>
            <button type="button">Representation &amp; Campaigns Team</button>

        </div>

        <div data-group="subnav" data-id="yourstudentlife-subnav" class="nav subnav bg-button">

            <button type="button" class="<?php if ($menu == 'clubsandsocieties') echo ' is--active'; ?>">Clubs and societies</button>
            <button type="button">Sport</button>
            <button type="button" class="<?php if ($menu == 'volunteering') echo ' is--active'; ?>">Volunteering</button>
            <button type="button">London life</button>
            <button type="button">Discounts and offers</button>
            <button type="button">Resources</button>

        </div>

        <div data-group="subnav" data-id="placesforyou-subnav" class="nav subnav bg-button">

            <button type="button">Bars</button>
            <button type="button">Cafes</button>
            <button type="button">Bloomsbury Fitness</button>
            <button type="button">Study spaces</button>
            <button type="button">Shop</button>
            <button type="button">Book a venue</button>

        </div>

        <div data-group="subnav" data-id="helpandadvice-subnav" class="nav subnav bg-button">

            <button type="button">About the Rights and Advice Centre</button>
            <button type="button">Personal support</button>
            <button type="button">Academic support</button>
            <button type="button">Housing and accommodation</button>
            <button type="button">Financial support</button>
            <button type="button">Employment advice</button>
            <button type="button">JobShop</button>
            <button type="button">Skills4Work</button>
            <button type="button">Postgraduate students</button>
            <button type="button">International students</button>

        </div>

        <div data-group="subnav" data-id="aboutus-subnav" class="nav subnav bg-button">

            <button type="button">New to UCL?</button>
            <button type="button">Membership</button>
            <button type="button" class="<?php if ($menu == 'news') echo ' is--active'; ?>">News</button>
            <button type="button">Our history</button>
            <button type="button">Governance and policies</button>
            <button type="button">Sustainability</button>
            <button type="button">Advertise with us</button>
            <button type="button">Find us</button>
            <button type="button">Contact us</button>

        </div>

    </group>

     */ ?>

</div>
