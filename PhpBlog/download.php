<?php
include("./db.php");

$fileName = 'Mahmut_BEYAZGÜL_Resume.pdf';
$filePath = '..\PhpBlog\Files\\' . $fileName; 

// Dosya mevcut mu kontrol et
if (file_exists($filePath)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    
    readfile($filePath);
    exit;
} else {
    echo "Dosya bulunamadı!";
}
?>
