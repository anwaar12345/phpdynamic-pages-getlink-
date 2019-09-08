<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get[ ] practice</title>
</head>
<body>
    <?php
    $web="google pakistan";
    $search="maju karachi university";
    $result="https://".rawurlencode($web)."?search=".urlencode($search);
    echo $result;
    echo "wow";
    ?>
    <h1 style="height:100px;">acha</h1>
</body>
</html>