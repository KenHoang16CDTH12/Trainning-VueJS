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
    <h1 :class="className">Hello World</h1>
    <button :disabled></button>
    <button :class="{ 'is-loading': isLoading }" @click="toggleClass">Toggle Me</button>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>

    var obj = new Vue({

      el: '#root',

      data: {

        className: 'color-red',

        isLoading: false

      },

      methods: {

        toggleClass() {

          this.isLoading = true;

        }

      }

    });







  </script>
</body>
</html>
