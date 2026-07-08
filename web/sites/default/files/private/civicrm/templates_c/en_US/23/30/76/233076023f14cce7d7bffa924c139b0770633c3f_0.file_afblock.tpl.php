<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:24
  from 'file:afform/customGroups/afblock.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47cced4e15_35292961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '233076023f14cce7d7bffa924c139b0770633c3f' => 
    array (
      0 => 'afform/customGroups/afblock.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e47cced4e15_35292961 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/ext/afform/core/templates/afform/customGroups';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('group')['help_pre']) {?>
  <div class="af-markup"><?php echo $_smarty_tpl->getValue('group')['help_pre'];?>
</div>
<?php }?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')['field_names'], 'field_name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_name')->value) {
$foreach0DoElse = false;
?>
    <af-field name="<?php if (!$_smarty_tpl->getValue('group')['is_multiple']) {
echo $_smarty_tpl->getValue('group')['name'];?>
.<?php }
echo $_smarty_tpl->getValue('field_name');?>
" />
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->getValue('group')['help_post']) {?>
  <div class="af-markup"><?php echo $_smarty_tpl->getValue('group')['help_post'];?>
</div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
