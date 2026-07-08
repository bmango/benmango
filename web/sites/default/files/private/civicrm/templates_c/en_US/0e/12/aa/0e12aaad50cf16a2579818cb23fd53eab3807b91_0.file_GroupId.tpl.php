<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:55:04
  from 'file:CRM/CivirulesActions/GroupContact/Form/GroupId.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e48a8812509_99346386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e12aaad50cf16a2579818cb23fd53eab3807b91' => 
    array (
      0 => 'CRM/CivirulesActions/GroupContact/Form/GroupId.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_6a4e48a8812509_99346386 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/CivirulesActions/GroupContact/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><h3><?php echo $_smarty_tpl->getValue('ruleActionHeader');?>
</h3>
<div class="crm-block crm-form-block crm-civirule-rule_action-block-group-contact">
  <div class="help"><?php echo $_smarty_tpl->getValue('ruleActionHelp');?>
</div>
    <div class="crm-section">
        <div class="label"><?php echo $_smarty_tpl->getValue('form')['type']['label'];?>
</div>
        <div class="content"><?php echo $_smarty_tpl->getValue('form')['type']['html'];?>
</div>
        <div class="clear"></div>
    </div>
    <div class="crm-section groups-single">
        <div class="label"><?php echo $_smarty_tpl->getValue('form')['group_id']['label'];?>
</div>
        <div class="content"><?php echo $_smarty_tpl->getValue('form')['group_id']['html'];?>
</div>
        <div class="clear"></div>
    </div>
    <div class="crm-section groups-multiple" style="display: none;">
        <div class="label"><?php echo $_smarty_tpl->getValue('form')['group_ids']['label'];?>
</div>
        <div class="content"><?php echo $_smarty_tpl->getValue('form')['group_ids']['html'];?>
</div>
        <div class="clear"></div>
    </div>
</div>
<div class="crm-submit-buttons">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
    cj(function() {
        cj('select#type').change(triggerTypeChange);

        triggerTypeChange();
    });

    function triggerTypeChange() {
        cj('.groups-multiple').css('display', 'none');
        cj('.groups-single').css('display', 'none');
        var val = cj('#type').val();
        if (val == 0 ) {
            cj('.groups-single').css('display', 'block');
        } else {
            cj('.groups-multiple').css('display', 'block');
        }
    }
<?php echo '</script'; ?>
>


<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
