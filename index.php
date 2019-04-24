<?php include "partials/header.php";?>
<style>
   body 
   {
    background: url('images/entrepot.png') no-repeat;
    background-position:center;
    background-size:cover;
    
   }
   body table td
   {
    margin-left:100px;
    border:150px;
    display:inline-table;
   }
   body table
   {
       
   }
   body #presentation
   {
       background:black;
       color:white;
       border-radius:10px;
       padding:5px;
   }
   body #titre_carousel
   {
       text-transform:uppercase;
       text-align:center;
       font-weight:bold;
       color:white;
   }
   body #atout_humain
   {
       color:white;
       font-weight:bold;
       text-align:center;
       margin-bottom:7px;
   }
   body #atout_logistique
   {
       color:white;
       font-weight:bold;
       text-align:center;
       margin-bottom:7px;
   }
   body #atout_partenaire
   {
       color:white;
       font-weight:bold;
       text-align:center;
       margin-bottom:7px;
   }
   body #carousel
   {
       margin-left:100px;
   }
   body #titre_ressources
   {
       text-align:center;
       text-transform: uppercase;
       color:red;
       margin-left:145%;
       
   }
   body .red-divider
   {
       border:1px solid red;
       width:50px;
       margin-left:160%;
       margin-bottom:15px;
      
   }
   body .jumbotrons
   {
       display:inline-block;
       background:white;
       padding:8px;
       border-radius:8px;
   }
   
   footer
    {
         width: 100%;
         color: white;
         background: black;
         margin-bottom:0;
         margin-top:60%;
         padding:5px;
    }
    footer a
    {
        color:white;
    }
   
    footer #left
    {
        float:left;
        background:black;
        padding-bottom:33px;
        padding-top:10px;
        padding-right:5px;
        padding-left:4px;
        border-radius:5px;
        margin:20px;
    }
    footer #right
    {
        float:right;
        background:black;
        
        padding-left:50px;
        padding-right:50px;
        border-radius:5px;
        margin:20px;
    }
   
   footer span
   {
       color:white;
       font-weight:bold;
       text-align:center;
   }
   body .container .jumbotronic
   {
      margin-left:450px;
   }
</style>

<!--parties principales-->
<div class="container">
    <div id="presentation">
        <p id="p_presentation">
            Eliecorp est une filiale de <strong>KONAN CONSOLIDATED</strong>.Nous sommes specialises dans la construction
            tant dans les projets gouvernementaux que des richissimes et somptueuses residences de luxe.
            nous sommes en etroite collaboration avec plusieurs multinationales dans le domaine du e-building et plusieurs Etats
            Des a present prenez rendez vous avec un de nos services specialises pour realiser votre entreprise.
        </p>
    </div>
    <h4 id="titre_carousel">Nos Realisations</h4>
    <div id="carousel" class="carousel slide" data-ride="carousel"style="max-width: 800px;" >
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" ></li>
            <li data-target="#carousel" data-slide-to="1" class="active"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
            <li data-target="#carousel" data-slide-to="5"></li>
            <li data-target="#carousel" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/autoroute.png">
                <div class="carousel-caption"><h3>Autoroute de ouest</h3></div>
            </div>
            <div class="item">
                <img src="images/building1.png">
                <div class="carousel-caption"><h3>Konan Consolidated</h3></div></div>
            <div class="item">
                <img src="images/building2.jpg.png">
                <div class="carousel-caption"><h3>NaN empire state building</h3></div></div>
            <div class="item">
                <img src="images/entrepot.png">
                <div class="carousel-caption"><h3>Entrepots Bollore logistique</h3></div>
            </div>
            <div class="item">
                <img src="images/raffinerie.png">
                <div class="carousel-caption"><h3>Raffineria del barrozo</h3></div>
            </div>
            <div class="item">
                <img src="images/villa1.jpg">
                <div class="carousel-caption"><h3>La villa di sorrento</h3></div>
            </div>
            <div class="item">
                <img src="images/villa2.jpg">
                <div class="carousel-caption"><h3>Residence Margo Al Rahzi</h3></div>
            </div>
        </div>
        <a href="#carousel" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>

        <a href="#carousel" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
    <div class="col-md-4 col-lg-4" id="ressources">
    <h3 id='titre_ressources'> RESSOURCES </h3>
    <div class="red-divider"></div>
<div class='jumbotronic'>
   <table>
    <tr>
        <td>
            <div class="row"><span class="fa fa-hard-hat" id="atout_humain">  PROFESSIONNELS</span>
                <div class="jumbotrons">
                    <p>notre equipe est composee entierement de professionnel chacun expert dans son domaine .</p>
                </div>
            </div>
        </td>
        <td>    
            <div class="row"><span class="fa fa-snowplow" id="atout_logistique">  LOGISTIQUE</span>
                <div class="jumbotrons">
                    <p>nous disposons d une logistique importante pour vous servir, du materiel hi-tech a la gloire de notre conglomerat</p>
                </div>
            </div>
        </td>
        <td>
            <div class="row"><span class="fa fa-handshake" id="atout_partenaire">  PARTENAIRES</span>
                <div class="jumbotrons">
                    <p>nous disposons d un grand reseau de partenaire a l echelle planetaire allant des plus grand consortiums aux gouvernements</p>
                </div>
            </div>
        </td>
    </tr>
</table>
    </div>
</div>
</div>
<?php include 'partials/footer.php'; ?>

</body>
</html>