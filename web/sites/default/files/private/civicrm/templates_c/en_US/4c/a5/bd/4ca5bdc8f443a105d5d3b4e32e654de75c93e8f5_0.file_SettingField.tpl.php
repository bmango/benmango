<?php
/* Smarty version 5.7.0, created on 2026-07-08 15:08:45
  from 'file:CRM/Admin/Form/Setting/SettingField.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e59ed0bd503_20029599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ca5bdc8f443a105d5d3b4e32e654de75c93e8f5' => 
    array (
      0 => 'CRM/Admin/Form/Setting/SettingField.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e59ed0bd503_20029599 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/Admin/Form/Setting';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><tr class="crm-setting-form-block-<?php echo $_smarty_tpl->getValue('setting_name');?>
">
  <td class="label">
    <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('setting_name')]['label'];?>

    <?php if (!( !true || empty($_smarty_tpl->getValue('fieldSpec')['help_text'])) || !( !true || empty($_smarty_tpl->getValue('fieldSpec')['help_markup']))) {?>
      <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>((string)$_smarty_tpl->getValue('setting_name')),'title'=>$_smarty_tpl->getValue('fieldSpec')['title'],'file'=>'CRM/Admin/Form/Setting/SettingField'), $_smarty_tpl);?>

    <?php }?>
  </td>
  <td>
    <?php if (!( !$_smarty_tpl->hasVariable('readOnlyFields') || empty($_smarty_tpl->getValue('readOnlyFields'))) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('setting_name'),$_smarty_tpl->getValue('readOnlyFields'))) {?>
      <i class="crm-i fa-lock disabled" role="img" aria-hidden="true"></i>
    <?php }?>
    <?php if (!( !true || empty($_smarty_tpl->getValue('fieldSpec')['wrapper_element']))) {?>
      <?php echo $_smarty_tpl->getValue('fieldSpec')['wrapper_element'][0];
echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('setting_name')]['html'];
echo $_smarty_tpl->getValue('fieldSpec')['wrapper_element'][1];?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('setting_name')]['html'];?>

    <?php }?>
    <?php if (!( !true || empty($_smarty_tpl->getValue('fieldSpec')['description']))) {?>
      <div class="description">
        <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('fieldSpec')['description'], ENT_QUOTES, 'UTF-8', true);?>

      </div>
    <?php }?>
  </td>
</tr>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
