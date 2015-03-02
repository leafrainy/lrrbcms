<?php 
/*
* 首页
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="main">
  <?php doAction('index_loglist_top'); ?>
  <?php get_list('1');?>
  <?php get_list('2');?>
  <div class="clear"></div>
</div>
