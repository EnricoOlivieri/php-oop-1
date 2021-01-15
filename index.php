<?php

/**
 *
 */
class StanzaHotel{

  public $balcone;
  public $piano;
  public $letti;

  function __construct($balcone, $piano, $letti) {
    $this->balcone = $balcone;
    $this->piano = $piano;
    $this->letti = $letti;
  }
  public function print() {
    foreach ($this as $key => $value) {
      print "$key => $value \n";
      print "<br>";
    }
  }
}

$room1 = new StanzaHotel(4,"luxury");
$room2 = new StanzaHotel(2,"standard");
$room3 = new StanzaHotel(9,"medium");

$room->print()





 ?>
