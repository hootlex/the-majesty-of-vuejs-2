Vue.component('story', {
  template: '#template-story-raw',
  props: ['story'],
  methods: {
    deleteStory: function (story) {
      var index = this.$parent.stories.indexOf(story)
      this.$parent.stories.splice(story, 1)
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
    pagination: {},
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
    fetchStories: function (page_url) {
      var vm = this;
      page_url = page_url || '/api/stories'
      this.$http.get(page_url)
        .then(function (response) {
          var storiesReady = response.data.data.map(function (story) {
            story.editing = false;
            return story
          })
          vm.makePagination(response.data)
          this.stories = storiesReady
        });
    },
    makePagination(data) {
      // здесь мы используем response.data
      var pagination = {
        current_page: data.current_page,
        last_page: data.last_page,
        next_page_url: data.next_page_url,
        prev_page_url: data.prev_page_url
      }
      this.pagination = pagination
    }
  }
});