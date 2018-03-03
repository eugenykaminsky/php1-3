<?php
include 'data.php';
include __DIR__ . '/calk2.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>
    <style>
        img {
            width: 240px;
            height: 240px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td><a href = "image.php?id=1"><img src="images/<?php echo $images[1]; ?>"></a></td>
        <td><a href = "image.php?id=2"><img src="images/<?php echo $images[2]; ?>"></a></td>
    </tr>
    <tr>
        <td><a href = "image.php?id=3"><img src="images/<?php echo $images[3]; ?>"></a></td>
        <td><a href = "image.php?id=4"><img src="images/<?php echo $images[4]; ?>"></a></td>
    </tr>
</table>

<h2>Калькулятор. Вариант 1</h2>

<form id="data" action="calk.php" method="get">
    <p>Введите первое число: <input type="number" name="number1"></p>
    <p>Введите первое число: <input type="number" name="number2"></p>
    <p>Выберите операцию: <select name="oper" form="data">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></p>
    <button type = "submit">Равно</button>
</form>



<h2>Калькулятор. Вариант 2</h2>


<form id="data" action="index.php" method="post">
    <p>Введите первое число: <input type="number" name="number1"></p>
    <p>Введите первое число: <input type="number" name="number2"></p>
    <p>Выберите операцию:  <input type="radio" name="oper" value="+">+
        <input type="radio" name="oper" value="-">-
        <input type="radio" name="oper" value="*">*
        <input type="radio" name="oper" value="/">/</p>
    <button type = "submit">Равно</button> <?php echo calk(); ?>
</form>


</body>
</html>