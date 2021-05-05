<?php
move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$_FILES['file']['name']);
$orgfile='uploads/'.$_FILES['file']['name'];
list($width,$height)=getimagesize($orgfile);
$newfile=imagecreatefromjpeg($orgfile);
$thumb='uploads/resized'.$_FILES['file']['name'];
$truecolor=imagecreatetruecolor('300','200');
imagecopyresampled($truecolor,$newfile,0,0,0,0,'300','200',$width,$height);
imagejpeg($truecolor,$thumb,100);
echo '<img src="'.$thumb.'">';
unlink($orgfile);

?>