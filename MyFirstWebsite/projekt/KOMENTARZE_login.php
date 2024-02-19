<?php
  session_start();

  if(!isset($_SESSION['zalogowany']))
  {
    header('Location: STRONA.html');
    exit();
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
  <title>Komentarze</title>



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
              <a class="nav-link" href="GALERIA_login.php">Galeria Postaci</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FILMY_login.php">Filmy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ANIMACJE_login.php">Animacje</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="KOMENTARZE_login.php">Komentarze</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Zalogowany</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logout.php">Wyloguj się</a></li>
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
  <form action="KOMENTARZE_login.php" method="post">
  <textarea name="komentarz" rows="8" cols="45"></textarea>
  <br />
  <input type="submit" value="Dodaj komentarz">
</form>

<table width="1000" align="center" border="1" bordercolor="#d5d5d5"  cellpadding="0" cellspacing="0">
        <tr>
        <?php

        $imie = $_SESSION['imie'];
        $data = date('Y-m-d');
        @$komentarz = $_POST['komentarz'];

            ini_set("display_errors", 0);
            require_once "connect2.php";
            $polaczenie = mysqli_connect($host, $user, $password);
			mysqli_query($polaczenie, "SET CHARSET utf8");
			mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
            mysqli_select_db($polaczenie, $database);

            $sql = "INSERT INTO komentarze (imie, data, komentarz)
            VALUES ('$imie', '$data', '$komentarz ')";

  if($komentarz)
  {
    if ($polaczenie->query($sql) === TRUE)
    {
        echo "Dodano komentarz <br />";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $polaczenie->error;
    }   
  }          
            $zapytanietxt = file_get_contents("zapytanie.txt");
            
            $rezultat = mysqli_query($polaczenie, $zapytanietxt);
            $ile = mysqli_num_rows($rezultat);
            
            echo "znaleziono: ".$ile;
if ($ile>=1) 
{
echo<<<END
<td width="50" align="center" bgcolor="black">imie</td>
<td width="50" align="center" bgcolor="black">data</td>
<td width="200" align="center" bgcolor="black">komentarz</td>
</tr><tr>
END;
}

	for ($i = 1; $i <= $ile; $i++) 
	{
		
		$row = mysqli_fetch_assoc($rezultat);
		$a1 = $row['imie'];
		$a2 = $row['data'];
		$a3 = $row['komentarz'];
		
echo<<<END
<td width="50" align="center">$a1</td>
<td width="100" align="center">$a2</td>
<td width="100" align="center">$a3</td>
</tr><tr>
END;
			
	}
	
?>


</tr></table>





</div>
  </main>

  <footer class="bg-batman text-center text-white mt-auto">

    <div class="bg-bar p-3">
      Autor: Mikołaj Solecki
    </div>

  </footer>

</body>

</html>