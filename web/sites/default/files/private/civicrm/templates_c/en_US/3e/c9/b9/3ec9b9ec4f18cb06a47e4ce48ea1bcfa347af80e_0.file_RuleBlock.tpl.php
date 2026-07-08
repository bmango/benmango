<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:40
  from 'file:CRM/Civirules/Form/RuleBlocks/RuleBlock.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47dc285c99_39626226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec9b9ec4f18cb06a47e4ce48ea1bcfa347af80e' => 
    array (
      0 => 'CRM/Civirules/Form/RuleBlocks/RuleBlock.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e47dc285c99_39626226 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Form/RuleBlocks';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><h3>Rule Details</h3>
<div class="crm-block crm-form-block crm-civirule-rule_label-block">
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_label']['label'];?>
</div>
    <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_label']['html'];?>
</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_description']['label'];?>
</div>
    <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_description']['html'];?>
</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_tag_id']['label'];?>
</div>
    <div class="content select-container"><?php echo $_smarty_tpl->getValue('form')['rule_tag_id']['html'];?>
</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_help_text']['label'];?>
</div>
    <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_help_text']['html'];?>
</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_is_active']['label'];?>
</div>
    <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_is_active']['html'];?>

    <?php if (!( !$_smarty_tpl->hasVariable('clones') || empty($_smarty_tpl->getValue('clones')))) {?>
        <br><span class="description font-red"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>This rule has the following duplicate(s) : <?php echo $_smarty_tpl->getValue('clones');
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
        <br><span class="description font-red"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Enabling can result in unintended double actions<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
    <?php }?>
    </div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_created_date']['label'];?>
</div>
    <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_created_date']['value'];?>
</div>
    <div class="clear"></div>
  </div>
  <div class="crm-section">
    <div class="label"><?php echo $_smarty_tpl->getValue('form')['rule_created_contact']['label'];?>
</div>
    <div class="content"><?php echo $_smarty_tpl->getValue('form')['rule_created_contact']['value'];?>
</div>
    <div class="clear"></div>
  </div>
  <?php echo $_smarty_tpl->getValue('postRuleBlock');?>

</div>

<?php if (!( !$_smarty_tpl->hasVariable('clones') || empty($_smarty_tpl->getValue('clones')))) {?>

<?php echo '<script'; ?>
>
  CRM.$('#rule_is_active').on('change',function(){
    if(this.checked){
        CRM.alert(CRM.ts('Enabling can result in unintended double actions'))
      }}
  );
<?php echo '</script'; ?>
>

<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
