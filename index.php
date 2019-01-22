<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work</title>
</head>
<body>
    <h1>
        <?php
        function toBin($string)
        {
            $arr = str_split($string);
            $result = [];
            foreach ($arr as $letter) {
                $result[] = decbin(ord($letter));
            }
            return implode(' ', $result);
        }

        echo toBin('٣');
        echo '<br>';
        echo toBin('фв');

        ?>
    </h1>
</body>
</html>