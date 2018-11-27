<?php 
require 'class/personnage.php';
$jon = new personnage('Jon Snow'); 
$daenerys = new personnage('Daenerys');
$tyrion = new personnage ('Tyrion');
$bran = new personnage ('Bran');
$jaimie = new personnage ('Jaimie');
$daenerys->decrire(); 
$tyrion->regenere();
$daenerys->attaqueMagique($jon);
$tyrion->hodor();
while($bran->enVie()){
$daenerys->attaquePhysique($bran);}


?>