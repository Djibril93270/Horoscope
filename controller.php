<?php
switch ( $action )
 {
    case 'reponse':
    {
        // var dump ( $_REQUEST );
        $liste = $_REQUEST[ 'liste' ];
        $horoscope = getLesigne($liste);
        include 'reponse.php';
        break;
    }
    case 'connexion':
    {
        //donnees envoyées par le formulaire
        $user = $_REQUEST [ 'user' ];
        $password = $_REQUEST [ 'password' ];
        
        //test de le validite du mot de passe
        $flag =getConnexion($user , $password);
    

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
        
    default :
    {
        include 'connexion.php';
    }
    break ;

    case 'administrer':
    {
        var_dump ($_REQUEST);
        foreach ($_REQUEST as $cle =>$valeur){
            if (isset($signe[$cle])) $signe [$cle]=$value ;
        }
        include 'choix.php';
        break ;
    }
}
