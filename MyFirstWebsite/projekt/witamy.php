<?php

  session_start();
  if(isset($_SESSION['udanarejestracja']))
  {
    header('Location: STRONA.html');
    exit();
  }
  else
  {
    unset($_SESSION['udanarejestracja']);
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
  <link rel="stylesheet" type="text/css" href="style1.css">
  <title>Log In</title>



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
                <li><a class="dropdown-item" href="login.php">Zaloguj si�</a></li>
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
  Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br />
  <a href="login.php">Zaloguj się na swoje konto!</a>
  <br />  
  
  </main>

  <footer class="bg-batman text-center text-white mt-auto">

    <div class="bg-bar p-3">
      Autor: Miko�aj Solecki
    </div>

  </footer>

</body>

</html>