<?php
    session_start();
     $data = array(
        "USER"=>$_SESSION["login_user"],
        "RL"=>$_SESSION["role"],
     );
     echo json_encode($data);
?>