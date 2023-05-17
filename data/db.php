<?php
include './Models/Prodotto.php';
include './Models/Categoria.php';

// Creazione delle categorie
$categoriaCani = new Categoria("Cani", "./img/cane.jpg");
$categoriaGatti = new Categoria("Gatti", "./img/gatto.webp");

// Creazione dei prodotti
$prodotto1 = new Prodotto(1, $categoriaCani, "Prodotto", "Giocattolo per cani", 10.99, "./img/maialino.jpg");
$prodotto2 = new Prodotto(2, $categoriaCani, "Cibo", "Crocchette per cani", 19.99, "./img/crocchette.webp");
$prodotto3 = new Prodotto(3, $categoriaGatti, "Prodotto", "Giocattolo per gatti", 8.99, "./img/bubba.jpg");
$prodotto4 = new Prodotto(4, $categoriaGatti, "Cibo", "Croccantini per gatti", 15.99, "./img/cibogatti.jpg");
