<?php 
    class Chelsea{
        // Static Methods must have the static keyword
        public static function winners(){
            echo "We da best!";
        }
    }

    // Class name followed by the Scope Resolution Operator
    Chelsea::winners();

    // More on Static Methods
    class Greeting{
        public static function welcome(){
            echo "Hello World";
        }

        public function __construct()
        {
            self::welcome();
        }
    }
    
    new Greeting();
?>