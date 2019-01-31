<?php $a = false;
$b = false; ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <title>Task 1</title>
</head>
<body>
<p></p>
<div class="container">
    <h1>Task 1</h1>
    <table class="table table-bordered col-md-2">
        <tr>
            <th>a</th>
            <th>b</th>
            <th>a && b</th>
        </tr>
        <tr>
            <td><?php echo (int)$a; ?></td>
            <td><?php echo (int)$b; ?></td>
            <td><?php echo (int)($a && $b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)!$a; ?></td>
            <td><?php echo (int)$b; ?></td>
            <td><?php echo (int)(!$a && $b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)$a; ?></td>
            <td><?php echo (int)!$b; ?></td>
            <td><?php echo (int)($a && !$b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)!$a; ?></td>
            <td><?php echo (int)!$b; ?></td>
            <td><?php echo (int)(!$a && !$b); ?></td>
        </tr>
    </table>
    <table class="table table-bordered col-md-2">
        <tr>
            <th>a</th>
            <th>b</th>
            <th>a || b</th>
        </tr>
        <tr>
            <td><?php echo (int)$a; ?></td>
            <td><?php echo (int)$b; ?></td>
            <td><?php echo (int)($a || $b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)!$a; ?></td>
            <td><?php echo (int)$b; ?></td>
            <td><?php echo (int)(!$a || $b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)$a; ?></td>
            <td><?php echo (int)!$b; ?></td>
            <td><?php echo (int)($a || !$b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)!$a; ?></td>
            <td><?php echo (int)!$b; ?></td>
            <td><?php echo (int)(!$a || !$b); ?></td>
        </tr>
    </table>
    <table class="table table-bordered col-md-2">
        <tr>
            <th>a</th>
            <th>b</th>
            <th>a xor b</th>
        </tr>
        <tr>
            <td><?php echo (int)$a; ?></td>
            <td><?php echo (int)$b; ?></td>
            <td><?php echo (int)($a xor $b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)!$a; ?></td>
            <td><?php echo (int)$b; ?></td>
            <td><?php echo (int)(!$a xor $b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)$a; ?></td>
            <td><?php echo (int)!$b; ?></td>
            <td><?php echo (int)($a xor !$b); ?></td>
        </tr>
        <tr>
            <td><?php echo (int)!$a; ?></td>
            <td><?php echo (int)!$b; ?></td>
            <td><?php echo (int)(!$a xor !$b); ?></td>
        </tr>
    </table>
</div>
</body>
</html>