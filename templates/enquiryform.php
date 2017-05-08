<?php

    $title = 'Enquiries';

    require '../src/src.php';

    $page = new Page(4201622);
?>

<body class="bg-4">

    <?php include('blocks/nav.php'); ?>

     <div class="bg-0 contained pad-verticals-6">
        <h1>
            <?= live($page->heading, 'words|3')?>
        </h1>
    </div> 

<div class="spacing contained pad-verticals-2 bg-4">
    <h2>Personal details</h2>
</div>

<div class="spacing pad-verticals-3 bg-4">
    <div class="spacing contained">
        <form>
            <grid>
                <div medium-large="8" small="12">
                        <label><?= live($page->label1, 'words|1')?></label>
                        <select id="dropdown">
                            <option>Mr</option>
                            <option>Ms</option>
                            <option>Mrs</option>
                        </select>
                </div>
                <div medium-large="8" small="12"></div>

                <div medium-large="8" small="12">
                    <label><?= live($page->label2, 'words|1')?></label>
                    <input type="text" />
                </div>
                <div medium-large="8" small="12"></div>

                <div medium-large="8" small="12">
                    <label><?= live($page->label3, 'words|1')?></label>
                    <select id="dropdown">
                        <option>Profession 1</option>
                        <option>Profession 2</option>
                        <option>Profession 3</option>
                    </select>
                </div>
                <div medium-large="8" small="12"></div>

                <div medium-large="8" small="12">
                    <label><?= live($page->label4, 'words|1')?></label>
                    <input type="text" />
                </div>
                <div medium-large="8" small="12"></div>

                <div medium-large="8" small="12">
                    <label><?= live($page->label5, 'words|1')?></label>
                    <input type="text" />
                </div>
                <div medium-large="8" small="12"></div>

                <div medium-large="8" small="12">
                        <label><?= live($page->label6, 'words|1')?></label>
                        <input type="text" />
                </div>
                <div medium-large="4">
                <p>&nbsp;</p>
                    <button>Look up address</button>
                </div>   
                <div medium-large="8" small="12"></div> 

                <div medium-large="8" small="12">
                <p>150 Tower Bridge Road</p>
                <p>NV9 190W</p>
                </div>
                <div medium-large="4">
                    <button>Edit address</button>
                </div>
                <div medium-large="8" small="12"></div> 
            </grid>
        </form>
    </div>
</div>

<div class="spacing contained pad-verticals-2 bg-4">
    <h2>Project details</h2>
</div>
<div class="spacing pad-verticals-3 bg-4">
    <div class="spacing contained">
        <form>
            <grid>
                <div medium-large="8" small="12">
                        <label><?= live($page->label7, 'words|1')?></label>
                        <select id="dropdown">
                            <option>Sector 1</option>
                            <option>Sector 2</option>
                            <option>Sector 3</option>
                        </select>
                </div>
                <div medium-large="8" small="12"></div> 
                <div medium-large="8" small="12">
                        <label><?= live($page->label8, 'words|1')?></label>
                        <select id="dropdown">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                </div>
                <div medium-large="8" small="12"></div> 

                <div medium-large="8" small="12">
                    <label for="field3"><?= live($page->label9, 'words|1')?></label>
                    <textarea id="field3" rows="4"></textarea>
                    <p class="text-small text-align-right">Max letter count: 150</p>
                </div>
                <div medium-large="8" small="12">
                        <label><?= live($page->label10, 'words|1')?></label>
                        <input type="text" />
                </div>
                <div medium-large="4">
                <p>&nbsp;</p>
                    <button>Look up address</button>
                </div>   
                <div medium-large="8" small="12"></div> 

                <div medium-large="8" small="12">
                    <p>150 Tower Bridge Road</p>
                    <p>NV9 190W</p>
                </div>
                <div medium-large="4">
                    <button>Edit address</button>
                </div>
                <div medium-large="8" small="12"></div> 

                <div medium-large="6">
                <?= live($page->label11, 'words|1')?></div>
                <div medium-large="6"><input type="checkbox"/></div>

                <div medium-large="6">
                <?= live($page->label12, 'words|1')?></div>
                <div medium-large="6"><button>Upload</button></div>

                <div medium-large="6">
                <?= live($page->label13, 'words|1')?></div>
                <div medium-large="6"><button>Upload</button></div>

                <div medium-large="6">
                <?= live($page->label14, 'words|1')?></div>
                <div medium-large="6"><button>Calendar</button></div>

                <div medium-large="8" small="12">
                    <label><?= live($page->label15, 'words|1')?></label>
                    <select id="dropdown">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <div medium-large="8" small="12">
                    <label><?= live($page->label16, 'words|1')?></label>
                    <select id="dropdown">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
            </grid>
        </form>
    </div>
</div>


</div>


</div>


    <?php include('../src/footer.php'); ?>
