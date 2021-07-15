require('./bootstrap');

const app = new Vue({
    el: '#app',
    data: {

    }, 

    methods: {
        alert(){
            if (!confirm('Vuoi canellarlo definitivamente?')) {
                returnToPreviousPage();
            }
        }
    }
})
