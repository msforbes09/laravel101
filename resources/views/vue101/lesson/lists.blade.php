<section class="section" id="app-2">
    <div class="content">
        <ul>
            <li v-for="name in names" v-text="name"></li>
        </ul>
    </div>{{-- content --}}

    <div class="field-group">
        <label class="label" for="">Add Name:</label>
        
        <div class="columns">
            <div class="column">
                <div class="control">
                    <input class="input" type="text" id="name" value="" placeholder="Text input">
                </div><!-- control -->
            </div><!-- column -->
        
            <div class="column">
                <button class="button is-primary" id="save">Save</button>
            </div><!-- column -->
        </div><!-- columns -->
    </div><!-- field -->
</section><!-- section -->