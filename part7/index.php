<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div id="root">
    <task-list></task-list>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>
    Vue.component('task-list', {

      template: '<div><task v-for="task in tasks">{{ task.task }}</task></div>',

      data() {

        return {

          tasks: [
            { task: 'Go to the store', complete: true},
            { task: 'Go to the email', complete: false},
            { task: 'Go to the farm', complete: true},
            { task: 'Go to the work', complete: false},
          ]

        };

      }

    })

    Vue.component('task', {

      template: '<li><slot></slot></li>',

      data() {

        return {

          message: 'Foobar'

        };

      }

    })

    var app = new Vue({

      el: '#root',

      data: {


      },

      methods: {


      }

    });

  </script>
</body>
</html>
