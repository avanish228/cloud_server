<?php
$dir_path = "/var/www/html/cloud_storage/Avanish";

if (is_dir($dir_path)) {
    if ($dir_handler = opendir($dir_path)) {
        while (($file = readdir($dir_handler)) !== false) {
            echo "filename: $file : filetype: " . filetype($dir_path . $file) . "\n";
        }
        closedir($dir_handler);
    }
}
?>
