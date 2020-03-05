<?php require "controllers/login.php";?>
<?php if(!empty($message)){ ?>
<div class="alert alert-warning <?= $alert;?> fade show" role="alert">
  <?= $message;?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }?>
<h2>LOGIN</h2>
<form action="index.php?page=login.php" method="post">
 <div class="form-group row py-5">
   <div class="row bg-light pb-3">
      <div class="col-6">
	 <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="inputEmail3" placeholder="Email">
    </div>
	 </div>
	
	   <div class="col-6">
	<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
    </div>
	 </div>
	 
	 	<button type="submit" class="btn btn-primary mx-auto mt-5">Sign in</button>
		
	  </div>
</div> 
</form>