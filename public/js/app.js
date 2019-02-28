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
            {description: 'Learn PHP', completed: false},
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
