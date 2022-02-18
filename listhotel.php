<html>
<?php
	if (isset($_GET["message"]))
		echo"<h1>".$_GET['message']."</h1>";
?>
<table border ="1" width ="100%">
<tr>
	<th> id </th>
	<th> nom </th>
	<th> ville	</th>
	<th>nbetoil </th>
	<th> image</th>
	<th> action</th>
</tr>
<?php
$connex = new PDO ("mysql:host=localhost:3307;dbname=agencekh","root","");
$r=$connex->query("SELECT `id`, `nom`, `ville`, `nbEtoile`, `image` FROM `hotel`");
$tab=$r->fetchAll();
foreach ($tab as $v)
{?>
	<tr>
		<td><?=$v["id"];?></td>
		<td><?=$v['nom'];?></td>
		<td><?=$v["ville"];?></td>
		<td><?php for ($i=0;$i<$v["nbEtoile"];$i++) echo "*";?></td>
		<td><img width="100" src="images/<?=$v["image"];?>"/></td>
		<td><a href='delthotel.php?id=<?=$v["id"];?>'>delete</a></td>
		<td><a href='updhotel.php?id=<?=$v["id"];?>'>update</a></td>
	</tr>	
<?php
}
?>
</table>
</html>