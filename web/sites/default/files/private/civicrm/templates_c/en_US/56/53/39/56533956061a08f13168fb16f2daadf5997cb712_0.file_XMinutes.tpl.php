<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:54:46
  from 'file:CRM/Civirules/Delay/XMinutes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e4896f24844_61081338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56533956061a08f13168fb16f2daadf5997cb712' => 
    array (
      0 => 'CRM/Civirules/Delay/XMinutes.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e4896f24844_61081338 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Delay';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('xminutes_minuteOffset', ((string)$_smarty_tpl->getValue('delayPrefix'))."xminutes_minuteOffset", false, NULL);?>
<div class="label"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('xminutes_minuteOffset')]['label'];?>
</div>
<div class="content"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('xminutes_minuteOffset')]['html'];?>
</div>
<div class="clear"></div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
