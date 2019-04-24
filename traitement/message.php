<?php
session_start();
require 'database.php';

if(isset($_POST))
    {
        $message      =   verify( $_POST['message']);
        $date   =   verify($_POST['date']) ;
        $id     = $_SESSION['id'];


         $connexion = Database::connect();
         $verify = $connexion -> prepare('INSERT INTO `message`(`date`, `contenu`, `id_client`) VALUES (?,?,?)');
         $verify -> execute(array($date,$message,$id));
         Database::disconnect();
         header('location:logout.php');
    }
         
function verify($data)
{
    $data  = trim($data);
    $data  = htmlspecialchars($data);
    $data  = stripslashes($data);
    return $data;
}








?>