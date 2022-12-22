<!DOCTYPE html>
<?php
include 'include/pdo.php';
$stmt = $pdo->query("SELECT * FROM recette");
$recettes = $stmt->fetchAll();
$id = [1];

?>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Recettes</title>
</head>
<body class="grey">

<?php
foreach($id as $i){
    echo <<<HTML
    <div class="#">
        <a href='./product.php?id={$i}'><img src="./img/logoS.PNG"/> </a>
    </div>
HTML;    
}
?>
    
    <div class="container mt-3 pt-3 bg-light">
        <div class="row g-3 pb-3">
            

            <?php
                    foreach($recettes as $i){
                        $o = $i['id'];
                        $n = $i['titre'];
                        $img = $i["image"];
                        echo <<<HTML

                        <div class="col-6 col-lg-4">
                        <div class="text-center px-5 h-100 bg-white shadow rounded">
                            <div class="py-4">
                                <strong>{$n}</strong>
                            </div>
                            <div class="d-flex justify-content-center custom-icon mx-auto rounded-circle">
                                <a href='./product.php?id={$o}'><img src="./img/{$img}"></a>
                            </div>
                            <div class="pb-3">
                                typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    HTML;    
                    }
                    ?>

        </div>
    </div>
</body>
</html>