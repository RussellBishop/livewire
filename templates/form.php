<?php

    $title = 'Form';

    require '../src/src.php';

    // $page = new Page(4390635);

?>

<form>

    <grid class="contained">

        <div small="12" medium-large="4">

            <label for="Name">Name</label>
            <input type="text" id="Name" />

        </div>

        <div small="12" medium-large="4">

            <label for="Email">Email</label>
            <input type="text" id="Email" />

        </div>

        <div small="12" medium-large="4">

            <label for="Phone">Phone</label>
            <input type="text" id="Phone" />

        </div>

        <div small="12" medium-large="6">

            <label for="Subject">Subject</label>
            <select id="Subject">
                <option>A</option>
                <option>B</option>
                <option>C</option>
            </select>

        </div>

        <div small="12" medium-large="6">

            <label for="Phone">Phone</label>
            <input type="text" id="Phone" />

        </div>

        <div small-medium-large="12">
            <label for="Message">Message</label>
            <textarea id="Message" rows="6"></textarea>
        </div>

        <button type="button">Send</button>

    </grid>

</form>

<?php include('../src/footer.php'); ?>
