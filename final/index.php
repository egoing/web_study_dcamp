<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body id="target" class="white">
    <h1>JavaScript</h1>
    <ul id="nav">
    <?php
    $conn = mysqli_connect('localhost', 'root', '111111', 'otu');
    $sql = "SELECT id, title FROM topic";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      print('<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>');
    }
    ?>
    </ul>
    <article>
      <input type="button" value="white" onclick="document.getElementById('target').className='white';">
      <input type="button" value="black" onclick="document.getElementById('target').className='black';">
    <?php
    $sql = 'SELECT * FROM topic WHERE id = '.$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    print('<h2>'.$row['title'].'</h2>');
    print($row['description']);
     ?>
    </article>
     <ul>
       <li><a href="form.php">글쓰기</a></li>
     </ul>
  </body>
</html>
