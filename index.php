<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Links</title>
</head>
<style>
</style>
<body>
    <a href="index.php?p=index">home</a>
    <a href="index.php?p=get">get php</a>
    <a href="index.php?p=getdemo">get demo</a>
    
    
    <div id="content">
    <?php
       if(!empty($_GET['p'])){
           $pd = 'pages';
           $pf=scandir($pd,0);
           unset($pf[0],$pf[1]);
       $pname=$_GET['p'];
           if(in_array($pname.".php",$pf)){
               include($pd.'/'.$pname.'.php');
           }else{
       echo "<br><h1> get lost</h1>";
           }
       }
        ?>
    </div>
</body>
</html>