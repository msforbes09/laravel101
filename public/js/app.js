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
