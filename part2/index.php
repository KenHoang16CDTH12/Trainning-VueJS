<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div id="root">
    {{  }}
    <!-- <li v-for="name in names"> {{ name }} </li> -->
    <li v-for="name in names" v-text="name"></li>
    <input id="input" type="text">
    <button id="button">Add name</button>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>

    var obj = new Vue({
      el: '#root',
      data: {

        names: ['Ken', 'Hoang', 'Dev', 'Nguyen']

      },
      mounted() {
        document.querySelector('#button').addEventListener('click', () =>{
          let name = document.querySelector('#input').value;
          obj.names.push(name);
        });
      }
    })


  </script>
</body>
</html>
