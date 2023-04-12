<?php 
    /*
        A class is a template for objects and an object is an instance of a class
    
    */

    class Fruit{
        // Properties
        public $name;
        public $color;


        // Methods
        function insert_your_name($name){
            $this->name = $name;
        }

        function retrieve_your_name(){
            return $this->name;
        }
    }

    // Created a new object / instantiated the class
    $apple = new Fruit();
    $banana = new Fruit();

    $apple->insert_your_name('Applepie');
    $banana->insert_your_name('Bananapie');

    echo $apple->retrieve_your_name();
    echo "<br>";
    echo $banana->retrieve_your_name();
?>