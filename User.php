<?php
  class User {
    public $name;

    public $surname;

    public $eta;

      public function __construct($_name, $_surname) {
        $this->name = $_name;
        $this->surname = $_surname;
      }

    // public function setName($_name) {
    //   if(!empty($_name)) {
    //     $this->name = $_name
    //   } else {
    //     die('Errore, nome vuoto');
    //   }
    // }

    public function getFullName() {
      return $this->name . ' ' . $this->surname;
    }
  }
?>
