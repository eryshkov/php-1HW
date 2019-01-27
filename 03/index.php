<?php

//попытка включения несуществующего файла false.php
//возвращает false.
$falseTest = include __DIR__ . '/false.php';
if ($falseTest) {
    echo 'false.php returns TRUE';
} elseif (!$falseTest) {
    echo 'false.php returns FALSE';
}
echo '<br><br>';

//при успешном включении файла include возвращает true,
//сам текст возвращаемого файла также включается.
if (include __DIR__ . '/plainText.php') {
    echo '"include" with plain text returns TRUE';
}
echo '<br><br>';

//при успешном включении php-файла include выполняет
//код в этом файле. Выполнение этого кода можно прервать
//оператором return. При этом возвращается FALSE и
//продолжит выполняться код, из которого была вызвана функция include.
//Под php-файлом я везде понимаю файл с корректными тегами
//начала и конца php-кода.
$nullTest = include __DIR__ . '/null.php';
if ($nullTest) {
    echo '"include" with php code returns TRUE';
} elseif (!$nullTest) {
    echo '"include" with php code returns FALSE';
} elseif (is_null($nullTest)) {
    echo '"include" with php code returns NULL';
} else {
    echo '"include" with php code returns something';
}
echo '<br><br>';

//также можно возращать значение из включаемого файла
//при помощи оператора return.
$textTest = include __DIR__ . '/return.php';
if ($textTest) {
    echo '"include" with php code returns text:';
}
echo '<br>' . $textTest;
echo '<br><br>';