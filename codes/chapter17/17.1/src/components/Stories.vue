<template>
  <ul class="list-group">
    <li v-for="story in stories"  class="list-group-item">
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
