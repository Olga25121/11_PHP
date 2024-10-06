<!-- 2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и 
вернуть полученное значение (использовать switch). -->

<?php


function  mathOperation($arg1, $arg2, $operation)
{
    switch ($operation)
    {
        case "+":
            return $arg1 + $arg2;
            break;
        case "-":
            return $arg1 - $arg2;
            break;
        case "*":
            return $arg1 * $arg2;
            break;
        case "/":
            return $arg1 / $arg2;
            break;
        default:
            return "Нет такого оператора";
    }
}

$a = 4;
$b = 5;
$operation = "+";

echo mathOperation($a, $b, $operation);

// Seminar

function mathOperation2($arg1, $arg2, $operation)
{
    return match ($operation) {
        'sum' => add($arg1, $arg2),
        'sub' => sub($arg1, $arg2),
        'mult' => mult($arg1, $arg2),
        'div' => div($arg1, $arg2),
        default => 'Error',
    };
}


function mathOperation($arg1, $arg2, $operation)
{
    if (function_exists($operation)) {
        return $operation($arg1, $arg2);
    } else {
        return "Нет такой операции.";
    }

}