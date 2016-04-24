<?php
$link = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$sql = 'UPDATE topic SET title="'.$_POST['title'].'", description="'.$_POST['description'].'" WHERE id='.$_POST['id'];
print($sql);
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    축하합니다. 글을 쓰셨어요. ^^
    <a href="index.php">홈페이지로 돌아가기</a>
  </body>
</html>
