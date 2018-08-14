<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="assets/js/vue.js"></script>
  <style>

  </style>
</head>
<body>
  <div id="vue-app">
     <h1>Keyboard Events</h1>
     <br>
     <label>Name:</label>
     <br>
     <input type="text" v-model="name">
     <br>
     <span>{{ name }}</span>
     <br>
     <label>Age:</label>
     <br>
     <input type="text" v-model="age">
     <br>
     <span>{{ age }}</span>
     <br>
     <h1>Computed Properties</h1>
     <button @click="a++">Add to A</button>
     <button @click="b++">Add to B</button>
     <p>A - {{ a }}</p>
     <p>B - {{ b }}</p>
     <p>Age + A = {{ addToA }}</p>
     <p>Age + B = {{ addToB }}</p>
  </div>
  <script src="assets/js/app.js"></script>
</body>
</html>
