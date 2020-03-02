<?php


include '../config.php';


$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


$TASK_ID = $request->TASK_ID;
$WO = $request->WO;
$WO_DATE = $request->WO_DATE;
$WO_TYPE = $request->WO_TYPE;
$WO_SHORT_TEXT = $request->WO_SHORT_TEXT;
$AREA = $request->AREA;
$PHASE = $request->PHASE;
$PLANT_SECTION = $request->PLANT_SECTION;
$MWC = $request->MWC;
$WBS = $request->WBS;
$PLAN_START = $request->PLAN_START;
$PLAN_FINISH = $request->PLAN_FINISH;
$F_LOCATION = $request->F_LOCATION;
$SHORT_NOTES = $request->SHORT_NOTES;
$SHIFT_MODE = $request->SHIFT_MODE;
$NOTICE_48H = $request->NOTICE_48H;
$REMARKS = $request->REMARKS;
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
$ERE_DATE = $request->ERE_DATE;
$OFF_DATE = $request->OFF_DATE;
$DIS_DATE = $request->DIS_DATE;
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
$TOTAL_AMT = $request->TOTAL_AMT;
$ERE_AMT_PRE = $request->ERE_AMT_PRE;
$HIRE_AMT_PRE = $request->HIRE_AMT_PRE;
$DIS_AMT_PRE = $request->DIS_AMT_PRE;
$TOTAL_AMT_PRE = $request->TOTAL_AMT_PRE;


$TASK_ID=(int)$TASK_ID;
$WO=(int)$WO;
$WO_DATE=$WO_DATE;
$WO_TYPE=$WO_TYPE;
$WO_SHORT_TEXT=$WO_SHORT_TEXT;
$AREA=$AREA;
$PHASE=$PHASE;
$PLANT_SECTION=$PLANT_SECTION;
$MWC=$MWC;
$WBS=$WBS;
$PLAN_START=$PLAN_START;
$PLAN_FINISH=$PLAN_FINISH;
$F_LOCATION=$F_LOCATION;
$SHORT_NOTES=$SHORT_NOTES;
$SHIFT_MODE=$SHIFT_MODE;
$NOTICE_48H=(int)$NOTICE_48H;
$REMARKS=(int)$REMARKS;
$CAT_1=$CAT_1;
$CAT_2=$CAT_2;
$CAT_3=$CAT_3;
$CONFINED=$CONFINED;
$START_ELE=(float)$START_ELE;
$LENGTH=(float)$LENGTH;
$WIDTH=(float)$WIDTH;
$HEIGHT=(float)$HEIGHT;
$NPF0_6M=(float)$NPF0_6M;
$NPF6_18M=(float)$NPF6_18M;
$NPF18_30M=(float)$NPF18_30M;
$NPF30_42M=(float)$NPF30_42M;
$NPF_42_100M=(float)$NPF_42_100M;
$ERE_DATE=$ERE_DATE;
$OFF_DATE=$OFF_DATE;
$DIS_DATE=$DIS_DATE;
$TOP_ELE=(float)$TOP_ELE;
$ELE_FACTOR=(float)$ELE_FACTOR;
$CON_FACTOR=(float)$CON_FACTOR;
$DURATION=(int)$DURATION;
$HIRE_30D=(int)$HIRE_30D;
$HIRE_90D=(int)$HIRE_90D;
$HIRE_180D=(int)$HIRE_180D;
$HIRE_365D=(int)$HIRE_365D;
$HIRE_730D=(int)$HIRE_730D;
$QTY_STR0_6M=(float)$QTY_STR0_6M;
$QTY_STR6_18M=(float)$QTY_STR6_18M;
$QTY_STR18_30M=(float)$QTY_STR18_30M;
$QTY_STR30_42M=(float)$QTY_STR30_42M;
$QTY_STR_42_100M=(float)$QTY_STR_42_100M;
$QTY_BRD0_6M=(float)$QTY_BRD0_6M;
$QTY_BRD6_18M=(float)$QTY_BRD6_18M;
$QTY_BRD18_30M=(float)$QTY_BRD18_30M;
$QTY_BRD30_42M=(float)$QTY_BRD30_42M;
$QTY_BRD_42_100M=(float)$QTY_BRD_42_100M;
$ER_STR0_6M=(float)$ER_STR0_6M;
$ER_STR6_18M=(float)$ER_STR6_18M;
$ER_STR18_30M=(float)$ER_STR18_30M;
$ER_STR30_42M=(float)$ER_STR30_42M;
$ER_STR_42_100M=(float)$ER_STR_42_100M;
$ER_BRD0_6M=(float)$ER_BRD0_6M;
$ER_BRD6_18M=(float)$ER_BRD6_18M;
$ER_BRD18_30M=(float)$ER_BRD18_30M;
$ER_BRD30_42M=(float)$ER_BRD30_42M;
$ER_BRD_42_100M=(float)$ER_BRD_42_100M;
$HIRE_STR0_6M=(float)$HIRE_STR0_6M;
$HIRE_STR6_18M=(float)$HIRE_STR6_18M;
$HIRE_STR18_30M=(float)$HIRE_STR18_30M;
$HIRE_STR30_42M=(float)$HIRE_STR30_42M;
$HIRE_STR_42_100M=(float)$HIRE_STR_42_100M;
$HIRE_BRD0_6M=(float)$HIRE_BRD0_6M;
$HIRE_BRD6_18M=(float)$HIRE_BRD6_18M;
$HIRE_BRD18_30M=(float)$HIRE_BRD18_30M;
$HIRE_BRD30_42M=(float)$HIRE_BRD30_42M;
$HIRE_BRD_42_100M=(float)$HIRE_BRD_42_100M;
$DR_STR0_6M=(float)$DR_STR0_6M;
$DR_STR6_18M=(float)$DR_STR6_18M;
$DR_STR18_30M=(float)$DR_STR18_30M;
$DR_STR30_42M=(float)$DR_STR30_42M;
$DR_STR_42_100M=(float)$DR_STR_42_100M;
$DR_BRD0_6M=(float)$DR_BRD0_6M;
$DR_BRD6_18M=(float)$DR_BRD6_18M;
$DR_BRD18_30M=(float)$DR_BRD18_30M;
$DR_BRD30_42M=(float)$DR_BRD30_42M;
$DR_BRD_42_100M=(float)$DR_BRD_42_100M;
$ERE_AMT_TOTAL=(float)$ERE_AMT_TOTAL;
$HIRE_AMT_TOTAL=(float)$HIRE_AMT_TOTAL;
$DIS_AMT_TOTAL=(float)$DIS_AMT_TOTAL;
$TOTAL_AMT=(float)$TOTAL_AMT;
$ERE_AMT_PRE=(float)$ERE_AMT_PRE;
$HIRE_AMT_PRE=(float)$HIRE_AMT_PRE;
$DIS_AMT_PRE=(float)$DIS_AMT_PRE;
$TOTAL_AMT_PRE=(float)$TOTAL_AMT_PRE;

$sql = "UPDATE actual_task_data SET

TASK_ID='$TASK_ID',
WO='$WO',
WO_DATE='$WO_DATE',
WO_TYPE='$WO_TYPE',
WO_SHORT_TEXT='$WO_SHORT_TEXT',
AREA='$AREA',
PHASE='$PHASE',
PLANT_SECTION='$PLANT_SECTION',
MWC='$MWC',
WBS='$WBS',
PLAN_START='$PLAN_START',
PLAN_FINISH='$PLAN_FINISH',
F_LOCATION='$F_LOCATION',
SHORT_NOTES='$SHORT_NOTES',
SHIFT_MODE='$SHIFT_MODE',
NOTICE_48H='$NOTICE_48H',
REMARKS='$REMARKS',
CAT_1='$CAT_1',
CAT_2='$CAT_2',
CAT_3='$CAT_3',
CONFINED='$CONFINED',
START_ELE='$START_ELE',
LENGTH='$LENGTH',
WIDTH='$WIDTH',
HEIGHT='$HEIGHT',
NPF0_6M='$NPF0_6M',
NPF6_18M='$NPF6_18M',
NPF18_30M='$NPF18_30M',
NPF30_42M='$NPF30_42M',
NPF_42_100M='$NPF_42_100M',
ERE_DATE='$ERE_DATE',
OFF_DATE='$OFF_DATE',
DIS_DATE='$DIS_DATE',
TOP_ELE='$TOP_ELE',
ELE_FACTOR='$ELE_FACTOR',
CON_FACTOR='$CON_FACTOR',
DURATION='$DURATION',
HIRE_30D='$HIRE_30D',
HIRE_90D='$HIRE_90D',
HIRE_180D='$HIRE_180D',
HIRE_365D='$HIRE_365D',
HIRE_730D='$HIRE_730D',
QTY_STR0_6M='$QTY_STR0_6M',
QTY_STR6_18M='$QTY_STR6_18M',
QTY_STR18_30M='$QTY_STR18_30M',
QTY_STR30_42M='$QTY_STR30_42M',
QTY_STR_42_100M='$QTY_STR_42_100M',
QTY_BRD0_6M='$QTY_BRD0_6M',
QTY_BRD6_18M='$QTY_BRD6_18M',
QTY_BRD18_30M='$QTY_BRD18_30M',
QTY_BRD30_42M='$QTY_BRD30_42M',
QTY_BRD_42_100M='$QTY_BRD_42_100M',
ER_STR0_6M='$ER_STR0_6M',
ER_STR6_18M='$ER_STR6_18M',
ER_STR18_30M='$ER_STR18_30M',
ER_STR30_42M='$ER_STR30_42M',
ER_STR_42_100M='$ER_STR_42_100M',
ER_BRD0_6M='$ER_BRD0_6M',
ER_BRD6_18M='$ER_BRD6_18M',
ER_BRD18_30M='$ER_BRD18_30M',
ER_BRD30_42M='$ER_BRD30_42M',
ER_BRD_42_100M='$ER_BRD_42_100M',
HIRE_STR0_6M='$HIRE_STR0_6M',
HIRE_STR6_18M='$HIRE_STR6_18M',
HIRE_STR18_30M='$HIRE_STR18_30M',
HIRE_STR30_42M='$HIRE_STR30_42M',
HIRE_STR_42_100M='$HIRE_STR_42_100M',
HIRE_BRD0_6M='$HIRE_BRD0_6M',
HIRE_BRD6_18M='$HIRE_BRD6_18M',
HIRE_BRD18_30M='$HIRE_BRD18_30M',
HIRE_BRD30_42M='$HIRE_BRD30_42M',
HIRE_BRD_42_100M='$HIRE_BRD_42_100M',
DR_STR0_6M='$DR_STR0_6M',
DR_STR6_18M='$DR_STR6_18M',
DR_STR18_30M='$DR_STR18_30M',
DR_STR30_42M='$DR_STR30_42M',
DR_STR_42_100M='$DR_STR_42_100M',
DR_BRD0_6M='$DR_BRD0_6M',
DR_BRD6_18M='$DR_BRD6_18M',
DR_BRD18_30M='$DR_BRD18_30M',
DR_BRD30_42M='$DR_BRD30_42M',
DR_BRD_42_100M='$DR_BRD_42_100M',
ERE_AMT_TOTAL='$ERE_AMT_TOTAL',
HIRE_AMT_TOTAL='$HIRE_AMT_TOTAL',
DIS_AMT_TOTAL='$DIS_AMT_TOTAL',
TOTAL_AMT='$TOTAL_AMT',
ERE_AMT_PRE='$ERE_AMT_PRE',
HIRE_AMT_PRE='$HIRE_AMT_PRE',
DIS_AMT_PRE='$DIS_AMT_PRE',
TOTAL_AMT_PRE='$TOTAL_AMT_PRE'

WHERE TASK_ID = '$TASK_ID'
";

// $sql = " INSERT INTO task_data (HEIGHT, WIDTH, LENGTH) values (
//     '$HEIGHT',
//     '$WIDTH',
//     '$LENGTH'
//     )" ;

if (mysqli_query($db, $sql)) {
    echo "Success";
}
else 
    echo mysqli_error($db);

?>