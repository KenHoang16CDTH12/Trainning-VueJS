<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Multiple Vue Instances</h1>
  <div id="vue-app-one">
    <h2>{{ title }}</h2>
    <p>{{ greet }}</p>
    <greeting></greeting>
    <button @click="changeTittle">Change App One Title</button>
  </div>
  <div id="vue-app-two">
    <h2>{{ title }}</h2>
    <p>{{ greet }}</p>
  </div>
  <div id="vue-app">
    <h2>Refs</h2>
    <input type="text" ref="input"/>
    <button @click="readRefs">Submit</button>
    <p>Your fav food: {{ output }}</p>
    <div ref="test">hello</div>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>
  var data = {
    name: 'Ken Hoang'
  }
  Vue.component('greeting', {
    template:'<p>Hey there, I am {{ name }} component.'
    + '<button @click="changeName">Change Name</button>'
    + '</p>',
    data: function() {
      return data;
    },
    methods: {
      changeName: function() {
        this.name = 'Mario'
      }
    }
  });

  var one = new Vue({
      el: "#vue-app-one",
      data: {
        title: 'Vue App One'
      },
      methods: {
        changeTittle: function() {
          one.title = "Title changed";
        }
      },
      computed: {
        greet: function() {
          return 'Hello from app one :)';
        }
      }
    });
  var two = new Vue({
      el: "#vue-app-two",
      data: {
        title: 'Vue App To'
      },
      methods: {

      },
      computed: {
        greet: function() {
          return 'Yo dudes, this is app 2 speaking to ya :)';
        }
      }
    });

  var app = new Vue({
      el: "#vue-app",
      data: {
        title: 'Vue App To',
        output: 'Your fav food'
      },
      methods: {
        readRefs: function() {
          console.log(this.$refs.test.innerText);
          this.output = this.$refs.input.value;
        }
      },
      computed: {

      }
    });


  two.title = "Change from outside";
  </script>
</body>
</html>
