Vue.component('movie', {
    template: '#template-movie-raw',
    props: ['movie'],
    methods: {
        deleteMovie: function (movie) {
            var index = this.$parent.movies.indexOf(movie);
            this.$parent.movies.splice(index, 1)
            this.$http.delete('/api/movies/' + movie.id)
        },
        editMovie: function (movie) {
            movie.editing = true;
        },
        updateMovie: function (movie) {
            this.$http.patch('/api/movies/' + movie.id, movie)
            //Set editing to false to show actions again and hide the inputs
            movie.editing = false;
        },
        storeMovie: function (movie) {
            this.$http.post('/api/movies/', movie).then(function (response) {
                /*
                After the the new movie is stored in the database fetch again all movies with
                vm.fetchMovies();
                Or Better, update the id of the created movie
                */
                Vue.set(movie, 'id', response.data.id);

                //Set editing to false to show actions again and hide the inputs
                movie.editing = false;
            });
        },
    }
})

new Vue({
    el: '#v-app',
    data: {
        movies: [],
        movie: {}
    },
    mounted: function () {
        this.fetchMovies()
    },
    methods: {
        createMovie: function () {
            var newMovie = {
                title: "",
                director: "",
                editing: true
            };
            this.movies.push(newMovie);
        },
        fetchMovies: function () {
            console.log('fetsi')
            var vm = this;
            this.$http.get('/api/movies')
                .then(function (response) {
                    // set data on vm
                    var moviesReady = response.data.map(function (movie) {
                        movie.editing = false;
                        return movie
                    })
                    Vue.set(vm, 'movies', moviesReady)
                });
        },
    }
});
