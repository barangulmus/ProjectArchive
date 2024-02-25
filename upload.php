<?php
try {
    if(isset($_FILES["file"])) {
        $uploads_dir = 'archive/'; // Dosyaların kaydedileceği klasör
        foreach ($_FILES["file"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["file"]["tmp_name"][$key];
                $name = $_FILES["file"]["name"][$key];
                move_uploaded_file($tmp_name, "$uploads_dir/$name");
                echo "Dosya başarıyla yüklendi: $name\n";
            }
        }
    } else {
        throw new Exception("Dosya gönderilmedi");
    }
} catch (Exception $e) {
    echo 'Hata: ' . $e->getMessage();
}
?>
