new Vue({
    el: '#app-1',
    data: {
        message: 'Hello World'
    }
});

var app2 = new Vue({
    el: '#app-2',
    data: {
        names: ['Joe', 'John', 'Mary'],

        newName: ''
    },

    methods: {
        addName() {
            this.names.push(this.newName);

            this.newName = '';
        }
    }
});

new Vue({
    el: '#app-3',
    data: {
        title: 'Im a generated title in Vue',
        isPrimary: false,
        isLoading: false,
        isDisabled: false,
    },
    methods: {
        toggleClass() {
            this.isPrimary = ! this.isPrimary
        },
        startLoad() {
            this.isLoading = true
        },
        disable() {
            this.isDisabled = true
        },
    }
})

new Vue({
    el: '#app-4',
    data: {
        tasks: [
            {description: 'Learn HTML5', completed: true},
            {description: 'Learn CSS', completed: true},
            {description: 'Learn Javascript', completed: true},
            {description: 'Learn PHP', completed: true},
            {description: 'Learn MySQL', completed: false},
            {description: 'Learn Laravel', completed: false},
            {description: 'Learn Vue.js', completed: false},
        ]
    },
    computed: {
        uncompleteTasks() {
            return this.tasks.filter(task => ! task.completed)
        }
    }
})

Vue.component('message', {
    props: ['title'],

    template: `
        <article class="message" v-show="isVisible">
            <div class="message-header">
                <p>{{ title }}</p>
        
                <button class="delete" aria-label="delete" @click=" isVisible = false "></button>
            </div><!-- message-header -->
        
            <div class="message-body">
                <slot></slot>
            </div><!-- message-body -->
        </article><!-- message -->
    `,
    data() {
        return {
            isVisible: true
        }
     }   
})

new Vue({
    el: '#app-5'
})

Vue.component('Modal', {
    props: ['title'],
    template: `
        <div class="modal is-active">
            <div class="modal-background" @click="$emit('close')"></div>
            
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title" v-text="title"></p>
                    <button class="delete" aria-label="close" @click="$emit('close')"></button>
                </header><!-- modal-card-head -->
        
                <section class="modal-card-body">
                    <slot></slot>
                </section><!-- modal-card-body -->
                
                <footer class="modal-card-foot">
                    <button class="button" @click="$emit('close')">Okay</button>
                </footer><!-- modal-card-foot -->
            </div><!-- modal-card -->
        </div><!-- modal -->`
})

new Vue({
    el: '#app-6',
    data: {
        modalShown: false
    }
})

Vue.component('tabs', {
    template: `
        <div>
            <div class="tabs">
                <ul>
                    <li class="is-active"><a>Pictures</a></li>
            
                    <li><a>Music</a></li>
                </ul>
            </div><!-- tabs -->

            <div class="tabs-detail">
                <slot></slot>
            </div>
        </div>
    `,
})

new Vue({
    el: '#app-7'
})
