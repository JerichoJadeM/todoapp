<?php

    class view extends config {

        //function to view pending task on the table
        public function viewTask(){

            $conn = $this->conn();
            $sql = "SELECT * FROM todolist WHERE stats='PENDING' " or die($conn->error);
            $data = $conn->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            
            //Formatting table
            echo "<h2>Pending Task</h2>";
            echo "<table class='table table-striped table-dark table-sm'>";
            echo "<tr><th>Tasks</th><th>Action</th></tr>";

            //table body
            foreach($result as $data){
                echo "<tr>";
                echo "<td>$data[item]</td>";
                echo "<td><a class='btn btn-primary btn-sm' href='index.php?update=$data[id]'>Mark as Completed</a><a class='btn btn-danger btn-sm' href='index.php?delete=$data[id]'>Delete</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        }

        //function to view completed task on the table
        public function viewCompletedTask(){

            $conn = $this->conn();
            $sql = "SELECT * FROM todolist WHERE stats='COMPLETE' " or die($conn->error);
            $data = $conn->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            
            //Formatting table
            echo "<h2 class='mt-4'>Completed Task</h2>";
            echo "<table class='table table-striped table-dark table-sm'>";
            echo "<tr><th>Tasks</th><th>Date Finished</th></tr>";

            //table body
            foreach($result as $data){
                echo "<tr>";
                echo "<td>$data[item]</td>";
                echo "<td>$data[date_completed]</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }
?>