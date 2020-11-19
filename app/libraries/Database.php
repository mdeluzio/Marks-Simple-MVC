<?php
    /*
     * PDO Database Class
     * Connect to Database
     * Create Prepared Statements
     * Bind Values
     * Return Rows and Results
    */
    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbName = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            // Set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            // Create PDO Instance
            try{

            } catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
        
    }