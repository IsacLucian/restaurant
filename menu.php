<?php include 'Style/import-style.php'; ?>
<style>
  <?php include 'Style/style.css'; ?>
</style>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Restaurant</a>    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav justify-content-end">

          <?php if (! isset($_SESSION['logged_user_name'])) : ?>

            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          <?php else: ?>

              <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
              </li>

          <?php endif; ?>
      </ul>
    </div>
  </nav> 
  </div>