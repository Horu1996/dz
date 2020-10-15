<?
header('Content-type: text/html; charset=utf-8');
abstract class Animal{
  public $nickname;
  public $age;
  private $breed;
  function __construct($nick,$age,$breed){
    $this->nickname = $nick;
    $this->age = $age;
    $this->breed = $breed;
  }
  function getNickname(){return $this->nickname;}
  function getAge(){return $this->age;}
  function getBreed(){return $this->breed;}
  function speak(){
    echo ' ...';
  }
}

class Horse extends Animal{
  function run(){
    echo $this->getNickname()." Игого, я поскакал".'<br>';
  }
  function speak(){
    echo ' мяу';
  }
}

class Pegasus extends Animal{
  function fly(){
    echo $this->getNickname()." Игого, я полетел";
  }
  function speak(){
    echo ' чирик чирик';
  }
}



$barsik = new Horse("Барсик",4,null);
$kesha = new Pegasus("Кеша",5,null);
$barsik->run(); 
$kesha->fly(); 
?>
