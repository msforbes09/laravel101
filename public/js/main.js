new Vue({
    el: '#navbar',
    data: {
        active: false
    },
    methods: {
        alert() {
            this.active = !this.active
        }
    }
});