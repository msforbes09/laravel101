<section class="section" id="app-4">
    <label class="label" for="">Computed Properties</label>

    <div class="content">
        <div class="subtitle">All Tasks</div>

        <ul>
            <li v-for="task in tasks">@{{ task.description }}</li>
        </ul>
    </div>

    <div class="content">
        <div class="subtitle">Uncomplete Tasks</div>

        <ul>
            <li v-for="task in uncompleteTasks" v-text="task.description"></li>
        </ul>
    </div>
</section><!-- section -->