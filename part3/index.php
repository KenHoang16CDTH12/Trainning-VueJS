<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div id="root">
    <!-- <li v-for="name in names"> {{ name }} </li> -->
    <li v-for="name in names" v-text="name"></li>
    <input id="input" type="text" v-model="newName" @keyUp="addName">
    <button v-on:click="addName">Add name</button>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>

    var obj = new Vue({

      el: '#root',

      data: {

        newName: '',

        names: ['Ken', 'Hoang', 'Dev', 'Nguyen']

      },

      methods: {

        addName() {

          this.names.push(this.newName);

          this.newName = '';

        }

      },
      /*
      mounted() {

        document.querySelector('#button').addEventListener('click', () =>{

          let name = document.querySelector('#input').value;

          obj.names.push(name);

        });

      }*/

    })


  </script>
</body>
</html>
