<grid class="bg-4 contained pad sticky top left right row-space-between-vertical-centre shadow">

    <img src="/dist/img/logo.svg" class="height-2" />

    <nav medium-large="hide">
        <button class="button z-max" data-toggles="mobileMenu">≡</button>

        <ul class="fixed top right bottom left bg-black hide" data-target="mobileMenu" data-group="popouts">

            <li><button class="button z-max" data-toggles="mobileMenu">✖</button></li>

            <li>
            <a href="#" class="button arrow-down">Education</a>
                <ul class="pad-left-1">
                    <li><a href="/about.php" class="button">1</a></li>
                    <li><a href="/about.php" class="button">2</a></li>
                    <li><a href="/about.php" class="button">3</a></li>
                </ul>
            </li>
            <li><a href="/about.php" class="button">About</a></li>
        </ul>
    </nav>

    <nav small="hide">
        <ul>
            <li>
            <button class="button arrow-down" data-toggles="menuA">Education</button>
                <ul data-target="menuA" data-group="nav" class="dropdown-top-right hide">
                    <li><a href="/about.php" class="button">1</a></li>
                    <li><a href="/about.php" class="button">2</a></li>
                    <li><a href="/about.php" class="button">3</a></li>
                </ul>
            </li>
            <li><a href="/about.php" class="button">About</a></li>
        </ul>
    </nav>

</grid>
