<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div id="root">
    <input type="text" id="input" v-model="message">

    <p>The value of the input is: {{ message }}</p>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>
    let data = {
      message: "Hello world",
    }

    new Vue({
      el: '#root',
      data: data
    })

    //document.querySelector('#input').value = data.message;
  </script>
</body>
</html>
