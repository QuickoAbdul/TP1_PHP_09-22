<?php
include('form.php');
class Commentateur
{
  protected $user;
  protected $genre;
  protected $submit;

    function __construct($titre)
    {
      $this->formulaire = "<form action=''><fieldset><legend>" . $titre . "</legend>";
    }

    function setsubmit()
    {
        $this->submit .= "<input type='submit' name='envoyer'>";
    }
    function setuser($name, $libelle)
    {
      $this->user .=  $libelle . "<input type='text' name=" . $name . "><br>";
    }
    function getuser()
    {
      return $this->user;
    }
    function setgenre($name, $libelle)
    {
      $this->genre .= $libelle . "<input type='radio' id=".$libelle." value=". $libelle ." name=" . $name . "><br>";
    }
    function getgenre()
    {
      return $this->genre;
    }
    function getform()
    {
        return $this->formulaire . $this->genre . $this->user . $this->submit;
    }
    function genre()
    {

    }
  }

  $form = new Commentateur("Accès au site");
  $form->setgenre("sexe", "Homme");
  $form->setgenre("sexe", "Femme");
  $form->setuser("nom", "Votre nom : ");
  $form->setsubmit();
  echo($form->getform());

?>
