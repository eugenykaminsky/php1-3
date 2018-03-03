<?php
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
switch ($_GET['oper']){
    case '+':
        echo $number1 + $number2;
        break;
    case '-':
        echo $number1 - $number2;
        break;
    case '*':
        echo $number1 * $number2;
        break;
    case '/':
        echo $number1 / $number2;
        break;
}


