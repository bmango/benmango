<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:54:46
  from 'file:CRM/Civirules/Form/RuleAction.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e4896f133b6_20802732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a2873e938ca78ea558dae473048a6ca04ac626' => 
    array (
      0 => 'CRM/Civirules/Form/RuleAction.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Civirules/Form/RuleActionDelay.tpl' => 1,
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_6a4e4896f133b6_20802732 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><h3><?php echo $_smarty_tpl->getValue('ruleActionHeader');?>
</h3>
<div class="crm-block crm-form-block crm-civirule-rule_action-block">
    <?php if ((!( !$_smarty_tpl->hasVariable('action_label') || empty($_smarty_tpl->getValue('action_label'))))) {?>
        <div class="crm-section">
            <div class="label"></div>
            <div class="content"><?php echo $_smarty_tpl->getValue('action_label');?>
</div>
            <div class="clear"></div>
        </div>
    <?php } else { ?>
        <div class="crm-section">
            <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_action_select']['label'];?>
</div>
            <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_action_select']['html'];?>
</div>
            <div class="clear"></div>
        </div>
    <?php }?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:CRM/Civirules/Form/RuleActionDelay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="crm-submit-buttons">
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
