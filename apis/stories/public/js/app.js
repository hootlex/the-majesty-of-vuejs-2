Vue.component('story', {
  template: '#template-story-raw',
  props: ['story'],
  methods: {
    deleteStory: function (story) {
      var index = this.$parent.stories.indexOf(story);
      this.$parent.stories.splice(index, 1)
      this.$http.delete('/api/stories/' + story.id)
    },
    upvoteStory: function (story) {
      story.upvotes++;
      this.$http.patch('/api/stories/' + story.id, story)
    },
    editStory: function (story) {
      story.editing = true;
    },
    updateStory: function (story) {
      this.$http.patch('/api/stories/' + story.id, story)
      /* Установим false в свойство editing, чтобы показывать снова
      кнопки действий и скрывать поля ввода */
      story.editing = false;
    },
    storeStory: function (story) {
      this.$http.post('/api/stories/', story).then(function (response) {
        /*
        После сохранения новой истории в базе данных, получаем снова все истории
        с помощью vm.fetchStories();
        Или лучше обновим идентификатор созданной истории
        */
        Vue.set(story, 'id', response.data.id);

        /* Установим false в свойство editing, чтобы показывать снова
        кнопки действий и скрывать поля ввода */
        story.editing = false;
      });
    },
  }
})

new Vue({
  el: '#v-app',
  data: {
    stories: [],
    story: {}
  },
  mounted: function () {
    this.fetchStories()
  },
  methods: {
    createStory: function () {
      var newStory = {
        plot: '',
        upvotes: 0,
        editing: true
      };
      this.stories.push(newStory);
    },
    fetchStories: function () {
      var vm = this;
      this.$http.get('/api/stories')
        .then(function (response) {
          // установить данные в vm
          var storiesReady = response.data.map(function (story) {
            story.editing = false;
            return story
          })

          Vue.set(vm, 'stories', storiesReady)
        });
    },
  }
});
