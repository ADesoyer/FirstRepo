<?php
class Personnage 
{
  private $_force;  
  private $_localisation;
  private $_experience;   
  private $_degats; 
 
										// Constructeur
  public function _construct($force, $degats)
  {
    $this->setForce($force); 
    $this->setDegats($degats); 
    $this->_experience = 0;
  }
 
										// Accesseurs
  public function getExperience( )
  {
	return $this->_experience;
  }
  
  public function getForce( )
  {
	return $this->_force;
  }
  
  public function getDegats( )
  {
	return $this->_degats;
  }
 
										// Mutateurs
 public function setForce($force)
  {
    $this->_force = $force;
  }
 public function setExperience($experience)
  {
    $this->_experience = $experience;
  }
 public function setDegats($degats)
  {
    $this->_degats = $degats;
  }
 
										// Autres méthodes
 
    public function gagnerExperience() 
  {
	$this->_experience = $this->_experience+1;
  }
  
  public function frapper(Personnage $cible) 
  {
	if ($cible != $this)
	{
	$puissance = $this->_force; 
	$cible->_degats = $cible->_degats+$puissance;
	}
	else
	{
		echo "Désolé, un personnage ne peut pas se frapper lui-même !";
	}
  }
  

     
}
?>