<?php 
    /**
     * Class constants can be useful if you need to define some constant data within a class.
     * Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
     * :: is known as  scope resolution operator
     */


     class Goodbyte{
        const LEAVING_MESSAGE = "Thank you for Visiting Kodex Limited";
     }

     echo Goodbyte::LEAVING_MESSAGE;

     echo "<br>";

     // We can access a constant from inside the class by using the self keyword folowed by ::

     class Goodbye{
        const FAREWELL = "Goodby, See you soon";
        public function byebye(){
            echo self::FAREWELL;
        }
     }

     $goodbye = new Goodbye();
     $goodbye->byebye();
?>