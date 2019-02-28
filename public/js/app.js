new Vue({
    el: '#app-1',
    data: {
        message: 'Hello World'
    }
});

var app2 = new Vue({
    el: '#app-2',
    data: {
        names: ['Joe', 'John', 'Mary']
    },
    mounted() {
        document.querySelector('#save').addEventListener('click', () =>{
            const name = document.querySelector('#name');
            
            this.names.push(name.value);
            
            name.value = '';
        });
    }
});
