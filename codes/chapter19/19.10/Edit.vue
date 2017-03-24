<template>
  <div>
  <div class="form-horizontal">
    <h3>{{ story.writer }} said "{{ story.plot }}"</h3>
    <input type="text" class="form-control" v-model="story.plot">
    <span class="label label-info">Story upvotes {{ story.upvotes }} </span>
  </div>
  <button @click="saveChanges(story)" class="btn btn-success btn-lg">Save changes</button>
  <button @click="goBack" class="btn btn-default btn-lg">Go back</button>
  </div>
</template>

<script>
import {store} from '../store.js'

export default {
  mounted () {
    this.id = this.$route.params.storyId * 1
    this.story = store.stories.find(this.isTheOne)
  },
  data () {
    return {
      story: {},
      id: null
    }
  },
  methods: {
    saveChanges (story) {
      this.$router.push('/stories')
      console.log('Saved!')
    },
    goBack () {
      // this.$router.go(-1)
      this.$router.back()
    },
    isTheOne (story) {
      return story.id === this.id
    }
  }
}
</script>
