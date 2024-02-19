<?php

    session_start();


    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    
    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno. "Opis: ".$polaczenie->connect_error;
    }
    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$password'";

        if ($rezultat = @$polaczenie->query($sql))
        {
            $ilu_userow = $rezultat->num_rows;

            if($ilu_userow>0)
            {
                $_SESSION['zalogowany'] = true;

                $wiersz = $rezultat->fetch_assoc();
                $id=$wiersz['id'];
                $login=$wiersz['login'];
                $haslo=$wiersz['haslo'];
                $mail=$wiersz['mail'];
                $imie=$wiersz['imie'];

                $_SESSION['id']=$wiersz['id'];
                $_SESSION['login']=$wiersz['login'];
                $_SESSION['haslo']=$wiersz['haslo'];
                $_SESSION['mail']=$wiersz['mail'];
                $_SESSION['imie']=$wiersz['imie'];

                
                unset($_SESSION['blad']);
                $rezultat->close();
                header('Location: STRONA_login.php');
            }
            else
            {
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: login.php');
            }


        }

        $polaczenie->close();
    }

?>