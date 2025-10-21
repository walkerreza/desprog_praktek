<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>title</title>
        <link rel="stylesheet" href="linkToCSS" />
    </head>
    <body>
    <h2>unggah gambar
    </h2>    
<form action="proses_upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="images[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
    <input type="submit" name="submit" value="unggah">
</form>
    </body>
</html>