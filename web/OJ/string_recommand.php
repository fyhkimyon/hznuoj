<?php $user=$_SESSION['user_id'];if($user==FALSE)include_once "loginpage.php"?>
<?php $user=$_SESSION['user_id'];if($user==FALSE)exit(0)?>
<?php
    // ini_set('display_errors', 'On');
    // ini_set('display_startup_errors', 'On');
    // error_reporting(E_ALL);
    $cache_time=10; 
    $OJ_CACHE_SHARE=false;
    // check user
    $user=$_SESSION['user_id'];
    if (!is_valid_user_name($user)){
        echo "No such User!";
        exit(0);
    }
    $user_mysql=$mysqli->real_escape_string($user);
    //显示用户id
    // echo "user_mysql:";
    // echo $user_mysql;
    //寻找AC代码
    // $sql="SELECT  solution_id FROM `solution` WHERE `user_id`='$user_mysql' AND result=4";
    // $result=$mysqli->query($sql);
    // while($row=$result->fetch_object()){
    //     $solutionid=$row->solution_id;
    //     $sql2="SELECT * FROM `source_code` WHERE solution_id='$solutionid'";
    //     $result2=$mysqli->query($sql2);
    //     $row2=$result2->fetch_object();
    //     $source_code=$row2->source;
    //     // echo $source_code;
    //     // print_r($row2->source);
    //     $result2->free();
    //     // 显示提取的原代码
    //     echo "<br>solution_id:";
    //     echo $solutionid;
    //     echo "<br>";
    //     echo "<pre style='background-color: transparent;'><code style='background-color: transparent;'>";
    //     echo htmlentities(str_replace("\r\n","\n",$source_code),ENT_QUOTES,"utf-8");
    //     echo "</code></pre>";
    // }
?>
<?php
    require_once "template/hznu/header.php";
    $keywords=array("int","char","string","[","]");
    ini_set('display_errors', 'On');
    ini_set('display_startup_errors', 'On');
    error_reporting(E_ALL);
    $cache_time=10; 
    $OJ_CACHE_SHARE=false;
    function search($string){
        global $user_mysql,$mysqli; 
        $selectcnt=0;
        //寻找AC代码
        $sql="SELECT  solution_id FROM `solution` WHERE `user_id`='$user_mysql' AND result=4";
        $result=$mysqli->query($sql);
        while($row=$result->fetch_object()){
            $solutionid=$row->solution_id;
            $sql2="SELECT * FROM `source_code` WHERE solution_id='$solutionid'";
            $result2=$mysqli->query($sql2);
            $row2=$result2->fetch_object();
            $source_code=$row2->source;
            // echo $source_code;
            // print_r($row2->source);
            $result2->free();
            // 显示提取的原代码
            // echo "<br>solution_id:";
            // echo $solutionid;
            // echo "<br>";
            // echo "<pre style='background-color: transparent;'><code style='background-color: transparent;'>";
            // echo htmlentities(str_replace("\r\n","\n",$source_code),ENT_QUOTES,"utf-8");
            // echo "</code></pre>";
            $pos=strrpos($source_code,$string);
            if($pos!=false){
                $selectcnt+=1;
            }
        }
        //显示次数
        // echo "<br>cnt:";
        // echo $selectcnt;
        $result->free();
        return $selectcnt;
    }
    // function test(){
    //     echo "hello world!";
    // }
    function color_font($color){
       return "#000";
    }
    function result($selectcnt){
        $search_name="none";
        if($selectcnt>0){
            if($selectcnt<=10)$search_name="novice";
            else if($selectcnt<=50)$search_name="introduction";
            else if($selectcnt<=100)$search_name="skilled";
            else if($selectcnt<=300)$search_name="killer";
            else if($selectcnt>300)$search_name="master";
        }   
        // if($selectcnt==0)$color="#000000";
        // else if($selectcnt<=10)$color="#fffacd";
        // else if($selectcnt<=50)$color="#90ee90";
        // else if($selectcnt<=100)$color="#87CEFA";
        // else if($selectcnt<=300)$color="#BA55D3";
        // else if($selectcnt>300)$color="#FF0000";
        // $rever_color=color_font($color);
        // $res1=hex2rgb($color);
        // echo $res1;
        // echo $rever_color;
        if($selectcnt==0)echo "<div style='background:#fff;color:#000'>".$search_name."</div>";
        else echo "<div style='background:#fff;color:#000'>".$search_name."</div>";
    }
?>
<style>
    table{ 
    border-collapse:collapse;border:none; 
    } 
    td{ border:#ccc solid 1px; padding:5px; }
    .box{
      border: 1px solid #eee;
      padding: 30px 10px 50px 10px;
      margin: 25px 0px 15px 0;
      box-shadow: 2px 2px 10px 0 #ccc;
    }
    p{
        /* background-color:red; */
        margin:10px;
    }
</style>
<div class="am-container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <style type="text/css">
        .solution-info {
            display: inline-block;
            margin: 5px;
        }
        </style>
        <div class="box">
            <div class="content-block-body">
                <h1 align="center">推荐题目列表</h1>
                  <div class="am-text-center">
                    <div class="solution-info">
                        <table width="1200" class="detail-table">
                        <tbody>
                            <tr>
                     <td colspan="5">
                        <p>题号</p>
                     </td>
                     <td colspan="5">
                        <p>难易程度</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1000" >1000</a>
                     </td>
                     <td colspan="5">
                        <p>****</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1001" >1001</a>
                     </td>
                     <td colspan="5">
                        <p>****</p>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1995" >1995</a>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1987" >1987</a>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=2000" >2000</a>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1991" >1991</a>
                     </td>
                     <td colspan="5">
                        <p>middle</p>
                     </td>
                  </tr>
                        </tbody>
                        </table>
                    </div>
                  </div>
            </div>
        </div>
        <?php
        // test();
        echo "<hr>";
        echo "<div class='box'>";
        echo "<h1 align='center'>熟练等级</h1>";
        echo "<div class='am-text-center'>";
        echo "<div class='solution-info'>";
        echo " <table width='1200' class='detail-table'>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td colspan='3'>";
        echo "<p>分数</p>";
        echo "</td>";
        echo "<td colspan='7'>";
        echo "<p>等级</p>";
        echo "</td>";
        echo "</tr>";
        $sum=count($keywords);
        $ans=0; 
        for($i=0;$i<$sum;){
            for($j=1;$j<=5;$j++){
                $ans+=search($keywords[$i++]);
                if($i==$sum)break;
            }
            if($i==$sum)break;
            echo "</tr>";
        }
        echo "<tr>";
            echo "<td colspan='3'>";
            echo "<p>".$ans."</p>";
            echo "</td>";
            echo "<td colspan='7'>";
            result($ans);
            echo "</td>";
        echo "</tr>";

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        ?>
        <!-- <table width="841" class="detail-table">
            <tbody>
                <tr>
                <td colspan="5">
                    <p>熟练度</p>
                </td>
                <td colspan="5">
                    <p>颜色</p>
                </td>
                </tr>
            </tbody>
        </table> -->
    </div>
</div> <!-- /container -->
<?php require_once "template/hznu/footer.php" ?>
<!-- highlight.js START-->
<link href="/OJ/plugins/highlight/styles/github-gist.css" rel="stylesheet">
<script src="/OJ/plugins/highlight/highlight.pack.js"></script>
<script src="/OJ/plugins/highlight/highlightjs-line-numbers.min.js"></script>
<style type="text/css">
    .hljs-line-numbers {
        text-align: right;
        border-right: 1px solid #ccc;
        color: #999;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
</style>
<script>
    hljs.initHighlightingOnLoad();
    hljs.initLineNumbersOnLoad();
</script>
<!-- highlight.js END-->



