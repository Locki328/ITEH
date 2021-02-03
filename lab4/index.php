<?php
if (isset($_POST['name']) && (!empty($_POST['name']))){
  $name = $_POST['name'];
  setcookie('name', $name);
}
elseif(isset($_COOKIE['name'])){
  $name = $_COOKIE['name'];
}
  else {
    $name = 'Гость';
  }

?>
<!DOCTYPE html>
<html>
<head>
<title>Index1</title>
<meta charset="UTF-8">
</head>
<body>
  <h1>First page</h1>
<a href="index2.php">Страница index2.php</a>
<br>
<br>
<p>Привет, <?php echo $name; ?></p>
<form method="post">
<input type="text" name="name">
<input type="submit">
</form>
</body>
</html>