<?php
if (!defined('CONST_INCLUDE'))
    die('Direct access prohibited !');

class DBConnection {
    public static $db;

    /**
	 * Init the connection to the db
	 */
    public static function initDBConnection() {
            try {
                $host = "localhost";
                $dbname = "cookingfordummiesdb";
                $username = "simane";
                $password = "simane";
                self::$db = new PDO("mysql:host=$host; dbname=$dbname", "$username", "$password");
            } catch(PDOException $e) {
                die ('DB connection failed !');
            }
    }
}
?>