<?php
	 include"menu.php";
	 include"Style/import-style.php";
?>

<div class="container">
	<form action="../create.php" method="POST">
		<div class="form-group">
 	    	<p> Username:</p>
         	<input type="text" class="form-control"  placeholder="Username" name="username">	
      	</div>
		<div>  
			<p>Password:</p>
         	<input type="password" class="form-control"  placeholder="Password" name="password">
 		</div>
 		<button type="submit" class="btn btn-primary">Submit</button>	
 		<br>
	</form>
</div>
 