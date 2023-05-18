<?php
include __DIR__.'./data/db.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Shop</title>
</head>
<body>
    <header>
    <?php include './Views/Header.php';?>
    </header>
    <main>
    <div class="container p-5">
        <div class="row">
        
        <?php
        function stampaCardProdotto($prodotto){
            
            echo '<div class="col-md-3 mb-3">';
            echo '<div class="card">';
            echo '<img class="card-img-top" src="' . $prodotto->getImmagine() . '" alt="' . $prodotto->getTitolo() . '">';
            echo '<div class="card-body">';
            echo '<h3 class="card-title">' . $prodotto->getTitolo() . '</h3>';
            echo '<p class="card-text">Prezzo: ' . $prodotto->getPrezzo() . ' Euro</p>';
            echo '<p class="card-text">Categoria: ' . $prodotto->getCategoria()->getNome() . '</p>';
            echo '<p class="card-text">Tipo: ' . $prodotto->getTipo() . '</p>';
            echo'</div>';
            echo'</div>';
            echo'</div>';
            
        }
        stampaCardProdotto($prodotto1);
        stampaCardProdotto($prodotto2);
        stampaCardProdotto($prodotto3);
        stampaCardProdotto($prodotto4);
     ?>
     </div>
    </div>
    </main>
    <footer>
    <?php include './Views/Footer.php';?>
    </footer>
</body>
</html>