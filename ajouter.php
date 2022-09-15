<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php session_start(); ?>

<style>
   
</style>

<body>
        <h1>Ajouter un nouveau produit</h1>
        <form class="container" action="ajout_produit.php" method="POST">
            <div class="form-group">
                <label for="idmat">Entrez l'id matériel</label>
                <input class="form-control" type="text" name="idmat">
            </div>
            <div class="form-group">
                <label for="idcat">Entrez l'id catégorie de produit</label>
                <input class="form-control" type="text" name="idcat">
            </div>
            <div class="form-group">
                <label for="idtype">Entrez l'id type de produit</label>
                <input class="form-control" type="text" name="idtype" >
            </div>
            <div class="form-group">
                <label for="marque">Entrez la marque du produit</label>
                <input class="form-control" type="text" name="marque">
            </div>
            <div class="form-group">
                <label for="mod">Entrez le modele du produit</label>
                <input class="form-control" type="text" name="mod">
            </div>
            <div class="form-group">
                    <label for="infos">Veuillez saisir les infos relatives au produit</label>
                    <input class="form-control" type="text" name="infos">
            </div>
            <div class="form-group">
                    <label for="quant">Veuillez entrer la quantité disponible du produit</label>
                    <input class="form-control" type="text" name="quant">
            </div>
            <div class="form-group">
                    <label for="dispo">Veuillez entrer la disponibilité du produit</label>
                    <input class="form-control" type="text" name="dispo">
            </div>
            <div class="form-group">
                    <label for="photo">Veuillez insérer une photo</label>
                    <input class="form-control" type="file" name="photo">
            </div>

                    
                    <button id="submit" type="submit" name="envoyer" value="envoyer">Envoyer</button>

        </form>
    
</body>
</html>