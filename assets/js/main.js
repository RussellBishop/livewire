var forcefeed = require('forcefeed');
var jquery = require('jquery');

window.words = ['lorem', 'ipsum', 'dolor', 'sit', 'amet', 'adipsing', 'consectetur', 'elit', 'sed', 'commodo', 'eu', 'ligula', 'vitae', 'mollis'];

window.listitems = [
'<li>Social orchestrate disintermediate maximize user-centric generate.</li>',
'<li>Bleeding-edge implement unleash channels synergistic long-tail, addelivery.</li>',
'<li>Seize enable web-readiness vertical efficient interfaces cross-media; harness optimize.</li>',
'<li>Web-readiness vertical efficient interfaces cross-media; harness optimize.</li>',
'<li>Efficient disintermediate integrate B2B, visualize dynamic cutting-edge.</li>',
];

window.sentences = [
'Platforms vortals compelling e-markets streamline innovate deliver mashups envisioneer e-enable podcasting.',
'Networking drive dot-com interactive compelling wikis relationships repurpose real-time strategic.',
'Technologies recontextualize strategic systems e-tailers, cross-media, impactful integrate AJAX-enabled utilize, life-hacks value-added addelivery utilize incentivize seize granular.',
'Leverage mesh proactive, recontextualize deliver intuitive streamline, extensible incentivize viral efficient turn-key systems syndicate addelivery proactive.',
'Widgets sexy recontextualize deliverables syndicate channels magnetic enable user-centric; folksonomies embrace create enable visualize maximize repurpose; intuitive e-commerce.',
'Global one-to-one.',
'Architect e-business share engage incentivize mesh cross-media citizen-media; networking cross-platform bleeding-edge feeds reinvent scalable.',
'Vertical e-commerce e-enable mashups metrics applications semantic; ROI cross-media, folksonomies platforms: rich.',
'Integrate frictionless engineer turn-key share envisioneer facilitate e-markets social strategize beta-test, seize enable web-readiness vertical efficient interfaces cross-media; harness optimize.',
'Rich-client APIs peer-to-peer harness bandwidth, mission-critical synergies 24/365, aggregate communities syndicate seize empower e-business B2B applications impactful.',
'E-business methodologies addelivery target, long-tail aggregate out-of-the-box communities, proactive value 24/7 facilitate.',
'Back-end facilitate visualize, repurpose podcasts extensible create holistic, efficient disintermediate integrate B2B, visualize dynamic cutting-edge.',
'Cluetrain eyeballs semantic transform value visionary, target revolutionize integrated.',
'Widgets markets, cross-media one-to-one e-tailers e-business viral standards-compliant portals.',
'Post extend metrics maximize dynamic, e-enable transparent; social orchestrate disintermediate maximize user-centric generate, addelivery iterate, wikis? Target, generate value-added robust clicks-and-mortar blogospheres; proactive mashups transform semantic.',
'Action-items integrate AJAX-enabled, killer out-of-the-box; vertical repurpose virtual, productize e-business impactful strategize citizen-media B2B holistic eyeballs; magnetic user-contributed? Solutions leading-edge disintermediate synergies methodologies iterate streamline incentivize one-to-one leverage channels global.',
'Global proactive feeds seize long-tail front-end technologies engineer viral user-contributed, intuitive, bleeding-edge implement unleash channels synergistic long-tail, addelivery.',
'Innovative convergence intuitive next-generation back-end engage bandwidth; turn-key productize tagclouds interfaces web services.',
'Global, cultivate repurpose collaborative, synergize engineer.',
'Partnerships networking innovate deliverables data-driven virtual semantic value integrate proactive revolutionary methodologies plug-and-play dynamic target data-driven.',
'Best-of-breed vertical blogging data-driven deploy.',
'Exploit data-driven niches integrate AJAX-enabled synergize portals deploy visionary rich-clientAPIs extend strategize long-tail streamline share.',
'Supply-chains; aggregate platforms platforms virtual leverage maximize.'
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
];

forceFeed({
    words: window.words,
    sentences: window.sentences,
    names: window.names,
    listitems: window.listitems,
    logos: window.logos
});

$(function() {

    function stickyMargins() {
        $('.sticky').each(function() {
            var stickyHeight = $(this).outerHeight();
            $(this).next().css('margin-top', stickyHeight);
        });
    }

    stickyMargins();

    $(window).resize(function() {
        stickyMargins();
    });

    $(document).on('click', '[data-toggles]', function(event) {

        var dataTarget = $(this).data('toggles');
        var target = $('[data-target="'+dataTarget+'"]');

        var dataGroup = $(target).data('group');
        var group = $('[data-group="'+dataGroup+'"]');

        $(group).addClass('hide');
        $(target).removeClass('hide');

    });

});
