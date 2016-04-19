<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>함수(function)</h1>
    <h2>JavaScript</h2>
    <script>

      function greet(name){
        document.write('<li>안녕하세요.'+name+'</li>');
      }
      greet('이고잉');
      // 다른코드
      greet('최진혁');
      // 다른코드
      greet('최유빈');
    </script>
    <h2>PHP</h2>
    <?php
      function greet($name){
        print('<li>안녕하세요.'.$name.'</li>');
      }
      greet('이고잉');
      greet('최진혁');
      greet('한이람');







    ?>
  </body>
</html>
