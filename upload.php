<?php
/*
$gecici_ad=$_FILES["dosya"]["tmp_name"];
$kalici_yol_ad="upload/"; // dosya kendi adıyla upload dizinine kaydedilecek

if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
   echo "Dosya başarı ile yüklendi.";
else
   echo "Yükleme başarısız!";
*/

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["dosya"]["name"]);



if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["dosya"]["name"])). " dosya yüklendi.";
  } else {
    echo "Üzgünüm, dosya yüklerken bir şeyler ters gitti.";
  }

?>

