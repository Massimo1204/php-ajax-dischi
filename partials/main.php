<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-2 text-center" v-for="(element,index) in albums">
                <div class="img-wrapper">
                    <img class="img-fluid" :src="element.poster" alt="element.title">
                </div>
                <h4 class="text-light text-uppercase"> {{ element.title }}</h4>
            </div>
        </div>
    </div>
</main>