<?php

    class config{

        private $username = 'root';
        private $password = '';
        public $pdo;

        public function conn(){
            try {
                
                $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=todoapp', $this->username, $this->password);
            
            } catch (PDOException $e) {
            
                die($e->getMessage());
            
            }

            return $this->pdo;
        }
    }
?>