<?
 header('Content-type: text/html; charset=utf-8');
 class Person {
   protected $name;
   protected $lastname;
   protected $age;
   protected $mother;
   protected $father;
   function __construct($name, $lastname, $age,$mother,$father){
     $this->name = $name;
     $this->lastname=$lastname;
     $this->age = $age;
     $this->mother = $mother;
     $this->father = $father;
   }
   function sayHi($name){
     echo $this->name." говорит 'Привет $name'<br>";
   }
   function setAge($age){
     if($this->age<$age)
       $this->age = $age;
   }
   function getName(){return $this->name;}
   function getLastname(){return $this->lastname;}
   function getAge(){return $this->age;}
   function getMother(){return $this->mother;}
   function getFather(){return $this->father;}
 }
 $valera=new Person("Валера","Иванов",70);
 $tilda =new Person("Тильда","Иванова",67);
 $ann  = new Person("Анна","Трифонова",73);
 $vadim= new Person("Вадим","Трифонов",75);
 $igor = new Person("Игорь","Иванов",44,$tilda,$valera);
 $jula = new Person("Юля","Иванова", 42,$ann,$vadim);
 $oleg = new Person("Олег","Иванов",19,$jula,$igor);
 $olga = new Person("Ольга","Иванова",14,$jula,$igor);
 echo "Имя: ".$oleg->getName()."<br>
       Фамилия: ".$oleg->getLastname()."<br>
       Возраст: ".$oleg->getAge()."<br>
       Мать: ".$oleg->getMother()->getName()."<br>
       Отец: ".$oleg->getFather()->getName()."<hr>
       Имя: ".$olga->getName()."<br>
       Фамилия: ".$olga->getLastname()."<br>
       Возраст: ".$olga->getAge()."<br>
       Мать: ".$olga->getMother()->getName()."<br>
       Отец: ".$olga->getFather()->getName()."<hr>
       Фамилия И.О.: ".$jula->getLastname().' '
       .mb_substr($jula->getName(), 0, 1).'. '
       .mb_substr($jula->getFather()->getName(), 0, 1).".<br>
       Возраст: ".$jula->getAge()."<hr>";
 
 
