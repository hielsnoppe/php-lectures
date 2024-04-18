<?php

function isValidSize($uploadedFile) {
    
    $fileSize = filesize($uploadedFile['tmp_name']);

    if ($fileSize < 1000000) return true;

    return false;
}

function isValidType ($uploadedFile) {

    $finfo = finfo_open(FILEINFO_MIME_TYPE);

    switch (finfo_file($finfo, $uploadedFile['tmp_name'])) {

        case 'image/jpeg':
        case 'application/pdf':
            return true;

        default:
            return false;
    }
}

/**
 * Nimm die Datei aus dem "Briefkasten" (/tmp Verzeichnis)
 * und lege sie ab.
 */
function handleUpload ($uploadedFile) {

    if (is_uploaded_file($uploadedFile['tmp_name'])) {

        // Je nach Anwendungsfall eigenen Datei-Namen generieren!
        // Benutzerdefinierten Namen ggf. prüfen/bereinigen!
        $fileName = $uploadedFile['name'];

        $toLocation = './uploads/' . $fileName;
        
        move_uploaded_file($uploadedFile['tmp_name'], $toLocation);
    }
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
    
    if (!isValidType($_FILES['upload'])) {
        echo('Unerlaubter Datei-Typ!');
    }

    // Vorsicht, wir ignorieren gerade alle
    // vorangegangenen Überprüfungen!
    handleUpload($_FILES['upload']);
}

?>
<pre>
$_POST: <?php var_dump($_POST); ?>
$_FILES: <?php var_dump($_FILES); ?>
</pre>
<form method="post" enctype="multipart/form-data">

    <input type="hidden" name="MAX_FILE_SIZE" value="102400">

    <!--
        accept Attribut um akzeptierte Datei-Typen anzugeben als
        * Datei-Endungen, z.B. .pdf, .jpg, .txt
        * MIME-Types, z.B. image/png
        
        Common MIME Types:
        https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types
    -->
    <input type="file" name="upload" accept=".pdf">

    <input type="submit">
</form>