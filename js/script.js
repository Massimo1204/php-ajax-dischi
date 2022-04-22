const App = new Vue({
    el : "#app",
    data: {
        albums: [],
    },
    created(){
        axios.get("localhost/php-ajax-dischi-")
    },
})