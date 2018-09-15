<?php
    session_start();

	 include"menu.php";
	 include"Style/import-style.php";
?>

<div class="container mt-5">
	<form action="login_process.php" method="POST">

		<div class="form-group">
 	    	<p> Username:</p>
         	<input type="email" class="form-control"  placeholder="Username" name="username">

      	</div>
		<div>  
			<p>Password:</p>
         	<input type="password" class="form-control"  placeholder="Password" name="password">
 		</div>
 		<button type="submit" class="btn btn-primary mt-3">Submit</button>
 		<br>
	</form>

    <?php if(isset($_SESSION['login_error']) && $_SESSION['login_error'] == true) { ?>

        <div class="alert alert-danger">
            Invalid username or password
        </div>

    <?php } ?>
</div>
 