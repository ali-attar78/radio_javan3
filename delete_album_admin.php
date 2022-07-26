<?php
include "dataBase.php";
$album_id=$_GET["album_id"];

$db->query("DELETE FROM albums WHERE id=$album_id");
header("Location:album_admin.php");


?>