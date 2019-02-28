<section id="app-1" class="section">
    <div class="field">
        <label class="label" for="">Basic Data Binding</label>
    
        <div class="control">
            <input class="input" type="text" id="" value="" placeholder="Text input" v-model="message">
        </div><!-- control -->
    </div><!-- field -->

    <div class="subtitle">Here is the content: @{{ message }}</div>
</section><!-- section -->