<?php
//접속 mysql -hlocalhost -uroot -p111111
//데이터베이스 선택  use otu;
$conn = mysqli_connect('localhost', 'root', '111111', 'otu');
// 데이터베이스 서버에 SQL을 전송한다.
$sql = 'INSERT INTO topic (title, description, created) VALUES("'.$_POST['title'].'", "'.$_POST['description'].'", NOW())';
mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>완료!</title>
  </head>
  <body>
    저장에 성공했습니다. ^^ <a href="index.php">다시 돌아가기</a>
  </body>
</html>
