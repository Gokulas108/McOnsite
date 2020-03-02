<?php

include '../config.php';

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
// $TASK_ID = mysqli_real_escape_string($db,$_POST['TASK_ID']);
// $WO = mysqli_real_escape_string($db,$_POST['WO']);
// $CAT_1 = mysqli_real_escape_string($db,$_POST['CAT_1']);
// $CAT_2 = mysqli_real_escape_string($db,$_POST['CAT_2']);
// $CAT_3 = mysqli_real_escape_string($db,$_POST['CAT_3']);
// $CONFINED = mysqli_real_escape_string($db,$_POST['CONFINED']);
// $START_ELE = mysqli_real_escape_string($db,$_POST['START_ELE']);
// $LENGTH = mysqli_real_escape_string($db,$_POST['LENGTH']);
// $WIDTH = mysqli_real_escape_string($db,$_POST['WIDTH']);
// $HEIGHT = mysqli_real_escape_string($db,$_POST['HEIGHT']);
// $NPF0_6M = mysqli_real_escape_string($db,$_POST['NPF0_6M']);
// $NPF6_18M = mysqli_real_escape_string($db,$_POST['NPF6_18M']);
// $NPF18_30M = mysqli_real_escape_string($db,$_POST['NPF18_30M']);
// $NPF30_42M = mysqli_real_escape_string($db,$_POST['NPF30_42M']);
// $NPF_42_100M = mysqli_real_escape_string($db,$_POST['NPF_42_100M']);
// $ERE_DATE = mysqli_real_escape_string($db,$_POST['ERE_DATE']);
// $OFF_DATE = mysqli_real_escape_string($db,$_POST['OFF_DATE']);
// $DIS_DATE = mysqli_real_escape_string($db,$_POST['DIS_DATE']);
// $TOP_ELE = mysqli_real_escape_string($db,$_POST['TOP_ELE']);
// $ELE_FACTOR = mysqli_real_escape_string($db,$_POST['ELE_FACTOR']);
// $CON_FACTOR = mysqli_real_escape_string($db,$_POST['CON_FACTOR']);
// $DURATION = mysqli_real_escape_string($db,$_POST['DURATION']);
// $HIRE_30D = mysqli_real_escape_string($db,$_POST['HIRE_30D']);
// $HIRE_90D = mysqli_real_escape_string($db,$_POST['HIRE_90D']);
// $HIRE_180D = mysqli_real_escape_string($db,$_POST['HIRE_180D']);
// $HIRE_365D = mysqli_real_escape_string($db,$_POST['HIRE_365D']);
// $HIRE_730D = mysqli_real_escape_string($db,$_POST['HIRE_730D']);
// $QTY_STR0_6M = mysqli_real_escape_string($db,$_POST['QTY_STR0_6M']);
// $QTY_STR6_18M = mysqli_real_escape_string($db,$_POST['QTY_STR6_18M']);
// $QTY_STR18_30M = mysqli_real_escape_string($db,$_POST['QTY_STR18_30M']);
// $QTY_STR30_42M = mysqli_real_escape_string($db,$_POST['QTY_STR30_42M']);
// $QTY_STR_42_100M = mysqli_real_escape_string($db,$_POST['QTY_STR_42_100M']);
// $QTY_BRD0_6M = mysqli_real_escape_string($db,$_POST['QTY_BRD0_6M']);
// $QTY_BRD6_18M = mysqli_real_escape_string($db,$_POST['QTY_BRD6_18M']);
// $QTY_BRD18_30M = mysqli_real_escape_string($db,$_POST['QTY_BRD18_30M']);
// $QTY_BRD30_42M = mysqli_real_escape_string($db,$_POST['QTY_BRD30_42M']);
// $QTY_BRD_42_100M = mysqli_real_escape_string($db,$_POST['QTY_BRD_42_100M']);
// $ER_STR0_6M = mysqli_real_escape_string($db,$_POST['ER_STR0_6M']);
// $ER_STR6_18M = mysqli_real_escape_string($db,$_POST['ER_STR6_18M']);
// $ER_STR18_30M = mysqli_real_escape_string($db,$_POST['ER_STR18_30M']);
// $ER_STR30_42M = mysqli_real_escape_string($db,$_POST['ER_STR30_42M']);
// $ER_STR_42_100M = mysqli_real_escape_string($db,$_POST['ER_STR_42_100M']);
// $ER_BRD0_6M = mysqli_real_escape_string($db,$_POST['ER_BRD0_6M']);
// $ER_BRD6_18M = mysqli_real_escape_string($db,$_POST['ER_BRD6_18M']);
// $ER_BRD18_30M = mysqli_real_escape_string($db,$_POST['ER_BRD18_30M']);
// $ER_BRD30_42M = mysqli_real_escape_string($db,$_POST['ER_BRD30_42M']);
// $ER_BRD_42_100M = mysqli_real_escape_string($db,$_POST['ER_BRD_42_100M']);
// $HIRE_STR0_6M = mysqli_real_escape_string($db,$_POST['HIRE_STR0_6M']);
// $HIRE_STR6_18M = mysqli_real_escape_string($db,$_POST['HIRE_STR6_18M']);
// $HIRE_STR18_30M = mysqli_real_escape_string($db,$_POST['HIRE_STR18_30M']);
// $HIRE_STR30_42M = mysqli_real_escape_string($db,$_POST['HIRE_STR30_42M']);
// $HIRE_STR_42_100M = mysqli_real_escape_string($db,$_POST['HIRE_STR_42_100M']);
// $HIRE_BRD0_6M = mysqli_real_escape_string($db,$_POST['HIRE_BRD0_6M']);
// $HIRE_BRD6_18M = mysqli_real_escape_string($db,$_POST['HIRE_BRD6_18M']);
// $HIRE_BRD18_30M = mysqli_real_escape_string($db,$_POST['HIRE_BRD18_30M']);
// $HIRE_BRD30_42M = mysqli_real_escape_string($db,$_POST['HIRE_BRD30_42M']);
// $HIRE_BRD_42_100M = mysqli_real_escape_string($db,$_POST['HIRE_BRD_42_100M']);
// $DR_STR0_6M = mysqli_real_escape_string($db,$_POST['DR_STR0_6M']);
// $DR_STR6_18M = mysqli_real_escape_string($db,$_POST['DR_STR6_18M']);
// $DR_STR18_30M = mysqli_real_escape_string($db,$_POST['DR_STR18_30M']);
// $DR_STR30_42M = mysqli_real_escape_string($db,$_POST['DR_STR30_42M']);
// $DR_STR_42_100M = mysqli_real_escape_string($db,$_POST['DR_STR_42_100M']);
// $DR_BRD0_6M = mysqli_real_escape_string($db,$_POST['DR_BRD0_6M']);
// $DR_BRD6_18M = mysqli_real_escape_string($db,$_POST['DR_BRD6_18M']);
// $DR_BRD18_30M = mysqli_real_escape_string($db,$_POST['DR_BRD18_30M']);
// $DR_BRD30_42M = mysqli_real_escape_string($db,$_POST['DR_BRD30_42M']);
// $DR_BRD_42_100M = mysqli_real_escape_string($db,$_POST['DR_BRD_42_100M']);
// $ERE_AMT_TOTAL = mysqli_real_escape_string($db,$_POST['ERE_AMT_TOTAL']);
// $HIRE_AMT_TOTAL = mysqli_real_escape_string($db,$_POST['HIRE_AMT_TOTAL']);
// $DIS_AMT_TOTAL = mysqli_real_escape_string($db,$_POST['DIS_AMT_TOTAL']);
// $ERE_AMT_PRE = mysqli_real_escape_string($db,$_POST['ERE_AMT_PRE']);
// $HIRE_AMT_PRE = mysqli_real_escape_string($db,$_POST['HIRE_AMT_PRE']);
// $DIS_AMT_PRE = mysqli_real_escape_string($db,$_POST['DIS_AMT_PRE']);
// $ONLY_HIRE = mysqli_real_escape_string($db,$_POST['ONLY_HIRE']);

$TASK_ID = $request->TASK_ID;
$WO = $request->WO;
$CAT_1 = $request->CAT_1;
$CAT_2 = $request->CAT_2;
$CAT_3 = $request->CAT_3;
$CONFINED = $request->CONFINED;
$START_ELE = $request->START_ELE;
$LENGTH = $request->LENGTH;
$WIDTH = $request->WIDTH;
$HEIGHT = $request->HEIGHT;
$NPF0_6M = $request->NPF0_6M;
$NPF6_18M = $request->NPF6_18M;
$NPF18_30M = $request->NPF18_30M;
$NPF30_42M = $request->NPF30_42M;
$NPF_42_100M = $request->NPF_42_100M;
$rawdate = htmlentities($request->ERE_DATE);
$ERE_DATE = date('d-m-Y', strtotime($rawdate));
$OFF_DATE = $request->OFF_DATE;
$rawdate2 = htmlentities($request->DIS_DATE);
$DIS_DATE = date('d-m-Y', strtotime($rawdate2));
$TOP_ELE = $request->TOP_ELE;
$ELE_FACTOR = $request->ELE_FACTOR;
$CON_FACTOR = $request->CON_FACTOR;
$DURATION = $request->DURATION;
$HIRE_30D = $request->HIRE_30D;
$HIRE_90D = $request->HIRE_90D;
$HIRE_180D = $request->HIRE_180D;
$HIRE_365D = $request->HIRE_365D;
$HIRE_730D = $request->HIRE_730D;
$QTY_STR0_6M = $request->QTY_STR0_6M;
$QTY_STR6_18M = $request->QTY_STR6_18M;
$QTY_STR18_30M = $request->QTY_STR18_30M;
$QTY_STR30_42M = $request->QTY_STR30_42M;
$QTY_STR_42_100M = $request->QTY_STR_42_100M;
$QTY_BRD0_6M = $request->QTY_BRD0_6M;
$QTY_BRD6_18M = $request->QTY_BRD6_18M;
$QTY_BRD18_30M = $request->QTY_BRD18_30M;
$QTY_BRD30_42M = $request->QTY_BRD30_42M;
$QTY_BRD_42_100M = $request->QTY_BRD_42_100M;
$ER_STR0_6M = $request->ER_STR0_6M;
$ER_STR6_18M = $request->ER_STR6_18M;
$ER_STR18_30M = $request->ER_STR18_30M;
$ER_STR30_42M = $request->ER_STR30_42M;
$ER_STR_42_100M = $request->ER_STR_42_100M;
$ER_BRD0_6M = $request->ER_BRD0_6M;
$ER_BRD6_18M = $request->ER_BRD6_18M;
$ER_BRD18_30M = $request->ER_BRD18_30M;
$ER_BRD30_42M = $request->ER_BRD30_42M;
$ER_BRD_42_100M = $request->ER_BRD_42_100M;
$HIRE_STR0_6M = $request->HIRE_STR0_6M;
$HIRE_STR6_18M = $request->HIRE_STR6_18M;
$HIRE_STR18_30M = $request->HIRE_STR18_30M;
$HIRE_STR30_42M = $request->HIRE_STR30_42M;
$HIRE_STR_42_100M = $request->HIRE_STR_42_100M;
$HIRE_BRD0_6M = $request->HIRE_BRD0_6M;
$HIRE_BRD6_18M = $request->HIRE_BRD6_18M;
$HIRE_BRD18_30M = $request->HIRE_BRD18_30M;
$HIRE_BRD30_42M = $request->HIRE_BRD30_42M;
$HIRE_BRD_42_100M = $request->HIRE_BRD_42_100M;
$DR_STR0_6M = $request->DR_STR0_6M;
$DR_STR6_18M = $request->DR_STR6_18M;
$DR_STR18_30M = $request->DR_STR18_30M;
$DR_STR30_42M = $request->DR_STR30_42M;
$DR_STR_42_100M = $request->DR_STR_42_100M;
$DR_BRD0_6M = $request->DR_BRD0_6M;
$DR_BRD6_18M = $request->DR_BRD6_18M;
$DR_BRD18_30M = $request->DR_BRD18_30M;
$DR_BRD30_42M = $request->DR_BRD30_42M;
$DR_BRD_42_100M = $request->DR_BRD_42_100M;
$ERE_AMT_TOTAL = $request->ERE_AMT_TOTAL;
$HIRE_AMT_TOTAL = $request->HIRE_AMT_TOTAL;
$DIS_AMT_TOTAL = $request->DIS_AMT_TOTAL;
$ERE_AMT_PRE = $request->ERE_AMT_PRE;
$HIRE_AMT_PRE = $request->HIRE_AMT_PRE;
$DIS_AMT_PRE = $request->DIS_AMT_PRE;
$ONLY_HIRE = $request->ONLY_HIRE;
$IN_48HRS = $request->IN_48HRS;

$TOP_ELE = $START_ELE + $HEIGHT ;

if($START_ELE >= 20)
    $ELE_FACTOR = 1.15;
else if($START_ELE > 10)
    $ELE_FACTOR = 1.1;
else if($START_ELE > 3)
    $ELE_FACTOR = 1.05;
else 
    $ELE_FACTOR = 1;
    
if($CONFINED)
    $CON_FACTOR = 1.2;
else 
    $CON_FACTOR = 1 ;   
    
$diff = abs(strtotime($rawdate2) - strtotime($rawdate));
$DURATION = floor($diff / (60*60*24) ) + 1  ;

if($DURATION > 30)
    $HIRE_30D = 30 ;
else
    $HIRE_30D = $DURATION ;

if($DURATION > 90)
    $HIRE_90D = 60 ;
else
    $HIRE_90D = $DURATION - $HIRE_30D ; 
    
if($DURATION > 180)
    $HIRE_180D = 90 ;
else
    $HIRE_180D = $DURATION - $HIRE_30D - $HIRE_90D;   
    
if($DURATION > 365)
    $HIRE_365D = 185 ;
else
    $HIRE_365D = $DURATION - $HIRE_30D - $HIRE_90D - $HIRE_180D; 
    
if($DURATION > 730)
    $HIRE_730D = $DURATION - $HIRE_30D - $HIRE_90D - $HIRE_180D - $HIRE_365D; 
    
    
if($TOP_ELE <= 6 )
    $QTY_STR0_6M = $LENGTH * $WIDTH * ($TOP_ELE - $START_ELE) ;
else if($START_ELE <= 6)
    $QTY_STR0_6M =  $LENGTH * $WIDTH * (6 - $START_ELE) ;
else 
    $QTY_STR0_6M = 0 ;    


if($TOP_ELE <= 18) 
    $QTY_STR6_18M = ($LENGTH * $WIDTH * ($TOP_ELE - $START_ELE)) - $QTY_STR0_6M  ;
else if($START_ELE <= 18)
    $QTY_STR6_18M =  ($LENGTH * $WIDTH * (18 - $START_ELE)) - $QTY_STR0_6M;
else 
    $QTY_STR6_18M = 0 ; 
    

if($TOP_ELE <= 30) 
    $QTY_STR18_30M = ($LENGTH * $WIDTH * ($TOP_ELE - $START_ELE)) - $QTY_STR0_6M - $QTY_STR6_18M ;
else if($START_ELE <= 30)
    $QTY_STR18_30M =  ($LENGTH * $WIDTH * (30 - $START_ELE)) - $QTY_STR0_6M - $QTY_STR6_18M ;
else 
    $QTY_STR18_30M = 0 ;
    

if($TOP_ELE <= 42) 
    $QTY_STR30_42M = ($LENGTH * $WIDTH * ($TOP_ELE - $START_ELE)) - $QTY_STR0_6M - $QTY_STR6_18M - $QTY_STR18_30M ;
else if($START_ELE <= 42)
    $QTY_STR30_42M =  ($LENGTH * $WIDTH * (42 - $START_ELE)) - $QTY_STR0_6M - $QTY_STR6_18M - $QTY_STR18_30M ;
else 
    $QTY_STR30_42M = 0 ; 
    

if($TOP_ELE <= 200) 
    $QTY_STR_42_100M = ($LENGTH * $WIDTH * ($TOP_ELE - $START_ELE)) - $QTY_STR0_6M - $QTY_STR6_18M - $QTY_STR18_30M - $QTY_STR30_42M ;
else if($START_ELE <= 200)
    $QTY_STR_42_100M =  ($LENGTH * $WIDTH * (200 - $START_ELE)) - $QTY_STR0_6M - $QTY_STR6_18M - $QTY_STR18_30M - $QTY_STR30_42M ;
else 
    $QTY_STR_42_100M = 0 ;    


if($CAT_2=="HARD BARRICADE")
    $QTY_BRD0_6M = $NPF0_6M * $LENGTH ;
else
    $QTY_BRD0_6M = $NPF0_6M * $LENGTH * $WIDTH ;

if($CAT_2=="HARD BARRICADE")
    $QTY_BRD6_18M = $NPF6_18M * $LENGTH ;
else
    $QTY_BRD6_18M = $NPF6_18M * $LENGTH * $WIDTH ;
    
if($CAT_2=="HARD BARRICADE")
    $QTY_BRD18_30M = $NPF18_30M * $LENGTH ;
else
    $QTY_BRD18_30M = $NPF18_30M * $LENGTH * $WIDTH ;
    
if($CAT_2=="HARD BARRICADE")
    $QTY_BRD30_42M = $NPF30_42M * $LENGTH ;
else
    $QTY_BRD30_42M = $NPF30_42M * $LENGTH * $WIDTH ;

if($CAT_2=="HARD BARRICADE")
    $QTY_BRD_42_100M = $NPF_42_100M * $LENGTH ;
else
    $QTY_BRD_42_100M = $NPF_42_100M * $LENGTH * $WIDTH ;  
    

$S_ER_STR0_6M= mysqli_query($db,"select UR,COSTCODE from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='0-5.99M' ") ;
$S_ER_STR6_18M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='6-17.99M' ") ;
$S_ER_STR18_30M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='18-29.99M' ") ;
$S_ER_STR30_42M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='30-41.99M' ") ;
$S_ER_STR_42_100M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='42M-Above' ") ;
$S_ER_BRD0_6M= mysqli_query($db,"select UR,COSTCODE from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='0-5.99M' ") ;
$S_ER_BRD6_18M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='6-17.99M' ") ;
$S_ER_BRD18_30M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='18-29.99M' ") ;
$S_ER_BRD30_42M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='30-41.99M' ") ;
$S_ER_BRD_42_100M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='42M-Above' ") ;
$S_HIRE_STR0_6M= mysqli_query($db,"select UR,COSTCODE from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='Up to 30 Days' ") ;
$S_HIRE_STR6_18M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='30 to 90 Days' ") ;
$S_HIRE_STR18_30M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='90 to 180 Days' ") ;
$S_HIRE_STR30_42M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='180 to 365 Days' ") ;
$S_HIRE_STR_42_100M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='365 to 730 Days' ") ;
$S_HIRE_BRD0_6M= mysqli_query($db,"select UR,COSTCODE from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='Up to 30 Days' ") ;
$S_HIRE_BRD6_18M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='30 to 90 Days' ") ;
$S_HIRE_BRD18_30M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='90 to 180 Days' ") ;
$S_HIRE_BRD30_42M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='180 to 365 Days' ") ;
$S_HIRE_BRD_42_100M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='365 to 730 Days' ") ;
$S_DR_STR0_6M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='0-5.99M' ") ;
$S_DR_STR6_18M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='6-17.99M' ") ;
$S_DR_STR18_30M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='18-29.99M' ") ;
$S_DR_STR30_42M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='30-41.99M' ") ;
$S_DR_STR_42_100M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_2' and CAT_3='42M-Above' ") ;
$S_DR_BRD0_6M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='0-5.99M' ") ;
$S_DR_BRD6_18M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='6-17.99M' ") ;
$S_DR_BRD18_30M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='18-29.99M' ") ;
$S_DR_BRD30_42M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='30-41.99M' ") ;
$S_DR_BRD_42_100M= mysqli_query($db,"select UR from unitrate where CAT_1='$CAT_1' and CAT_2='$CAT_3' and CAT_3='42M-Above' ") ;

while($row = mysqli_fetch_assoc($S_ER_STR0_6M)) {$ER_STR0_6M = $row["UR"] ; $ER_STR_COSTCODE = $row["COSTCODE"] ;}
while($row = mysqli_fetch_assoc($S_ER_STR6_18M)) $ER_STR6_18M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_ER_STR18_30M)) $ER_STR18_30M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_ER_STR30_42M)) $ER_STR30_42M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_ER_STR_42_100M)) $ER_STR_42_100M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_ER_BRD0_6M)) {$ER_BRD0_6M = $row["UR"] ; $ER_BRD_COSTCODE = $row["COSTCODE"] ;}
while($row = mysqli_fetch_assoc($S_ER_BRD6_18M)) $ER_BRD6_18M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_ER_BRD18_30M)) $ER_BRD18_30M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_ER_BRD30_42M)) $ER_BRD30_42M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_ER_BRD_42_100M)) $ER_BRD_42_100M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_STR0_6M)) {$HIRE_STR0_6M = $row["UR"] ; $HIRE_STR_COSTCODE = $row["COSTCODE"] ;}
while($row = mysqli_fetch_assoc($S_HIRE_STR6_18M)) $HIRE_STR6_18M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_STR18_30M)) $HIRE_STR18_30M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_STR30_42M)) $HIRE_STR30_42M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_STR_42_100M)) $HIRE_STR_42_100M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_BRD0_6M)) {$HIRE_BRD0_6M = $row["UR"] ; $HIRE_BRD_COSTCODE = $row["COSTCODE"] ;}
while($row = mysqli_fetch_assoc($S_HIRE_BRD6_18M)) $HIRE_BRD6_18M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_BRD18_30M)) $HIRE_BRD18_30M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_BRD30_42M)) $HIRE_BRD30_42M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_HIRE_BRD_42_100M)) $HIRE_BRD_42_100M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_STR0_6M)) $DR_STR0_6M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_STR6_18M)) $DR_STR6_18M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_STR18_30M)) $DR_STR18_30M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_STR30_42M)) $DR_STR30_42M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_STR_42_100M)) $DR_STR_42_100M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_BRD0_6M)) $DR_BRD0_6M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_BRD6_18M)) $DR_BRD6_18M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_BRD18_30M)) $DR_BRD18_30M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_BRD30_42M)) $DR_BRD30_42M = $row["UR"] ;
while($row = mysqli_fetch_assoc($S_DR_BRD_42_100M)) $DR_BRD_42_100M = $row["UR"] ;

$ERE_AMT_TOTAL = ($QTY_STR0_6M*$ER_STR0_6M)+($QTY_STR6_18M*$ER_STR6_18M)+($QTY_STR18_30M*$ER_STR18_30M)+($QTY_STR30_42M*$ER_STR30_42M)+($QTY_STR_42_100M*$ER_STR_42_100M)+($QTY_BRD0_6M*$ER_BRD0_6M)+($QTY_BRD6_18M*$ER_BRD6_18M)+($QTY_BRD18_30M*$ER_BRD18_30M)+($QTY_BRD30_42M*$ER_BRD30_42M)+($QTY_BRD_42_100M*$ER_BRD_42_100M) ;
$HIRE_AMT_TOTAL = ($HIRE_STR0_6M*$QTY_STR0_6M*$DURATION)+($HIRE_STR6_18M*$QTY_STR6_18M*$DURATION)+($HIRE_STR18_30M*$QTY_STR18_30M*$DURATION)+($HIRE_STR30_42M*$QTY_STR30_42M*$DURATION)+($HIRE_STR_42_100M*$QTY_STR_42_100M*$DURATION)+($HIRE_BRD0_6M*$QTY_BRD0_6M*$DURATION)+($HIRE_BRD6_18M*$QTY_BRD6_18M*$DURATION)+($HIRE_BRD18_30M*$QTY_BRD18_30M*$DURATION)+($HIRE_BRD30_42M*$QTY_BRD30_42M*$DURATION)+($HIRE_BRD_42_100M*$QTY_BRD_42_100M*$DURATION) ;
$DIS_AMT_TOTAL = ($DR_STR0_6M*$QTY_STR0_6M)+($DR_STR6_18M*$QTY_STR6_18M)+($DR_STR18_30M*$QTY_STR18_30M)+($DR_STR30_42M*$QTY_STR30_42M)+($DR_STR_42_100M*$QTY_STR_42_100M)+($DR_BRD0_6M*$QTY_BRD0_6M)+($DR_BRD6_18M*$QTY_BRD6_18M)+($DR_BRD18_30M*$QTY_BRD18_30M)+($DR_BRD30_42M*$QTY_BRD30_42M)+($DR_BRD_42_100M*$QTY_BRD_42_100M) ;

$ERE_AMT_TOTAL *= $ELE_FACTOR * $CON_FACTOR * 0.7 ;
$HIRE_AMT_TOTAL *= $ELE_FACTOR * $CON_FACTOR ;
$DIS_AMT_TOTAL *= $ELE_FACTOR * $CON_FACTOR * 0.3 ;
$TOTAL_COST = $ERE_AMT_TOTAL + $HIRE_AMT_TOTAL + $DIS_AMT_TOTAL ;

$data[] = array(
        
    "TASK_ID"=>(int)$TASK_ID,
    "WO"=>(int)$WO,
    "CAT_1"=>$CAT_1,
    "CAT_2"=>$CAT_2,
    "CAT_3"=>$CAT_3,
    "CONFINED"=>$CONFINED,
    "START_ELE"=>(float)round($START_ELE,2),
    "LENGTH"=>(float)round($LENGTH,2),
    "WIDTH"=>(float)round($WIDTH,2),
    "HEIGHT"=>(float)round($HEIGHT,2),
    "NPF0_6M"=>(float)round($NPF0_6M,2),
    "NPF6_18M"=>(float)round($NPF6_18M,2),
    "NPF18_30M"=>(float)round($NPF18_30M,2),
    "NPF30_42M"=>(float)round($NPF30_42M,2),
    "NPF_42_100M"=>(float)round($NPF_42_100M,2),
    "ERE_DATE"=>$ERE_DATE,
    "OFF_DATE"=>$OFF_DATE,
    "DIS_DATE"=>$DIS_DATE,
    "TOP_ELE"=>(float)round($TOP_ELE,2),
    "ELE_FACTOR"=>(float)round($ELE_FACTOR,2),
    "CON_FACTOR"=>(float)round($CON_FACTOR,2),
    "DURATION"=>(int)$DURATION,
    "HIRE_30D"=>(int)$HIRE_30D,
    "HIRE_90D"=>(int)$HIRE_90D,
    "HIRE_180D"=>(int)$HIRE_180D,
    "HIRE_365D"=>(int)$HIRE_365D,
    "HIRE_730D"=>(int)$HIRE_730D,
    "QTY_STR0_6M"=>(float)round($QTY_STR0_6M,2),
    "QTY_STR6_18M"=>(float)round($QTY_STR6_18M,2),
    "QTY_STR18_30M"=>(float)round($QTY_STR18_30M,2),
    "QTY_STR30_42M"=>(float)round($QTY_STR30_42M,2),
    "QTY_STR_42_100M"=>(float)round($QTY_STR_42_100M,2),
    "QTY_BRD0_6M"=>(float)round($QTY_BRD0_6M,2),
    "QTY_BRD6_18M"=>(float)round($QTY_BRD6_18M,2),
    "QTY_BRD18_30M"=>(float)round($QTY_BRD18_30M,2),
    "QTY_BRD30_42M"=>(float)round($QTY_BRD30_42M,2),
    "QTY_BRD_42_100M"=>(float)round($QTY_BRD_42_100M,2),
    "ER_STR0_6M"=>(float)round($ER_STR0_6M,2),
    "ER_STR6_18M"=>(float)round($ER_STR6_18M,2),
    "ER_STR18_30M"=>(float)round($ER_STR18_30M,2),
    "ER_STR30_42M"=>(float)round($ER_STR30_42M,2),
    "ER_STR_42_100M"=>(float)round($ER_STR_42_100M,2),
    "ER_BRD0_6M"=>(float)round($ER_BRD0_6M,2),
    "ER_BRD6_18M"=>(float)round($ER_BRD6_18M,2),
    "ER_BRD18_30M"=>(float)round($ER_BRD18_30M,2),
    "ER_BRD30_42M"=>(float)round($ER_BRD30_42M,2),
    "ER_BRD_42_100M"=>(float)round($ER_BRD_42_100M,2),
    "HIRE_STR0_6M"=>(float)round($HIRE_STR0_6M,2),
    "HIRE_STR6_18M"=>(float)round($HIRE_STR6_18M,2),
    "HIRE_STR18_30M"=>(float)round($HIRE_STR18_30M,2),
    "HIRE_STR30_42M"=>(float)round($HIRE_STR30_42M,2),
    "HIRE_STR_42_100M"=>(float)round($HIRE_STR_42_100M,2),
    "HIRE_BRD0_6M"=>(float)round($HIRE_BRD0_6M,2),
    "HIRE_BRD6_18M"=>(float)round($HIRE_BRD6_18M,2),
    "HIRE_BRD18_30M"=>(float)round($HIRE_BRD18_30M,2),
    "HIRE_BRD30_42M"=>(float)round($HIRE_BRD30_42M,2),
    "HIRE_BRD_42_100M"=>(float)round($HIRE_BRD_42_100M,2),
    "DR_STR0_6M"=>(float)round($DR_STR0_6M,2),
    "DR_STR6_18M"=>(float)round($DR_STR6_18M,2),
    "DR_STR18_30M"=>(float)round($DR_STR18_30M,2),
    "DR_STR30_42M"=>(float)round($DR_STR30_42M,2),
    "DR_STR_42_100M"=>(float)round($DR_STR_42_100M,2),
    "DR_BRD0_6M"=>(float)round($DR_BRD0_6M,2),
    "DR_BRD6_18M"=>(float)round($DR_BRD6_18M,2),
    "DR_BRD18_30M"=>(float)round($DR_BRD18_30M,2),
    "DR_BRD30_42M"=>(float)round($DR_BRD30_42M,2),
    "DR_BRD_42_100M"=>(float)round($DR_BRD_42_100M,2),
    "ER_STR_COSTCODE"=>$ER_STR_COSTCODE,
    "ER_BRD_COSTCODE"=>$ER_BRD_COSTCODE,
    "HIRE_STR_COSTCODE"=>$HIRE_STR_COSTCODE,
    "HIRE_BRD_COSTCODE"=>$HIRE_BRD_COSTCODE,
    "ERE_AMT_TOTAL"=>(float)round($ERE_AMT_TOTAL,2),
    "HIRE_AMT_TOTAL"=>(float)round($HIRE_AMT_TOTAL,2),
    "DIS_AMT_TOTAL"=>(float)round($DIS_AMT_TOTAL,2),
    "ERE_AMT_PRE"=>(float)round($ERE_AMT_PRE,2),
    "HIRE_AMT_PRE"=>(float)round($HIRE_AMT_PRE,2),
    "DIS_AMT_PRE"=>(float)round($DIS_AMT_PRE,2),
    "ONLY_HIRE"=>$ONLY_HIRE,
    "IN_48HRS"=>$IN_48HRS,
    "TOTAL_COST"=>(float)round($TOTAL_COST,2),
);

echo json_encode($data);
// 	//$ = mysqli_real_escape_string($db,$_POST['qty']);
// 	$length = mysqli_real_escape_string($db,$_POST['length']);
// 	$width = mysqli_real_escape_string($db,$_POST['width']);	
// 	$height = mysqli_real_escape_string($db,$_POST['height']);
// 	$noOfDec = mysqli_real_escape_string($db,$_POST['noofplat']);
// 	$baseelevation = mysqli_real_escape_string($db,$_POST['baseelevation']);
// 	$hh = mysqli_real_escape_string($db,$_POST['hh']);
// 	$c1 = mysqli_real_escape_string($db,$_POST['c1']);
// 	$c2 = mysqli_real_escape_string($db,$_POST['c2']);
// 	$c3 = mysqli_real_escape_string($db,$_POST['c3']);
// 	$rawdate = htmlentities($_POST['erectiondate']);
// 	$edate = date('d-m-Y', strtotime($rawdate));
// 	$rawdate2 = htmlentities($_POST['dismantledate']);
// 	$ddate = date('d-m-Y', strtotime($rawdate2));
// 	$tat = mysqli_real_escape_string($db,$_POST['tat']);
// 	$fl = mysqli_real_escape_string($db,$_POST['fl']);
// 	$enotes = mysqli_real_escape_string($db,$_POST['enotes']);
// 	$c4 = " " ;
//     $fheight = $height ;
//     $

// 	if($scafftype != "Tower / Birdcage")
// 		$c4 = $scafftype ;
// 	else
// 	{
// 		if($fheight<6.01)
// 		{
// 			$c4 = "0 TO 6" ;
// 		}
// 		else if ($fheight<12.01)
// 		{
// 			$c4 = "Above 6 TO 12" ;
// 		}
// 		else if ($fheight<18.01)
// 		{
// 			$c4 = "Above 12 TO 18" ;
// 		}
// 		else if ($fheight<30.01)
// 		{
// 			$c4 = "Above 18 TO 30" ;
// 		}
// 		else if ($fheight<40.01)
// 		{
// 			$c4 = "Above 30 TO 40" ;
// 		}
// 		else if ($fheight<60.01)
// 		{
// 			$c4 = "Above 40 TO 60" ;
// 		}
// 		else if ($fheight<80.01)
// 		{
// 			$c4 = "Above 60 TO 80" ;
// 		}
// 		else
// 		{
// 			$c4 = "Above 80" ;
// 		}
// 	}

// 	$diff = abs(strtotime($rawdate2) - strtotime($rawdate));
// 	$duration = floor($diff / (60*60*24) );
// 	if($duration < 30)
// 		$duration = 0 ;
// 	else
// 		$duration = $duration - 29 ;

// 	if($scafftype == "Handrails / Barricading Barriers")
// 		$structvol = 0 ;
// 	else
// 		$structvol = $length * $width * $height * $qty ;

// 	if(($scafftype == "Handrails / Barricading Barriers") || (strpos($scafftype, "Load Bearing Scaffolding") !== false))
// 		$boardarea = 0 ;
// 	else
// 		$boardarea = $noofplat * $qty * $length * $width ;

// 	if($scafftype == "Handrails / Barricading Barriers")
// 		$barricadearea = $length * $hh * $qty ;
// 	else if((strpos($scafftype, "Load Bearing Scaffolding") !== false))
// 		$barricadearea = 0 ;
// 	else
// 		$barricadearea = $hh * ($length + $width) * 2 * $qty * $noofplat ;

// 	if($scafftype == "Tower / Birdcage")
// 	{
// 		if(($c1 == "Internal")||($baseelevation >= 12))
// 		{
// 			$factor = 1.25 ;
// 		}
// 		else
// 		{
// 			$factor = 1 ;
// 		}
// 	}
// 	else
// 		$factor = 1 ;

// 	$sel = "SELECT ed FROM ED WHERE scafftype = '$scafftype' AND c2 = '$c2' AND c3 = 'Structure' AND c4= '$c4' ";
// 	$sresult = mysqli_query($db, $sel);

// 	if (mysqli_num_rows($sresult) > 0) 
// 	{
//     		while($row = mysqli_fetch_assoc($sresult))
// 		{
//         		$edstructure = $row["ed"] ;
//   		}
// 	}
// 	else
// 		$edstructure = 0 ;

// 	if($scafftype == "Handrails / Barricading Barriers")
// 		$edplatform = 0 ;
// 	else
// 	{
// 		$sel = "SELECT ed FROM ED WHERE scafftype = '$scafftype' AND c2 = '$c2' AND c3 = '$c3' AND c4= '$c4' ";
// 		$sresult = mysqli_query($db, $sel);
	
// 		if (mysqli_num_rows($sresult) > 0) 
// 		{
//     			while($row = mysqli_fetch_assoc($sresult))
// 			{
//         			$edplatform = $row["ed"] ;
//   			}
// 		}
// 		else
// 			$edplatform = 0 ;
// 	}

// 	if((strpos($scafftype, "Load Bearing Scaffolding") !== false))
// 		$edbarricade = 0 ;
// 	else
// 	{
// 		if($c2 == 'Tube / Fittings')
// 			$edbarricade = 3.5 ;
// 		else if($c2 == 'System')
// 			$edbarricade = 3.4 ;	
// 	}	

// 	$sel = "SELECT hire FROM ED WHERE scafftype = '$scafftype' AND c2 = '$c2' AND c3 = 'Structure' AND c4= '$c4' ";
// 	$sresult = mysqli_query($db, $sel);

// 	if (mysqli_num_rows($sresult) > 0) 
// 	{
//     		while($row = mysqli_fetch_assoc($sresult))
// 		{
//         		$hstructure = $row["hire"] ;
//   		}
// 	}
// 	else
// 		$hstructure = 0 ;

// 	if($scafftype == "Handrails / Barricading Barriers")
// 		$hplatform = 0 ;
// 	else
// 	{
// 		$sel = "SELECT hire FROM ED WHERE scafftype = '$scafftype' AND c2 = '$c2' AND c3 = '$c3' AND c4= '$c4' ";
// 		$sresult = mysqli_query($db, $sel);
	
// 		if (mysqli_num_rows($sresult) > 0) 
// 		{
//     			while($row = mysqli_fetch_assoc($sresult))
// 			{
//         			$hplatform = $row["hire"] ;
//   			}
// 		}
// 		else
// 			$hplatform = 0 ;
// 	}

// 	if((strpos($scafftype, "Load Bearing Scaffolding") !== false))
// 		$hbarricade = 0 ;
// 	else
// 	{
// 		if($c2 == 'Tube / Fittings')
// 			$hbarricade = 0.08 ;
// 		else if($c2 == 'System')
// 			$hbarricade = 0.1 ;	
// 	}

// 	$eamt = ($structvol * $edstructure + $boardarea * $edplatform + $barricadearea * $edbarricade)*$factor ;
// 	$hamt = ($structvol * $hstructure + $boardarea * $hplatform + $barricadearea * $hbarricade)*$duration ;

// 	$total = $eamt + $hamt ;

// 	$sql1 = "SELECT * FROM snotification " ;
// 	$query = mysqli_query($db,$sql1) ;
// 	while ($row = mysqli_fetch_array($query))
// 		{
// 			if($nno == $row['nno'])
// 			{
// 				$wo = $row['wo'] ;
// 				$cid = $row['cid'] ;
// 				$area = $row['area'] ;
// 			}
// 		}

// 	$sql1 = "INSERT INTO tasks (nno, cid, wo, type, area, total, ed, hire, tat, fl, enotes) VALUES ('$nno','$cid','$wo','Erection and Dismantle', '$area','$total', '$eamt','$hamt', '$tat', '$fl', '$enotes')" ;
// 	mysqli_query($db,$sql1) ;

// 	$sql1 = "SELECT * FROM tasks ORDER BY tno DESC LIMIT 1" ;
// 	$query = mysqli_query($db,$sql1) ;
// 	while ($row = mysqli_fetch_array($query))
// 		{
// 			$tno = $row['tno'] ;
// 		}
	 
// $sql123 = "INSERT INTO workstatus (tno, nno, scaffoldingtype, qty, length , width, height, noofplat, baseelev, hh, c1, c2, c3, start, end, c4, hiredays, structurevol, boardarea, hbarea, factor, estructure, eplatform, ehb, hstructure, hplatform, hhb, ed, hire, total) VALUES ('$tno', '$nno', '$scafftype', '$qty', '$length', '$width', '$height', '$noofplat', '$baseelevation', '$hh' ,'$c1', '$c2', '$c3', '$edate', '$ddate', '$c4', '$duration', '$structvol', '$boardarea', '$barricadearea', '$factor', '$edstructure', '$edplatform', '$edbarricade', '$hstructure', '$hplatform', '$hbarricade', '$eamt', '$hamt', '$total')";
//       mysqli_query($db,$sql123);
// 	}

// 	if (!$query) 
// 	{
// 		die ('SQL Error: ' . mysqli_error($conn));
// 	}

	
// ?>