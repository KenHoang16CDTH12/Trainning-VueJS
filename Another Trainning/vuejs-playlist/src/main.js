import Vue from 'vue'
import App from './App.vue'
import Ninjas from './My.vue'

Vue.component('ninjas', Ninjas);

new Vue({
  el: '#app',
  render: h => h(App)
})
