<?php



class CoreArt
{
    public $dbh; // handle of the db connexion
    private static $instance;

    private function __construct()
    {
        // building data source name from config
        $dsn = 'mysql:host=' . Config::read('db.host_art') .
               ';dbname='    . Config::read('db.basename_art') .
               ';port='      . Config::read('db.port_art') .
               ';connect_timeout=15;charset=utf8';
        // getting DB user from config                
        $user = Config::read('db.user_art');
        // getting DB password from config                
        $password = Config::read('db.password_art');

        $this->dbh = new PDO($dsn, $user, $password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }

    public static function getInstance()
    {
        if (!isset(self::$instance))
        {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

    // others global functions
}
