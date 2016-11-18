<?php
//includes abstract, decorator, and observer design patterns
abstract class Lunch {
    abstract function update(CondimentDecorator $food_in);
    protected $description = "Undecided Food choice";
    public abstract function getDescription();
    public abstract function price();
}
abstract class CondimentDecorator extends Lunch{
    abstract function attach(Lunch $food_in);
    abstract function detach(Lunch $food_in);
    abstract function notify();
}
function writeIn($line_in) {
   echo $line_in. "<br>";
}
class hamburg extends Lunch {
    public function __construct() {
	$this->description = "Egg hamburg";
    }
    public function getDescription() {
        return $this->description;
    }
    public function price() {
	return 6.00;
    print_r($this);	
    }
}
class BreakfastSandwich extends Lunch {
    public function __construct() {
        $this->description = "Egg and Pork Roll Sandwich";
    }
    public function getDescription() {
        return $this->description;
    }
    public function price() {
        return 3.50;
    }
}
class Bagel extends Lunch {
    public function __construct() {
        $this->description = "Bagel";
    }
    public function getDescription() {
        return $this->description;
    }
    public function price() {
        return 2.99;
    }
} 
class Vegetables extends CondimentDecorator {
    private $Lunch;
    public function __construct(Lunch $b) {
        $this->Lunch = $b;
    }
    public function getDescription() {
        return $this->Lunch->getDescription() . ", Vegetables";
    }
    public function price() {
        return $this->Lunch->price() + 1.00;
    }
}
class Cheese extends CondimentDecorator {
    private $Lunch;
    public function __construct(Lunch $b) {
        $this->Lunch = $b;
    }
    public function getDescription() {
        return $this->Lunch->getDescription() . ", American Cheese";
    }
    public function price() {
        return $this->Lunch->price() + .75;
    }
}
class CreamCheese extends CondimentDecorator {
    private $Lunch;
    public function __construct(Lunch $b) {
        $this->Lunch = $b;
    }
    public function getDescription() {
        return $this->Lunch->getDescription() . ", Cream Cheese";
    }
    public function price() {
        return $this->Lunch->price() + .25;
    }
}
class PersonObserver extends Lunch {
   public function _construct() {
   } 
   public function update(CondimentDecorator $food) {
      writeIn('*It is okay to eat food - New Food Alert*');
      writeIn('new food made:'$food->getFood());
      writeIn('*Person recieved food - Food Alert over*');
     }
   }
class PersonSubject extends CondimentDecorator {
   private $favoriteFood = NULL;
   private $observer = array();
   function _construct() {
   }
   function attach(CondimentDecorator $observer_in) {
     $this->observers[] = $observer_in;
   }
   function detach(CondimentDecorator $observer_in) {
      foreach($this->observers as $okey =>$oval) {
        if($oval == $observers_in) {
	  unset($this->observers[$okay]);
	}
      }
   }
   function notify() {
     foreach($this->observers as $obs) {
       $obs->update($this);
      }
   }
   function updateFood($newFood) {
     $this->food = $newFood;
     $this->notify();
     print_r($this);
   }
   function getFood() {
     return $this->food;
   }
}
writeIn('Begin Food Test Pattern');
writeIn('');
 $foodGossiper = new PersonSubject();
 $foodGossipFan = new PersonObserver();
 $foodGossiper->attach($patternGossipFan);
 $foodGossiper->updateFavorites('abstract breakfast, decorator, person');
 $foodGossiper->updateFavorites('abstract breakfast, decorator, person');
 $foodGossiper->detach($patternGossipFan);
 $foodGossiper->updateFavorites('abstract breakfast, observer, person');
  writeln('END Food Test PATTERN'); 

?>
