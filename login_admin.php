
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
    .box input[type='password'],.box input[type='email'],.box input[type='tel']
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
    .box input[type='password']:focus,.box input[type='email']:focus,.box input[type='tel']:focus
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


    <form action="traitement/login_ad_verify.php" method="POST" class="box col-md-6 col-lg-6">
        <h2>LOGIN</h2>
        <br>
        
        <label for="email">EMAIL</label>
        <input type="email" id="email" placeholder="" name="email" required>
        <label for="password">PASSWORD</label>
        <input type="password" id="password" placeholder="" name="password" required>
        <input type='submit' value='SEND'>
    </form>


<p>copyright @NaN 2019 N2.19</p>





