<?php
$upload_dir = "upload/";
$archive_dir = "archive/";
$zip_dir = "downloadFolder/";
var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dosya uzantısını kontrol et
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES["dosya"]["name"], PATHINFO_EXTENSION));
    if($imageFileType != "zip") {
        echo "Üzgünüm, sadece ZIP dosyaları yüklenebilir.";
        $uploadOk = 0;
    }

    // Dosyayı yükle
    if ($uploadOk == 0) {
        echo "Üzgünüm, dosya yüklerken bir şeyler ters gitti.";
    } else {
        $uploaded_file = $upload_dir . basename($_FILES["dosya"]["name"]);

        if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $uploaded_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["dosya"]["name"])). " dosya yüklendi ve açıldı.";

            // Zip dosyasını aç
            $zip = new ZipArchive;
            if ($zip->open($uploaded_file) === TRUE) {
                // Yeni klasör oluştur
                $folder_name = $_POST["filenameID"]; // input dosyasının adını al
                $extract_dir = $archive_dir;

                // Radio button'a göre klasör adını belirle
                switch ($_POST['app']) {
                    case 'a':
                        $extract_dir .= "buttons/";
                        break;
                    case 'b':
                        $extract_dir .= "cards/";
                        break;
                    case 'c':
                        $extract_dir .= "accordions/";
                        break;
                    case 'd':
                        $extract_dir .= "animations/";
                        break;
                    case 'e':
                        $extract_dir .= "dropdowns/";
                        break;
                    case 'f':
                        $extract_dir .= "footers/";
                        break;
                }

                // Klasörü oluştur
                $extract_dir .= $folder_name . "/";
                if (!file_exists($extract_dir)) {
                    mkdir($extract_dir, 0777, true);
                }

                // Dosyaları yeni klasöre çıkar
                $zip->extractTo($extract_dir);
                $zip->close();

                // Zip dosyasını zip klasörüne kopyala
                $zip_file = $zip_dir . basename($uploaded_file);
                copy($uploaded_file, $zip_file);

                // Zip dosyasını silebilirsiniz
                unlink($uploaded_file);

                echo 'Dosya başarıyla açıldı ve içeriği "'.$extract_dir.'" klasörüne çıkarıldı. Dosya "'.$zip_file.'" klasörüne kaydedildi.';
            } else {
                echo 'Dosya açılırken hata oluştu.';
            }
        } else {
            echo "Üzgünüm, dosya yüklerken bir şeyler ters gitti.";
        }
    }
}
?>
