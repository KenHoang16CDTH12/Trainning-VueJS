<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    #bag {
      width: 200px;
      height: 500px;
      margin: 0 auto;
      background: url(assets/img/bag.png) center no-repeat;
      background-size: 80%;
    }

    #bag.burst {
      background: url(assets/img/bag-burst.png) center no-repeat;
      background-size: 80%;
    }

    #bag-health {
      width: 200px;
      border: 2px solid #000;
      margin: 0 auto 20px auto;
    }

    #bag-health div {
      height: 20px;
      background: crimson;
    }

    #controls{
      width: 120px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div id="vue-app">
     <!-- Bag image -->
     <div id="bag" :class="{ burst : ended }">

     </div>
     <!-- Bag health -->
     <div id="bag-health">
       <div :style="{width: health + '%'}"></div>
     </div>
     <!-- Game controls -->
     <div id="controls">
       <button @click="punch" v-show="!ended">Punch</button>
       <button @click="restart">Restart</button>
     </div>
  </div>
  <script src="assets/js/vue.js"></script>
  <script>
  new Vue({
      el: "#vue-app",
      data: {
        health: 100,
        ended: false
      },
      methods: {
        punch: function() {
          this.health -= 10;
          if (this.health <= 0) this.ended = true;
        },
        restart: function() {
          this.health = 100;
          this.ended = false;
        }
      },
      computed: {

      }
    });
  </script>
</body>
</html>
