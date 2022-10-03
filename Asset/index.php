<?php

include('../config/database.php');
include('../config/task.php');
include('../config/update.php');
include('../config/delet.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../Asset/css/style.css">
  <title>TODo List</title>
</head>

<body>

  <!--Step 1: Basic structure of Todo List-->
  <div class="container">
    <!--Step 2: Create input place and button-->
    <div id="newtask">
      <form action="index.php" method="post" id="taskform">
        <h3>Todo List Project</h3>
        <input type="hidden" name="id" value="<?php if ($editing) {
                                                echo $taskData['id'];} ?>">
        <input type="text" name="task" id="task" placeholder="Task to be done..." value="<?php if ($editing) { echo $taskData['task']; } ?>" />
                                                                                           
        <button type="submit" name="submit" id="add"><?php if ($editing) {echo "Update"; } else {  echo "Add";  } ?></button>  
                                                                                              
      </form>
    </div>

    <div id="tasks">
      <?php
      if (!empty($tasks)) {
        foreach ($tasks as $t) {
      ?>
          <div class="task">
            <span><?php echo $t['task'] ?></span>
            <a href="index.php?action=edit&id=<?php echo $t['id'] ?>" class="edit button"><i class="fa fa-edit"></i></a>
            <a onclick="return confirm('Do you want to delete this record?')" href="index.php?action=delete&id=<?php echo $t['id'] ?>" class="delete button"><i class="fa fa-trash-alt"></i></a>
          </div>
      <?php }
      } ?>
    </div>
  </div>

  <script src="../Asset/js.js"></script>
</body>

</html>