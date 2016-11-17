<template>
  <div id="famous">
    <h2>Trending stories<strong>({{famous.length}})</strong></h2>
    <ul class="list-group">
      <li v-for="story in famous"  class="list-group-item">
        {{ story.writer }} said "{{ story.plot }}".
        Story upvotes {{ story.upvotes }}.
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  computed: {
    famous () {
      return this.stories.filter(function (item) {
        return item.upvotes > 50
      })
    }
  },
  data () {
    return {
      stories: [
        {
          plot: 'My horse is amazing.',
          writer: 'Mr. Weebl',
          upvotes: 28,
          voted: false
        },
        {
          plot: 'Narwhals invented Shish Kebab.',
          writer: 'Mr. Weebl',
          upvotes: 8,
          voted: false
        },
        {
          plot: 'The dark side of the Force is stronger.',
          writer: 'Darth Vader',
          upvotes: 52,
          voted: false
        },
        {
          plot: 'One does not simply walk into Mordor',
          writer: 'Boromir',
          upvotes: 74,
          voted: false
        }
      ]
    }
  }
}
</script>
