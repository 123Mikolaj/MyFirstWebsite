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
  <title>Main Page</title>

  <script type="text/javascript">

    var numer = 0;

    function zmienslajd() {
      numer++; if (numer > 12) numer = 1;

      var plik = "<img class=\"img\" src=\"film" + numer + ".jpg\" />";

      document.getElementById("slider").innerHTML = plik;

      setTimeout("zmienslajd()", 3000);

    }

  </script>

</head>

<body onload="zmienslajd()" class="d-flex flex-column min-vh-100">
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
    <div class="container mt-5 mb-5" style="overflow-y:auto;">

      <div class="row">
        <div class="opis col-sm-6 mt-5">
          <h2>FILMY</h2>
          <p>Batman ma bardzo bogatą filmografię, która swój początek miała już w 1966 roku.
            W tej części chciałbym skupić się na filmach kinowych. Nie będę więc zwracał uwagi na filmy animowane
            (jeżeli jesteś zainteresowany animacjami zapraszam do sekcji animacje).</p>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <div id="slider"></div>

        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Batman zbawia świat (Batman: The Movie)</h2>
          <p>Bogaty przedsiębiorca Bruce Wayne i jego podopieczny Dick Grayson sprawiają wrażenie normalnych,
            ale tak na prawde mają wiele do ukrycia, gdyż jako Batman i Robin walczą ze złem wszelkiej maści.
            Tym razem jednak człowiek Pingwin ukradł dehylator, urządzenie pozwalające zamieniać ludzi w proch i ma
            zamiar przejąć władzę nad światem.
            Co gorsza pomagają mu w tym Joker, Kobieta-kot i Zagadka.
            Film jest kontynuacją kinową serialu o Batmanie.</p>
        </div>

        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/eC92BamCXJM">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Batman (1989)</h2>
          <p>Akcja filmu rozgrywa się w Gotham City, w mieście „chronionym” tylko przez skorumpowaną policję.
            Pojawia się Joker, dawniej gangster, który uległ wypadkowi i został okrutnie oszpecony, knujący intrygi
            przeciw mieszkańcom.
            Słabe władze miejskie nie są w stanie mu przeszkodzić. Joker musi się jednak zmierzyć z nowym, zupełnie
            innym przeciwnikiem – Batmanem, który ma zamiar ocalić miasto.
            W postać tę wciela się znany gothamski miliarder i playboy Bruce Wayne, sierota, którego rodziców zabił
            właśnie Joker. Batmanowi pomaga dziennikarka Vicki Vale.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/Gkebn0-iG3k">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Powrót Batmana (Batman Returns)</h2>
          <p>Mieszkańcy Gotham przygotowują się do świąt Bożego Narodzenia, tymczasem w mieście pojawia się nowe
            zagrożenie,
            diaboliczny super-łotr Pingwin pragnie sięgnąć po władzę, łączy swe siły z multimilionerem Maxem Shreckiem,
            obaj planują skompromitować Batmana.
            Tymczasem na scenie pojawia się Kobieta-Kot.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/VLTggBNLhiA">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Batman Forever (Batman Forever)</h2>
          <p>Trzecia część ekranizacji przygód komiksowego superbohatera Człowieka-Nietoperza z 1995, w którego wcielił
            się Val Kilmer.
            Tym razem przeciwnikami Batmana są Harvey „Dwie Twarze” Dent oraz Edward „Człowiek Zagadka” Nygma.
            Jednak w tej potyczce Batman nie jest sam – u jego boku stoją pomocnik Robin i pani psycholog Chase
            Meridian.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/CtBca6H6Teg">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Batman i Robin (Batman & Robin)</h2>
          <p>Batman i jego młody pomocnik Robin, walczą z parą szalonych naukowców – „Mr. Freeze” (Pan Mróz),
            który chce zamrozić Gotham City oraz demoniczną i piękną ekoterrorystką o pseudonimie „Poison Ivy” (Trujący
            Bluszcz).
            Tym razem obrońcom miasta pomaga młoda Batgirl.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/FCS_kif7qfk">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Batman: Początek (Batman Begins)</h2>
          <p>Amerykański-brytyjski film fabularny z 2005 roku w reżyserii Christophera Nolana.
            Kolejna część serii filmów z Batmanem oraz pierwsza, w której główną rolę zagrał Christian Bale.
            Opowiada o dzieciństwie bohatera, jego pobycie na Dalekim Wschodzie oraz początkach działalności
            człowieka-nietoperza.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/FiL1_5DWV7Y">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Mroczny Rycerz (The Dark Knight)</h2>
          <p>Siódmy film pełnometrażowy o przygodach Batmana, drugi (po Batman: Początek) wyreżyserowany przez
            Christophera Nolana. Światową premierę miał 18 lipca 2008 roku (Polska: 8 sierpnia).
            Ustanowił rekord otwarcia w USA z wynikiem 158,4 mln dolarów.
            Film był nominowany w ośmiu kategoriach do Oscara za rok 2008 i otrzymał dwie statuetki: za drugoplanową
            rolę męską (Heath Ledger) i za najlepszy montaż dźwięku.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/LDG9bisJEaI">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Mroczny Rycerz powstaje (The Dark Knight Rises)</h2>
          <p>Film akcji w reżyserii Christophera Nolana, którego światowa premiera odbyła się 16 lipca 2012.
            Jest kontynuacją Mrocznego Rycerza, a zarazem ostatnim filmem z trylogii o Batmanie w reżyserii Nolana</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/g8evyE9TuYk">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Batman v Superman:<br> Świt sprawiedliwości (Dawn of Justice)</h2>
          <p>amerykański fantastycznonaukowy film akcji na podstawie komiksów o superbohaterach takich, jak Superman,
            Batman i Wonder Woman wydawnictwa DC Comics.
            Film jest kontynuacją Człowieka ze Stali z 2013, a zarazem jest drugą produkcją wchodzącą w skład franczyzy
            DC Extended Universe.
            Obraz wyreżyserował Zack Snyder, za scenariusz odpowiedzialni są Chris Terrio i David S.
            Goyer, zaś odtwórcami głównych ról są Henry Cavill, Ben Affleck, Gal Gadot, Amy Adams, Laurence Fishburne,
            Diane Lane, Jesse Eisenberg, Jeremy Irons i Holly Hunter.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/0WWzgGyAH6Y">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Liga Sprawiedliwości (Justice League)</h2>
          <p>Film borykał się z wieloma trudnościami w trakcie produkcji.
            Scenariusz przeszedł wiele korekt, a w maju 2017 roku Snyder zrezygnował z prac nad filmem na etapie
            postprodukcji ze względu na śmierć córki.
            Jego pracę przejął Joss Whedon, który nadzorował dalsze prace. Warner Bros. zadecydowało o skróceniu filmu
            do 120 minut.
            Film został negatywnie przyjęty przez fanów, a jego wynik finansowy nie spełnił oczekiwań studia.
            Członkowie obsady i ekipy produkcyjnej oraz fani złożyli petycję o wydanie wersji Snydera. W maju 2020 roku
            reżyser poinformował, że zostanie ona wydana na platformie HBO Max.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/3cxixDgHUYw">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Liga Sprawiedliwości Zacka Snydera (Zack Snyder's Justice League)</h2>
          <p>Film jest wersją reżyserską Ligi Sprawiedliwości z 2017.
            Opowiada o tym, jak Batman (Ben Affleck), Superman (Henry Cavill), Wonder Woman (Gal Gadot),
            Flash (Ezra Miller), Aquaman (Jason Momoa) oraz Cyborg (Ray Fisher) łączą siły, tworząc zespół zwany Ligą
            Sprawiedliwości
            w celu ocalenia świata przed Darkseidem (Ray Porter) oraz jego wysłannikiem Steppenwolfem (Ciarán Hinds).
            Grupa superbohaterów musi ochronić trzy Mother Boksy – potężne sześcienne artefakty, które połączone mogą
            umożliwić podbój Ziemi.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/vM-Bja2Gy04">
          </iframe>
        </div>
      </div>

      <div class="rzad row">
        <div class="opis col-sm-6">
          <h2>Batman (The Batman)</h2>
          <p>Za reżyserię odpowiadał Matt Reeves, który napisał scenariusz wspólnie z Peterem Craigiem.
            Tytułową rolę zagrał Robert Pattinson, a oprócz niego w głównych rolach wystąpili: Zoë Kravitz, Paul Dano,
            Jeffrey Wright, John Turturro, Peter Sarsgaard, Andy Serkis i Colin Farrell.</p>
        </div>
        <div class="content col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/mqqft2x_Aa4">
          </iframe>
        </div>
      </div>

    </div>
  </main>

  <footer class="bg-batman text-center text-white mt-auto">

    <div class="bg-bar p-3">
      Autor: Mikołaj Solecki
    </div>

  </footer>

</body>

</html>