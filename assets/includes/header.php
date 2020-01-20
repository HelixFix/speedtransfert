<?php

    $projetName = "speedtransfert";
    $projectNameLength = strlen($projetName) + 1;
    $base_url = mb_substr($_SERVER['REQUEST_URI'], 0, $projectNameLength);
?>

<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Speed Transfert</title>
        <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">

    </head>

    <body>

        <header id="header" class=""><p>Logo</p></header>

        <main>