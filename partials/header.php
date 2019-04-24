<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ElieCorp | KonanConsolidated</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script type="text/javascript" src="css/jquery.min.js"></script>
    <script type="text/javascript" src="css/bootstrap.js"></script>

   <!-- <link rel="stylesheet" href="css/css1/all.css" type="text/css">
    <script type="text/javascript" src="css/js1/all.js"></script>
    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   
    <link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        header .navbar-header #logo
        {
          border-radius: 100%; 
          height:100px;
          width:100px;
          border:2px solid black;
        }
        header
        {
            padding-top:3px;
            padding-bottom:5px;
        }
        header nav ul li
        {
            padding-top:10%;
            margin-right:10px;
            padding-bottom:10;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="">
                        <a href="#"><img src="images/logo.png" class="" id="logo"></a>
                    </div>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about.php" target='_blank'><span class="glyphicon glyphicon-info-sign"></span> ABOUT</a></li>
                        <li><a href="registry.php" target='_blank'><span class="glyphicon glyphicon-edit"></span> REGISTER</a></li>
                        <li><a href="verify_login.php" target='_blank'><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
                        <li><a href="traitement/logout.php" target='_blank'><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>