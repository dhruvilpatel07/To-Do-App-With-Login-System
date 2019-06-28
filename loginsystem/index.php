<?php
  include_once 'header.php';
?>
    <section class="main-container">
      <div class="main-wrapper">
        <h2>Home</h2>

          <?php
            if(isset($_SESSION['u_id'])){
              //echo "Welcome $_SESSION['u_uid']";
              echo '<h1>';
              echo "Welcome Home, ";
              echo '<u>';
              echo $_SESSION['u_first'];
              echo '</u>';
              echo '</h1>';
              echo '<div class="task-wrapper">';
                include 'add_task.php';
              echo '</div>';
            }
            else{
              //include 'add_task.php';
            }
           ?>

      </div>
    </section>


<?php
  include_once 'header.php';
?>
