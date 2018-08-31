<template>
  <ul class="list-group">
    <li v-for="(story, index) in stories" :key="index" class="list-group-item">
      {{ story.writer }} сказал "{{ story.plot }}"
      Голосов за историю: {{ story.upvotes }}.
    </li>
  </ul>
</template>

<script>
export default {
  data () {
    return {
      stories: [
        {
          plot: 'Моя лошадь потрясающая.',
          writer: 'Мистер Уибл',
          upvotes: 28,
          voted: false
        },
        {
          plot: 'Нарвалы изобрели шашлык.',
          writer: 'Мистер Уибл',
          upvotes: 8,
          voted: false
        },
        {
          plot: 'Тёмная сторона Силы сильнее.',
          writer: 'Дарт Вейдер',
          upvotes: 52,
          voted: false
        },
        {
          plot: 'Просто так в Мордор не попадёшь',
          writer: 'Боромир',
          upvotes: 74,
          voted: false
        }
      ]
    }
  }
}
</script>
