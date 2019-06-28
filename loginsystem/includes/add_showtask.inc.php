<?php
session_start();
if(isset($_POST['submit_task'])){
  include 'dbh.inc.php';
  $task = mysqli_real_escape_string($conn,$_POST['task_area']);
  $user_id_task = $_SESSION['u_id'];
  $user_name_task = $_SESSION['u_first'];
  if(empty($task)){
    header("Location: ../index.php?task_area_empty");
    exit();
  }else{
    $sql = "INSERT INTO user_task(user_id,user_name,user_task_a) VALUES ( $user_id_task, '$user_name_task', '$task');";
    mysqli_query($conn, $sql);
    header("Location: ../index.php?task_added");
    exit();
  }
}else{
  header("Location: ../index.php?error");
  exit();
}
