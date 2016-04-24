<?php
$link = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="modify.php" method="post">
      <input type="hidden" name="id" value="<?php print($_GET['id']);?>">
      <p><input type="text" name="title" value="<?php print($row['title']);?>" placeholder="제목"></p>
      <p><textarea name="description" rows="2" cols="40"><?php print($row['description']);?></textarea></p>
      <p><input type="submit"></p>
    </form>

  </body>
</html>
