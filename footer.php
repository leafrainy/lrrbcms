<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->
<div style="clear:both;"></div>
<div id="footerbar">
	<div id="footercopy">
		<div id="footerarea">
			<p>
			<a href="#">网站地图</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">版权声明</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">使用条款</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a>
			</p>
			Copyright©  All Rights Reserved. Powered by <a href="http://www.emlog.net" title="采用emlog系统">emlog.</a> Theme by <a href="http://blog.gt520.com" target="_blank">叶雨梧桐.</a><?php echo $footer_info; ?>
			<?php doAction('index_footer'); ?>
		</div>
	</div>
</div><!--end #footerbar-->
</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>