<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:52:34
  from 'file:CRM/Search/Page/Admin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e48127f4888_23981249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '211c9deb4b0b8bb77d33c21aa465b7fc9e926bed' => 
    array (
      0 => 'CRM/Search/Page/Admin.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e48127f4888_23981249 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/ext/search_kit/templates/CRM/Search/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
