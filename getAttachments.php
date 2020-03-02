<?php
include '../config.php';

    $Task_ID = $_GET['Task_ID'] ;

    $sel = mysqli_query($db,"select * from Attachments where TASK_ID = '$Task_ID' ");
    $data = array();

    while ($row = mysqli_fetch_array($sel)) {
    $data[] = array(
                    "ID"=>(int)$row['id'],
                    "FILENAME"=>$row['name'],
                    "BY"=>$row['USER'],
                );
    }
    echo json_encode($data);

?>