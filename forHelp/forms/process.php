<?php
$file = $_FILES['file'];
$fileName = $file['name'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];

// Здесь можно выполнить необходимую обработку файла, например, переместить его в нужную директорию
move_uploaded_file($fileTmpName, '../uploads/' . $fileName);
