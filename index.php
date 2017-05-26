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


?>
<form action="file_func.php" >
    <table>
        <tr>
            <td>№</td>
            <td>Имя файла</td>
            <td colspan="2">Действия</td>
            <?php

            $file->table();

            ?>
        </tr>
    </table>
</form>
</body>
</html>