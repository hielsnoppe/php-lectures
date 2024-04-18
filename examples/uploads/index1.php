<?php

?>
<!-- pre-formatted text:
    erhält Whitespace und Zeilenumbrüche -->
<pre>
$_POST: <?php var_dump($_POST); ?>
$_FILES: <?php var_dump($_FILES); ?>
</pre>
<form method="post" enctype="multipart/form-data">
    <!-- enctype erforderlich, damit Dateien übertragen werden können -->

    <input type="file" name="upload">

    <input type="submit">
</form>