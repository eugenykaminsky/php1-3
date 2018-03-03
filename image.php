<?php
$key = $_GET['id'];
include 'data.php';
foreach ($images as $index => $value){
    if ($key == $index){
        break;
    }
}
?>
<html>
<head>
    <title>Запрашиваемая картинка</title>
    <meta charset="utf-8">
</head>
<body>
<img src="images/<?php echo $value; ?>">
<br>
<tr>
    <a href='index.php'>Назад на главную страницу</a>
</body>
</html>
