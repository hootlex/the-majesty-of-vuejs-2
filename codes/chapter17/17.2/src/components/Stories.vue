<template>
  <ul class="list-group">
    <li v-for="(story, index) in stories" :key="index" class="list-group-item">
      {{ story.writer }} сказал "{{ story.plot }}"
      Голосов за историю: {{ story.upvotes }}.
    </li>
  </ul>
</template>

<script>
import {store} from '../store.js'
export default {
  data () {
    return {
      // Привязка напрямую со stories
      stories: store.stories
    }
  }
}
</script>
