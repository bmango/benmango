<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:40
  from 'file:CRM/Civirules/Form/RuleBlocks/TriggerBlock.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47dc28c8f7_36857341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0025049ee809d016965ce35742200e6f38ba01f3' => 
    array (
      0 => 'CRM/Civirules/Form/RuleBlocks/TriggerBlock.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e47dc28c8f7_36857341 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Form/RuleBlocks';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><h3>Linked Trigger</h3>
<div class="crm-block crm-form-block crm-civirule-trigger-block">
  <?php if (( !true || empty($_smarty_tpl->getValue('form')['rule_trigger_label']['value']))) {?>
    <div class="crm-section">
      <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_trigger_select']['label'];?>
</div>
      <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_trigger_select']['html'];?>
</div>
      <div class="clear"></div>
    </div>
  <?php } else { ?>
    <div class="crm-section">
      <div id="civirule_triggerBlock-wrapper">
        <p class="bold"><?php echo $_smarty_tpl->getValue('form')['rule_trigger_label']['value'];?>
</p>
        <?php if ($_smarty_tpl->getValue('triggerDescription')) {?><p class="description"><?php echo $_smarty_tpl->getValue('triggerDescription');?>
</p><?php }?>
        <?php if ($_smarty_tpl->getValue('trigger_edit_params')) {?>
          <br><a class="button edit-button" href="<?php echo $_smarty_tpl->getValue('trigger_edit_params');?>
"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('icon')) {
throw new \Smarty\Exception('block tag \'icon\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-pencil"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-pencil"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Edit trigger parameters<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a>
        <?php }?>
      </div>
    </div>
  <?php }?>
</div>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
