<?php

switch ($action)
 {
    case 'reponse':
    {
        // var dump ( $_REQUEST );
        $liste = $_REQUEST['liste'];
        $horoscope = getLesigne($liste);
        include 'reponse.php';
        break;
    }
    case 'connexion':
    {
        //donnees envoyées par le formulaire
        $user = $_REQUEST ['user'];
        $password = $_REQUEST ['password'];
        
        //test de le validite du mot de passe
        $flag =getConnexion($user, $password);
    

        //orienter l'affichage
        if ($flag){
            $signe = getLesSignes();
            include 'choix.php';
        }else
        { 
            include 'connexion.php';
        }

         break ;
       }
       case 'modifier':
        {
            $signe = getLesSignes();
            include 'administration.php';
            break ;
        }
        
    case 'administrer':
    {


        foreach ($_REQUEST as $cle =>$valeur){
        $signe [$cle]=$valeur;
        }
        include 'choix.php';
        break ;
    }
     default :
    {
        include 'connexion.php';
        break ;
    }
}


