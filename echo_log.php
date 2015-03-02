<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<!--面包屑起-->
<div id="headmap">​
	<span>当前位置</span>&nbsp;&nbsp;<a href="<?php echo BLOG_URL;?>">首页</a> >><?php blog_sort($logid); ?>
</div>
<!--面包屑完-->

<div id="content">
<div id="contenttext">
	<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<p class="date">发布时间：<?php echo gmdate('Y-n-j G:i', $date); ?> <?php editflg($logid,$author); ?>
	</p>
<div id="function">
	<a href="javascript:window.print()" class="print">打印</a>
</div>
	<?php echo $log_content; ?>
	
	<?php doAction('log_related', $logData); ?>
	
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>