<?php

class form
{
    protected $formulaire;
    protected $inputtext;
    protected $submit;


    function __construct($titre)
    {
        $this->formulaire = "<form action=''><fieldset><legend>" . $titre . "</legend>";
    }

    function settext($name, $libelle)
    {
        $this->inputtext .= $libelle . "<input type='text' name=" . $name . "><br>";
    }

    function setsubmit()
    {
        $this->submit .= "<input type='submit' name='envoyer'>";
    }

  }



  ?>
