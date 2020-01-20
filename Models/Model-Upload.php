<?php

	// $xxx = "<br><br><div>-- METHODE FOREACH --</div>";

	$query = $pdo->query("SELECT * FROM `fichiers` ORDER BY rand() LIMIT 0,5");
	$resultat = $query->fetchAll();
	foreach ($resultat as $key => $variable)
	{
		//  $xxx .= "<div>". $variable['code_postal'] ." - ".$resultat[$key]['nom']."</div>";
	}


	function InsertFichiers($pdo, $fichier, $email_expediteur, $email_destinataire, $message)
	{
		$sql = "INSERT INTO `fichiers` SET expediteur = :email_expediteur , destinataire = :email_destinataire, messtext = :messtext  , fichier = '". addslashes($fichier) ."' , date = '". time() ."'";
		$req = $pdo->prepare($sql);
		$req->execute([":email_expediteur" => $email_expediteur, ":email_destinataire" => $email_destinataire, ":messtext" => $message]);

		// mail('rap2fr@hotmail.fr', 'Mon Sujet', "mon message");
	}


//Fonction exemple qui permet d'interagir avec la BDD
/*function getAllTest() {
	global $pdo;

	$sql = "SELECT * FROM test";
	$req = $pdo->prepare($sql);
	$req->execute();
	$result = $req->fetchAll();
	return $result;
}*/