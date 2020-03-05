<?php require "controllers/register.php";?>

<?php if(!empty($message)){ ?>
<div class="alert alert-warning <?= $alert;?> fade show" role="alert">
  <?= $message;?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }?>
<h2>BECOME A MEMBER</h2>
<form action="index.php?page=register.php" method="post">
 <div class="form-group row py-5">
   <div class="row bg-light pb-3">
   
   <div class="col-6">
   <label for="inputFirstName3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="firstname" id="inputFirstName3" placeholder="FirstName">
    </div>
	</div>
	
	  <div class="col-6">
	 <label for="inputLastName3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lastname" id="inputLastName3" placeholder="LastName">
    </div>
	 </div>
	
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
	
	   <div class="col-6">
    <label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="adresse" id="inputAddress3" placeholder="Address">
    </div>
	 </div>
	
	   <div class="col-6">
	<label for="inputCity3" class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ville" id="inputCity3" placeholder="City">
    </div>
	 </div>
	
	   <div class="col-6">
	 <label for="inputZip3" class="col-sm-2 col-form-label">Zip</label>
    <div class="col-sm-10">
      <input type="integer" class="form-control" name="zip" id="inputZip3" placeholder="Zip code">
    </div>
	 </div>
	<div class="col-6"></div>
	
	   <div class="col-12 mx-auto">
	  <label for="inputState">State</label>
      <select id="inputState" name="pays" class="form-control">
        <option selected>Choose...</option>
        <option>China</option>
		 <option>England</option>
		 <option>France</option>
		  <option>Japan</option>
		   <option>Italy</option>
		    <option>United States</option>
      </select>
	  </div>
	   
		
		 
		<button type="submit" class="btn btn-primary mx-auto mt-5">Register</button>
		 
	  </div>
  </div> 
</form>