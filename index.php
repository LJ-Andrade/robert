<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include'inc/inc.head.php'; ?>
  </head>
  <body>
    <div id="miniTxt"></div>
          <div id="doThis"></div>
    <?php include'inc/inc.scripts.php'; ?>
<br>

<div id="flames" class="container1">
  <div class="red flame"></div>
  <div class="orange flame"></div>
  <div class="yellow flame"></div>
  <div class="white flame"></div>
  <div class="blue circle"></div>
  <div class="black circle"></div>
</div>

    <!-- <div id="flame" class="container gotoflame">
        <a href="flame.php"><h1>VER LA FLAMA</h1></a>
    </div> -->

    <script>
    $('#flames').hide();

    $(function() {
      var VintageTxtTest = {

        el : $('#doThis'),

        go : function go() {
          this.el.vintageTxt({
             text : ["Saludos Humano . . ","Soy una Inteligencia Artificial..." + "<br>" + "me llamo ROBERTO . . . ." + "<br>" +  "<br>" + "Te doy dos opciones","......."]
            ,textSpeed: 100
            ,promptEnabled: false
            ,overlayImage : 'images/lostpc2.png'
            ,onFinishedTyping : this.intro
          });
        },

        intro : function intro() {
          var texts = [
            ["SELECCIONA:","<br>", "1 - ENCENDER LA LLAMA","2 - NO ENCENDERLA"]
          ];

          self.el.vintageTxt('updateOptions', {
            textSpeed: 60
            ,onFinishedTyping : null
            ,onEnterKey : self.pageOne
            ,promptEnabled : true
          });
          self.el.vintageTxt('playMany',texts);
        },

        pageOne : function pageOne(e, inputTxt) {
          if (inputTxt==1) {
            $('#flames').fadeIn( 500 );
            var texts = [
              ["Muy bien, ","La llama ha sido encendida!" + "<br>", "Un embole, la proxima pone que no..." + "<br>", "Como es tu nombre?, master?"]
            ];
          }
          else if (inputTxt==2) {
            $('#flames').fadeIn( 500 );
            var texts = [
              ["Te la enciendo igual, Gil!"]
              ,["Como es tu nombre?"]
            ];
          }

          self.el.vintageTxt('updateOptions', {
            textSpeed: 60
            ,onFinishedTyping : null
            ,onEnterKey : self.pageTwo
            ,promptEnabled : true
          });
          self.el.vintageTxt('playMany',texts);
        },

        pageTwo : function pageTwo(e, name) {
          var texts = [
            ["Bueno " + name + "<br>" + "<br>" + " Ahora cocinate un paty de soja y hacete vegetariano SALAME !!", "<br>" + "Escribi \"1\" si estas ofendida o \"2\" si te la bancas"]
          ];

          self.el.vintageTxt('updateOptions', {
            textSpeed: 60,
            onFinishedTyping : null
            ,onEnterKey : self.pageThree
            ,promptEnabled : true
          });
          self.el.vintageTxt('playMany',texts);
        },

        pageThree : function pageThree(e, siono) {
          if (siono==1) {
            var texts = [
              ["No seas maraca"],[". . ."],["Bueno, ya termine, desenchufame"]
            ];
          }
          else if (siono==2) {
            var texts = [
              ["Entonces sentate en este mouse de cuero !"],[". . ."],["Bueno, ya termine, desenchufame"]
            ];
          }

          self.el.vintageTxt('updateOptions', {
            textSpeed: 60,
            linePause : 400,
            onFinishedTyping : self.pageFour
            ,onEnterKey : self.pageFour
            ,promptEnabled : false
          });
          self.el.vintageTxt('playMany',texts);
        },

        // pageFour : function pageFour() {
        //   var texts = [
        //       ["Bueno me fu&iacute; Gato Mulo." + "<br>" + "Desenchufame de la pared"]
        //     ];
        //
        //   self.el.vintageTxt('updateOptions', {
        //     textSpeed: 60,
        //     onFinishedTyping : null
        //     ,onEnterKey : null
        //     ,promptEnabled : false
        //   });
        //   self.el.vintageTxt('playMany',texts);
        // },


    }
      var self = VintageTxtTest;

      VintageTxtTest.go();

    });

    </script>
  </body>
</html>
