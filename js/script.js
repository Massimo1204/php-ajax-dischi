const App = new Vue({
    el : "#app",
    data: {
        albums: [],
    },
    created(){
        axios.get("http://localhost/php-ajax-dischi/server/controller.php").then(
            (result) => {
                this.albums = result.data.results;
                console.log(this.albums);
            }
        ).catch((error) => {
            console.error(error);
        })
    },
})