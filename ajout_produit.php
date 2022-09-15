<?php 

    session_start();
    include('connect.php'); 

     $idmat = $_POST['idmat']; 
     $idcat = $_POST['idcat']; 
     $idtype = $_POST['idtype']; 
     $marque = $_POST['marque']; 
     $modele = $_POST['mod']; 
     $infos = $_POST['infos']; 
     $quantite = $_POST['quant'];
     $dispo = $_POST['dispo'];
     $photo = $_POST['photo'];

     $req = $pdo -> prepare('INSERT INTO `produits`(`id_matériel`, `id_categorie`, `id_type`, `marque`, `modele`, `ìnfos, `quantite`, `dispo`, `photo`) 
     VALUES (:idmat, :idcat, :idtype, :marque, :mod, :infos, :quant, :dispo, :photo)');
     $req -> bindValue(':idmat', $idmat, PDO::PARAM_STR); 
     $req -> bindValue(':idcat', $idcat, PDO::PARAM_STR); 
     $req -> bindValue(':idtype', $idtype, PDO::PARAM_STR); 
     $req -> bindValue(':marque', $marque, PDO::PARAM_STR); 
     $req -> bindValue(':mod', $modele, PDO::PARAM_STR); 
     $req -> bindValue(':infos', $infos, PDO::PARAM_STR); 
     $req -> bindValue(':quant', $quantite, PDO::PARAM_STR); 
     $req -> bindValue(':dispo', $dispo, PDO::PARAM_STR); 
     $req -> bindValue(':photo', $photo, PDO::PARAM_STR); 
     $req -> execute();

     echo $marque; 
   

?>