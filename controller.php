<?php
switch ( $action )
 {
    case 'reponse':
    {
        // var dump ( $_REQUEST );
        $liste = $_REQUEST[ 'liste' ];
        include 'reponse.php';
        break;
    }
    case 'connexion':
    {
        //donnees envoyées par le formulaire
        $user = $_REQUEST [ 'user' ];
        $password = $_REQUEST [ 'password' ];
        //test de le validite du mot de passe
        $flag = false ;
        foreach ( $connexion as $login => $mdp ) {
            if ( $user == $login && $password == $mdp )
            {
                $flag = true ;
            }
        }
      
        //orienter l'affichage
        if ($flag){
            include 'choix.php';
        }else
        { 
            include 'connexion.php';
        }
         break ;
       }
       case 'modifier':
        {
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
