<?php

    class delete extends config {

        private $id;

        public function __construct($id)
        {
            $this->id = $id;
        }

        public function deleteTask() {

            $conn = $this->conn();
            $sql = "DELETE FROM todolist WHERE id='$this->id'" or die($conn->error);
            $data = $conn->prepare($sql);
            if($data->execute()){
                return true;
            } else{
                return false;
            }
        }
    }
?>