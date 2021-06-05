<?php
    
    function crud(){

        insert();
        delete();
        update();
    }

    function view(){

        $view = new view();
        $view->viewTask();
        $view->viewCompletedTask();
    }

    function insert(){

        if(!empty($_GET['items'])){

            $insert = new insert($_GET['items']);
      
            if($insert->insertTask()){
              
                $_SESSION['message'] = "Task added successfully!";
                $_SESSION['msg_type'] = 'success';

            } else {
              
                $_SESSION['message'] = "Task not added!";
                $_SESSION['msg_type'] = 'warning';

            }
        }
    }

    function delete(){

        if(isset($_GET['delete'])){

            $delete = new delete($_GET['delete']);

            if($delete->deleteTask()){

                $_SESSION['message'] = "Task deleted successfully!";
                $_SESSION['msg_type'] = 'danger';

            } else{

                $_SESSION['message'] = "Action not completed";
                $_SESSION['msg_type'] = 'warning';

            }
        }
    }

    function update(){

        if(!empty($_GET['update'])){

            $update = new update($_GET['update']);

            if($update->updateTask()){

                $_SESSION['message'] = "Task marked completed!";
                $_SESSION['msg_type'] = 'info';

            } else {

                $_SESSION['message'] = "Error marking task";
                $_SESSION['msg_type'] = 'warning';
            }
        }

    }
?>