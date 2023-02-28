<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Upload de fichier</title>
    </head>
    <body>
        <form action="index.php" method="POST" entype="multipart/form-data" >
            <input type="file" name="upload_file"/><br/>
            <input type="submit" name="submit"/><br/>
        </form>
    </body>
</html>

<?php
// echo "bf if(isset)";
if(isset($_POST['submit'])){
    $maxSize = 50000;
    // echo "in post if";
    if($_FILES['uploaded_file']['error'] > 0){
        echo "erreur survenue lors du transfert";
        die;
    }

    $fileSize = $_FILES['upload_file']['size'];
    echo $fileSize; 
    // var_dump($_FILES);
}

?>
