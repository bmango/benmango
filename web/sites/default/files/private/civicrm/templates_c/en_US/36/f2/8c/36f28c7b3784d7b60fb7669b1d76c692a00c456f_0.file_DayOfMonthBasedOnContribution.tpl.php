<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:54:46
  from 'file:CRM/Civirules/Delay/DayOfMonthBasedOnContribution.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e4896f39293_98170874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36f28c7b3784d7b60fb7669b1d76c692a00c456f' => 
    array (
      0 => 'CRM/Civirules/Delay/DayOfMonthBasedOnContribution.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e4896f39293_98170874 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Delay';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('day_of_month', ((string)$_smarty_tpl->getValue('delayPrefix'))."day_of_month", false, NULL);?>
<div class="label"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('day_of_month')]['label'];?>
</div>
<div class="content"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('day_of_month')]['html'];?>
</div>
<div class="clear"></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
