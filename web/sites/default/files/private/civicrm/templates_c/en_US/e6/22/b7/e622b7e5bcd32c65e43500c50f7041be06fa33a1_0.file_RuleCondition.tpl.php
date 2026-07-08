<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:56
  from 'file:CRM/Civirules/Form/RuleCondition.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47ec0ee972_87806188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e622b7e5bcd32c65e43500c50f7041be06fa33a1' => 
    array (
      0 => 'CRM/Civirules/Form/RuleCondition.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_6a4e47ec0ee972_87806188 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><h3><?php echo $_smarty_tpl->getValue('ruleConditionHeader');?>
</h3>
<div class="crm-block crm-form-block crm-civirule-rule_condition-block">
  <?php if ($_smarty_tpl->getValue('countRuleConditions') > 0) {?>
    <div class="crm-section">
      <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_condition_link_select']['label'];?>
</div>
      <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_condition_link_select']['html'];?>
</div>
      <div class="clear"></div>
    </div>
  <?php }?>
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_condition_select']['label'];?>
</div>
    <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_condition_select']['html'];?>
</div>
    <div class="clear"></div>
  </div>
</div>
<div class="crm-submit-buttons">
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
