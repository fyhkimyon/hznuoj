<?php
/**
 * This file is currently only for testing
 * created by HCHO @2021.05.05
 */
?>

<?php $title="tutorial"; ?>
<?php require_once "template/hznu/header.php"; ?>

<style>
  .red {
    color: red;
  }
  .green {
    color: green;
  }
  .box{
    border: 1px solid #eee;
    padding: 30px;
    margin: 25px 0 15px 0;
    box-shadow: 2px 2px 10px 0 #ccc;
  }
  .qa {
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 20px;
    border-bottom: 1px solid #eee;
  }
  #title-index {
    font-size: 95%;
  }
  @media screen and (max-width:640px){
    #content {
      display: none;
    }
  }
</style>

<div class="am-container">
  <h1 style="margin-top: 50px;">思维整理</h1>
  Thinking Arragement
  <hr>
  <div class="am-g">
    <div class="am-u-md-3" id="content">
      <div class="box" data-am-sticky="{top:60}">
        <span style="font-size: larger; margin-bottom: 20px;">Content</span>
        <ul id="title-index" class="am-list">
            <li><a href="thought_1.php" target="content">枚举</a></li>
            <li><a href="thought_2.php" target="content">递归</a></li>
            <li><a href="thought_3.php" target="content">分类讨论</a></li>
            <li><a href="thought_4.php" target="content">空间换时间</a></li>
            <li><a href="thought_5.php" target="content">面向对象</a></li>
            <li><a href="thought_6.php" target="content">模块化</a></li> 
        </ul>
      </div>
    </div>
  
    <div class="am-u-md-9">
      <!-- <div class="box" id="markdown" style="height:700px;"> -->
        <div style="height:800px;">
        <iframe name = "content" src = "thought_1.php" width = "100%" height="100% float = right" frameborder="0" scrolling="auto"></iframe>
      </div>
    </div>
  </div>
</div><!--end container-->
<?php
    require_once "template/hznu/thought_dyeing.php";
?>
<?php
    // for($problem_id in $hznu_solved_set){
    //     echo $problem_id;
    // }
?>

<?php require_once "template/hznu/footer.php" ?>