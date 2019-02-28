<section class="section" id="app-2">
    <label class="label" for="">Lists</label>

    <div class="content">
        <ul>
            <li v-for="name in names" v-text="name"></li>
        </ul>
    </div>{{-- content --}}

    <div class="field-group">
        <label class="label" for="">Event Handling</label>
        
        <div class="columns">
            <div class="column">
                <div class="control">
                    <input class="input" type="text" id="name" value="" placeholder="Add new name" v-model="newName">
                </div><!-- control -->
            </div><!-- column -->
        
            <div class="column">
                <button class="button is-primary" @click="addName">Save</button>
            </div><!-- column -->
        </div><!-- columns -->
    </div><!-- field -->
</section><!-- section -->