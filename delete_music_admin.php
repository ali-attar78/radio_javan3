<?php
include "dataBase.php";
$music_id=$_GET["music_id"];

$db->query("DELETE FROM musics WHERE id=$music_id");

header("Location:music_admin.php");


?>