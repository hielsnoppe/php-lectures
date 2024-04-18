<?php

function isValidSize($uploadedFile) {
    
    $fileSize = filesize($uploadedFile['tmp_name']);

    if ($fileSize < 1000000) return true;

    return false;
}

if (isset($_FILES['upload'])) {
        
    switch ($_FILES['upload']['error']) {

        case UPLOAD_ERR_OK: // 0
            echo('Danke für die Datei!');
            break;

        case UPLOAD_ERR_NO_FILE: // 4
            echo('Schade, leere Datei...');
            break;

        case UPLOAD_ERR_INI_SIZE: // 1
        case UPLOAD_ERR_FORM_SIZE: // 2
            echo('Die Datei ist zu groß!');
            break;
    }

    if (!isValidSize($_FILES['upload'])) {
        echo('Die Datei ist zu groß!');
    }
}

?>
<pre>
$_POST: <?php var_dump($_POST); ?>
$_FILES: <?php var_dump($_FILES); ?>
</pre>
<form method="post" enctype="multipart/form-data">

    <!-- Beschränkung der Datei-Größe -->
    <input type="hidden" name="MAX_FILE_SIZE" value="1">

    <input type="file" name="upload">

    <input type="submit">
</form>