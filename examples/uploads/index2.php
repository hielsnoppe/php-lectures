<?php

if (isset($_FILES['upload'])) {
        
    switch ($_FILES['upload']['error']) {

        case UPLOAD_ERR_OK: // 0
            echo('Danke für die Datei!');
            break;

        case UPLOAD_ERR_NO_FILE: // 4
            echo('Schade, leere Datei...');
            break;
    }
}

?>
<pre>
$_POST: <?php var_dump($_POST); ?>
$_FILES: <?php var_dump($_FILES); ?>
</pre>
<form method="post" enctype="multipart/form-data">

    <input type="file" name="upload">

    <input type="submit">
</form>