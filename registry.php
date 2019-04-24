
<?php include 'partials/header.php'; ?>
<style>
    body
    {
        margin: 0;
        padding: 0;
        background: #34495e;

    }
    .box
    {
        width: 400px;
        padding: 40px;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #191919;
        text-align: center;
        margin-top:450px;
        border-radius: 20px;
    }
    .box input[type='text'],.box input[type='email'],.box input[type='tel'],.box input[type='password']
    {
        border: 0;
        background: none;
        display:block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }
    .box h2
    {
        color: white;
        font-weight: 500px;
    }
     .box label
     {
         color:white;
         text-transform:uppercase;
         font-weight:200px;
     }
    .box input[type='text']:focus,.box input[type='email']:focus,.box input[type='tel']:focus,.box input[type='password']:focus
    {
        width: 280px;
        border-color: #2ecc71;
    }
    .box input[type='submit']
    {
         border: 0;
         background: none;
         display: block;
         margin: 20px auto;
         text-align: center;
         border: 2px solid #2ecc71;
         padding: 14px 40px;
         width: 200px;
         outline: none;
         color: white;
         border-radius: 24px;
         transition: 0.25s;
         cursor: pointer;
         
    }
    .box input[type='submit']:hover
    {
        background: #2ecc71;
        
    }
    p
    {
        position:relative;
        color:white;
        text-align:center;
        margin-top:90%;
        margin-left:40%;
        margin-right:40%;
    }

</style>


    <form action="traitement/user_verify.php" method="POST" class="box col-md-6 col-lg-6">
        <h2>INSCRIVEZ-VOUS</h2>
        <br>
        <label for="nom">NOM</label>
        <input type="text" id="nom" placeholder="" name="nom" required>
        <label for="premon">PRENOM</label>
        <input type="text" id="prenom" placeholder="" name="prenom" required>
        <label for="adresse">ADRESSE</label>
        <input type="text" id="adresse" placeholder="" name="adresse" required>
        <label for="email">EMAIL</label>
        <input type="email" id="email" placeholder="" name="email" required>
        <label for="contact">CONTACT</label>
        <input type="text" id="contact" placeholder="" name="contact" required>
        <label for="password">PASSWORD</label>
        <input type="password" id="password" placeholder="" name="password" required>
        <input type='submit' value='VALIDER'>
    </form>


<p>copyright @NaN 2019 N2.19</p>





