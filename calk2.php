<?php
function calk()
{
    switch ($_POST['oper']) {
        case '+':
            return $_POST['number1'] + $_POST['number2'];
            break;
        case '-':
            return $_POST['number1'] - $_POST['number2'];
            break;
        case '*':
            return $_POST['number1'] * $_POST['number2'];
            break;
        case '/':
            return $_POST['number1'] / $_POST['number2'];
            break;
    }
}

?>