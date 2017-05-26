<?php
require 'class/file.php';

$open_file = new open_file();
$edit_file = new edit_file();
$delet_file = new delet_file();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php
$open_file->open($_GET['open']);
if($_GET['edit']!=null)
{
    $edit_file->edit($_GET['edit']);
}
else
{
    $edit_file->edit($_GET['file_name']);
}

$edit_file->edit_save($_GET['file_name'],$_GET['file_text']);
$delet_file->deleted($_GET['delet']);

?>
</body>
</html>
