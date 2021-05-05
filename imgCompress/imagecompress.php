<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="image_compress";

$conn = new mysqli($servername, $username, $password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 


?>


<html>
<head>
<style>
body{
    background:yellow;
}
.container{
    width:1200px;
    height:100%;
    margin:auto;
    background:white;
}
.resizeImage{
text-align:center;
display:flex;
flex-direction:row;
flex-wrap:wrap;
justify-content:center;
align-items:center;
padding-top:10vh;
}

.uploadText{
    font-size:22px;
    font-family:Arial;
    text-align:center;
    padding-top:10vh;


}
.imageWidth{
margin-right:5px;
border-radius:5px;
border:1px solid black;
height:20px;

}
.imageHeight{
    border-radius:5px;
    margin-left:5px;
    border:1px solid black;
    height:20px;
}

.submit{
    margin-left:5px;
    
}

</style>
</head>
<body>

<div class="container">
<h2 class="uploadText">Пожалуйста, выберите файл с диска</h2>
<div class="resizeImage">
<form method="POST" action="upload.php" enctype="multipart/form-data">
<input type="file" id="img" name="file">
<!-- 
<input type="text" class="imageWidth" name="width" placeholder="ширина">
<input type="text" class="imageHeight" name="height" placeholder="высота"> -->
<input type="submit" class="submit" name="submit">
</form>
</div>


</div>


</body>


