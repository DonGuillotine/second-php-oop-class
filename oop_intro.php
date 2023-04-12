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

        function set_color($color){
            $this->color = $color;
        }

        function get_color(){
            return $this->color;
        }
    }

    // Created a new object / instantiated the class
    $apple = new Fruit();
    $banana = new Fruit();

    $green = new Fruit();
    $yellow = new Fruit();

    $apple->insert_your_name('Applepie');
    $banana->insert_your_name('Bananapie');

    $green->set_color("Green");
    $yellow->set_color("Yellow");

    echo $apple->retrieve_your_name();
    echo "<br>";
    echo $banana->retrieve_your_name();

    echo "<br>";

    echo $green->get_color();
    echo "<br>";
    echo $yellow->get_color();


    // You can change a property value outside the class

    class Money{
        public  $pounds;
    }

    $get_money = new Money();
    $get_money->pounds = "Naira";

    echo "<br>";
    echo $get_money->pounds;
?>