<?php
    class Connection {

        private static $db;
        private $current;

        private function __construct($host, $user, $pwd)
        {
            $this->current = new PDO('mysql:host='.$host.';charset=utf8', $user, $pwd);
            $this->current->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public static function getConnection($host, $user, $pwd)
        {
            if (self::$db == null) {
                self::$db = new Connection($host, $user, $pwd);
            }
            return self::$db->current;
        }
    }
?>