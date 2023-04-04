<?php
    $path = "upgambar/";
    if(isset($_POST["uploadfile"])){
        if($_FILES["flgambar"]["error"]==0){
            $flname =$path . bassename($_FILES["flgambar"]["name"]);
            move_uploaded_file($_FILES["flGAMBAR"]["tmp_name"], $flname);

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Data</title>
</head>
<body>

<form action="latihan03.php"method="POST" enctype="multipart/form-data">

   <div>
      upload gambar
       <input type="file" name="flGAMBAR">
   </div>

 <div>
   <input type="hidden"name="uploadfile"value="OK">    
   <bultton type="sumbit">upload gambar</button>
 </div>

 </form>


</body>
</html>