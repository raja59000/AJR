
    <?php 
        session_start();
        include('connect.php');

        // déclaration nos variables à faire

        // Requête pour tester la connexion
        $query = $pdo -> query("SELECT * FROM appareils_photos "); 
        $resultat = $query -> fetchAll(); 

        //SECTION APPAREILS PHOTOS   
        echo"<div id='ap_photo'><h3>Appareils photos</h3></div>";
        echo"<hr>";

        echo"<table class='table_produits'>"; 
            echo"<table class='table' data-toggle='table' >";
                echo "<thead>"; 
                    echo "<tr>";
                        echo"<th class='w-50' scope='col'>Photo</th>";
                        echo"<th scope='col'>Marque</th>";
                        echo"<th scope='col'>Modèle</th>";
                        echo"<th scope='col'>Type</th>";
                        //echo"<th scope='col'>Information</th>";
                        echo"<th scope='col'>Boitier</th>";
                        echo"<th scope='col'>Quantité</th>";
                        echo"<th scope='col'>Disponibilité</th>";
                        echo"<th scope='col'>Emprunt</th>";
                    echo"</tr>";
                echo"</thead>";
            foreach ($resultat as $key => $variable)
                {
                    echo"<tbody>";
                        echo"<tr>";
                            echo"<td class='image'><img src=".$resultat[$key]['photo']." ></td>";//photo
                            echo"<td class='marque'>" .$resultat[$key]['marque']."</td>"; //marque
                            echo"<td class='modele'>" .$resultat[$key]['modele']."</td>"; //modèle
                            echo"<td class='type'>" .$resultat[$key]['type_produit']."</td>"; //type
                            //echo"<td class='infos'>" .$resultat[$key]['infos']."</td>"; //information    
                            echo"<td class='quantite'>" .$resultat[$key]['quantite']."</td>"; //quantité
                            echo"<td class='dispo'>" .$resultat[$key]['dispo']."</td>"; //disponibilite
                            echo "<td><a href=\"ajouter.php\"><button>Ajouter produit</button></td>";
                            echo"<td class='casse-cocher'>
                                    <input type='checkbox' id='cocher' name='cocher' />
                                    <label for='cocher'>cocher</label>
                                </td>"; //case a cocher pour choix multiple emprunt
                             
                        echo"</tr>";
                    echo"</tbody>"; 
                }
            echo"</table>";
        echo "</table>";

        //SECTION CAMESCOPES
        $query = $pdo -> query("SELECT * FROM camescopes "); 
        $resultat = $query -> fetchAll(); 

        echo"<div id='camescope'><h3>Camescopes</h3></div>";
        echo"<hr>";

        echo"<table class='table_produits'>"; 
            echo"<table class='table' data-toggle='table' >";
                echo "<thead>"; 
                    echo "<tr>";
                        echo"<th scope='col'>Photo</th>";
                        echo"<th scope='col'>Marque</th>";
                        echo"<th scope='col'>Modèle</th>";
                        echo"<th scope='col'>Type</th>";
                        //echo"<th scope='col'>Information</th>";
                        echo"<th scope='col'>Quantité</th>";
                        echo"<th scope='col'>Disponibilité</th>";
                        echo"<th scope='col'>Emprunt</th>";
                    echo"</tr>";
                echo"</thead>";
            foreach ($resultat as $key => $variable)
                {
                    echo"<tbody>";
                        echo"<td class='image'><img src=".$resultat[$key]['photo']." \'style= width:150px, height=100px;'></td>";//photo
                        echo"<td class='marque'>" .$resultat[$key]['marque']."</td>"; //marque
                        echo"<td class='modele'>" .$resultat[$key]['modele']."</td>"; //modèle
                        echo"<td class='type'>" .$resultat[$key]['type_produit']."</td>"; //type
                        //echo"<td class='infos'>" .$resultat[$key]['infos']."</td>"; //information
                        echo"<td class='quantite'>" .$resultat[$key]['quantite']."</td>"; //quantité
                        echo"<td class='dispo'>" .$resultat[$key]['dispo']."</td>"; //disponibilite
                        echo"<td class='casse-cocher'>
                                <input type='checkbox' id='cocher' name='cocher' />
                                <label for='cocher'>cocher</label>
                            </td>"; //case a cocher pour choix multiple emprunt
                        echo "<td><a href=\"ajouter.php\"><button>Ajouter produit</button></td>";
                    echo"</tbody>"; 
                }
            echo "</table>";
        echo "</table>";

        //SECTION LUMIERES
        // Requête pour tester la connexion
        $query = $pdo -> query("SELECT * FROM lumieres"); 
        $resultat = $query -> fetchAll(); 

        echo"<div id='lumiere'><h3>Lumières</h3></div>";
        echo"<hr>";

        echo"<table class='table_produits'>"; 
            echo"<table class='table' data-toggle='table' >";
                echo "<thead>"; 
                    echo "<tr>";
                        echo"<th scope='col'>Photo</th>";
                        echo"<th scope='col'>Marque</th>";
                        echo"<th scope='col'>Modèle</th>";
                        echo"<th scope='col'>Catégorie</th>";
                        //echo"<th scope='col'>Information</th>";
                        echo"<th scope='col'>Quantité</th>";
                        echo"<th scope='col'>Disponibilité</th>";
                        echo"<th scope='col'>Emprunt</th>";
                    echo"</tr>";
                echo"</thead>";
            foreach ($resultat as $key => $variable)
                {
                    echo"<tbody>";
                        echo"<td class='image'><img src=".$resultat[$key]['photo']." \'style= width:150px, height=100px;'></td>";//photo
                        echo"<td class='marque'>" .$resultat[$key]['marque']."</td>"; //marque
                        echo"<td class='modele'>" .$resultat[$key]['modele']."</td>"; //modèle
                        echo"<td class='type'>" .$resultat[$key]['categorie']."</td>"; //Catégorie
                        //echo"<td class='infos'>" .$resultat[$key]['infos']."</td>"; //information
                        echo"<td class='quantite'>" .$resultat[$key]['quantite']."</td>"; //quantité
                        echo"<td class='dispo'>" .$resultat[$key]['dispo']."</td>"; //disponibilite
                        echo"<td class='casse-cocher'>
                                <input type='checkbox' id='cocher' name='cocher' />
                                <label for='cocher'>cocher</label>
                            </td>"; //case a cocher pour choix multiple emprunt
                        echo "<td><a href=\"ajouter.php\"><button>Ajouter produit</button></td>";
                    echo"</tbody>"; 
                }
            echo "</table>";
        echo "</table>";

        //SECTION ACCESSOIRE
        // Requête pour tester la connexion
        $query = $pdo -> query("SELECT * FROM accessoires "); 
        $resultat = $query -> fetchAll(); 

        echo"<div id='accessoire'><h3>Accessoires</h3></div>";
        echo"<hr>";
        
        echo"<table class='table_produits'>"; 
            echo"<table class='table' data-toggle='table' >";
                echo "<thead>"; 
                    echo "<tr>";
                        echo"<th scope='col'>Photo</th>";
                        echo"<th scope='col'>Marque</th>";
                        echo"<th scope='col'>Modèle</th>";
                        //echo"<th scope='col'>Catégorie</th>";
                        //echo"<th scope='col'>Information</th>";
                        echo"<th scope='col'>Quantité</th>";
                        echo"<th scope='col'>Disponibilité</th>";
                        echo"<th scope='col'>Emprunt</th>";
                    echo"</tr>";
                echo"</thead>";
            foreach ($resultat as $key => $variable)
                {
                    echo"<tbody>";
                        echo"<td class='image'><img src=".$resultat[$key]['photo']." \'style= width:150px, height=100px;'></td>";//photo
                        echo"<td class='marque'>" .$resultat[$key]['marque']."</td>"; //marque
                        echo"<td class='modele'>" .$resultat[$key]['modele']."</td>"; //modèle
                        //echo"<td class='type'>" .$resultat[$key]['categorie']."</td>"; //Catégorie
                        //echo"<td class='infos'>" .$resultat[$key]['infos']."</td>"; //information
                        echo"<td class='quantite'>" .$resultat[$key]['quantite']."</td>"; //quantité
                        echo"<td class='dispo'>" .$resultat[$key]['dispo']."</td>"; //disponibilite
                        echo"<td class='casse-cocher'>
                                <input type='checkbox' id='cocher' name='cocher' />
                                <label for='cocher'>cocher</label>
                            </td>"; //case a cocher pour choix multiple emprunt
                        echo "<td><a href=\"ajouter.php\"><button>Ajouter produit</button></td>";
                    echo"</tbody>"; 
                }
            echo "</table>";
        echo "</table>";

        echo "<form class='validation_reserv' method='POST'>
                <input type='submit' name='valider' value='Valider'>";
        echo "</div>";

        if(isset($_POST['valider'])){
            $query = $pdo -> query("INSERT INTO emprunts(id_emprunts, id_membres, id_materiel, date_emprunt, date_rendu, statut) VALUES()"); 
        }
        
    
    // fermeture de la connexion 
    $pdo = null;  
?>
