<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:25
  from 'file:afform/AfformAngularModule.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47cd514b47_79820085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '466f1e828923d14c28d3ede2c17736b1b988d6cd' => 
    array (
      0 => 'afform/AfformAngularModule.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e47cd514b47_79820085 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/ext/afform/core/templates/afform';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
(function(angular, $, _) {
  angular.module('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
', CRM.angRequires('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
'));
  angular.module('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
').directive('<?php echo $_smarty_tpl->getValue('afform')['camel'];?>
', function(afCoreDirective) {
    return afCoreDirective(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('json')($_smarty_tpl->getValue('afform')['camel']);?>
, <?php echo json_encode($_smarty_tpl->getValue('afform')['meta']);?>
, {
      templateUrl: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('json')($_smarty_tpl->getValue('afform')['templateUrl']);?>

    });
  });
})(angular, CRM.$, CRM._);

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
