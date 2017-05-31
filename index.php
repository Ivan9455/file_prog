<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Title</title>
</head>
<body>
<?php
require 'class/file.php';
$file = new file();
$file->file_location();
echo "<pre>";
print_r($file);
echo "</pre>";
?>
<div class="form">
<form action="new_file.php">
    <button type="submit" >Создать файл</button>
</form>

<form action="file_func.php" >
    <table>
        <tr>
            <td>№</td>
            <td>Имя файла</td>
            <td colspan="3">Действия</td>
            <?php

            $file->table();

            ?>
        </tr>
    </table>
</form>
</div>
</body>
</html>
