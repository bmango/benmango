<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:54:46
  from 'file:CRM/Civirules/Delay/DelayBasedOnDateField.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e4896f3f8e6_42553994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b601e6183a8f1885d928f474832cb345b1a6f3' => 
    array (
      0 => 'CRM/Civirules/Delay/DelayBasedOnDateField.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e4896f3f8e6_42553994 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Delay';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('modifier', ((string)$_smarty_tpl->getValue('delayPrefix'))."modifier", false, NULL);
$_smarty_tpl->assign('amount', ((string)$_smarty_tpl->getValue('delayPrefix'))."amount", false, NULL);
$_smarty_tpl->assign('unit', ((string)$_smarty_tpl->getValue('delayPrefix'))."unit", false, NULL);
$_smarty_tpl->assign('entity', ((string)$_smarty_tpl->getValue('delayPrefix'))."entity", false, NULL);
$_smarty_tpl->assign('field', ((string)$_smarty_tpl->getValue('delayPrefix'))."field", false, NULL);?>

<div class="label"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('entity')]['label'];?>
</div>
<div class="content"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('entity')]['html'];?>
</div>
<div class="clear"></div>
<div class="label"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('field')]['label'];?>
</div>
<div class="content"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('field')]['html'];?>
</div>
<div class="clear"></div>

<div class="label"></div>
<div class="content"><?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('modifier')]['html'];?>
 <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('amount')]['html'];?>
 <?php echo $_smarty_tpl->getValue('form')[$_smarty_tpl->getValue('unit')]['html'];?>
</div>
<div class="clear"></div>


<?php echo '<script'; ?>
 type="text/javascript">
var prefix = '<?php echo $_smarty_tpl->getValue('delayPrefix');?>
';

cj(function() {
    var all_fields = cj('#'+prefix+'field').html();

    cj('#'+prefix+'entity').change(function() {
        var val = cj('#'+prefix+'entity').val();
        cj('#'+prefix+'field').html(all_fields);
        cj('#'+prefix+'field option').each(function(index, el) {
            if (cj(el).val().indexOf(val+'_') != 0) {
                cj(el).remove();
            }
        });
    });
    cj('#'+prefix+'entity').trigger('change');
});
<?php echo '</script'; ?>
>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
