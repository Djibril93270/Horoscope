<?php
switch ($action)
{
    case 'reponse':
{
    // var dump ($_REQUEST);
    $liste = $_REQUEST['liste'];
    include 'reponse.php';
    break;
}
case 'connexion':
    {
        $user = $_REQUEST ['user'];
        $password = $_REQUEST ['password'];
        foreach ($connexion as $login => $mdp) {
            if($user == $login)
            {
                
            }
        }
         break ;
       }
default :
{
    include 'connexion.php';
}
}
