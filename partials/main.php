<main>
    <div class="container p-5">
        <div class="row justify-content-center gy-4 py-3">
            <div class="card col-2 text-center mx-3" v-for="(element,index) in albums">
                <div class="img-wrapper py-4 px-1">
                    <img class="img-fluid" :src="element.poster" alt="element.title">
                </div>
                <h4 class="text-light text-uppercase"> {{ element.title }} </h4>
                <div class="text-secondary fw-bold">
                    <p class="mb-0 mt-3 fs-5">{{ element.author }}</p>
                    <p>{{ element.year }}</p>
                </div>
            </div>
        </div>
    </div>
</main>