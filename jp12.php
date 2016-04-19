<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript와 PHP</h1>
    <h2>JavaScript</h2>
    <script>
      function avg(a, b){
        return (a+b)/2;
      }
      document.write(avg(10, 5));
      alert(avg(7, 2));
    </script>
    <h2>PHP</h2>
    <?php
      function avg($a, $b){
        return ($a+$b)/2;
      }
      print(avg(10,5));
      file_put_contents('result.txt', avg(10,30));
    ?>
  </body>
</html>
