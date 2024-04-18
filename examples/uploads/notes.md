# File Uploads

1. Dateien hochladen
2. Dateien überprüfen
3. Dateien weiter verarbeiten

## Dateien hochladen

HTML-Formular, $_FILES

    <form method="post" enctype="multipart/form-data">

        <input type="file" name="upload">
    </form>

php.ini: [upload_tmp_dir](https://www.php.net/manual/en/ini.core.php#ini.upload-tmp-dir)


## Hochgeladene Dateien überprüfen

Überprüfe den Datei-Namen:

    is_uploaded_file($_FILES['upload']['name'])

Überprüfe $_FILES['upload']['error']:

    switch ($_FILES['upload']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            // TODO
            break;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            // TODO
            break;
    }

### Datei-Größe überprüfen:

Im HTML-Formular:

    <input type="hidden" name="MAX_FILE_SIZE" value="1024">

In der php.ini:

[upload_max_filesize](https://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize)

Überprüfe eine hochgeladene Datei:

    // Unsicher!
    $_FILES['upload']['size']

    // Besser:

    switch ($_FILES['upload']['error']) { ... }

    // Weitere Überprüfung der tatsächlichen Datei-Größe:
    $fileSize = filesize($_FILES['upload']['tmp_name']);



## Datei-Typ überprüfen

Im HTML-Formular:

    <input type="file" name="upload" accept=".png, .gif">

Überprüfe eine hochgeladene Datei:

    $finfo = finfo_open(FILEINFO_MIME_TYPE);

    switch (finfo_file($finfo, $_FILES['file']['tmp_name'])) {
        case 'image/jpeg':
        case 'application/pdf':
            // TODO
            break;
        default:
            // TODO
    }


## Hochgeladene Dateien weiter verarbeiten

    move_uploaded_file()


## Weitere Einstellungsmöglichkeiten in der php.ini

file_uploads
max_file_uploads_limit