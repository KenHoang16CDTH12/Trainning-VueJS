<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div id="root">
    <task>Go to the store</task>
    <task>Go to the bank</task>
    <task>Go to work</task>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>
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
