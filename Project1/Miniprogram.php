<?php

//This program uses a factory, a decorator and a strategy

// Standard hairstyle class
class hair  {
  private $length;
  private $style;
  private $color;
  
  function __construct($length, $style, $color) {
    $this->length = $length;
    $this->style = $style;
    $this->color = $color;
 }

 function getLength() {
   return $this-> $length;
 }
 function getStyle() {
   return $this-> $style;
 }
 function getColor() {
   return $this-> $color;
 }
 function getLengthandStyle() {
   return $this->getLength() . ' ' . $this->getStyle() ;
 }
}
// hair factory is created to make hairstyle 
class hairFactory {
  public static function create($length, $style, $color) {
    return new hair($length, $style, $color);
  }
}
// hair decorator 
class hairDecorator {
  protected $hair;
  protected $color;
  public function __construct(hair $hairIn) {
    print_r($hairIn);
    echo 'inside decorator';
    $this->hair = $hairIn;
    $this->colorSet();
    print_r($this); 
 } 
								 
 function setColor() {
   $this->color = $this->hair->getColor();
 }
 function displayColor() {
   return $this->color;
 }
}
//decorator for each hair color with various colors 
class silverHair extends hairDecorator {
  public $hd;
//change color to a younger looking color
  public function __construct(hairDecorator $hdIn) {
    $this->hd = $hdIn;
    $this->changeColor();
  }
  function changeColor() {
    $this->hd->color = 'Silver';
  }
}
	
class redHair extends hairDecorator {
  private $hd;
  public function __construct(hairDecorator $hdIn) {
    $this->hd->$hdIn;
    $this->changeColor();
  }
  function changeColor() {
    $this->hd->color = 'Red';
  }
}
class blackHair extends hairDecorator {
  private $hd;
  public function __construct(hairDecorator $hdIn) {
    $this->hd->$hdIn;
    $this->changeColor();
  }
  function changeColor() {
    $this->hd->color = 'Black';
  }
}
class brownHair extends hairDecorator {
  private $hd;
  public function __construct(hairDecorator $hdIn) {
    $this->hd->$hdIn;	
    $this->changeColor();
  }
  function changeColor() {
    $this->hd->color = 'Brown';	
 }
}

//Strategy 
class colorStrategy {
  public $strategy = NULL;
	
  public function __construct(hairDecorator $hdIn, $color) {
    switch($color) { 
      case "silver":
        $this->strategy	= new silverHair($hdIn);
	break;
      case "red": 
        $this->strategy = new redHair($hdIn);
	break;
      case "black":  
        $this->strategy = new blackHair($hdIn);
 	break;
      case "brown":   	
        $this->strategy = new brownHair($hdIn);
 	break;		
      default:
        echo "The color you have chosen is not available";
    
       }	
    }
}
//instantiate hair and the decorator and change color 
$myhair = hairFactory::create('Long' , 'curly' , 'blue');
echo 'factory';
print_r($myhair);
echo'done';
$decorator = new hairDecorator($myhair);
echo 'decorator';
print_r($decorator);
//person fills form to get the color dye they would like and put into strategy
$color = $POST["color"];
echo 'strategy';
$dyedHair = new colorStrategy($decorator, $color);
echo '<br>';
echo '<br>';
echo 'Your hair color is now ' . $decorator->showColor();


?>
