<?php

    #################################################################  
    ###### CONTROLLER - INFOS PHP POUR VIEW #####################################
    #################################################################

    require_once("Models/Model-". $page .".php");

	###################################################################################
	#################### ici de traitements ###########################################
	###################################################################################

	if($fichiers && $email_expediteur && $email_destinataire && $message)
	{
		if ($_FILES && $_FILES['fichiers']) 
		{
			if (!empty($_FILES['fichiers']['name'][0])) 
			{
				$zip = new ZipArchive();
				$zip_name = "assets/uploads/upload_" . time() . ".zip";
				
				// Create a zip target
				if ($zip->open($zip_name, ZipArchive::CREATE) !== TRUE) 
				{
					$error .= "Sorry ZIP creation is not working currently.<br/>";
				}
				
				$imageCount = count($_FILES['fichiers']['name']);
				for($i=0;$i<$imageCount;$i++) 
				{
					if ($_FILES['fichiers']['tmp_name'][$i] == '') 
					{
						continue;
					}

					$newname = date('YmdHis', time()) . mt_rand() . '.jpg';
					
					// Moving files to zip.
					$zip->addFromString($_FILES['fichiers']['name'][$i], file_get_contents($_FILES['fichiers']['tmp_name'][$i]));
					
					// moving files to the target folder.
					// move_uploaded_file($_FILES['fichiers']['tmp_name'][$i], "assets/uploads/". $newname ."");
				}

				$zip->close();
				
				// Create HTML Link option to download zip
				$success = basename($zip_name);

				// INSERT

                InsertFichiers($pdo, $zip_name, $email_expediteur, $email_destinataire, $message);
			} 
			else 
			{
				$error = '<strong>Error!! </strong> Please select a file.';
			}
		}

		echo"<br> --- $email_expediteur, $email_destinataire, $message ---";
	}

	###################################################################################
	###################################################################################
	###################################################################################

    require_once("Views/View-". $page .".php");

    ## 2 - On Inclus le model (qui récupere les instructions et variables php)
    ## 3 - traitement des données
    ## 4 - On inclus la view
