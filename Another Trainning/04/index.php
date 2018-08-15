<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div id="vue-app">
    <h1>Conditionals</h1>
    <button @click="error = !error">Toggle Error</button>
    <button @click="success = !success">Toggle Success</button>
    <p v-if="error">Error</p>
    <p v-else-if="success">Success</p>
    <p v-show="error">Error</p>
    <p v-show="success">Success</p>
    <h1>For-loop</h1>
    <ul>
      <li v-for="character in characters">{{ character }}</li>
    </ul>
    <ul>
      <li v-for="(people, index) in peoples">{{index += 1}}.{{ people.name }} - {{ people.age }}</li>
    </ul>
    <template v-for="(people, index) in peoples">
      <h3>{{ index += 1 }}.{{ people.name }}</h3>
      <p>{{ people.age }}</p>
    </template>
    <template v-for="people in peoples">
      <div v-for="(val, key) in people">
        <p>{{ key }} - {{ val}}</p>
      </div>
    </template>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>
  new Vue({
      el: "#vue-app",
      data: {
        error: false,
        success: false,
        characters: ['Mario', 'Luigi', 'Yoshi', 'Bowser'],
        peoples: [
          { name: 'Ryu', age: 25},
          { name: 'Ken', age: 35},
          { name: 'Yen', age: 20}
        ]
      },
      methods: {

      },
      computed: {

      }
    });
  </script>
</body>
</html>
