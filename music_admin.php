<?php
session_start();
include "dataBase.php";
$musics=$db->query("SELECT * FROM musics");
?>
<?php if ($_SESSION["login_admin_status"] !=null && $_SESSION["login_admin_status"]==true ):
    include "header_admin.php";
    ?>


    <div class="container mt-5 pt-5 " style="width: 950px;">
        <div class="admin_content">
            <h2 class="text-light">music</h2>
            <hr class="text-light">
        </div>

        <a class="btn btn-outline-success btn-lg btnPlus_position" href="add_music.php" >
            <i class="material-icons ">add</i>
        </a>

        <table class="table table-striped table-dark align-self-center" style="position: relative; left: 100px;top: 30px;margin-bottom: 100px;text-align: center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
                <th scope="col">album_id</th>
                <th scope="col">mp3</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody >
            <?php foreach ($musics as $music):  ?>

                <tr >
                    <th scope="row" >
                        <?php echo$music["id"]; ?>
                    </th>

                    <td>
                        <?php echo $music["name"];?>
                    </td>
                    <td>
                        <img src="<?php echo $music["image"];?>" class="img-fluid" width="100px">
                    </td>
                    <td>
                        <?php echo $music["album_id"];?>
                    </td>
                    <td>
                        <?php echo $music["mp3"];?>
                    </td>

                    <td>
                        <a class="btn btn-outline-secondary btn-sm" href="#">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn btn-outline-danger btn-sm" href="delete_music_admin.php?music_id=<?php echo $music["id"]; ?>">
                            <i class="material-icons">delete</i>
                        </a>

                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>



    </div>









<?php else:
    header("Location:index.php");
endif;
?>


<?php include "footer_admin.php";?>
