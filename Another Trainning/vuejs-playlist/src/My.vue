<template>
<ul>
  <li v-for="ninja in ninjas">{{ ninja }}</li>
</ul>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      ninjas: ['Yoshi', 'Mario', 'Ryu']
    }
  }
}
</script>

<style>

</style>
