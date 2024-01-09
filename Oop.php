<?php 

    class Animal {

        private $name;
        private $age;
        private $email;

        public function  __construct ($name, $age, $email){
            $this-> name = $name;
            $this->age = $age;  
            $this->email = $email;  
        }

        public function getName(){
           return  $this->name ;
        }

        public function getAge(){
            return $this->age ;
        }
        public function getEmail(){
           return $this->email ;
        }

    }

    $animal = new Animal("tiger", 12, "tiger@gmail.com");
   
    echo $animal-> getName();
    echo $animal->  getAge();
    echo $animal-> getEmail();
?>



<?php 

//interface 

    interface Human {

        public function run();
    }


     class  Dog  implements Human{


        public function run(){

            echo "dog is running";
        }
    }


    class Fish implements Human {

        public function run(){
            echo "fish is swimming";
        }
    }

    function app(Human $obj){
        $obj -> run();
    }

    app(new Dog);
    app (new Fish);


?>


<?php


    abstract class Data{

        protected $data;

        public function __construct($data){

            $this->data = $data;
        }
        public abstract function run();

        public function running(){
            echo "guys i'm running";
        }

    }

    class Marine extends Data{

        private $name;

        public function __construct($data, $name){

            parent::__construct($data);
            $this->name = $name;    
            
        }
        public function run(){
            echo "I'm running";
        }

    
        public function naming(){
            echo "$this->data has too many $this->name";
        }
    }

    $namae = new Marine ("IO files", "forking");

    $namae->run();
    $namae -> running();
    $namae -> naming();

?>