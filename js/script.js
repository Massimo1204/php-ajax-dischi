const App = new Vue({
    el : "#app",
    data: {
        albums: [],
    },
    created(){
        axios.get("http://localhost/php-ajax-dischi/server/controller.php").then(
            (result) => {
                this.albums = result.data;
                console.log(result);
            }
        ).catch((error) => {
            console.error(error);
        })
    },
})