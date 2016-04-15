<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>배열과 반복문의 조우</h1>
    <h2>JavaScript</h2>
    <ol>
    <script>
      var names = ['egoing', '최진혁', '최유빈'];
      var i = 0;
      while(i < names.length){
        document.write('<li>'+names[i]+'</li>');
        i = i + 1;
      }
    </script>
    </ol>
    <h2>PHP</h2>
    <?php
      $names = ['egoing', '최진혁', '최유빈'];
      $i = 0;
      while($i < count($names)){
          print('<li>'.$names[$i].'</li>');
          $i = $i + 1;
      }
    ?>
  </body>








</html>
