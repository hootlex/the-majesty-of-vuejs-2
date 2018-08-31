<template>
  <div class=''>
    <h3>Все истории ({{stories.length}})</h3>
    <ul class="list-group">
      <li v-for="story in stories" :key="story.id" class="list-group-item">
        <h5>{{ story.writer }} сказал "{{ story.plot }}"
          <span class="badge">{{ story.upvotes }}</span>
        </h5>

        <router-link :to="{ name: 'stories.edit', params: { id: story.id }}" tag="button" class="btn btn-default" exact>
          Редактировать
        </router-link>
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
  mounted () {
    console.log('истории')
  }
}
</script>
