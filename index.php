<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Livewire v1</title>

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px" rel="stylesheet">
<link href="/dist/css/style.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
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

            var target = $(this).data('toggles');

            $('[data-target="'+target+'"]').toggleClass('hide');

        });

    });
</script>

</head>

<?php include('sections/header.php'); ?>

<header class="spacing contained pad-sides-3 pad-verticals-3 bg-black text-align-center">

    <h1>Decision Metrics & Finance</h1>
    <h2>Novel metrics suite of automotive solutions</h2>

    <p><a href="#test" class="button medium">Meet the Team</a></p>
    <p><a href="#test" class="button large">Suck an Egg</a></p>

</header>

<row class="contained content-centre">

    <div class="max-20" border="light">
        <?php include('repeats/post.php'); ?>
    </div>

    <div class="max-20" border>
        <?php include('repeats/post.php'); ?>
    </div>

    <div class="max-20" border="dark">
        <?php include('repeats/post.php'); ?>
    </div>

</row>

<div class="contained">

    <grid>

        <?php for ($x = 1; $x <= 12; $x++) : ?>

            <div medium="6" large="1" class="pad" border>
            </div>

        <?php endfor; ?>

    </grid>

    <grid>

        <?php for ($x = 1; $x <= 6; $x++) : ?>

            <div medium="6" large="2" border="light">
                <?php include('repeats/post.php'); ?>
            </div>

        <?php endfor; ?>

    </grid>

    <grid>

        <?php for ($x = 1; $x <= 4; $x++) : ?>

            <div medium="6" large="3" border="dark">
                <?php include('repeats/post.php'); ?>
            </div>

        <?php endfor; ?>

    </grid>

    <grid>

        <?php for ($x = 1; $x <= 3; $x++) : ?>

            <div medium="6" large="4" border>
                <?php include('repeats/post.php'); ?>
            </div>

        <?php endfor; ?>

    </grid>

    <grid>

        <?php for ($x = 1; $x <= 2; $x++) : ?>

            <div medium-large="6" border="light">
                <?php include('repeats/post.php'); ?>
            </div>

        <?php endfor; ?>

    </grid>

</div>

<main class="spacing-article contained">

    <h1>Hello</h1>

    <p><b>The president decided quickly: She has to go, he told them.</b></p>

    <hr />

    <p>The official statement from Mr. Spicer accused Ms. Yates of failing to fulfill her duty to defend a “legal order designed to protect the citizens of the United States” that had been approved by the Justice Department’s Office of Legal Counsel.</p>

    <h2>Do you know too much?</h2>

    <p>“It is time to get serious about protecting our country,” Mr. Spicer said in the statement. He accused Democrats of holding up the confirmation of Mr. Sessions for political reasons. “Calling for tougher vetting for individuals traveling from seven dangerous places is not extreme. It is reasonable and necessary to protect our country.”</p>

    <h3>Franklin Gothic Medium</h3>

    <p>Former Justice Department officials said the president’s action would send a deep shudder through an agency that was already on edge as officials anticipated an ideological overhaul once Mr. Session takes over. One former senior official said that department lawyers would be unnerved by the firing.</p>

</main>

<main class="contained">

    <div class="row space-between vertical-centre">
        <h1>Resources</h1>

        <div>
        <a href="/resources.php" class="button">More Resources</a>
        </div>
    </div>

    <row grid class="push-top">

        <?php for ($x = 1; $x <= 3; $x++) : ?>

            <div medium="6" large="4">
                <?php include('repeats/resource.php'); ?>
            </div>

        <?php endfor; ?>

    </row>

</main>

<row>

    <div class="bg-1" medium-large="8">

        <section class="pad-2 spacing-article">
            <h2>Do you know too much?</h2>

            <p>“It is time to get serious about protecting our country,” Mr. Spicer said in the statement. He accused Democrats of holding up the confirmation of Mr. Sessions for political reasons. “Calling for tougher vetting for individuals traveling from seven dangerous places is not extreme. It is reasonable and necessary to protect our country.”</p>
        </section>

        <section class="pad-2 spacing-article">
            <h2>Do you know too much?</h2>

            <p>“It is time to get serious about protecting our country,” Mr. Spicer said in the statement. He accused Democrats of holding up the confirmation of Mr. Sessions for political reasons. “Calling for tougher vetting for individuals traveling from seven dangerous places is not extreme. It is reasonable and necessary to protect our country.”</p>
        </section>

    </div>

    <aside medium-large="4">

        <div class="link pad-2 spacing-article">

            <h2>Franklin Gothic Medium</h2>

            <p>Former Justice Department officials said the president’s action would send a deep shudder through an agency that was already on edge as officials anticipated an ideological overhaul once Mr.</p>

        </div>

    </aside>

</row>

</body>
</html>
