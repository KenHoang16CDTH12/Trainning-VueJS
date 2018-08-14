new Vue({
  el: '#vue-app',
  data: {
    name: '',
    age: 20,
    a: 0,
    b: 0,
  },
  methods: {
    logName: function() {
      console.log('You entered your name');
    },
    logAge: function() {
      console.log('You entered your age');
    },
    // addToA: function() {
    //   console.log('addToA');
    //   return this.a + this.age;
    // },
    // addToB: function() {
    //   console.log('addToB');
    //   return this.b + this.age;
    // }
  },
  computed: {
    addToA: function() {
      console.log('addToA');
      return this.a + this.age;
    },
    addToB: function() {
      console.log('addToB');
      return this.b + this.age;
    }
  }
});
