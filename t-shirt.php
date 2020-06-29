<?php
$nom_produit ="T-shirt simple";
$couleur ="blanc";
$prix = 10.5;
$disponible = "true";
$quantite = 10;
?>

<h3>Tshirt simple</h3>
    <p>Le nom du produit est <?php echo $nom_produit ?></p>
    <p>Il reste <?php echo $quantite ?></p>
    <p>Le <?php echo $nom_produit?> est de couleur <?php echo $couleur?></p>

    <h4>Opération Simple</h4>
    <p>Acheter 3 produits couterait <?php  
    $nombre= 10.50*3;
    echo $nombre?>.</p>
    <p>Acheter la totalité des produits couterait <?php
    $multi= 10.50*10;
    echo $multi?>.</p>
    <p>Si 3 produits sont vendus.Il reste <?php
    $soustraction=10-3;
    echo $soustraction?>.</p>
    
    



