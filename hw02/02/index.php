<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <title>Task 2</title>
</head>
<body>
    <p></p>
    <div class="container">
        <h1>Task 2</h1>
        <?php
        function discriminant($a, $b, $c) {
            return $b * $b - 4 * $a * $c;
        }

        assert(16 === discriminant(1, -8, 12));
        assert(0 === discriminant(1, -6, 9));
        assert(-131 === discriminant(5, 3, 7));

        $a = 1;
        $b = -8;
        $c = 12;
        $d = discriminant($a, $b, $c);

        echo $a . ($b < 0 ? '*x*x ': '*x*x +') . $b . ($c < 0 ? '*x ' : '*x + ') . $c . ' = 0<br>';
        switch (true) {
            case $d > 0:
                $x1 = (-$b + sqrt($d)) / (2 * $a);
                $x2 = (-$b - sqrt($d)) / (2 * $a);
                echo 'Корни уравнения:<br>';
                echo 'x1 = ' . $x1 . '<br>';
                echo 'x2 = ' . $x2 . '<br>';
                break;
            case $d == 0:
                $x = (-$b) / (2 * $a);
                echo 'Корень уравнения:<br>' . 'x = ' . $x . '<br>';
                break;
            default:
                echo 'Уравнение не имеет действительных корней<br>';
        }
        ?>
    </div>
</body>
</html>