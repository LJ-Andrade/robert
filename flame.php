<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include'inc/inc.head.php'; ?>
    <style media="screen">
      body {
        background-color: black
      }
    </style>
  </head>
  <body>
    <div id="flames" class="container1">
      <div class="red flame"></div>
      <div class="orange flame"></div>
      <div class="yellow flame"></div>
      <div class="white flame"></div>
      <div class="blue circle"></div>
      <div class="black circle"></div>
    </div>

<script>

$( document ).ready(function() {
  ///////// Body Fade In //////////////
  $('body').hide();
  $('body').fadeIn(2000);
});
</script>
  </body>
</html>
