<?php include 'menu.php' ?>

<<<<<<< HEAD
<div class="container mt-5">

	<form action="create_user.php" method="POST">

=======
<div class="container">
	<form action = "create_user.php" method = "post">
>>>>>>> 1018418ca7724e1c60681ea468dba9ed5f2d94e1
	  <div class="form-group">
		<label> Name </label>
	  	<input type="text" class="form-control" name="name" id="name" placeholder="Enter full name">
	  </div>
	  <div class="form-group">
		<label> Phone number </label>
	  	<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
<<<<<<< HEAD
	    <input type="email" class="form-control" name="email" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
=======
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name = "email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "pass">
>>>>>>> 1018418ca7724e1c60681ea468dba9ed5f2d94e1
	  </div>
	  <input type="submit" class="btn btn-primary" value="Submit">

	</form>

</div>