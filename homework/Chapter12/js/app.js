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
      /* Установим false в свойство editing, чтобы показывать снова
      кнопки действий и скрывать поля ввода */
      movie.editing = false;
    },
    storeMovie: function (movie) {
      this.$http.post('/api/movies/', movie).then(function (response) {
        /*
        После сохранения новой истории в базе данных, получаем снова все истории
        с помощью vm.fetchStories();
        Или лучше обновим идентификатор созданной истории
        */
        Vue.set(movie, 'id', response.data.id);

        /* Установим false в свойство editing, чтобы показывать снова
        кнопки действий и скрывать поля ввода */
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
        title: '',
        director: '',
        editing: true
      };
      this.movies.push(newMovie);
    },
    fetchMovies: function () {
      var vm = this;
      this.$http.get('/api/movies')
        .then(function (response) {
          // установить данные в vm
          var moviesReady = response.data.map(function (movie) {
            movie.editing = false;
            return movie
          })
          Vue.set(vm, 'movies', moviesReady)
        });
    },
  }
});
