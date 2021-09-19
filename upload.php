<?php


if (($_FILES['fileToUpload']['name']!="")){
// Where the file is going to be stored
 
//change path below
$path = "C:\Users\Administrator\Desktop\Others\upload/";
//$path = "C:\upload/";

$total=count($_FILES['fileToUpload']['tmp_name']);
 
// Check if file already exists
for( $i=0 ; $i < $total ; $i++ ) {
$temp_name = $_FILES['fileToUpload']['tmp_name'][$i];

if (file_exists($path.$_FILES['fileToUpload']['name'][$i])) {
 echo nl2br(" \n Sorry, file  \"".$_FILES['fileToUpload']['name'][$i]."\"  already exists.");
 }else if (move_uploaded_file($temp_name,$path.$_FILES['fileToUpload']['name'][$i])){
 echo nl2br(" \n File \"".$_FILES['fileToUpload']['name'][$i]."\" Uploaded Successfully.");
 }
 else{
	 echo nl2br(" \n SORRY CANNOT UPLOAD FILE \"".$_FILES['fileToUpload']['name'][$i]."\"");
 }
 
}
}
?>