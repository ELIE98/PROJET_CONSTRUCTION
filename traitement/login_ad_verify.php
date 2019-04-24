<?php
    require 'database.php';
    if(isset($_POST))
    {
        $email      =   verify( $_POST['email']);
        $password   =   verify($_POST['password']) ;


      /*  echo  $email;
        echo  $password;
    */
         $connexion = Database::connect();
         $verify = $connexion -> prepare('SELECT * FROM admin WHERE email=? AND mdp=?');
         $verify -> execute(array($email,$password));

         if($find= $verify -> fetch())
         {
             
            session_start();
            $_SESSION['id'] = $find['id'];
            header('location:../admin_session.php');
         }
         else 
             {
                 header('location:../login_admin.php');
             }
     }
function verify($data)
{
    $data  = trim($data);
    $data  = htmlspecialchars($data);
    $data  = stripslashes($data);
    return $data;
}




?>