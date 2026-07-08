<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:25
  from 'file:CRM/common/info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47cd42c2a1_13746158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '436f90bbbf8e5442d9e4242de53983dc6e515ae1' => 
    array (
      0 => 'CRM/common/info.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e47cd42c2a1_13746158 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/common';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoMessage'),'nodefaults') || $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoTitle'),'nodefaults')) {?>
  <div class="messages status <?php echo $_smarty_tpl->getValue('infoType');?>
"<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoOptions'),'nodefaults')) {?> data-options='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoOptions'),'nodefaults');?>
'<?php }?>>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('icon')) {
throw new \Smarty\Exception('block tag \'icon\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <span class="msg-title"><?php echo $_smarty_tpl->getValue('infoTitle');?>
</span>
    <span class="msg-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('purify')($_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('infoMessage'),'nodefaults'));?>
</span>
  </div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
