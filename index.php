<?php
    include __DIR__.'/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col">
                    <div class="container w-75">
                        <div class="row">
                            <div class="col">
                                <h1 class="my-5">I nostri prodotti</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container w-75 d-flex flex-wrap gap-1rem ">
                        <?php foreach($prodotti as $elem) { ?>
                            <div class="card w-3">
                                <img class="card-img-top" src="<?php echo $elem->immagine ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h1><?php echo $elem->titolo ?></h1>
                                    <span><i class="<?php echo $elem->categoria->icona ?>"></i><?php echo $elem->categoria->specie ?></span>
                                    <p><strong>prezzo:</strong> <?php echo $elem->prezzo ?></p>
                                    <div>
                                        <?php
                                            if(isset($elem->caratteristiche)){
                                               echo '<p><strong>caratteristiche: </strong>'. $elem->caratteristiche.'</p>';
                                            }else if(isset($elem->peso_netto)){
                                                echo '<p><strong>peso-netto: </strong>'. $elem->peso_netto.'</p>';
                                            }else{
                                                echo '<p><strong>peso-netto: </strong>'. $elem->materiale.'</p>';
                                            }
                                        ?>
                                    </div>
                                    <div>
                                        <?php
                                            if(isset($elem->dimensioni)){
                                               echo '<p><strong>dimensioni: </strong>'. $elem->dimensioni.'</p>';
                                            }else{
                                                echo '<p><strong>ingredienti: </strong>'. $elem->ingredienti.'</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>