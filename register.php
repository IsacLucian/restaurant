<?php include 'menu.php' ?>

<div class="container">
	<form>
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
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>