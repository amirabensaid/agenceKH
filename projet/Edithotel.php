<?php
if (!isset($_GET['id']))
header ('location:afficher.php');
require_once 'model/database.php';
$db=new database();
$rq="SELECT `id`, `nom`, `ville`, `nbEtoile`, `image`, description FROM `hotel`where id=:id";
$hotel=$db->find($rq,array('id'=>$_GET['id']));
//var_dump($hotel);
?>
<form method ="post"action="updatehotel.php">
    Nom:<input type="text" name="nom" value ="<?=$hotel["nom"];?>"/> <br />
   ville:<input type="select" name="nom" value ="<?=$hotel["ville"];?>"/><br />
    nbetoile:<input type="number" name="nom" value ="<?=$hotel["nbEtoile"];?>"/><br />
    image:<input type="varchar" name="nom" value ="<?=$hotel["image"];?>"/><br />
<input type="submit" value="update" ></input>
<input type="submit" value="reset"></input>
</form>
