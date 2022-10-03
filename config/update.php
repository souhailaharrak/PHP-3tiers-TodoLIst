<?php
    session_start();
 

    $obj = new Tasks;
    
    if(isset($_POST['submit'])) {
        // Insert Data in the Table
        $task = $_POST['task'];
        $id = $_POST['id'];
        $created_at = $updated_at = date("Y-m-d H:i:s");

        //Update
        if(!empty($id)) {
            $sql = "UPDATE `todolists` SET `task`='$task',`updated_at`='$updated_at' WHERE id=".$id;
                            
            //   die($sql);
            $res = $obj->executeQuery($sql);
            if($res) {
                $_SESSION['success'] = "Task has been update successfully";
                
            
            }
            else {
                $_SESSION['error'] = "Something went wrong, please try again later";
              

            }
        }   
        else {
            $sql ="INSERT INTO `todolists`(`task`, `created_at`, `updated_at`) 
            VALUES ('$task','$created_at','$updated_at')";
            
            $res = $obj->executeQuery($sql);
           echo $sql;
            if($res) {
                $_SESSION['success'] = "Task has been created successfully";
            }
            else {
                $_SESSION['error'] = "Something went wrong, please try again later";
            }
        }
        
        session_write_close();
     header("LOCATION:index.php");
    }

    //Get all Tasks
    $tasks = $obj->getAllTasks();

    //Get Task
    $editing = false;
    if(isset($_GET['action']) && $_GET['action']  === 'edit') {
        $taskData = $obj->getTask($_GET['id']);
        $editing = true;
    }

  