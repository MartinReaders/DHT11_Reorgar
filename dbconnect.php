<?php  
require 'config.inc.php';
try{
$bdd = new PDO ( 'mysql:host='.$host.';dbname='.$dbname,$user, $password);
return $bdd;
echo "ezr";
}
catch(Exception $e){
	die('Erreur :' .$e->getMessage());
}
 ?>
