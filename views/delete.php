<?php require "controllers/delete.php";?>



<?php if(isset($_SESSION["firstname"]) && !empty($_SESSION["firstname"])){
	if(!empty($liste)){
?>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      
      <th scope="col">image</th>
      <th scope="col">titre</th>
	   <th scope="col">categorie</th>
      <th scope="col">prix</th>
	   <th scope="col">retirer</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($liste as $l){?>
   <tr>
      <td><img src="images/<?= $l->image;?>" width=100 height=100 alt="..."/>
	  Image from <a href="<?= $l->link;?>"><?= $l->author;?></a>
	  </td>
      <td><?= $l->titre;?></td>
      <td><?= $l->categorie;?></td>
      <td><?= $l->prix;?></td>
      <td><a href="index.php?page=products.php&categorie=<?=trim($l->categorie);?>&titre=<?=$l->titre;?>" id="article<?=trim($l->id);?>" class="articles">retirer</a></td>
    </tr>
  <?php }?>
	  </tbody>
</table>
<?php
	}else{
		?>
		<div><p>Pas d'articles mis en locations pour le moment.</p></div>
		<?php
	}
 }else
 { 
   ?>
   <div><p>Pour retirer vos articles de la location <a href="index.php?page=login.php">identifiez-vous</a></p></div>
   <?php
 }
 ?>