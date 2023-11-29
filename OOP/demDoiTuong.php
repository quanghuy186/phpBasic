<?php
class app{
    private static $conn;
    private function __construct()
    {
        
    }

    public static function main() { 
        if(self::$conn === null) {
            self::$conn = new app();
        }
        return self::$conn;
    }
}
$app1 = app::main();
// $app2 = new app();