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

            $(target).toggleClass('hide');
            console.log(target);

        });

    });
    </script>

</head>

<header class="bg-white-darken-1 contained pad sticky top left right grid-space-between-vertical-centre shadow">

    <img src="/dist/img/logo.png" class="height-3" />

    <nav class="hide-m">
        <button class="button hide-m z-max" data-toggles="#nav">≡</button>

        <ul class="fixed top right bottom left bg-black hide" id="nav" data-group="popouts">

            <a href="/about.php" class="button">About</a>
            <a href="/about.php" class="button">About</a>
            <a href="/about.php" class="button">About</a>
            <a href="/about.php" class="button">About</a>
        </ul>
    </nav>


    <nav class="hide show-m">
        <ul>
            <button class="button" data-toggles="#selector">Toggler</button>
            <a href="/about.php" class="button">About</a>
            <a href="/about.php" class="button">About</a>
            <a href="/about.php" class="button">About</a>
            <a href="/about.php" class="button">About</a>
        </ul>
    </nav>

</header>

<header class="space-content contained pad-sides-3 pad-verticals-3 bg-black">
    <h1>Hello</h1>
    <h2>The president decided quickly: She has to go, he told them.</h2>
</header>

<main class="space-contents contained">

    <h1>Hello</h1>

    <p><b>The president decided quickly: She has to go, he told them.</b></p>

    <hr />

    <p>The official statement from Mr. Spicer accused Ms. Yates of failing to fulfill her duty to defend a “legal order designed to protect the citizens of the United States” that had been approved by the Justice Department’s Office of Legal Counsel.</p>

    <h2>Do you know too much?</h2>

    <p>“It is time to get serious about protecting our country,” Mr. Spicer said in the statement. He accused Democrats of holding up the confirmation of Mr. Sessions for political reasons. “Calling for tougher vetting for individuals traveling from seven dangerous places is not extreme. It is reasonable and necessary to protect our country.”</p>

    <h3>Franklin Gothic Medium</h3>

    <p>Former Justice Department officials said the president’s action would send a deep shudder through an agency that was already on edge as officials anticipated an ideological overhaul once Mr. Session takes over. One former senior official said that department lawyers would be unnerved by the firing.</p>

</main>

<main class="grid-auto contained">

    <div class="bg-white-darken-1 pad-2 space-contents">
        <h2>Do you know too much?</h2>

        <p>“It is time to get serious about protecting our country,” Mr. Spicer said in the statement. He accused Democrats of holding up the confirmation of Mr. Sessions for political reasons. “Calling for tougher vetting for individuals traveling from seven dangerous places is not extreme. It is reasonable and necessary to protect our country.”</p>

    </div>

    <div class="bg-white-darken-1 pad-2 space-contents link">

        <h3>Franklin Gothic Medium</h3>

        <p>Former Justice Department officials said the president’s action would send a deep shudder through an agency that was already on edge as officials anticipated an ideological overhaul once Mr. Session takes over. One former senior official said that department lawyers would be unnerved by the firing.</p>

        <blockquote>Former Justice Department officials said the president’s action would send a deep shudder through an agency that was already on edge as officials anticipated an ideological overhaul once Mr. Session takes over. One former senior official said that department lawyers would be unnerved by the firing.</blockquote>

    </div>

    <div class="bg-white-darken-1 pad-2 space-contents">
        <h2>Do you know too much?</h2>

        <p>“It is time to get serious about protecting our country,” Mr. Spicer said in the statement. He accused Democrats of holding up the confirmation of Mr. Sessions for political reasons. “Calling for tougher vetting for individuals traveling from seven dangerous places is not extreme. It is reasonable and necessary to protect our country.”</p>

    </div>

    <div class="bg-white-darken-1 pad-2 space-contents">

        <h3>Franklin Gothic Medium</h3>

        <p>Former Justice Department officials said the president’s action would send a deep shudder through an agency that was already on edge as officials anticipated an ideological overhaul once Mr. Session takes over. One former senior official said that department lawyers would be unnerved by the firing.</p>

        <blockquote>Former Justice Department officials said the president’s action would send a deep shudder through an agency that was already on edge as officials anticipated an ideological overhaul once Mr. Session takes over. One former senior official said that department lawyers would be unnerved by the firing.</blockquote>

    </div>

</main>



</body>
</html>
