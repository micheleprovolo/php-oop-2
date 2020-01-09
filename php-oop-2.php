<?php
/* GOAL:
  
    - Definire la classe Persona caratterizzata da nome e cognome;
    - Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita;
    - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza);
    - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre;
    
    - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi
*/
//Definire la classe Persona caratterizzata da nome e cognome
  class Persona {

      public $nome;
      public $cognome;

      function __construct($nome, $cognome) {
          $this -> nome = $nome;
          $this -> cognome = $cognome;
      }

      function __toString() {
          
          return "nome: " . $this -> nome 
                . "cognome: " . $this -> cognome; 
      }
  }

// Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
  class Ospite extends Persona {

      public $annoDiNascita;

      function __construct($nome, $cognome, $annoDiNascita;) {

          parent::__construct($nome, $cognome);

          $this -> annoDiNascita = $annoDiNascita;
      }

      function __toString(){
          
          return "nome: " . $this -> nome
                . "cognome: " . $this -> cognome 
                . "anno di nascita: " . $this -> annoDiNascita; 
      }
  }

// Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
  class Pagante extends Persona {

      public $indirizzoRes;

      function __construct($nome, $cognome, $indirizzoRes) {

          parent::__construct($nome, $cognome);

          $this -> indirizzoRes = $indirizzoRes;
      }
      
      function __toString(){
          
        return "nome: " . $this -> nome
        . "cognome: " . $this -> cognome 
        . "indirizzo di residenza: " . $this -> indirizzoRes; 
      }

  }

//test

  $persona = new Persona("Paolo", "Rossi");
  echo $persona;
  
  $ospite = new Ospite("Paolo", "Rossi", 1973);
  echo $ospite;

  
  $pagante = new Pagante("Paolo", "Rossi", "Via verdi 11");
  echo $pagante;