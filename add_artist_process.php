<?php
include "dataBase.php";
session_start();



if (isset($_POST["name"])) {

    $name=$_POST["name"];

    if ($_FILES["image"]["size"]>50000000)
    {
        echo "فایل خیلی بزرگ است";
        header("Location:add_artist.php");
    }else{

//        step one

        $image="image/artists/" . $_FILES["image"]["name"];

        //     image/artists/1.jpg

        $db->query("INSERT INTO artists(name,image) VALUES('$name','$image')");
move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:artist_admin.php");
    }


}






?>
