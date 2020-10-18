<?
header('Content-type: text/html; charset=utf-8');
class Cat {
  public $weight;
  public $age;
  public $strength;
  function __construct(){
    
  }
  function getWeight(){return $this->weight;}
  function getAge(){return $this->age;}
  function getstrength(){return $this->strength;}
  function fight($anotherCat){
    //$count = true;
    $coin1 = 0;
    $coin2 = 0;
    $coin3 = 0;
    if($this->weight > $anotherCat->weight){
      $coin1++;
    }elseif($this->weight < $anotherCat->weight){
      $coin2++;
    }elseif($this->weight = $anotherCat->weight){
      $coin3++;
    }
    if($this->age > $anotherCat->age){
      $coin1++;
    }elseif($this->age < $anotherCat->age){
      $coin2++;
    }elseif($this->age = $anotherCat->age){
      $coin3++;
    }
    if($this->strength > $anotherCat->strength){
      $coin1++;
    }elseif($this->strength < $anotherCat->strength){
      $coin2++;
    }elseif($this->strength = $anotherCat->strength){
      $coin3++;
    }
    //$this->weight > $anotherCat->weight?$coin1++:$coin2++;
    //$this->age > $anotherCat->age?$coin1++:$coin2++;
    //$this->strength > $anotherCat->strength?$coin1++:$coin2++;
    //return $coin1>$coin2;
    if($coin1>$coin2 ){
      echo "победа за первым";
    }elseif($coin2>$coin1){
      echo "победа за вторым";
    }elseif($coin3>$coin1 && $coin3>$coin2 || $coin3=$coin1 && $coin3=$coin2){
      echo "ничья";
    }
  }
  
}

$cat1 = new Cat();
$cat2 = new Cat();


$cat1->weight = 5;
$cat2->weight = 3;
$cat1->age = 6;
$cat2->age = 5;
$cat1->strength = 4;
$cat2->strength = 4;

echo $cat1->fight($cat2); 
//echo $result;//?"победа за первым":"победа за вторым";


?>
