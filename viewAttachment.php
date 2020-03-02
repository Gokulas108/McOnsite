<?php
include '../config.php';
$id    = $_GET['id'];
$query = "SELECT name, TYPE, SIZE, image FROM Attachments WHERE id = '$id'";
         
$result = mysqli_query($db,$query) or die('Error, query failed');
list($FileName, $type, $size, $content) = mysqli_fetch_array($result);

    header("Content-length: $size");
    header("Content-type: $type");
    header("Content-Disposition: attachment; filename=$FileName");
    echo $content;

 exit;

?>