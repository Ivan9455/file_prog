<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
require 'class/file.php';
$file = new file();
echo "<pre>";
print_r($file->file_location());
echo "</pre>";

$submit = new test();
echo $submit->submit($_POST['klick']);
//echo $_GET['klick'];
?>
<form action="" method="post">
    <input type="submit"  name="klick" value=" 123">
</form>
</body>
</html>