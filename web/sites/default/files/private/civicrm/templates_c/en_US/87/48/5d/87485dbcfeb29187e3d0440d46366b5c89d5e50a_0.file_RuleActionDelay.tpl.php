<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:54:46
  from 'file:CRM/Civirules/Form/RuleActionDelay.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e4896f1e643_26364440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87485dbcfeb29187e3d0440d46366b5c89d5e50a' => 
    array (
      0 => 'CRM/Civirules/Form/RuleActionDelay.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e4896f1e643_26364440 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Delay action<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
<div class="crm-block crm-form-block crm-civirule-rule_action_delay-block">
    <div class="crm-section">
        <div class="label"><?php echo $_smarty_tpl->getValue('form')['delay_select']['label'];?>
</div>
        <div class="content"><?php echo $_smarty_tpl->getValue('form')['delay_select']['html'];?>
</div>
        <div class="clear"></div>
    </div>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('delayClasses'), 'delayClass');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('delayClass')->value) {
$foreach0DoElse = false;
?>
        <div class="crm-section crm-delay-class" id="<?php echo $_smarty_tpl->getValue('delayClass')->getName();?>
">
            <div class="label"></div>
            <div class="content"><strong><?php echo $_smarty_tpl->getValue('delayClass')->getDescription();?>
</strong></div>
            <div class="clear"></div>
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('delayClass')->getTemplateFilename(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <div class="crm-section crm-ignore_condition_with_delay" id="div_ignore_condition_with_delay">
        <div class="label"></div>
        <div class="content">
            <?php echo $_smarty_tpl->getValue('form')['ignore_condition_with_delay']['html'];?>

            <?php echo $_smarty_tpl->getValue('form')['ignore_condition_with_delay']['label'];?>

        </div>
        <div class="clear"></div>
    </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
cj(function() {
    cj('select#delay_select').change(triggerDelayChange);

    triggerDelayChange();
});

function triggerDelayChange() {
    cj('.crm-delay-class').css('display', 'none');
    var val = cj('#delay_select').val();
    if (val) {
        cj('#'+val).css('display', 'block');
    }
}
<?php echo '</script'; ?>
>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
