<?php









class CoreExt
{
    public $dbh; // handle of the db connexion
    private static $instance;

    private function __construct()
    {
        // building data source name from config
        $dsn = 'mysql:host=' . Config::read('db.host_ext') .
               ';dbname='    . Config::read('db.basename_ext') .
               ';port='      . Config::read('db.port_ext') .
               ';connect_timeout=15';
        // getting DB user from config                
        $user = Config::read('db.user_ext');
        // getting DB password from config                
        $password = Config::read('db.password_ext');

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





?>