<!--Fichier page_eleve php-->
<?php include('connect.php') ?>
    <?php include ('header.php') ?>
    <?php include('menu.php')?>

        <section class="banner">
            <h2>Mes Emprunts</h2>
            <p class="fleche"><a href="#container">V</a></p>
        </section>

        <div class="bande_banner"></div>

        <div id="container" href=#container>
            
            <?php 
            
            $query = $pdo -> query("SELECT * FROM emprunts"); 
        $resultat = $query -> fetchAll(); 

        echo"<div id='lumiere'><h3>Emprunts</h3></div>";
        echo"<hr>";

        echo"<table class='table_produits'>"; 
            echo"<table class='table' data-toggle='table' >";
                echo "<thead>"; 
                echo "<tr>";
                echo"<th class='w-50' scope='col'>Photo</th>";
                echo"<th scope='col'>Marque</th>";
                echo"<th scope='col'>Modèle</th>";
                echo"<th scope='col'>Informations</th>";
                echo"<th scope='col'>Quantité</th>";
                echo"<th scope='col'>Dispo</th>";
                echo"<th scope='col'>Emprunt</th>";
            echo"</tr>";
        echo"</thead>";
            foreach ($resultat as $key => $variable)
                {
                    echo"<tbody>";
                        echo"<tr>";
                            echo"<td class='image align-middle'><img src=".$resultat[$key]['photo']." ></td>";//photo
                            echo"<td class='marque'>" .$resultat[$key]['marque']."</td>"; //marque
                            echo"<td class='modele'>" .$resultat[$key]['modele']."</td>"; //modèle
                            echo"<td class='infos text-justify overflow-hidden ' style='width: 50%'>" .$resultat[$key]['infos']."</td>"; //information    
                            echo"<td class='quantite'>" .$resultat[$key]['quantite']."</td>"; //quantité
                            echo"<td class='dispo'>" .$resultat[$key]['dispo']."</td>"; //disponibilite
                            echo"<td class='casse-cocher'>
                                    <input type='checkbox' id='cocher' name='cocher' />
                                    <label for='cocher'>cocher</label>
                                </td>"; //case a cocher pour choix multiple emprunt
                        echo"</tr>";
                    echo"</tbody>"; 
                }
            echo "</table>";
        echo "</table>";
            
            ?>

           

    <?php include('footer.php') ?>
        
