<?php
#send network ........ point 2

header("content-Type: text/html; charset=UTF-8");

#declare constants 
define("IMAGES_FOLDER", "images/");
define("PICTURE_MOTO", IMAGES_FOLDER ."ducaty.jpg");
define("PICTURE_MOTO_2","images/ducaty_2.jpg");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo PICTURE_MOTO ?>" alt="">
    <img src="<?php echo PICTURE_MOTO_2 ?>" alt="">
</body>
</html>