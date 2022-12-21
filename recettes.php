<!DOCTYPE html>
<?php
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
    
    <div class="container mt-3 pt-3 bg-light">
        <div class="row g-3 pb-3">
            <div class="col-6 col-lg-4">
                <div class="text-center px-5 h-100 bg-white shadow rounded">
                    <div class="py-4">
                        <strong>Margarita</strong>
                    </div>
                    <div class="d-flex justify-content-center custom-icon mx-auto rounded-circle">
                        <img src="./img/margarita.PNG">
                    </div>
                    <div class="pb-3">
                        Tomate, Modzarela.
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="text-center px-5 h-100 bg-white shadow rounded">
                    <div class="py-4">
                        <strong>title card here</strong>
                    </div>
                    <div class="d-flex justify-content-center custom-icon mx-auto rounded-circle">
                        <i class="align-self-center bi bi-file-code text-white"></i>
                    </div>
                    <div class="pb-3">
                        typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="text-center px-5 h-100 bg-white shadow rounded">
                    <div class="py-4">
                        <strong>title card here</strong>
                    </div>
                    <div class="d-flex justify-content-center custom-icon mx-auto rounded-circle">
                        <i class="align-self-center bi bi-file-pdf text-white"></i>
                    </div>
                    <div class="pb-3">
                        typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="text-center px-5 h-100 bg-white shadow rounded">
                    <div class="py-4">
                        <strong>title card here</strong>
                    </div>
                    <div class="d-flex justify-content-center custom-icon mx-auto rounded-circle">
                        <i class="align-self-center bi bi-box-fill text-white"></i>
                    </div>
                    <div class="pb-3">
                        typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="text-center px-5 h-100 bg-white shadow rounded">
                    <div class="py-4">
                        <strong>title card here</strong>
                    </div>
                    <div class="d-flex justify-content-center custom-icon mx-auto rounded-circle bg-warning">
                        <i class="align-self-center bi-calendar2-day text-white"></i>
                    </div>
                    <div class="pb-3">
                        typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4">
                <div class="text-center px-5 h-100 bg-white shadow rounded">
                    <div class="py-4">
                        <strong>title card here</strong>
                    </div>
                    <div class="d-flex justify-content-center custom-icon mx-auto rounded-circle bg-info">
                        <i class="align-self-center bi bi-cart-plus text-white"></i>
                    </div>
                    <div class="pb-3">
                        typesetting, remaining essentially unchanged. typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>