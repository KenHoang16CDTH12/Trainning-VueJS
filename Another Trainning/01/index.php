<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="assets/js/vue.js"></script>
  <style>
    #canvas {
      width: 600px;
      padding: 200px 20px;
      text-align: center;
      border: 1px solid #333;
    }
  </style>
</head>
<body>
  <div id="vue-app">
    <h1>{{ name }}</h1>
    <a :href="website">Facebook</a>
    <h2>{{ greet('night') }}</h2>
    <p>Job: {{ job }}</p>
    <input type="text" :value="name">
    <p v-html="websiteTag"></p>
    <h1>Events</h1>
    <button @click.once="add(1)">Add a Year</button>
    <button @click="subtract(1)">Subtract a Year</button>
    <button @dblclick="add(10)">Add 10 Year</button>
    <button @dblclick="subtract(10)">Subtract 10 Year</button>
    <a @click.prevent="click" href="https://www.facebook.com">Facebook</a>
    <p>My age is {{ age }}</p>
    <div id="canvas" @mousemove="updateXY">{{ x }}, {{ y }}</div
  </div>
  <script src="assets/js/app.js"></script>
</body>
</html>
