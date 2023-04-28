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

// When a child class is inheriting from a parent class. The public or protected static method can be accessed with the "parent" keyword then "::"
    class Domain{
        protected static function getWebsiteName(){
            return "kodex.com";
        }
    }

    class DomainKodex extends Domain{
        public $websiteName;

        public function __construct()
        {
            $this->websiteName = parent::getWebsiteName();
        }
    }

    $domainKodex = new DomainKodex;
    echo $domainKodex->websiteName;
?>