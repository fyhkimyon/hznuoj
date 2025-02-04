<?php
require_once('./include/db_info.inc.php');
require_once('./include/my_func.inc.php');
require_once('./include/setlang.php');
require_once './include/const.inc.php';

if (isset($_GET['cid'])){
    if (isset($_SESSION['contest_id']) && $_SESSION['contest_id']!=$_GET['cid']) {
        $view_errors = "<font style='color:red;text-decoration:underline;'>You can only enter the correspond contest!</font>";
        require("template/".$OJ_TEMPLATE."/error.php");
        exit(0);
    }
    
    $cid=intval($_GET['cid']);
    $view_cid=$cid;
    
    // check contest valid
    $sql="SELECT * FROM `contest` WHERE `contest_id`='$cid'"; 
    $result=$mysqli->query($sql);
    $rows_cnt=$result->num_rows;
    $contest_ok=true;
    $password="";
    if(isset($_POST['pwd'])) $password=$mysqli->real_escape_string($_POST['pwd']);
    if (get_magic_quotes_gpc ()) {
        $password = stripslashes ($password);
    }

    if ($rows_cnt==0){
        $result->free();
        $view_errors = "The Contest is Not Available!";
        return require_once("template/hznu/error.php");
    } else {
        $row=$result->fetch_object();
        if($row->user_limit=="Y" && $_SESSION['contest_id']!=$cid && !HAS_PRI("edit_contest")){
            require_once "template/hznu/contest_header.php";
            echo  "<div class='am-text-center'><font style='color:red;text-decoration:underline;'>You are not invited to this contest!</font></div>";
            require_once "template/hznu/footer.php";
            exit(0);
        }

        $view_private=$row->private;
        if($password!=""&&$password==$row->password) $_SESSION['c'.$cid]=true;
        if ($row->private && !isset($_SESSION['c'.$cid])) $contest_ok=false;
        if ($row->defunct=='Y') $contest_ok=false;
        if (HAS_PRI("edit_contest")) $contest_ok=true;
        
        if (!$contest_ok){
            $MSG_PRIVATE_WARNING = htmlEntities($MSG_PRIVATE_WARNING, ENT_QUOTES);
            $cid = htmlEntities($cid, ENT_QUOTES);
            $view_errors = "<font style='color:red;text-decoration:underline;'>$MSG_PRIVATE_WARNING</font><br>";
            $view_errors .= "Click <a href=contestrank.php?cid=$cid>HERE</a> to watch contest rank, or input password to enter it.";
            $view_errors .= "<form method=post action='contest.php?cid=$cid' class='am-form-inline am-text-center'>";
            $view_errors .= "<div class='am-form-group'>";
            $view_errors .= "<input class='am-form-field' type='password' name='pwd' placeholder='input contest password'>";
            $view_errors .= "</div>";
            $view_errors .= "<div class='am-form-group'>";
            $view_errors .= "<button class='am-btn am-btn-default' type=submit>submit</button>";
            $view_errors .= "</div>";
            $view_errors .= "</form>";
            require("template/".$OJ_TEMPLATE."/error.php");
            exit(0);
        }
        $now=time();
        $start_time=strtotime($row->start_time);
        $end_time=strtotime($row->end_time);
        $view_description=$row->description;
        $view_title= $row->title;
        $view_start_time=$row->start_time;
        $view_end_time=$row->end_time;
        $practice = $row->practice;
        $can_enter_contest = true;
        if (!HAS_PRI("edit_contest") && $now<$start_time){
            $can_enter_contest = false;
        }
    }

    
    $user_id = $mysqli->real_escape_string($_SESSION['user_id']);
    $contest_id = $mysqli->real_escape_string($_GET['cid']);
    $sql = "SELECT id, problem_id, content, reply, in_date, reply_date FROM contest_discuss WHERE user_id = '$user_id' and contest_id = '$contest_id' ORDER BY id DESC";
    $result = $mysqli->query($sql);
    $discuss_list = [];
    if ($result){
        while ($row=$result->fetch_object()) {
            array_push($discuss_list, $row);
        }
    }
    $result->free();

    $sql = "SELECT num FROM contest_problem WHERE contest_id='$contest_id' ORDER BY num";
    $res = $mysqli->query($sql);
    $problem_list=[];
    while($row=$res->fetch_object()) {
        array_push($problem_list, $row);
    }

    $sql = "SELECT id, content FROM contest_broadcast WHERE contest_id = '$contest_id' ORDER BY id DESC";
    // echo $sql;
    $broadcast_list = [];
    if ($res = $mysqli->query($sql)) {
        while ($row = $res->fetch_object()) {
            array_push($broadcast_list, $row); 
        } 
    }
    
} else {
    return require_once("template/hznu/error.php");
}


require_once "template/hznu/contest_clarifications.php";
?>