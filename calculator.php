<?php

echo "========================\n";
echo " PHP CLI CALCULATOR \n";
echo "========================\n";

echo "Enter first number: ";
$a = trim(fgets(STDIN));

echo "Enter operation (+ - * /): ";
$op = trim(fgets(STDIN));

echo "Enter second number: ";
$b = trim(fgets(STDIN));

switch ($op) {
    case '+':
        $result = $a + $b;
        break;
    case '-':
        $result = $a - $b;
        break;
    case '*':
        $result = $a * $b;
        break;
    case '/':
        if ($b == 0) {
            echo "Error: Division by zero\n";
            exit;
        }
        $result = $a / $b;
        break;
    default:
        echo "Invalid operation\n";
        exit;
}

echo "------------------------\n";
echo "Result: $result\n";
echo "------------------------\n";
