<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:52:06
  from 'file:CRM/CivirulesConditions/Form/EntityTag/TagId.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47f69261f3_76268742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '454d23976eb5fe30e45eeb5e7869118d123f8e2d' => 
    array (
      0 => 'CRM/CivirulesConditions/Form/EntityTag/TagId.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_6a4e47f69261f3_76268742 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/CivirulesConditions/Form/EntityTag';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><h3><?php echo $_smarty_tpl->getValue('ruleConditionHeader');?>
</h3>
<div class="crm-block crm-form-block crm-civirule-rule_condition-block-tag_id">
    <div class="crm-section">
        <div class="label"><?php echo $_smarty_tpl->getValue('form')['tag_used_for']['label'];?>
</div>
        <div class="content crm-select-container"><?php echo $_smarty_tpl->getValue('form')['tag_used_for']['html'];?>
</div>
        <div class="clear"></div>
    </div>
    <div class="crm-section">
        <div class="label"><?php echo $_smarty_tpl->getValue('form')['tag_id']['label'];?>
</div>
        <div class="content crm-select-container"><?php echo $_smarty_tpl->getValue('form')['tag_id']['html'];?>
</div>
        <div class="clear"></div>
    </div>
</div>
<div class="crm-submit-buttons">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?>
</div><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
