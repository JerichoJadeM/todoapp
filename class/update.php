<?php

    class update extends config {
         
        private $id;

        public function __construct($id)
        {
            $this->id = $id;
        }

        public function updateTask(){

            $conn = $this->conn();
            $sql = "UPDATE `todolist` SET `date_completed`=NOW(), `stats`='COMPLETE' WHERE id=$this->id" or die($conn->error);
            $data = $conn->prepare($sql);
            if($data->execute()){
                return true;
            } else {
                return false;
            }
        }
    }
?>