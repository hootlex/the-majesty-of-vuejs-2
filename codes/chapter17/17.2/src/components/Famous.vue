<template>
  <div id="famous">  
    <h2>Популярные истории <strong>({{famous.length}})</strong></h2>
    <ul class="list-group">
      <li v-for="(story, index) in famous" :key="index" class="list-group-item">
        {{ story.writer }} сказал "{{ story.plot }}".
        Голосов за историю: {{ story.upvotes }}.
      </li>
    </ul>
  </div>
</template>

<script>
  import {store} from '../store.js'

  export default {
    data () {
      return {
        stories: store.stories
      }
    },
    computed: {
      famous () {
        return this.stories.filter(function (item) {
          return item.upvotes > 50
        })
      }
    }
  }
</script>
