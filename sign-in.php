<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: view.php');
		exit();
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2288c424c6.js" crossorigin="anonymous"></script>
    <title>Programowanie Klient-Serwer</title>

    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar">
        <div class="navbar__social-media">
            <i class="fab fa-facebook"></i>
        </div>
        <div class="navbar__logo">
            <img src="assets/img/logo.png" alt="logo placeholder">
        </div>
        <div class="navbar__buttons">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a style="font-weight: bold;" href="index.html">Come Back</a></li>
            </ul>
        </div>
    </nav>

    <div class="form">
        <h1>Cześć! Zaloguj się do swojego panelu</h1>
        <form action="login.php" method="post">
            <input class="email" type="text" name="login"  placeholder="Login"> 
            <input class="pass" type="password" name="haslo" placeholder="Hasło"> 
            <input class="btn-send" type="submit" value="Zaloguj się" />
        </form>
                
    <?php
    if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
    </div>


    <footer class="footer footer--sign-in">
        All rights reserved &copy; 2021
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/scripts/index.js"></script>