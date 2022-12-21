<!DOCTYPE html>
<?php
$id = [1];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


foreach($id as $i){
    echo <<<HTML
    <div class="#">
        <a href='./product.php?id={$i}'><img src="./img/logoS.PNG"/> </a>
    </div>
HTML;    
}

?>
    
</body>
</html>