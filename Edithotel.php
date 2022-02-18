<?php 
if(!isset($_GET['id']))
	header('location:listhotel.php');
require_once'model/database.php';
$db = new database();
$rq = "SELECT `id`, `nom`, `ville`, `nbEtoile`, `description`, `image` FROM `hotel` where `id`=:id";
$hotel=$db->find($rq,array('id'=>$_GET['id']));
var_dump($hotel);
?>
<form method="POST" action="updatehotel.php">
	<input type="hidden" name="id" value="<?=$hotel['id']?>">
	Nom <input type="text" name="nom" value="<?=$hotel["nom"];?>">  </br>
	Nombre d'etoiles: <select name="nbEtoile"> nb etoile
		<?php
		for($i=1;$i<6;$i++){
		?>
		<option <?php if($i==$hotel["nbEtoile"])echo'selected';?>
		value="<?=$i;?>">
		<?php
		for($j=0;$j<$i;$j++)
			echo"*";
		?></option>
		<?php
		}
		?>
	</select>	
	</br>
	Ville<select name="ville">
		<?php
		$Rq="SELECT id, nom FROM ville";
		//$r=$connex->query($Rq);
		//$tab=$r->fetchAll();
		$tab=$db->query($Rq);
		foreach($tab as $v){
		?>
		}
		<option <?php if($hotel["ville"]==$v["id"]) echo'selected';?> value="<?=$v["id"];?> "><?=$v["nom"];?> </option>
		<?php
	 	}
		?>	
	</select>
	</br>
	Image <input type="text" name="image" value="<?=$hotel["image"];?>"></br>
	Description:<textarea name="description" rows="5" cols="50" ><?=$hotel["description"];?></textarea></br>

	<input type="submit" value="update"></br>
	<input type="reset" value="reset">
</form>
	

