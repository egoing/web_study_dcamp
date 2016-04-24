<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="delete.php" method="post">
      <p>삭제를 하시겠습니까?</p>
      <input type="hidden" name="id" value="<?php print($_GET['id']);?>">
      <p><input type="submit" value="예"></p>
      <p><a href="index.php">아니요</a></p>
    </form>

  </body>
</html>
