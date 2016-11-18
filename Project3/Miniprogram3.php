<?php
interface Strategy {
  public function strategy();
 }

class Human implements Strategy {
   public function strategy() {
     echo " Human.\n";
   }
}
class LightRailStrategy implements Strategy {
  public function strategy() {
    echo " LightRailStrategy.\n";
   }
 }
 class CarStrategy implements Strategy {
   public function strategy() {
     echo " CarStrategy.\n";
   }
 }
 class Commander {
   private $m_strategy;
   function __construct( $mode ) {
      switch( $mode ) {
        case '1':
	  $this->m_strategy = new Human();
	  break;
	case '2';
	  $this->m_strategy = new LightRailStrategy();
	  break;
	case '3';
	  $this->m_strategy = new CarStrategy();
	  break;
	default:
	  error_log( 'recevied unknwon strategy.');
	  break;
   }
 }
 public function command() {
   $this->m_strategy->strategy();
   return $this;
 }
}    

?>
