const App = new Vue({
    el : "#app",
    data: {
        albums: [],
        genres:[],
        genreToFilter: 'All',
    },
    methods: {
        apiCall(){
            axios.get("http://localhost/php-ajax-dischi/server/controller.php" + "?genre=" + this.genreToFilter).then(
                (result) => {
                    this.albums = result.data.results;
                    console.log(this.albums);
                }
            ).catch((error) => {
                console.error(error);
            })
        }
    },
    created(){
        this.apiCall();

        axios.get("http://localhost/php-ajax-dischi/server/controller.php").then(
            (result) => {
                const tempGenres = result.data.results;
                tempGenres.forEach(element => {
                    if(!this.genres.includes(element.genre)){
                        this.genres.push(element.genre);
                    }
                });
            }
        ).catch((error) => {
            console.error(error);
        })
    },
})