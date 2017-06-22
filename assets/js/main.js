var forcefeed = require('forcefeed');
var $ = require('jquery');

window.words = [
'leverage',
'agile',
'frameworks',
'to',
'provide',
'a',
'robust',
'synopsis',
'for',
'high',
'level',
'overviews',
'Iterative',
'approaches',
'to',
'corporate',
'strategy',
'foster',
'collaborative',
'thinking',
'to',
'further',
'when',
'the',
'overall',
'value',
'proposition',
'Organically',
'grow',
'the',
'holistic',
'world',
'view',
'of',
'disruptive',
'innovation',
'via',
'workplace',
'diversity',
'and',
'empowerment'];

window.listitems = [
'<li>Social orchestrate disintermediate maximize user-centric generate.</li>',
'<li>Bleeding-edge implement unleash channels synergistic long-tail, addelivery.</li>',
'<li>Seize enable web-readiness vertical efficient interfaces cross-media; harness optimize.</li>',
'<li>Web-readiness vertical efficient interfaces cross-media; harness optimize.</li>',
'<li>Efficient disintermediate integrate B2B, visualize dynamic cutting-edge.</li>',
];

window.sentences = [
'<p>Platforms vortals compelling e-markets streamline innovate deliver mashups envisioneer e-enable podcasting.</p>',
'<p>Networking drive dot-com interactive compelling wikis relationships repurpose real-time strategic.</p>',
'<p>Technologies recontextualize strategic systems e-tailers, cross-media, impactful integrate AJAX-enabled utilize.</p>',
'<p>Life-hacks value-added addelivery utilize incentivize seize granular.</p>',
'<p>Leverage mesh proactive, recontextualize deliver intuitive streamline, extensible incentivize viral efficient turn-key systems syndicate addelivery proactive.</p>',
'<p>Widgets sexy recontextualize deliverables syndicate channels magnetic enable user-centric.</p>',
'<p>Folksonomies embrace create enable visualize maximize repurpose; intuitive e-commerce.</p>',
'<p>Architect e-business share engage incentivize mesh cross-media citizen-media; networking cross-platform bleeding-edge feeds reinvent scalable.</p>',
'<p>Vertical e-commerce e-enable mashups metrics applications semantic; ROI cross-media, folksonomies platforms - rich.</p>',
'<p>Integrate frictionless engineer turn-key share envisioneer facilitate e-markets social strategize beta-test</p>',
'<p>Seize enable web-readiness vertical efficient interfaces cross-media; harness optimize.</p>',
'<p>Rich-client APIs peer-to-peer harness bandwidth, mission-critical synergies 24/365.</p>',
'<p>Aggregate communities syndicate seize empower e-business B2B applications impactful.</p>',
'<p>E-business methodologies addelivery target, long-tail aggregate out-of-the-box communities, proactive value 24/7 facilitate.</p>',
'<p>Back-end facilitate visualize, repurpose podcasts extensible create holistic.',
'<p>Efficient disintermediate integrate B2B, visualize dynamic cutting-edge.</p>',
'<p>Cluetrain eyeballs semantic transform value visionary, target revolutionize integrated.</p>',
'<p>Widgets markets, cross-media one-to-one e-tailers e-business viral standards-compliant portals.</p>',
'<p>Post extend metrics maximize dynamic, e-enable transparent; social orchestrate disintermediate maximize user-centric generate, addelivery iterate, wikis?',
'<p>Target, generate value-added robust clicks-and-mortar blogospheres; proactive mashups transform semantic.</p>',
'<p>Action-items integrate AJAX-enabled, killer out-of-the-box; vertical repurpose virtual and productize e-business.</p>',
'<p>Impactful strategize citizen-media B2B holistic eyeballs; magnetic user-contributed?',
'<p>Solutions leading-edge disintermediate synergies methodologies iterate streamline incentivize one-to-one leverage channels global.</p>',
'<p>Global proactive feeds seize long-tail front-end technologies engineer viral user-contributed.</p>',
'<p>Intuitive, bleeding-edge implement unleash channels synergistic long-tail, addelivery.</p>',
'<p>Innovative convergence intuitive next-generation back-end engage bandwidth; turn-key productize tagclouds interfaces web services.</p>',
'<p>Global, cultivate repurpose collaborative, synergize engineer.</p>',
'<p>Partnerships networking innovate deliverables data-driven virtual semantic value integrate.</p>',
'<p>Proactive revolutionary methodologies plug-and-play dynamic target data-driven.</p>',
'<p>Best-of-breed vertical blogging data-driven deploy.</p>',
'<p>Exploit data-driven niches integrate AJAX-enabled synergize portals deploy visionary rich-clientAPIs extend strategize long-tail streamline share.</p>',
'<p>Supply-chains; aggregate platforms platforms virtual leverage maximize.</p>',
];

window.names = [
'Melaine Yang',
'Andre Lovette',
'Sharla Carey',
'Shiela Valentine',
'Tabitha Hallford',
'Taylor Eggen',
'Eustolia Meiers',
'Connie Albarran',
'Marilou Dews',
'Ilana Shorey',
'Hisako Hodgin',
'September Dominguez',
'Myrle Bushey',
'Nona Baumgartner',
'Marc Toenjes',
'Santana Racette',
'Jordan Kingston',
'Elaine Sholtis',
'Saul Houghton',
'Taina Manriquez'
];

window.logos = [
'<img src="http://vignette4.wikia.nocookie.net/random-junk/images/5/5a/Bain_and_Company_Logo.png/revision/latest?cb=20160123000001" />',
'<img src="https://www.penguinrandomhouse.co.uk/content/dam/prh-corporate/penguin-random-house/corporate/image-gallery/corporate-publishers/ebury/Re-sized/imprints/Vermilion%20logo%202_.png" />',
'<img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5d/Westinghouse_Electric_Company_Logo.svg/1280px-Westinghouse_Electric_Company_Logo.svg.png" />',
'<img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/The_Travelers_Companies.svg/1280px-The_Travelers_Companies.svg.png" />',
'<img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/The_Travelers_Companies.svg/1280px-The_Travelers_Companies.svg.png" />',
'<img src="http://vectorlogofree.com/wp-content/uploads/2013/12/chep-company-vector-logo-400x400.png" />',
'<img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Titan_Company_Logo.png" />',
'<img src="https://upload.wikimedia.org/wikipedia/en/4/41/Cornell_Companies_logo.png" />',
'<img src="https://s-media-cache-ak0.pinimg.com/originals/33/4e/0a/334e0ac1ae2c531d3fb1563dc8509987.jpg" />',
'<img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1c/Penguin_logo.svg/805px-Penguin_logo.svg.png" />',
'<img src="http://www.ddesignerr.com/wp-content/uploads/2013/05/chanel-logo-610x404.png" />',
'<img src="http://www.siskgroup.com/sites/default/files/slideshow/313/958-origo-logo.png" />',
'<img src="https://s-media-cache-ak0.pinimg.com/originals/d7/45/48/d74548af31d509b1362ebf5a5e4d8d68.png" />',
'<img src="http://cdn-6-theme.designhill.com/images/infographic/dove.png" />',
];

window.paragraphs = [
    '<p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>',
    '<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>',
    '<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>',
    '<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>',
    '<p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>',
    '<p>Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric "outside the box" thinking. Completely pursue scalable customer service through sustainable potentialities.</p>',
    '<p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or "organic" sources.</p>',
    '<p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas with optimal networks.</p>'
    ];

$(function() {

    forceFeed({
        words: window.words,
        sentences: window.sentences,
        names: window.names,
        listitems: window.listitems,
        logos: window.logos,
        paragraphs: window.paragraphs
    });

    var openClass = 'is--open';

    $('[data-target]').click(function(e) {

        e.preventDefault();

        var action = $(this).data('action'); // what type of target?

        var toggle = $(this);
        var toggleGroup = $(this).data('group'); // this group

        var target = $('[data-id="'+ $(this).data('target') +'"]'); // the target
        var targetGroup = $(target).data('group'); // the target's group

        var targetsArray = $(this).data('target').split(' ');

        if (action === 'open') {

            closeGroupOpenMe(toggleGroup, this);
            // closeGroupOpenMe(targetGroup, target);

            targetsArray.forEach((targetInArray)=> {

                // nav | yourstudentlife-nav
                // console.log(targetInArray);

                var target = $('[data-id="'+ targetInArray +'"]'); // the target
                var targetGroup = $(target).data('group'); // the target's group

                closeGroupOpenMe(targetGroup, target);

            });
        }

        else if (action === 'close') {

            $(this).removeClass(openClass);
            $(target).removeClass(openClass);

        }

        else if (action === 'toggle') {

            if ($(this).is('.'+openClass)) {

                // close me
                $(this).removeClass(openClass);

                targetsArray.forEach((targetInArray)=> {

                    var target = $('[data-id="'+ $(this).data('target') +'"]'); // the target
                    $(target).removeClass(openClass);

                });

            } else {

                // open me
                closeGroupOpenMe(toggleGroup, this);

                targetsArray.forEach((targetInArray)=> {

                    // nav | yourstudentlife-nav
                    // console.log(targetInArray);

                    var target = $('[data-id="'+ targetInArray +'"]'); // the target
                    var targetGroup = $(target).data('group'); // the target's group

                    closeGroupOpenMe(targetGroup, target);

                });
            }
        }

        stickyMargins();

    });

    function closeGroupOpenMe(group, me) {

        $('[data-group="'+ group + '"]')
          .not(me)
          .removeClass(openClass);

        $(me).addClass(openClass);

    }

    $('.nav').scroll(function() {
      $(this).children('.fade').fadeOut(150);
    });

});

function stickyMargins() {
    $('.sticky').each(function() {
        var stickyHeight = $(this).outerHeight();
        $(this).next().css('margin-top', stickyHeight);
    });
}

$(window).resize(function () {

    stickyMargins();

}).resize();


// $(window).resize(function () {
//     Get rem width!
//     console.log($(window).width() / parseFloat($("body").css("font-size"))+'rem, apparently');
// }).resize();
