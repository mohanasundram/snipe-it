<?php

return array(

    'undeployable' 		=> '<strong>Attention: </strong> Ce bien a été marqué non déployable.
                        Si ce statut a changé, veuillez l\'actualiser.',
    'does_not_exist' 	=> 'Ce bien n\'existe pas.',
    'does_not_exist_or_not_requestable' => 'Cet actif n\'existe pas ou ne peux pas être réquisitionné.',
    'assoc_users'	 	=> 'Ce bien est marqué sorti par un utilisateur et ne peut être supprimé. Veuillez d\'abord cliquer sur Retour de Biens, et réessayer.',

    'create' => array(
        'error'   		=> 'Ce bien n\'a pas été créé, veuillez réessayer. :(',
        'success' 		=> 'Bien créé correctement. :)'
    ),

    'update' => array(
        'error'   			=> 'Ce bien n\'a pas été actualisé, veuillez réessayer',
        'success' 			=> 'Bien actualisé correctement.',
        'nothing_updated'	=>  'Aucun champ n\'a été sélectionné, rien n\'a été actualisé.',
    ),

    'restore' => array(
        'error'   		=> 'L\'actif n\'a pas été restauré, veuillez réessayer',
        'success' 		=> 'Actif restauré correctement.'
    ),

    'deletefile' => array(
        'error'   => 'Le fichier n\'a pas été détruit. Veuillez réessayer.',
        'success' => 'Fichier détruit correctement.',
    ),

    'upload' => array(
        'error'   => 'Le(s) fichier(s) n\'ont pas pu être téléversé. Veuillez réessayer.',
        'success' => 'Le(s) fichier(s) ont été téléversé correctement.',
        'nofiles' => 'Vous n\'avez pas sélectionné de fichier pour le téléchargement ou le fichier que vous essayez de télécharger est trop gros',
        'invalidfiles' => 'Un ou plusieurs de vos fichiers sont trop gros, ou sont d\'un type non autorisé. Les types de fichiers autorisés sont png, gif, jpg, doc, docx, pdf et txt.',
    ),

    'import' => array(
        'error'         => 'Certains éléments n\'ont pas été correctement importés.',
        'errorDetail'   => 'Les éléments suivants n\'ont pas été importés à cause d\'erreurs.',
        'success'       => "Votre fichier a bien été importé",
    ),


    'delete' => array(
        'confirm'   	=> 'Etes-vous sûr de vouloir supprimer ce bien?',
        'error'   		=> 'Il y a eu un problème en supprimant ce bien. Veuillez réessayer.',
        'success' 		=> 'Ce bien a été supprimé correctement.'
    ),

    'checkout' => array(
        'error'   		=> 'Ce bien n\'a pas été sorti, veuillez réessayer',
        'success' 		=> 'Ce bien a été sorti correctement.',
        'user_does_not_exist' => 'Cet utilisateur est invalide. Veuillez réessayer.',
        'not_available' => 'Ce bien n\'est pas disponible pour être sorti!'
    ),

    'checkin' => array(
        'error'   		=> 'Ce bien n\'a pas été retourné, veuillez réessayer',
        'success' 		=> 'Ce bien a été retourné correctement.',
        'user_does_not_exist' => 'Cet utilisateur est invalide. Veuillez réessayer.',
        'already_checked_in'  => 'Ce bien est déjà dissocié.',

    ),

    'requests' => array(
        'error'   		=> 'Le bien n\'a pas été demandé, merci d\'essayer à nouveau',
        'success' 		=> 'Le bien a été demandé correctement.',
    )

);
