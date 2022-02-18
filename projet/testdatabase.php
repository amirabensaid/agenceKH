<?php

require_once "model/database.php";
$db = new database();
$rq = "select id,nom,description from hotel";
$hotel = $db->query($rq);
echo '<pre>';
print_r($hotel);
echo '<pre>';
