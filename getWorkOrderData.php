<?php

    include '../config.php';

    session_start();
    $_SESSION["favcolor"] = "yellow";

    $sel = mysqli_query($db,"select * from WorkOrders");
    $data = array();

    while ($row = mysqli_fetch_array($sel)) {
    $data[] = array(
                    "CapeID"=>(int)$row['cid'],
                    "WorkOrderNo"=>(int)$row['wo'],
                    "NotificationNo"=>(int)$row['nno'],
                    "Area"=>$row['area'],
                    "mType"=>$row['mtype'],
                    "jType"=>$row['jtype'],
                    "Zone"=>$row['zone'],
                    "Description"=>$row['ndescription'],
                    "Date"=>$row['ndate'],
                    "nStatus"=>$row['nstatus'],
                    "Department"=>$row['ndept'],
                    "Requestor"=>$row['nreq'],
                    "StartDate"=>$row['sdate'],
                    "FinshDate"=>$row['fdate'],
                    "WorkCentre"=>$row['wc'],
                    "MainWorkCentre"=>$row['mwc'],
                    "SubArea"=>$row['sarea'],
                    "LACD"=>$row['lacd'],
                    "LACDcriteria"=>$row['lacdc'],
                    "Priority"=>$row['priority'],
                    "Status"=>$row['status'],
                    
                );
    }
    echo json_encode($data);

?>