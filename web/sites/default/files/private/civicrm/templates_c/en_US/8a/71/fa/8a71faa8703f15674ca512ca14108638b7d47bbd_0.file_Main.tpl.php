<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:52:34
  from 'file:Civi/Angular/Page/Main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e48127ffca3_02765967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a71faa8703f15674ca512ca14108638b7d47bbd' => 
    array (
      0 => 'Civi/Angular/Page/Main.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e48127ffca3_02765967 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/Civi/Angular/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
 type="text/javascript">
  if (CRM.hasOwnProperty('angularRoute') && CRM.angularRoute) {
    location.hash = CRM.angularRoute;
  }
<?php echo '</script'; ?>
>

<crm-angular-js modules="crmApp">
  <div ng-view></div>
</crm-angular-js>


<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
