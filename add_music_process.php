<?php
include "dataBase.php";
session_start();


if (isset($_POST["name"]) && isset($_POST["album_id"]) ) {
echo "step one" ;
    $name=$_POST["name"];
    $album_id=$_POST["album_id"];




    if ($_FILES["image"]["size"]>5000000000 || $_FILES["mp3"]["size"]>5000000000)
    {
        echo "step two" ;
        echo "فایل خیلی بزرگ است";
        header("Location:add_music.php");
    }else{

//        step one

        $image="image/musics/" . $_FILES["image"]["name"];
        $mp3="mp3/" . $_FILES["mp3"]["name"];
        //     image/musics/1.jpg
        //    mp3/1.mp3


        $db->query("INSERT INTO musics(name,image,album_id,mp3) VALUES('$name','$image','$album_id','$mp3')");

        move_uploaded_file($_FILES["mp3"]["tmp_name"],$mp3);
        move_uploaded_file($_FILES["image"]["tmp_name"],$image);
        header("Location:music_admin.php");
    }





}


?>
