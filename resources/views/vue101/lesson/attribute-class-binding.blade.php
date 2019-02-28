<section class="section" id="app-3">
    <label class="label" for="">Attribute and Class Binding</label>

    <button class="button" :title="title">Hover Me</button>
    
    <button class="button" :class="{ 'is-primary': isPrimary }" @click="toggleClass">Toggle Class</button>
    
    <button class="button" :disabled="isDisabled" @click="disable">Disable Me</button>
    
    <button class="button is-info" :class="{ 'is-loading': isLoading }" @click="startLoad">Start Loading</button>
</section><!-- section -->