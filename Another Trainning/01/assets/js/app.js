new Vue({
  el: '#vue-app',
  data: {
    name:  'Ken',
    job: 'Dev',
    age: 20,
    website: 'https://www.facebook.com/',
    websiteTag: '<a href="https://www.facebook.com/">Facebook</a>',
    x: 0,
    y: 0,
  },
  methods: {
    greet: function(time) {
      return 'Good ' + time + ' ' + this.name;
    },
    add: function(inc) {
      this.age += inc;
    },
    subtract: function(dec) {
      this.age -= dec;
    },
    updateXY: function(event) {
        this.x = event.offsetX;
        this.y = event.offsetY;
    },
    click: function() {
      alert('Click me!');
    }
  }
});
