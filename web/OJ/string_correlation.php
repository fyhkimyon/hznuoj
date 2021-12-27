<?php $title="String_correlation"; ?>
<?php require_once "template/hznu/header.php"; ?>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
</script>
<style>
    .box{
      border: 1px solid #eee;
      padding: 30px 30px 0px 30px;
      margin: 25px 0 15px 0;
      box-shadow: 2px 2px 10px 0 #ccc;
    }
    .class-name-ch{
      font-size: xx-large;
    }
    .class-name-en{
      
    }
    .class-title{
      padding-bottom: 15px;
    }
    .class-description{
      color: #515151;
    }
    .content-block{
      margin-bottom: 50px;
    }
    .content-block:last-child{
      margin-bottom: 15px;
    }
    .content-block-title{
      font-size: x-large;
      font-weight: bold;
      border-bottom: 1px solid #eee;
      margin-bottom: 10px;
    }
    .content-block-body{
      padding-left: 20px;
    }
    .detail-table{
      width: 100%;
      -ms-word-break: break-all;
      word-break: break-all;
    }
    .detail-table>tbody>tr>td{
      border-left: 1px solid #eee;
      border-bottom: 1px solid #eee;
      padding: 10px;
    }
    .detail-table tr td:first-child{
      border-left: 0;
    }
    .detail-table tbody tr:last-child td{
      border-bottom: 0;
    }
    .class-mean{
      float: right;
    }
    </style>
  <div class="am-container" style="padding-top: 30px;">
    <div class="box">
      <div class="class-title">
        <div class="class-name-ch">
          <span>字符串相关专题</span>
          <div class="class-mean">
            <span class="am-badge am-badge-success am-text-xl">掌握程度</span>
          </div>
        </div>
        <div class="class-name-en">
        Mastery of string application
        </div>
        <br>
        <div class="class-name-explain">
           <p>整理习题中涉及到字符串处理的题目难易程度和字符串、数组学习中一些相关的函数，并建立评分标准来衡量用户该知识点掌握程度</p>   
        </div>
      </div>
    </div>
    <div class="am-g">
      <div class="am-u-md-8">
        <div class="box">
          <div class="content-block">
            <div class="content-block-title">
              <span><div class="keyWords">知识点：</div></span>
            </div>
            <div class="content-block-body">
              <ul>
                <li>字符串修改：<span>字符串拼接</span>、<span>字符串截取</span>、<span>字符串增长、删除</span></li>
                <li>字符串查询：<span>单字符查询</span>、<span>子串查询</span></li>
                <li>数组修改：<span>数组的增、删、改、查</span></li>
              </ul>
            </div>
           </div>
           <div class="content-block">
            <div class="content-block-title">
              <span><div class="types">常用相关函数：</div></span>
            </div>
            <div class="content-block-body">
              <table width="841" class="detail-table">
                <tbody>
                  <tr>
                     <td colspan="5">
                        <p>函数名</p>
                     </td>
                     <td colspan="5">
                        <p>调用格式</p>
                     </td>
                     <td colspan="5">
                        <p>函数作用</p>
                     </td>
                     <td>
                        <a href="https://blog.csdn.net/weixin_45695073/article/details/105488965?ops_request_misc=%257B%2522request%255Fid%2522%253A%2522162021099916780262525416%2522%252C%2522scm%2522%253A%252220140713.130102334.pc%255Fall.%2522%257D&request_id=162021099916780262525416&biz_id=0&utm_medium=distribute.pc_search_result.none-task-blog-2~all~first_rank_v2~rank_v29-3-105488965.first_rank_v2_pc_rank_v29&utm_term=c+%E5%AD%97%E7%AC%A6%E4%B8%B2%E7%9B%B8%E5%85%B3%E7%9F%A5%E8%AF%86%E7%82%B9">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>gets</p>
                     </td>
                     <td colspan="5">
                        <p>gets(StringName)</p>
                     </td>
                     <td colspan="5">
                        <p>整行读入字符串</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                  <tr>
           ,          <td colspan="5">
                        <p>fgets</p>
                     </td>
                     <td colspan="5">
                        <p>fgets(StringName, StringLength, stdin)</p>
                     </td>
                     <td colspan="5">
                        <p>整行读入（会保留末尾的换行符）或读入了StringLength-1个字符</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>scanf</p>
                     </td>
                     <td colspan="5">
                        <p>scanf("%s", StringName)</p>
                     </td>
                     <td colspan="5">
                        <p>按单词读入，丢弃末尾空白符</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>puts</p>
                     </td>
                     <td colspan="5">
                        <p>puts(StringName)</p>
                     </td>
                     <td colspan="5">
                        <p>一直打印直至遇到’\0’</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>fputs</p>
                     </td>
                     <td colspan="5">
                        <p>fputs(StringName, FileName)</p>
                     </td>
                     <td colspan="5">
                        <p>将字符串的内容写入文件，若要打印在屏幕上，FileName位置写stdout</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>printf</p>
                     </td>
                     <td colspan="5">
                        <p>printf("%s", StringName)</p>
                     </td>
                     <td colspan="5">
                        <p>可以输出不同类型的变量，详情见数据类型、转换符及标准化输入输出</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>strlen</p>
                     </td>
                     <td colspan="5">
                        <p>strlen(StringName)</p>
                     </td>
                     <td colspan="5">
                        <p>计算字符串（不算结尾空字符）长度</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>strcat(strncat)</p>
                     </td>
                     <td colspan="5">
                        <p>strcat(str1,str2)</p>
                     </td>
                     <td colspan="5">
                        <p>将字符串2拼接到字符串1后面</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>strcmp(strncmp)</p>
                     </td>
                     <td colspan="5">
                        <p>strcmp(str1,str2)</p>
                     </td>
                     <td colspan="5">
                        <p>比较两字符串的的机器排序序列（一般是ASCII码表），str2位于str1前返回正数，位于其后返回负数，二者相等返回0</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>strcpy(strncpy)</p>
                     </td>
                     <td colspan="5">
                        <p>strcpy(str1,str2);</p>
                     </td>
                     <td colspan="5">
                        <p>用第二个字符串的内容等位地覆盖第一个字符串</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>strchr(strrchr)</p>
                     </td>
                     <td colspan="5">
                        <p>strchr(str,char)</p>
                     </td>
                     <td colspan="5">
                        <p>查找字符串s中是否有字符c，若有则返回该字符首次出现的地址，若无则返回空指针</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>strstr</p>
                     </td>
                     <td colspan="5">
                        <p>strstr(str1,str2)</p>
                     </td>
                     <td colspan="5">
                        <p>查找字符串s1中是否有字符串s2，若有则返回该字符串首次出现的首地址，若无则返回空指针</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                        <p>strpbrk</p>
                     </td>
                     <td colspan="5">
                        <p>strpbrk(str1,str2)</p>
                     </td>
                     <td colspan="5">
                        <p>查找字符串s1中是否有字符串s2中的部分内容，若有则返回该部分字符串在s1中首次出现的首地址，若无则返回空指针</p>
                     </td>
                     <td>
                        <a href="https://baike.baidu.com/item/C%E8%AF%AD%E8%A8%80%E5%87%BD%E6%95%B0/1814181?fr=aladdin#1">链接</a>
                     </td>
                  </tr>
                </tbody>
              </table>
            </div>
          <div class="content-block">
            <div class="content-block-title">
              <span><div class="dataStructure">相关推荐习题:</div></span>
            </div>
            <div class="content-block-body">
            <table width="841" class="detail-table">
                <tbody>
                  <tr>
                     <td colspan="5">
                        <p>题号</p>
                     </td>
                     <td colspan="5">
                        <p>涉及知识点</p>
                     </td>
                     <td colspan="5">
                        <p>难易程度</p>
                     </td>
                  </tr> 
                   <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1995" >1995</a>
                     </td>
                     <td colspan="5">
                        <p>数组查询</p>
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
                        <p>数组查询</p>
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
                        <p>数组查询</p>
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
                        <p>字符串修改</p>
                     </td>
                     <td colspan="5">
                        <p>middle</p>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1994" >1994</a>
                     </td>
                     <td colspan="5">
                        <p>字符串查询</p>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1999" >1999</a>
                     </td>
                     <td colspan="5">
                        <p>数组修改</p>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=2001" >2001</a>
                     </td>
                     <td colspan="5">
                        <p>字符串查询</p>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=2003" >2003</a>
                     </td>
                     <td colspan="5">
                        <p>数组查询，修改</p>
                     </td>
                     <td colspan="5">
                        <p>middle</p>
                     </td>
                  </tr>    
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1986" >1986</a>
                     </td>
                     <td colspan="5">
                        <p>字符串查询、修改</p>
                     </td>
                     <td colspan="5">
                        <p>middle</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1988" >1988</a>
                     </td>
                     <td colspan="5">
                        <p>字符串修改</p>
                     </td>
                     <td colspan="5">
                        <p>middle</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1989" >1989</a>
                     </td>
                     <td colspan="5">
                        <p>字符串修改</p>
                     </td>
                     <td colspan="5">
                        <p>middle</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=1990" >1990</a>
                     </td>
                     <td colspan="5">
                        <p>数组修改</p>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr> 
                  <tr>
                     <td colspan="5">
                     <a href="problem.php?id=2004" >2004</a>
                     </td>
                     <td colspan="5">
                        <p>数组查询</p>
                     </td>
                     <td colspan="5">
                        <p>easy</p>
                     </td>
                  </tr> 
                </tbody>
              </table>
            </div>
           </div>
           <div class="content-block">
            <div class="content-block-title">
              <span><div class="scoringCriteria">评分标准:</div></span>
            </div>
            <div class="content-block-body">
              <p>熟练分加分规则：</p>
                <ol>
                  <li>
                    通过用户对字符串和数组的使用进行判分，分值视具体题目的难易程度而定。
                  </li>
                  <li>
                   整体题目分数排布呈正态，并设有某分数的加分难度下线和上线。
                  </li>
                  待更新....
                </ol>
               <p><strong>熟练等级<strong></p>
               <table width="841" class="detail-table">
                  <tbody>
                     <tr>
                        <td colspan="5">
                           <p>分数</p>
                        </td>
                        <td colspan="5">
                           <p>等级</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>0-20</p>
                        </td>
                        <td colspan="5">
                           <p>novice</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>21-40</p>
                        </td>
                        <td colspan="5">
                           <p>introduction</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>41-60</p>
                        </td>
                        <td colspan="5">
                           <p>skilled</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>61-80</p>
                        </td>
                        <td colspan="5">
                           <p>killer</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>81-100</p>
                        </td>
                        <td colspan="5">
                           <p>master</p>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
           </div>
           </div>
        </div>
      </div>
      <div class="am-u-md-4">
        <div class="am-sticky-placeholder" style="height: 182.2px; margin: 25px 0px 15px;"><div class="am-sticky-placeholder" style="height: 199.8px; margin: 0px;"><div class="box" data-am-sticky="{top:60}" style="margin: 0px;">
          <div class="content-block">
            <div class="content-block-title">
              索引
            </div>
            <div class="content-block-body">
              <ol>
                <li><a class="scroll_KnowledgePoints">知识点</a></li>
                <li><a class="scroll_types">常用相关函数</a></li>
                <li><a class="scroll_dataStructure">相应习题推荐</a></li>
                <li><a class="scroll_scoringCriteria">评分标准</a></li>
                <li><a class="scroll_top">返回顶部</li>
              </ol> 
            </div>
          </div>
          <a href="string_show.php">查看等级及习题推荐</a>
        </div></div>
      </div>
    </div>
  </div><!-- container -->
  <script type="text/javascript"> 
      jQuery(document).ready(function($){ 
      $('.scroll_top').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);}); 
      $('.scroll_KnowledgePoints').click(function(){$('html,body').animate({scrollTop:$('.keyWords').offset().top}, 800);}); 
      $('.scroll_types').click(function(){$('html,body').animate({scrollTop:$('.types').offset().top}, 800);}); 
      $('.scroll_dataStructure').click(function(){$('html,body').animate({scrollTop:$('.dataStructure').offset().top}, 800);}); 
      $('.scroll_scoringCriteria').click(function(){$('html,body').animate({scrollTop:$('.scoringCriteria').offset().top}, 800);}); 
      }); 
  </script> 

<?php require_once "template/hznu/footer.php" ?>
