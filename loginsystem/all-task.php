<?php
session_start();
include 'includes/dbh.inc.php';
$user_id_task = $_SESSION['u_id'];
$sql = "SELECT user_task.task_id, user_task.user_task_a FROM user_task, users WHERE user_task.user_id = $user_id_task AND users.user_id = $user_id_task";
$result = mysqli_query($conn, $sql);
//$resultCheck = mysqli_num_rows($result);
  if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
      echo '<div class="load_task">';
        echo '<i id="remove" class=\'fas fa-times\'></i>';
        echo '<h4>';
          echo $row['task_id'];
        echo '</h4>';
        echo '<h3>';
          echo $row['user_task_a'];
        echo '</h3>';
      echo '</div>';
    }
  }else{
    echo "No tasks added yet";
  }
?>
