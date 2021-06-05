<?php

    class insert extends config {
        private $task;

        public function __construct($task)
        {
            $this->task = $task;
        }

        public function insertTask(){

            $conn = $this->conn();
            $sql = "INSERT INTO `todolist` (`item`) VALUES ('$this->task')";
            $data = $conn->prepare($sql);
            
            if($data->execute()){
                return true;
            } else {
                return false;
            }
        }
    }
?>