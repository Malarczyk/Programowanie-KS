<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: sign-in.php');
		exit();
	}
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2288c424c6.js" crossorigin="anonymous"></script>
    <title>Welcome</title>

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
                <li><a href="#"> </a></li>
                <li><a href="#"> </a></li>
                <li><a style="font-weight: bold;" href="logout.php">Wyloguj się</a></li>
            </ul>
        </div>
     </nav>
     <div class="form">
         <?php
     
         echo "<h1>Witaj ".$_SESSION['user'].'!</h1>';
         echo "<h2>Twój E-mail: ".$_SESSION['email'].'</h2>';
         echo "<h2>Twój numer telefonu: ".$_SESSION['phone'].'</h2>';
     
 ?>
 
</div>
     <footer class="footer footer--sign-in">
         All rights reserved &copy; 2021
     </footer>
 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="assets/scripts/index.js"></script>
 </body>
 </html>



</body>
</html>