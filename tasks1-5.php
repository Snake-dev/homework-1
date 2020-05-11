<div><!-- 1 задание -->
    <?php
    echo '1. С помощью оператора echo выведите на страницу: <br>';
    echo 'a. Строковую переменную <br>';
    $a1 = 'Sergey';
    echo $a1;
    echo '<br>';
    echo 'b. Целочисленную переменную <br>';
    $b1 = 31;
    echo $b1;
    echo '<br>';
    echo 'c. Переменную дробного типа <br>';
    $c1 = 31.5;
    echo $c1;
    echo '<br>';
    echo 'd. Константу';
    echo '<br>';
    define('CONSTANT1', '99');
    echo CONSTANT1;
    echo '<br>';
    echo 'e. Число в восьмеричной нотации <br>';
    $e1 = 010;
    echo $e1;
    echo '<br>';
    echo 'f. Число в шестнадцатеричной нотации <br>';
    $f1 = 0x63;
    echo $f1;
    echo '<br><br>';
    ?>
</div><!-- 1 задание -->
<div><!-- 2 задание -->
    <?php
    echo '2. Повторите вывод, заключив пеерменные в двойные кавычки ("). Посмотрите, что получится. <br>';
    echo 'a. <br>';
    $a2 = "Sergey";
    echo $a2;
    echo '<br>';
    echo 'b. <br>';
    $b2 = "31";
    echo $b2;
    echo '<br>';
    echo 'c. <br>';
    $c2 = "31.5";
    echo $c2;
    echo '<br>';
    echo 'd. <br>';
    define("CONSTANT2", '99');
    echo "CONSTANT2";
    echo '<br>';
    echo 'e. <br>';
    $e2 = "010";
    echo $e2;
    echo '<br>';
    echo 'f. <br>';
    $f2 = "0x63";
    echo $f2;
    echo '<br><br>';
    ?>
</div><!-- 2 задание -->
<div><!-- 3 задание -->
    <?php
    echo "3. Повторите вывод, заключив переменные в одинарные кавычки ('). Посмотрите, что получится. <br>";
    echo 'a. <br>';
    $a3 = 'Sergey';
    echo $a3;
    echo '<br>';
    echo 'b. <br>';
    $b3 = '31';
    echo $b3;
    echo '<br>';
    echo 'c. <br>';
    $c3 = '31.5';
    echo $c3;
    echo '<br>';
    echo 'd. <br>';
    define('CONSTANT3', '99');
    echo 'CONSTANT3';
    echo '<br>';
    echo 'e. <br>';
    $e3 = '010';
    echo $e3;
    echo '<br>';
    echo 'f. <br>';
    $f3 = '0x63';
    echo $f3;
    echo '<br><br>';
    ?>
</div><!-- 3 задание -->
<div><!-- сравнение результатов 2 и 3 (почему-то не работает)-->
    <?php
    echo 'Сравнение результатов 2 и 3 <br>';
    echo 'a: ';
    echo $a2 . ' | ' . $a3 . '<br>';
    echo 'b: ';
    echo $b2 . ' | ' . $b3 . '<br>';
    echo 'c: ';
    echo $c2 . ' | ' . $c3 . '<br>';
    echo 'd: ';
    echo CONSTANT2 . ' | ' . CONSTANT3 . '<br>';
    echo 'e: ';
    echo $e2 . ' | ' . $e3 . '<br>';
    echo 'f: ';
    echo $f2 . ' | ' . $f3 . '<br>';
    echo '<br>';
    ?>
</div><!-- сравнение результатов 2 и 3 (почему-то не работает)-->
<div><!-- 4 задание -->
    <?php
    echo '4. Выведите в восьмеричной системе числа от 10 до 20 
        (echo 010; echo 011; echo 012; ... echo 019; echo 020;) Объясните результат. <br>';
    echo 010 . '<br>';
    echo 011 . '<br>';
    echo 012 . '<br>';
    echo 013 . '<br>';
    echo 014 . '<br>';
    echo 015 . '<br>';
    echo 016 . '<br>';
    echo 017 . '<br>';
    echo '018 <br>';
    echo '019 <br>';
    echo 020 . '<br>';
    echo '<br>';
    ?>
</div><!-- 4 задание -->
  <div><!-- 5 задание -->
    <?php
    echo '5. Выведите 16 чисел в шестнадцатеричной системе, так чтобы в браузере отобразилось 
        "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15" <br>';
    echo 0x0 . ' ' . 0x1 . ' ' . 0x2 . ' ' . 0x3 . ' ' . 0x4 . ' ' . 0x5 . ' ' . 0x6
        . ' ' . 0x7 . ' ' . 0x8 . ' ' . 0x9 . ' ' . 0xA . ' ' . 0xB . ' ' . 0xC
        . ' ' . 0xD . ' ' . 0xE . ' ' . 0xF . ' ' . 0x10 . '<br><br>';
    ?>
</div><!-- 5 задание -->