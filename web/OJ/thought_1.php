<style>
    .box{
        border: 1px solid #eee;
        padding: 30px;
        /* margin: 25px 0 15px 0; */
        box-shadow: 2px 2px 10px 0 #ccc;
        /* width: 70%; */
    }
    li{
        line-height: 300%;
    }
    .content-block-title{
        /* font-size: large; */
        /* font-weight: bold; */
        border-bottom: 1px solid #eee;
        margin-bottom: 10px;
    }
    p a{
        text-decoration:none;
        padding:10px;
    }
    #menu { 
        font:12px verdana, arial, sans-serif; /* 设置文字大小和字体样式 */
        width: 100%;
    }
    #menu, #menu li {
        list-style:none; /* 将默认的列表符号去掉 */
        padding:0; /* 将默认的内边距去掉 */
        margin:0; /* 将默认的外边距去掉 */
        float: left; /* 往左浮动 */
        display: block;
    }
    #menu li a {
        display:block; /* 将链接设为块级元素 */
        width:150px; /* 设置宽度 */
        height:30px; /* 设置高度 */
        line-height:30px; /* 设置行高，将行高和高度设置同一个值，可以让单行文本垂直居中 */
        text-align:center; /* 居中对齐文字 */
        background:#3a90ca; /* 设置背景色 */
        color:#fff; /* 设置文字颜色 */
        text-decoration:none; /* 去掉下划线 */
        border-right:1px solid #000; /* 在左侧加上分隔线 */
    }
    #menu li a:hover {
    background:#0066CC;
    color:#fff;
    }
    #menu li a.last {
    border-right:0; /* 去掉左侧边框 */
    }
    video{
        width:50%;
        height:50%;
    }
</style>



<div class="box" style="height:550px;">
    <div class="content-block-title">
        <h2>思维介绍:</h2>
    </div>
    <p>
    枚举或者遍历一个问题所有的解决方法或者每一种情况，得到最优解。
    </p>

    <div class="content-block-title">
        <h3>视频:</h3>
    </div>
    <video src="../测试视频.mp4" controls = "controls" preload="metadata"></video>

    <br>
    <div class="content-block-title">
        <h3><span>例题链接:</span></h3>
        <ul id = "menu">
            <li><a href="../../problem.php?id=1000" target="_blank">题目一</a></li>
            <li><a href="../../problem.php?id=1001" target="_blank">题目二</a></li>
            <li><a >题目三</a></li>
        </ul>
    </div>
    
</div>
