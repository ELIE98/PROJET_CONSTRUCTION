<?php
session_start();
require 'traitement/database.php';
$connexion = Database::connect();
$user = $connexion -> prepare('SELECT* FROM user WHERE id=?');
$user -> execute(array($_SESSION['id']));
$afficher = $user -> fetch();
?>
<?php include 'partials/header.php' ; ?>
<style>
    
</style>

<h3>Bienvenue</h3>
<div class='container'>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">NOM</th>
            <th scope="col">PRENOM</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CONTACT</th>
            <th scope="col">ADRESSE</th>
            
            
        </tr>
    </thead>
    <tbody>
    <?php
                   $view =  $connexion ->query('SELECT * FROM user');
                  while ($afficher =$view -> fetch()) 
                  {
                    
                  
    ?>
        <tr>
            <th scope="row"><?php echo $afficher['id_client']  ?></th>
            <td><?php echo $afficher['nom']  ?></td>
            <td><?php echo $afficher['prenom']  ?></td>
            <td><?php echo $afficher['email']  ?></td>
            <td><?php echo $afficher['contact']  ?></td>
            <td><?php echo $afficher['adresse']  ?></td>
            
            <td><a href='' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> DELETE</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>









