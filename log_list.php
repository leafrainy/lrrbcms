<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<!--banner start-->
<div class="banner">
	<div id="babox">
		<div id="baimg" >
			<div ><img src="<?php echo TEMPLATE_URL; ?>images/top/1.jpg"/></div>
			<div><img src="<?php echo TEMPLATE_URL; ?>images/top/2.jpg" /></div>
		</div>
		<div id="sort">
			<span><a>自定义一</a><br/><a>自定义五</a></span>
			<span><a>自定义二</a><br/><a>自定义六</a></span>
			<span><a>自定义三</a><br/><a>自定义七</a></span>
			<span><a>自定义四</a><br/><a>自定义八</a></span>
			<div id="aboutme">
				<div id="attend">关注我们：
					<a href="#" class="sina" title="新浪"></a> 
					<a href="#" class="wx" title="微信"></a> 
				</div><!--attend end-->
				<div id="abtext">
				www.boc.cn
				</div>
			</div><!--aboutme end-->
		</div><!--sort end-->
    </div><!--babox end-->
</div>
 <!--banner end-->
<!--公告和滚动橱窗 start-->
<div id="babox">
	<div class="msg1">
		<div class="tabs">
			<ul class="tabnav">
				<li>重要公告</li>
				<li>企业动态</li>
			</ul>
			<ol id="tabnavzd">
			<?php getTopLogs(5);?>
			</ol>
		</div><!--tabs end-->
	</div><!--msg1 end-->
	<div class="msg2">
		<div class="msg2_title">商品展示</div>
		<div id="chuchuang">
			<div id="inchuchuang">
				<div id="chuchuang1">
					<a href="#"><img src="<?php echo TEMPLATE_URL; ?>images/product/1.png" border="0" /></a>
					<a href="#"><img src="<?php echo TEMPLATE_URL; ?>images/product/2.png"  border="0" /></a>
					<a href="#"><img src="<?php echo TEMPLATE_URL; ?>images/product/3.png"  border="0" /></a>
					<a href="#"><img src="<?php echo TEMPLATE_URL; ?>images/product/4.png" border="0" /></a>
					<a href="#"><img src="<?php echo TEMPLATE_URL; ?>images/product/5.png" border="0" /></a>
				</div>
			<div id="chuchuang2"></div>
		    </div>
	   </div>
	</div>
</div><!--babox end-->
<!--滚动橱窗-->
<script>
<!--
var speed=20;
var tab=document.getElementById("chuchuang");
var tab1=document.getElementById("chuchuang1");
var tab2=document.getElementById("chuchuang2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
-->
</script>

<!--公告和滚动橱窗 end-->

<div id="content">
<div class="allsort">
<?php if($pageurl == Url::logPage()){ ?>
<?php include View::getView('index'); ?>
<?php }else{ ?>
<?php doAction('index_loglist_top'); ?>
<div class="allsort_main">
  <?php foreach($logs as $value): ?>
  <div class="wz_title">
    <?php topflg($value['top']); ?>
    <a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a>
    <span>日期：<?php echo gmdate('Y-n-j G:i', $value['date']); ?><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;";?>浏览：<?php echo $value['views']; ?>&nbsp;次</span>
  </div>
 
  
  <?php endforeach; ?>
  <div class="navigation"><div class="pagination"><?php echo $page_url;?></div></div>
</div>
<?php } ?>
</div>
	<div id="listlink">
		<ul class="fixed">
			<li>友情链接:</li>
		<ul><?php widget_link($title);?></ul>
	</div>
<?php
 include View::getView('footer');
?>