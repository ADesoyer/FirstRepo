<?php
require "Personnage.class.php";
$perso1 = new Personnage();
$perso1 -> _construct(60,0);
echo "<b>Pesonnage 1</b> : <ul><li>Force = ".$perso1->getForce()."</li><li>Expérience =  ".$perso1->getExperience()."</li><li>Dégâts = ".$perso1->getDegats()."</li></ul><br/>";
$perso2 = new Personnage();
$perso2 -> _construct(100,10);
echo "<b>Pesonnage 2</b> : <ul><li>Force = ".$perso2->getForce()."</li><li>Expérience = ".$perso2->getExperience()."</li><li>Dégâts = ".$perso2->getDegats()."</li></ul><br/>";
echo "########## COMBAT ##########<br/>";
$perso1 -> frapper($perso2);
$perso1 -> gagnerExperience();
$perso2 -> frapper($perso1);
$perso2 -> gagnerExperience();
echo "<b>Pesonnage 1</b> : <ul><li>Force = ".$perso1->getForce()."</li><li>Expérience =  ".$perso1->getExperience()."</li><li>Dégâts = ".$perso1->getDegats()."</li></ul><br/>";
echo "<b>Pesonnage 2</b> : <ul><li>Force = ".$perso2->getForce()."</li><li>Expérience = ".$perso2->getExperience()."</li><li>Dégâts = ".$perso2->getDegats()."</li></ul><br/>";

?>