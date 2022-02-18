
<table border=1 width=50%>
<tr>
    <th> id</th>
    <th>nom</th>
    <th>nbEtoile</th>
    <th>description</th>
    <th>image</th>
    <th>editeur</th>
   <th>supprimer</th>
   
</tr>
<?php
require_once 'model/database.php';
//$connex = new PDO ("mysql:host=localhost:3306;dbname=agencekh","root","0000");
$rq="SELECT `id`, `nom`, `ville`, `nbEtoile`, `image`, description FROM `hotel`";
$db=new database();
$hotels=$db->query($rq);
foreach($hotels as $v)

{?>

<tr>
<td><?=$v["id"];?></td>
		<td><?=$v['nom'];?></td>
		<td><?=$v["ville"];?></td>
		<td><?=$v['nbEtoile'];?></td>
		<td><?=$v["id"];?></td>
        <td><?=$v['description'];?></td>
        <td><img width="100" src="images/<?=$v["image"];?>"/></td>
		<td><a href='delthotel.php?id=<?=$v["id"];?>'>delete</a></td>
		<td><a href='edithotel.php?id=<?=$v["id"];?>'>modifier</a></td>
        </tr>
<?php
} 
?>
</tr>
</table>
