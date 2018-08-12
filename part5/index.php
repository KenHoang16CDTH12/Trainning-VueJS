<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    .color-red {
      color: red;
    }

    .color-blue {
      color: blue;
    }

    .is-loading {
      background: red;
    }
  </style>
</head>
<body>
  <div id="root">
    <h1>{{ reversedMessage }}</h1>
    <h1>All Tasks</h1>
    <ul>
      <li v-for="task in tasks" v-text="task.description"></li>
    </ul>
    <h1>Incompleted Tasks</h1>
    <ul>
      <li v-for="task in incompletedTasks" v-text="task.description"></li>
    </ul>
    <h1>Completed Tasks</h1>
    <ul>
      <li v-for="task in completedTasks" v-text="task.description"></li>
    </ul>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>

    var obj = new Vue({

      el: '#root',

      data: {

        message: 'Hello World',

        tasks: [

          { description: 'Go to the store', completed: true },

          { description: 'Finish screencast', completed: false },

          { description: 'Make donation', completed: false },

          { description: 'Clear inbox', completed: true },

          { description: 'Make dinner', completed: false },

          { description: 'Clean room', completed: false },

        ]

      },

      methods: {


      },

      computed: {

        reversedMessage() {

          return this.message.split('').reverse().join('');

        },

        incompletedTasks() {

          return this.tasks.filter(task => ! task.completed);

        },

        completedTasks() {

          return this.tasks.filter(task => task.completed);

        }

      }

    });







  </script>
</body>
</html>
