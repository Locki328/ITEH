<?php if(isset ($_COOKIE['name'])){
    $name = $_COOKIE['name'];
} else {
    $name = 'Гость';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INDEX2</title>
</head>
<body>
    <h1>Second Page</h1>
    <a href="index.php">Страница index.php</a>
    <br>
	 <br>
	 <p>Привет, <?php echo $name; ?></p>
</html>