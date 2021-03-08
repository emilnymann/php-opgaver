<?php
$uploadOk = 1;
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File uploaded - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Uknown file";
        $uploadOk = 0;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fileupload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>File upload</legend>
            <input type="file" name="fileUpload" id="fileUpload">
            <input type="submit" value="Upload file" name="submit">
        </fieldset>
    </form>
</body>
</html>