<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:25
  from 'file:CRM/Afform/Page/AfformBase.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47cd431263_65027754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811720ec0799c70633d9e4cb3fd6571644ab1838' => 
    array (
      0 => 'CRM/Afform/Page/AfformBase.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e47cd431263_65027754 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/ext/afform/core/templates/CRM/Afform/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><crm-angular-js modules="afformStandalone">
  <form id="bootstrap-theme" ng-controller="AfformStandalonePageCtrl">
    <h1 style="display: none" crm-page-title ng-if="afformTitle" initial-document-title="<?php echo $_smarty_tpl->getValue('afformTitle');?>
" initial-page-title="<?php echo $_smarty_tpl->getValue('afformTitle');?>
">
      {{ afformTitle }}
    </h1>
    <<?php echo $_smarty_tpl->getValue('directive');?>
></<?php echo $_smarty_tpl->getValue('directive');?>
>
  </form>
</crm-angular-js>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
