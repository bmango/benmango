<?php
/* Smarty version 5.7.0, created on 2026-07-08 13:51:40
  from 'file:CRM/Civirules/Form/Rule.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e47dc27e7a6_57072197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21750e3036c84e945341ca69c613666b3e89ffd4' => 
    array (
      0 => 'CRM/Civirules/Form/Rule.tpl',
      1 => 1783514716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 2,
    'file:CRM/Civirules/Form/RuleBlocks/RuleBlock.tpl' => 1,
    'file:CRM/Civirules/Form/RuleBlocks/TriggerBlock.tpl' => 1,
  ),
))) {
function content_6a4e47dc27e7a6_57072197 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/web/sites/default/files/civicrm/ext/civirules/templates/CRM/Civirules/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>'org.civicoop.civirules'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
  <?php if ($_smarty_tpl->getValue('action') != 1) {?>
  <div class="crm-submit-buttons">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"top"), (int) 0, $_smarty_current_dir);
?>
  </div>
  <?php }?>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/Civirules/Form/RuleBlocks/RuleBlock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php $_smarty_tpl->renderSubTemplate("file:CRM/Civirules/Form/RuleBlocks/TriggerBlock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php if ($_smarty_tpl->getValue('action') != 1) {?>
    <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Linked Condition(s)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
    <crm-angular-js modules="afsearchRuleConditions">
      <div id='bootstrap-theme'>
        <afsearch-rule-conditions options="{rule_id: <?php echo $_smarty_tpl->getValue('rule')->id;?>
}">
        </afsearch-rule-conditions>
      </div>
    </crm-angular-js>
    <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Linked Action(s)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
    <crm-angular-js modules="afsearchRuleActions">
      <div id='bootstrap-theme'>
        <afsearch-rule-actions options="{rule_id: <?php echo $_smarty_tpl->getValue('rule')->id;?>
}">
        </afsearch-rule-actions>
      </div>
    </crm-angular-js>
    <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Trigger History<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
    <crm-angular-js modules="afsearchRuleTriggerHistory">
      <div id='bootstrap-theme'>
        <afsearch-rule-trigger-history options="{rule_id: <?php echo $_smarty_tpl->getValue('rule')->id;?>
}">
        </afsearch-rule-trigger-history>
      </div>
    </crm-angular-js>
  <?php }?>

  <div class="crm-submit-buttons">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?>
  </div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>'org.civicoop.civirules'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
