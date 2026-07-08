<?php
/* Smarty version 5.7.0, created on 2026-07-08 14:44:11
  from 'file:CRM/Custom/Form/Optionfields.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e542be7c991_94676079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41b37e13220bc4161154de09d07fd1f52f6f9a4' => 
    array (
      0 => 'CRM/Custom/Form/Optionfields.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e542be7c991_94676079 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/Custom/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><tr>
  <td class="label"><?php echo $_smarty_tpl->getValue('form')['option_type']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"option_type",'file'=>"CRM/Custom/Form/Field"), $_smarty_tpl);?>
</td>
  <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['option_type']['html'];?>
</td>
</tr>

<tr id="option_group" <?php if (( !true || empty($_smarty_tpl->getValue('form')['option_group_id']))) {?>class="hiddenElement"<?php }?>>
  <td class="label"><?php echo $_smarty_tpl->getValue('form')['option_group_id']['label'];?>
</td>
  <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['option_group_id']['html'];?>
</td>
</tr>

<tr id="multiple">
<td colspan="2" class="html-adjust">
    <fieldset><legend><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Multiple Choice Options<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></legend>
    <span class="description">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Enter up to ten (10) multiple choice options in this table (click 'another choice' for each additional choice). If you need more than ten options, you can create an unlimited number of additional choices using the Edit Multiple Choice Options link after saving this new field. If desired, you can mark one of the choices as the default choice. The option 'label' is displayed on the form, while the option 'value' is stored in the contact record. The label and value may be the same or different. Inactive options are hidden when the field is presented.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </span>
  <table id="optionField"><tr><th>&nbsp;</th><th> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Default<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Label<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Value<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Order<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Active?<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th></tr><?php
$_smarty_tpl->tpl_vars['__smarty_section_rowLoop'] = new \Smarty\Variable(array());
if (true) {
for ($__section_rowLoop_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rowLoop']->value['index'] = 1; $__section_rowLoop_0_iteration <= 11; $__section_rowLoop_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rowLoop']->value['index']++){
$_smarty_tpl->assign('index', ($_smarty_tpl->getValue('__smarty_section_rowLoop')['index'] ?? null), false, NULL);?><tr id="optionField_<?php echo $_smarty_tpl->getValue('index');?>
" class="form-item <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>"odd-row,even-row"), $_smarty_tpl);?>
"><td><?php if ($_smarty_tpl->getValue('index') > 1) {?><a onclick="showHideRow(<?php echo $_smarty_tpl->getValue('index');?>
); return false;" name="optionField_<?php echo $_smarty_tpl->getValue('index');?>
" href="#" class="form-link"><i class="crm-i fa-trash" title="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'htmlattribute'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>hide field or section<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'htmlattribute'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>" role="img" aria-hidden="true"></i></a><?php }?></td><td><div id="radio<?php echo $_smarty_tpl->getValue('index');?>
" style="display:none"><?php echo $_smarty_tpl->getValue('form')['default_option'][$_smarty_tpl->getValue('index')]['html'];?>
</div><div id="checkbox<?php echo $_smarty_tpl->getValue('index');?>
" style="display:none"><?php echo $_smarty_tpl->getValue('form')['default_checkbox_option'][$_smarty_tpl->getValue('index')]['html'];?>
</div></td><td> <?php echo $_smarty_tpl->getValue('form')['option_label'][$_smarty_tpl->getValue('index')]['html'];?>
</td><td> <?php echo $_smarty_tpl->getValue('form')['option_value'][$_smarty_tpl->getValue('index')]['html'];?>
</td><td> <?php echo $_smarty_tpl->getValue('form')['option_weight'][$_smarty_tpl->getValue('index')]['html'];?>
</td><td> <?php echo $_smarty_tpl->getValue('form')['option_status'][$_smarty_tpl->getValue('index')]['html'];?>
</td></tr><?php
}
}
?></table><div id="optionFieldLink" class="add-remove-link"><a onclick="showHideRow(); return false;" name="optionFieldLink" href="#" class="form-link"><i class="crm-i fa-plus-circle" role="img" aria-hidden="true"></i> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>add another choice<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></div><span id="additionalOption" class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>If you need additional options - you can add them after you Save your current entries.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>

</fieldset>
</td>
</tr>
<?php echo '<script'; ?>
 type="text/javascript">
    var showRows   = new Array(<?php echo $_smarty_tpl->getValue('showBlocks');?>
);
    var hideBlocks = new Array(<?php echo $_smarty_tpl->getValue('hideBlocks');?>
);
    var rowcounter = 0;
        on_load_init_blocks( showRows, hideBlocks, '' );

<?php if (!( !true || empty($_smarty_tpl->getValue('form')['option_group_id']))) {?>

function showOptionSelect( ) {
   if ( document.getElementsByName("option_type")[0].checked ) {
      cj('#multiple').show();
      cj('#option_group').hide();
   } else {
      cj('#multiple').hide();
      cj('#option_group').show();
   }
}
showOptionSelect( );

<?php }
echo '</script'; ?>
>


<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
