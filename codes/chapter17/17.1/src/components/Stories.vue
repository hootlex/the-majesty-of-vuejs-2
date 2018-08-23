<template>
  <ul class="list-group">
    <li v-for="(story, index) in stories" :key="index" class="list-group-item">
      {{ story.writer }} said "{{ story.plot }}"
      Story upvotes {{ story.upvotes }}.
    </li>
  </ul>
</template>

<script>
  export default {
    props: ['stories']
  }
</script>
