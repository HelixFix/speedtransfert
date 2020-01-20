<?php

    //Nommer ces variables correctement, ce fichier pourra être dans un .gitignore
    $host = "localhost";
    $dbname = "speedtransfert; charset=utf8";
    $user = "root";
    $pass = "";

    // $base_url = $_SERVER['PHP_SELF'];
    // $base_url = str_replace("/index.php", "", $base_url);

    $options = [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]; // Options PDO
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, $options); // Connexion à la bdd en PDO

    // try { $pdo = new PDO('mysql:host=localhost;dbname=exos; port=3306; charset=utf8', 'root' , ''); }
    // catch (PDOException $exception) { mail('rap2fr@hotmail.fr', 'PDOException', $exception->getMessage()); exit('Erreur de connexion à la base de données'); }

    // echo"<br><br><div>-- METHODE FOREACH --</div>";

    // $query = $pdo->query("SELECT * FROM `departements` ORDER BY rand() LIMIT 0,5");
    // $resultat = $query->fetchAll();
    // foreach ($resultat as $key => $variable)
    // {
    //     echo"<div>". $variable['code_postal'] ." - ".$resultat[$key]['nom']."</div>";
    // }

    ###############################################
    ######## REQUETE METHODE WHILE ################
    ###############################################

    // echo"<br><br><div>-- METHODE WHILE --</div>";
    // $query = $pdo->query("SELECT * FROM `departements` ORDER BY rand() LIMIT 0,5");
    // while(list($id, $code_postal, $nom) = $query->fetch())
    // {
    //     echo"<div>". $code_postal ." - ". $nom ."</div>";
    // }

    // echo"<br><br>";