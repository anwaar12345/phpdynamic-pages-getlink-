<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url Get</title>
</head>
<body>
    <?php
    
    $name="Syed Anwar Ahmed Shah";
    $des="Software Engineer";
    $pos="Team Leader";
    ?>
    <a href="getlinks1.php?name=<?php echo urlencode($name) ?>&de=<?php echo urlencode(" is a ".$des." working as a "); ?>&pos=<?php echo urlencode($pos); ?> ">info</a>
</body>
</html>