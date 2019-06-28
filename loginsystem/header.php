<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style4.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" charset="utf-8"></script>
    <title></title>
  </head>
  <body>
    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li> <a href="index.php">Home</a> </li>
          </ul>
          <div class="nav-login">
            <?php
              if(isset($_SESSION['u_id'])){
                echo '<form class="" action="includes/logout.inc.php" method="post">
                        <button type="submit" name="submit">Logout</button>
                      </form>';
              }else{
                echo '<form action="includes/login.inc.php" method="post">
                          <input type="text" name="uid" placeholder="Username/e-mail">
                          <input type="password" name="pwd" placeholder="Password">
                          <button type="submit" name="submit">Login</button>
                      </form>
                      <a href="signup.php">Sign up</a>';
              }
             ?>
          </div>
        </div>
      </nav>
    </header>
