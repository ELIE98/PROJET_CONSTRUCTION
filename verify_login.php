<?php include 'partials/header.php'; ?>
<style>
    body
    {
       
        background:url('images/villa2.jpg') ;
        background-position: center;
        background-size: cover;
        opacity: 0.9;
        font-weight:bold;
        
    }
    footer
    {
        margin-top:17%;
        display:inline-block;
        margin-bottom:0;
        
    }
   
     body .container
     {
         margin-left:30%;
         margin-right:30%;
         margin-top:200px;
     }
     body .container .row
     {
         display:inline-block;
         margin-left:40px;
         margin-top:60px;
     }
     body .container .row p
     {
         color:white;
         font-weight:bold;
         font-size:20px;
         color:black;
         background:white;
         margin-top:8px;
         border-radius:6px;
     }
</style>

<div class=" container col-md-6 col-lg-6 ">
    <div class="row">
        <a href="login_admin.php" ><button class="btn btn-danger btn-lg "  style='text-align:center;'>ADMINISTRATORKC</button></a>
        <p><i><small>veuillez cliquer-ici svp <span class='glyphicon glyphicon-hand-up'></span></small></i></p>
    </div>
    <div class="row">
        <a href="login_user.php" ><button class="btn btn-danger btn-lg"  style='text-align:center;'>USERCONNECTION</button></a>
        <p><i><small>veuillez cliquer-ici svp <span class='glyphicon glyphicon-hand-up'></span></small></i></p>
    </div>
</div>
<footer style='background:black; width:100%; text-align:center;height:60%;'><p style='color:white;font-weight:bold;' >Copyright @NaN CI N2.19 Elie Corp<p></footer>

