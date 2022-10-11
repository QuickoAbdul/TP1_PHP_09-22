<?php
include('form.php');
class form2 extends form
{
  protected $radiobutton;
  protected $codecase;
  
    function setradiobutton($name ,$libelle)
    {
      $this->radiobutton .= $libelle . "<input type='radio' id=".$libelle." value=". $libelle ." name=" . $name . "><br>";
    }

    function setcodecase($name, $libelle)
    {
      $this->codecase .= $libelle . "<input type='checkbox' id=".$libelle." value=". $libelle ." name=" . $name . "><br>";
    }
    function getform()
    {
        return $this->formulaire . $this->inputtext . $this->radiobutton . $this->codecase . $this->submit;
    }
  }

  $form = new form2("Accès au site");
  $form->settext("nom", "Votre nom : ");
  $form->settext("code", "Votre code : ");
  $form->setradiobutton("sexe", "Homme");
  $form->setradiobutton("sexe", "Femme");
  $form->setcodecase("loisir", "tennis");
  $form->setcodecase("loisir", "équitation");
  $form->setcodecase("loisir", "football");
  $form->setsubmit();
  echo($form->getform());


?>
