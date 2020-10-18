<?
header('Content-type: text/html; charset=utf-8');
class Cat {
  public $weight;
  public $age;
  public $asd;
  function __construct(){
    
  }
  function getWeight(){return $this->weight;}
  function getAge(){return $this->age;}
  function getAsd(){return $this->asd;}
  function fight($anotherCat){
    $count = true;
    $coin1 = 0;
    $coin2 = 0;
    $this->weight > $anotherCat->weight?$coin1++:$coin2++;
    $this->age > $anotherCat->age?$coin1++:$coin2++;
    $this->asd > $anotherCat->asd?$coin1++:$coin2++;
    return $coin1>$coin2;
  }
  
}

$cat1 = new Cat();
$cat2 = new Cat();


$cat1->weight = 5;
$cat2->weight = 4;
$cat1->age = 4;
$cat2->age = 4;
$cat1->asd = 4;
$cat2->asd = 4;

$result = $cat1->fight($cat2); 
echo $result?"победа за первым":"победа за вторым";
?>
