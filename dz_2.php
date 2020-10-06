<?
header('Content-Type: text/html; charset=utf-8');
class Person{
  private $name;
  private $lastname;
  private $age;
  private $father;
  private $mother;
  function __construct($name,$lastname,$age,$father=null,$mother=null){
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }
	public function getName(){return $this->name;}
	public function getLastname(){return $this->lastname;}
	public function getAge(){return $this->age;}
	public function getMother(){return $this->mother;}
	public function getFather(){return $this->father;}
	public function getInfo(){
	  return "
	    Меня зовут: ".$this->name."<br>
	    Мою маму зовут: ".$this->mother->name."<br>
	    А моего папу зовут: ".$this->getFather()->getName()."<br>
	    Бабушку по маме зовут: ".$this->mother->mother->name."<br>
	    Дедушку по маме зовут: ".$this->mother->father->name."<br>
	    Бабушку по папе зовут: ".$this->father->mother->name."<br>
	    Дедушку по папе зовут: ".$this->father->father->name;
	}
}
$boris = new Person("Борис","Петров",81);
$masha = new Person("Маша","Петрова",81);

$vova = new Person("Вова","Иванов",80);
$nina = new Person("Нина","Иванова",80);

$oleg = new Person("Олег","Петров",41,$boris,$masha);
$olga = new Person("Ольга","Петрова",41,$vova,$nina);

$igor = new Person("Игорь","Петров",12,$oleg,$olga);
echo $igor->getInfo();
?>
