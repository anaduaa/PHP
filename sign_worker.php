<?php
require('connect.php');
$name=$_POST['name'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$imagename=$_POST['imagename'];
$base64=$_POST['image64'];
$image=base64_decode($_POST['image64']);
$token=$_POST['mytoken'];
$Work=$_POST['Work'];
$Experiance=$_POST['Experiance'];
$Information=$_POST['Information'];
$login='';

$statment=$connection->query("INSERT INTO `re` (`name`, `pass` , `phone`, `image` , `token`) VALUES ('$name', '$pass','$phone','$imagename','$token')");

$count=$statment -> rowCount();

if($count>0){
    if($base64 != NULL){file_put_contents("upload\\" . $imagename , $image);}
    echo json_encode(array("statuse"=>"sucsses add"));}
?>