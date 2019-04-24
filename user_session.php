<?php include 'partials/header.php' ; ?>
<style>
    body
    {
        padding:0;
        margin:0;
        
    }
    h3
    {
        text-align: center;
    }
    body #directive
    {
        text-align: center;
        margin-bottom: 10px;
    }
    label
    {
        margin-top: 5px;
        margin-bottom: 5px;
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
    /*footer p
    {
        display:inline-block;
        margin-left: 160px;
    }
    footer #p1 p
    {
        float:left;
        display:inline-block;
       
    }
    footer #p2 p
    {
        float:right;
        display:inline-block;
        
    }*/
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
     body .form-group input[type='submit']
    {
        margin-top:20px;
        margin-left:500px;
    }
    .form-group label
    {
        margin-left:500px;
    }
    
</style>
<h3>Bienvenue</h3>
<div id="directive">Veuillez brièvement decrire votre projet et prendre RDV avec l'un de nos services specialisés</div>
<div class="container col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
    <form action="traitement/message.php" method="POST" class="form-group" role="form">
        <textarea id="message"  name='message'class="form-control" placeholder="Decrivez brievement vos attentes de notre entreprise"></textarea>
        <label for="date">DATE DE RDV</label>
        <input type="date" id="date" name="date" class="form-control">
        <input type="submit" class="btn btn-success btn-lg">
    </form>
</div>

<?php include 'partials/footer.php' ; ?>