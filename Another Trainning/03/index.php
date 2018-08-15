<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="assets/js/vue.js"></script>
  <style>
    span {
      background: red;
      display: inline-block;
      padding: 10px;
      color: #fff;
      margin: 10px 0;
    }

    .available span {
      background: green;
    }

    .nearby span:after{
      content: "nearby";
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <div id="vue-app">
    <h1>Dynamic CSS</h1>
    <h2>Example 1</h2>
    <div @click="available = !available" :class="{available: available}">
      <span>Ken</span>
    </div>
    <h2>Example 2</h2>
    <div :class="compClasses">
      <button @click="nearby = !nearby">Toggle nearby</button>
      <button @click="available = !available">Toggle available</button>
      <span>Ken</span>
    </div>
  </div>
  <script src="assets/js/app.js"></script>
</body>
</html>
