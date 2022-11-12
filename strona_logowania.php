<?php

    session_start();

    if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']==true))
	{
		header('Location: index.php');
        exit();
	}

?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="keywords" content="samochód, katalog, salon, wypożyczalnia aut, pancar sharing studio">

        <link rel="stylesheet" href="css/strona_logowania.css">

        <h1><title>Strona logowania</title><h1>
    </head>

    <body>

    <header>
        <div class="logo"><h1>Strona logowania</h1></div>
        <div class="logo"><img src="img/logo.png" alt="logo"></div>
        <div class="firma">PanCar Sharing Studio</div>
        <div style="clear: both;"></div>
    </header>

    <main>
        <div class="container">
                	
                <article>
                    <form action="zaloguj.php" method="post">
                        <div class="content">
                                Login: <br /> <input type="text" name="login" /> <br />
                                <br><?php
    if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?><br/>
                                Hasło: <br /> <input type="password" name="haslo" /> <br /> <br />
                                <input type="submit" value="Zaloguj się" />
                        </div>
                    </form>
                                <div class="content"><a href="strona_rejestracji.php"><input type="submit" value="Zarejestruj się" /></a></div>
                </article>
                
                 <footer>	
                    <ul class="footer2">
                        <li><img src="img/AudiA6.jpg"></li>
                        <li><img src="img/RenaultTalisman.jpg"></li>
                        <li><img src="img/Toyota_RAV4.jpg"></li>
                    </ul>
                    		
                    <div class="footer">
                        Najlepsze auta tylko u nas ! &copy; Wszelkie prawa zastrzeżone    
                    </div>
                                        
                    <ul class="footer1">
                            <li><i class="icon-direction">Radom ul.Czerwca 53</i></li>
                            <li><i class="icon-phone">48 76 453 43</i></li>
                            <li><i class="icon-mail-alt">pancarsharingstudio@gmail.com</i></li>
                    </ul>
                 </footer>
        </div>
    </main>

    </body>

</html>