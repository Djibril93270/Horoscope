<?php

 /*function Signe (){
$signe = array (
    'Belier '=> 'Vous devez faire les efforts les plus serieux pour acquerir un bon niveau',
    'Taureau'=> 'Une de vos plus grandes qualites est la capacite de saisir les theories',
    'Gemeaux '=>'De temp a autre , admettez que vous etes pas le seul a raisonner avec logique',
    'Cancer'=>'La rapidite de votre intelligences risque de vous entrainer a negliger certain detail',
    'Lion'=>'Un effort vers la patience et la perseverance sera pour vous grandement payant',
    'Vierge'=>'Faites l`effort de vous concentrer',
    'Balance'=>'Vous avez une forte tendance a choisir les solutions astucieuses',
    'Scorpion'=> 'Renoncer a imposer vos propres donnees et appliquez les methodes apprises',
    'Sagittaire'=> 'Pardonnez avec aissance et sans ambiguite , mais n`acceptez aucun extreme',
    'Capricorne '=>'Une certaine facilite ne doit pas  vous detourner de l`objectif',
    'Verseau'=>'Ce travail vous demandera  beaucoup d`ingeniosite ',
    'Poisson'=>'Votre esprit vif et limpide facilite la resolution des problemes',
);   
    return $signe;
}


function connexion() {
    
    $connexion = array ('toto' =>'1234');
    
    return $connexion;
}
*/
function connexion()
  {
    $serveur='mysql:host=localhost';
    $bdd='dbname=horoscope';
    $user='root';
    $mdp='';
    try { 
        $db = new PDO($serveur.';'.$bdd, $user, $mdp); 
        $db->query("SET CHARACTER SET utf8");
         $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC); 
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
         return $db; }
    catch (Exception $e)
     { 
        echo 'Impossible de se connecter à la base de donnée';
         echo $e-›getMessage();
          die(); 
     }
         
         function executerRequete($sql, $params = null) 
         { if ($params == null) {

          $resultat = connexion()-> query($sql); // exécution directe 
          return $resultat; 
         }
        }
          
        function getConnexion($login,$mdp) {

        $sql="SELECT COUNT(*) AS nb FROM connexion WHERE login='$login' and mdp='$mdp'"; 
        return executerRequete($sql)-> fetch();
        } 
    }

