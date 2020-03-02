<?php

include '../config.php';
$Task_ID = $_POST['Task_ID'] ;
$USER = $_SESSION["login_user"] ;

if($_FILES['imagefile']['tmp_name'])
{
$image = $_FILES['imagefile']['tmp_name'];
$name = $_FILES['imagefile']['name'];
$image = base64_encode(file_get_contents(addslashes($image)));
$sqlInsertimageintodb = "INSERT INTO `Attachments` (`TASK_ID`,`name`,`image`,`USER`) VALUES ('$Task_ID','$name','$image', '$USER')";
//$sqlInsertimageintodb = "INSERT INTO `Attachments`(`name`,`TASK_ID`,`image`,`USER`) VALUES ('$name','$Task_ID','$image','".$_SESSION['login_user']."')";
if (mysqli_query($db, $sqlInsertimageintodb)) {
    echo "<br />Image uploaded successfully.";
} 

}
if($_FILES['img']['tmp_name']){
    $fileName = $_FILES['img']['name'];
    $tmpName  = $_FILES['img']['tmp_name'];
    $fileSize = $_FILES['img']['size'];
    $fileType = $_FILES['img']['type'];

    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc())
    {
        $fileName = addslashes($fileName);
    }		

    $queryInsertFile = "INSERT INTO Attachments (`TASK_ID`,`name`, `image`, `SIZE`,`TYPE`,`USER` ) 
    VALUES ('$Task_ID', '$fileName', '$content', '$fileSize', '$fileType', '$USER')";

    if($db->query($queryInsertFile) === TRUE)
    {
        $mssg =  "The file ".  basename( $_FILES['img']['name'])." has been uploaded";			
    }
    else
    {
        $mssg =  "There was an error uploading the file, please try again!";
    }


}

?>