<?php 
require "controllers/products.php";
?>

    <!-- boucle
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
	-->
	<?php 
	if(isset($_GET["categorie"]))
	{
	   if(isset($_GET["titre"]))
	   {
		  // echo var_dump($produit);
		  ?>
		  <h2><?= $produit->titre;?></h2>
		  <div class="row">
		    <div class="col-3"><img src="images/<?= $produit->image;?>" width=200 height=200 alt="..."/>
			<p>Image from <a href="<?= $produit->link;?>"><?= $produit->author;?></a></p>
			</div>
			<div class="col-9"><?= $produit->description;?></div>
		  </div>
		  <?php
	   }
   else
   {
	   if(!empty($liste))
	   {
	   ?>
 
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">image</th>
      <th scope="col">titre</th>
	   <th scope="col">categorie</th>
      <th scope="col">prix</th>
	   <th scope="col">détail</th>
    </tr>
  </thead>
  <tbody>
<?php
	foreach($liste as $l){
		//echo $l->titre;
		?>
	  
	  <tr>
      <th scope="row"><?= $l->id;?></th>
      <td><img src="images/<?= $l->image;?>" width=100 height=100 alt="..."/>
	  Image from <a href="<?= $l->link;?>"><?= $l->author;?></a>
	  </td>
      <td><?= $l->titre;?></td>
      <td><?= $l->categorie;?></td>
      <td><?= $l->prix;?></td>
      <td><a href="index.php?page=products.php&categorie=<?=$l->categorie;?>&titre=<?=$l->titre;?>">voir</a></td>
    </tr>
	<?php

	}?>
	  </tbody>
</table>
	<?php
	   }else{
		   ?>
		   <p>Pas de produits disponibles dans cette categorie.</p>
		   <?php
	   }
	}
	}else
	{?>
     <p>choisissez une catégorie</p>
	<?php }?>
	
