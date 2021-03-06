<?php include('../src/head.php'); ?>

<div class="spacing-2">

    <section class="contained pad spacing">

        <h1>Livewire</h1>

        <grid>

            <div>
                <h3>Global Styles</h3>
                <ul>
                    <li><a href="#typography">Typography</a></li>
                    <li><a href="#backgrounds">Backgrounds</a></li>
                    <li><a href="#borders">Borders</a></li>
                    <li><a href="#buttons-links">Buttons &amp; Links</a></li>
                </ul>
            </div>

            <div>
                <h3>Layout</h3>
                <ul>
                    <li><a href="#position">Position</a></li>
                    <li><a href="#display">Display</a></li>
                    <li><a href="#grids">Grids</a></li>
                    <li><a href="#breakpoints">Breakpoints</a></li>
                </ul>
            </div>

            <div>
                <h3>Incomplete</h3>
                <ul>
                    <li><a href="#forms">Forms</a></li>
                    <li><a href="#tables">Tables</a></li>
                </ul>
            </div>

            <div>
                <h3>Components</h3>
                <ul>
                    <li><a href="#tabs">Tabs</a></li>
                    <li><a href="#dropdowns">Dropdowns</a></li>
                </ul>
            </div>

        </grid>

    </section>

    <section id="typography">

        <div class="bg-black spacing pad contained">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <p>Paragraph</p>
            <ul>
                <li>Unordered list</li>
            </ul>
            <ol>
                <li>Ordered list</li>
            </ol>
            <blockquote>
                <p>Blockquote</p>
            </blockquote>

            <hr />

            <p class="text-small">.text-small</p>
            <p class="text-caps">.text-caps</p>

            <p class="text-align-center">.text-align-center</p>
            <p class="text-align-left">.text-align-left</p>
            <p class="text-align-right">.text-align-right</p>
        </div>

    </section>

    <div class="contained spacing-2">

        <section id="backgrounds">
            <div class="pad bg-black">.bg-black | .bg-0</div>
            <div class="pad bg-1">.bg-1</div>
            <div class="pad bg-2">.bg-2</div>
            <div class="pad bg-3">.bg-3</div>
            <div class="pad bg-4">.bg-4</div>
            <div class="pad bg-white">.bg-white | .bg-5</div>
        </section>

        <section id="borders" class="spacing">
            <xmp class="pad" border><div border></xmp>
            <xmp class="pad" border="light"><div border="light"></xmp>
            <xmp class="pad" border="dark"><div border="dark"></xmp>
        </section>

        <section id="buttons-links" class="spacing">
            <button>Button</button>

            <div>
                <button class="med">Button Medium</button>
                <xmp><button class="med"></xmp>
            </div>

            <div>
                <button class="lrg">Button Large</button>
                <xmp><button class="lrg"></xmp>
            </div>

            <a>Anchor text</a>
        </section>

        <section id="position">
            <xmp>.absolute</xmp>
            <xmp>.sticky | .fixed</xmp>
        </section>

    </div>

</div>

