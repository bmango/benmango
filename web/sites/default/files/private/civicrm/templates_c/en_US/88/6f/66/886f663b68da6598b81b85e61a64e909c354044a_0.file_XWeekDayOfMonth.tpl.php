<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:54:46
  from 'file:CRM/Civirules/Delay/XWeekDayOfMonth.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e4896f34e13_48698870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '886f663b68da6598b81b85e61a64e909c354044a' => 
    array (
      0 => 'CRM/Civirules/Delay/XWeekDayOfMonth.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e4896f34e13_48698870 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Delay';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('XWeekDayOfMonth_week_offset', ((string)$_smarty_tpl->getValue('delayPrefix'))."XWeekDayOfMonth_week_offset", false, NULL);
$_smarty_tpl->assign('XWeekDayOfMonth_day', ((string)$_smarty_tpl->getValue('delayPrefix'))."XWeekDayOfMonth_day", false, NULL);
$_smarty_tpl->assign('XWeekDayOfMonth_time_hour', ((string)$_smarty_tpl->getValue('delayPrefix'))."XWeekDayOfMonth_time_hour", false, NULL);
$_smarty_tpl->assign('XWeekDayOfMonth_time_minute', ((string)$_smarty_tpl->getValue('delayPrefix'))."XWeekDayOfMonth_time_minute", false, NULL);?>

<div class="label"></div>
<div class="content"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('XWeekDayOfMonth_week_offset')]['html'];?>
 <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('XWeekDayOfMonth_day')]['html'];?>
</div>
<div class="clear"></div>
<div class="label"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>After<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></div>
<div class="content"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('XWeekDayOfMonth_time_hour')]['html'];?>
 : <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('XWeekDayOfMonth_time_minute')]['html'];?>
</div>
<div class="clear"></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
