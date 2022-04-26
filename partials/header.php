<header class="d-flex justify-content-between align-items-center">
    <div class="logo-wrapper">
        <img class="my-logo" src="img/logo-small.svg" alt="spotify logo">
    </div>
    <div class="select-wrapper">
        <select class="form-select" name="genres" @change="apiCall()" v-model="genreToFilter">
            <option value="All">All</option>
            <option v-for="(element, index) in genres" :value="element">
                    {{element}}
            </option>
        </select>
    </div>
</header>