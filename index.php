<?php

	$superglobals = array($_SERVER, $_ENV, $_FILES, $_COOKIE, $_POST, $_GET);

	foreach($superglobals as $superglobal)
	{ 
		foreach($superglobal as $key => $value) { if(!is_array($value)) { ${$key} = trim(rawurldecode($value)); /* echo "$key $value<br>"; */ }  else { ${$key} = $value; } }
	}

	global $fichiers, $email_expediteur, $email_destinataire, $message;




	// require_once("assets/includes/header.php");

		require('assets/includes/infos-connexion.php'); // Inclus le fichier avec les identifiants de connexion à la bdd


		if(isset($_GET['page']) && !empty($_GET['page'])) $page = $_GET['page']; else $page = 'Upload'; // Récupère le parametre get page dans l'url, si aucun parametre, $page = Home

		require("Controllers/Controller-". ucfirst($page) .".php"); // Inclus le controller de la page demandée

	require_once("assets/includes/footer.php");

	## 1 - On inclus le header
	## 2 - On se connecte à la base de données
	## 3 - On vérifie le parametre d'url $page
	## 4 - On appelle le controller correspondant à la page appellée en ##2
	## 5 - On inclus le footer