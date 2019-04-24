<?php require 'partials/header.php'?>
<style>
    body
    {
        margin: 0;
        padding: 0;
        background: url('images/building2.jpg.png');
        background-size: cover;
        
    }
    .box
    {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        padding:  40px;
        background: rgba(0, 0, 0, .8);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
        border-radius: 10px;
    }
    .box h2
    {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }
    .box .inputBox
    {
        position: relative;
    }
    .box .inputBox input
    {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: white;
        margin-bottom: 30px;
        border: none;
        outline: none;
        background: transparent;
        border-bottom:1px solid white;
        letter-spacing: 1px;
    }
    .box .inputBox label
    {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }
    .box .inputBox:focus ~ label,
    .box .inputBox:valid ~ label
    {
        top: -10px;
        left: 0;
        color: #03a9f4;
        font-size: 12px;
    }
    .box input[type='submit']
    {
        background: transparent;
        border: none;
        outline: none;
        color: #fff;
        padding: 10px 20px;
        background: #03a9f4;
        cursor: pointer;
        border-radius: 5px;
    }
</style>

<div class="box">
    <h2>LOGIN</h2>
    <form action="traitement/login_user_verif.php" method="POST">
        <div class="inputBox">
            <label for="email">email</label>
            <input id="email" name="email" type="email" required>
        </div>
        <div class="inputBox">
            <label for="password">password</label>
            <input id="password" name="password" type="password" required>
        </div>
        <input type="submit" name="" value="SEND">
    </form>
</div>