<?php
    include "../db/products_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include "TheHeader.php"?>
    <div class="section">
        <div class="container">
            <div class="row row-cols-5" >
                <?php
                    foreach($db as $products) : ?>
                        <div class="col">
                            <div class="d-flex">
                                <div class="themusic mt-5 px-3">
                                    <img src="<?php echo $products["poster"]?>" alt="">
                                    <h5 class="text-white text-uppercase "><?php echo $products["title"]?></h5>
                                    <div class="text-secondary"><?php echo $products["author"]?></div>
                                    <div class="text-secondary pb-5"><?php echo $products["year"]?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    img {
        width: 200px;
        height: 200px;
    }

    .section {
        background-color: #1E2D3B;
    }

    .themusic {
        background-color: #2E3A46;
        text-align: center;
        padding-top: 30px;
        margin-bottom: 20px;
        max-height: 360px;
    }

</style>