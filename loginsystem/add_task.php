<div class="add_t">
  <form action="includes/add_showtask.inc.php" method="post">
    <textarea name="task_area" rows="10" ></textarea>
    <button type="submit" name="submit_task">Add Task</button>

  </form>
  <button id="show_all_task">Show All Tasks</button>
</div>

<div class="load_task_div">
  <h1>YOUR TASKS:</h1>
  <div class="load_new_task">

<?php
include 'includes/dbh.inc.php';
$user_id_task = $_SESSION['u_id'];
$sql = "SELECT  user_task.task_id, user_task.user_task_a FROM user_task, users WHERE user_task.user_id = $user_id_task AND users.user_id = $user_id_task LIMIT 2";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if(isset($_SESSION['u_id'])){
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
}
?>
  </div>
</div>
<button id="load_more_task">Load More Task</button>

<script type="text/javascript">
//script to load more content 2 by 2
  $(document).ready(function(){
    var taskCount = 2;
    $("#show_all_task").click(function(){
      $(".load_new_task").load("all-task.php");
    });

    $("#load_more_task").click(function(){
      taskCount = taskCount + 2;
      $(".load_new_task").load("load-task.php",{
            taskNewCount : taskCount
        });
    });

  });

</script>
