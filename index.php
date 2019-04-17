<?php
session_start();

//Ukljucivanje fajla u kom se nalazi konekcija sa bazom
include "php/connection.php";

$page = "";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

include "views/head.php";
include "views/header.php";
include "views/nav.php";

//Registracija novog korisnika u bazu - forma je u parcijalnom fajlu "register.php"

if (isset($_POST["btnRegister"])) {
    $firstName = trim($_POST['regFirstName']);
    $lastName = trim($_POST['regLastName']);
    $email = trim($_POST['regEmail']);
    $password = trim($_POST['regPassword']);

    # Validacija podataka

    $reName = "/^[A-Z][a-z]{2,50}$/";
    $rePassword = "/^[\S]{5,}$/";

    $errors = [];

    if (!preg_match($reName, $firstName)) {
        $errors[] = "Ime nije ok.";
    }

    if (!preg_match($reName, $lastName)) {
        $errors[] = "Prezime nije ok.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email nije ok";
    }

    if (!preg_match($rePassword, $password)) {
        $errors[] = "Lozinka nije ok.";
    }

    if (count($errors) > 0) {

        # Ispis gresaka nastalih u toku validacije

        echo "<ol>";

        foreach ($errors as $error) {
            echo "<li> $error </li>";
        }

        echo "</ol>";
    } else {
        # Ukoliko nema gresaka, upisujemo korisnika u bazu

        $upit_unos = $conn->prepare("INSERT INTO user VALUES (null, :firstName, :lastName, :email, :pass, :datum, 0, :uloga_id)");

        // echo $upit_unos->error;
        $uloga = 1;

        // Zamena "placeholdera" iz upita sa vrednostima

        $password = md5($password);

        $upit_unos->bindParam(':firstName', $firstName);
        $upit_unos->bindParam(':lastName', $lastName);
        $upit_unos->bindParam(':email', $email);
        $upit_unos->bindParam(':pass', $password);

        $datum = date("Y-m-d H:i:s"); // Dohvatanje trenutnog vremena i kreiranje formata u kom se belezi DATETIME tip kolone iz baze
        //   $datum = time();
        $upit_unos->bindParam(':datum', $datum);
        $upit_unos->bindParam(':uloga_id', $uloga);

        try {
            // izvrsavanje upita

            $rezultat = $upit_unos->execute();

            if ($rezultat) {
                echo "Korisnik je unet u bazu.";
            } else {
                echo "Greska pri unosu korisnika.";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

//provera contact forme
include "php/validation.php";


switch ($page) {
    case "home":
        include "views/home.php";
        break;
    case "register":
        include "views/register.php";
        break;
    case "register-successful":
        include "views/register-successful.php";
        break;
    case "blog":
        include "views/blog.php";
        break;
    case "post":
        include "views/post.php";
        break;
    case "contact":
        include "views/contact.php";
        break;
    case "submited":
        include "views/submited.php";
        break;
    case "faq":
        include "views/faq.php";
        break;
    case "category-full":
        include "views/category-full.php";
        break;
    case "detail":
        include "views/detail.php";
        break;
    case "admin":
        include "views/admin.php";
        break;
    case "customer-order":
        include "views/customer-order.php";
        break;
    default:
        include "views/home.php";
        break;
}

include "views/footer.php";
