<grid sizes="12|3|2" justify="between" class="contained pad-verticals-2 bg-2">

    <fieldset>

        <label for="edit-field-category-tid">Category</label>

        <select id="edit-field-category-tid">
            <option value="All" selected="selected">- Any -</option>
            <option value="2757">Arts</option>
            <option value="2759">General Interest</option>
            <option value="2758">Sports</option>
        </select>

    </fieldset>


    <fieldset>

        <label for="edit-sort-by">Sort by</label>
        <select id="edit-sort-by" class="form-select">
            <option value="title" selected="selected">Name</option>
        </select>

    </fieldset>


    <fieldset>

        <label for="edit-sort-order">Order by</label>
        <select id="edit-sort-order">
            <option value="ASC" selected="selected">Asc</option>
            <option value="DESC">Desc</option>
        </select>

    </fieldset>

    <fieldset>

        <button type="button" class="button button--full">Apply</button>

    </fieldset>

</grid>