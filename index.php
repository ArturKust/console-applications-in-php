<?php
$number1 = trim(fgets(STDIN));
if (!isnumeric($number1)) {
fwrite(STDERR, "Введите, пожалуйста, число" . PHPEOL);
exit;
}

$number2 = trim(fgets(STDIN));
if (!isnumeric($number2)) {
fwrite(STDERR, "Введите, пожалуйста, число" . PHPEOL);
exit;
}

if ($number2 == ) {
fwrite(STDERR, "Делить на нельзя" . PHPEOL);
exit;
}

$number = $number1 / $number2;
echo $number . PHPEOL;
?>
