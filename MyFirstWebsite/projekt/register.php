<?php

  session_start();
  if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
  {
    header('Location: STRONA_login.php');
    exit();
  }

  if(isset($_POST['mail']))
  {
    //Udana walidacja? TAK
    $wszystko_OK=true;

    //Sprawdź poprawność imie
    $imie=$_POST['imie'];

    if((strlen($imie)<1) || (strlen($imie)>20))
    {
        $wszystko_OK=false;
        $_SESSION['e_imie']="Imię musi posiadać od 1 do 20 znaków!";
    }

    //Sprawdź poprawność e-mail
    $mail=$_POST['mail'];
    $mailB=filter_var($mail, FILTER_SANITIZE_EMAIL);

    if((filter_var($mailB, FILTER_VALIDATE_EMAIL)==false)||($mailB!=$mail))
    {
        $wszystko_OK=false;
        $_SESSION['e_mail']="Podaj poprawny adres e-mail!";
    }


    //Sprawdź poprawność login
    $login=$_POST['login'];

    if((strlen($login)<1) || (strlen($login)>20))
    {
        $wszystko_OK=false;
        $_SESSION['e_login']="Login musi posiadać od 1 do 20 znaków!";
    }

    //Sprawdź poprawność hasla
    $haslo1=$_POST['haslo1'];
    $haslo2=$_POST['haslo2'];

    if((strlen($haslo1)<3) || (strlen($haslo1)>20))
    {
        $wszystko_OK=false;
        $_SESSION['e_haslo']="Hasło musi posiadać od 3 do 20 znaków!";
    }

    if($haslo1!=$haslo2)
    {
        $wszystko_OK=false;
        $_SESSION['e_haslo']="Podane hasła nie są identyczne!";
    }

    //Sprawdź poprawność checkboxa
    if(!isset($_POST['regulamin']))
    {
        $wszystko_OK=false;
        $_SESSION['e_regulamin']="Zaakceptuj regulamin!";
    }

    require_once "connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try
    {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        if($polaczenie->connect_errno!=0)
        {
            throw new Exeption(mysqli_connect_errno());
        }
        else
        {
            //!Czy email już instnieje
            
            if($wszystko_OK==true)
            {
                if($polaczenie->query("INSERT INTO uzytkownicy VALUES(NULL, '$login', '$haslo1', '$mail', '$imie')"))
                {
                    $_SESSION['Udanarejestracja']=true;
                    header('Location: witamy.php');
                }
                else
                {
                    throw new Exeption($polaczenie->error);
                }
                
            }

            $polaczenie->close();
        }
    }
    catch(Exeption $e)
    {
        echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
        echo '<br />Informacja developerska: '.$e;
    }
  }


?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style5.css">
  <title>Sign Up</title>



</head>

<body class="d-flex flex-column min-vh-100">
  
<header>
    <nav class="navbar navbar-expand-sm bg-bar navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="STRONA_login.php"> <img src="logo2.jpg" alt="Avatar Logo" style="width:50px;"
            class="rounded-pill"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="GALERIA.html">Galeria Postaci</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FILMY.html">Filmy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ANIMACJE.html">Animacje</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="KOMENTARZE.html">Komentarze</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Konto</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="login.php">Zaloguj się</a></li>
                <li><a class="dropdown-item" href="register.php">Rejestracja</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
</header>

  <main>
    
  <div class="center">
    <form method="post">

        Imię: <br /><input type="text" name="imie"/> <br />
        <?php
            if(isset($_SESSION['e_imie']))
            {
                echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
                unset($_SESSION['e_imie']);
            }
        ?>

        E-mail: <br /><input type="text" name="mail"/> <br />
        <?php
            if(isset($_SESSION['e_mail']))
            {
                echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
                unset($_SESSION['e_mail']);
            }
        ?>

        Login: <br /><input type="text" name="login"/> <br />
        <?php
            if(isset($_SESSION['e_login']))
            {
                echo '<div class="error">'.$_SESSION['e_login'].'</div>';
                unset($_SESSION['e_login']);
            }
        ?>


        Hasło: <br /><input type="password" name="haslo1"/> <br />
        <?php
            if(isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }
        ?>

        Powtórz Hasło: <br /><input type="password" name="haslo2"/> <br /><br />


        <input type="checkbox" name="regulamin"> Akceptuję regulamin<br /><br />
        <?php
            if(isset($_SESSION['e_regulamin']))
            {
                echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                unset($_SESSION['e_regulamin']);
            }
        ?>

        <input type="submit" value="Zarejestruj się"/>
    </form>

   
</div>
  </main>

  <footer class="bg-batman text-center text-white mt-auto">

    <div class="bg-bar p-3">
      Autor: Mikołaj Solecki
    </div>

  </footer>

</body>

</html>