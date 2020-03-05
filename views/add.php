<?php require "controllers/add.php"; ?>
<?php if(!empty($message)){ ?>
<div class="alert alert-warning <?= $alert;?> fade show" role="alert">
  <?= $message;?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }?>
<h2>PROPOSER VOTRE BIEN EN LOCATION</h2>
<form action="index.php?page=add.php" method="post">
 <div class="form-group row py-5">
   <div class="row bg-light pb-3">
   
   <div class="col-12">
   <label for="inputTitle3" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="titre" id="inputTitle3" placeholder="FirstName">
    </div>
	</div>
	
	  <div class="col-12">
	 <label for="inputDescription3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
	 <textarea class="form-control" name="description" id="inputDescription3"></textarea>
  
    </div>
	 </div>
	
	   <div class="col-12">
	 <label for="inputPrice3" class="col-sm-2 col-form-label">Prix de la location</label>
    <div class="col-sm-10">
         <input type="integer" class="form-control" name="prix" id="inputPrice3">
    </div>
	 </div>
	
	   
	  
	
	
	   <div class="col-12 mx-auto">
	  <label for="inputState">Categorie</label>
      <select id="inputState" name="categorie" class="form-control">
        <option selected>Choose...</option>
        <option>film</option>
		 <option>mobilier</option>
		 <option>livre</option>
		  <option>instrument</option>
		   <option>hightech</option>
		    <option>sport</option>
      </select>
	  </div>
	   
		
		 
		<button type="submit" class="btn btn-primary mx-auto mt-5">Poster</button>
		 
	  </div>
  </div> 
</form>