<?php
include "dataBase.php";
session_start();



if (isset($_POST["name"]) && isset($_POST["artists_id"])) {

    $name=$_POST["name"];
    $artists_id=$_POST["artists_id"];




    if ($_FILES["image"]["size"]>50000000)
    {
        echo "فایل خیلی بزرگ است";
        header("Location:add_album.php");
    }else{

//        step one

        $image="image/albums/" . $_FILES["image"]["name"];

        //     image/albums/1.jpg

        $db->query("INSERT INTO albums(name,image,artists_id) VALUES('$name','$image','$artists_id')");
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:album_admin.php");
    }






}



?>
