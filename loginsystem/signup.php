<?php
  include_once 'header.php';
?>
    <section class="main-container">
      <div class="main-wrapper">
        <h2>Sign Up</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="post">
          <input type="text" name="first" placeholder="First Name">
          <input type="text" name="last" placeholder="Last Name">
          <input type="text" name="email" placeholder="E-mail">
          <input type="text" name="uid" placeholder="User Name">
          <input type="Password" name="pwd" placeholder="Password">
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>
    </section>

<?php
  include_once 'header.php';
?>
