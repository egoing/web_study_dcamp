<?php
$link = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$sql = 'DELETE FROM topic WHERE id='.$_POST['id'];
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    축하합니다. 글을 삭제하셨어요. ^^
    <a href="index.php">홈페이지로 돌아가기</a>
  </body>
</html>
