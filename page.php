<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contenttext">
	<h2><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
	<div style="clear:both;"></div>
</div><!--end #contenttext-->
<?php
 include View::getView('footer');
?>