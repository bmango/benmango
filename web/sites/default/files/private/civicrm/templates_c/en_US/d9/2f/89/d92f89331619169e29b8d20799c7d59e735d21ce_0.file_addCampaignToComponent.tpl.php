<?php
/* Smarty version 5.7.0, created on 2026-07-08 15:04:55
  from 'file:CRM/Campaign/Form/addCampaignToComponent.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e590774ea48_68830573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd92f89331619169e29b8d20799c7d59e735d21ce' => 
    array (
      0 => 'CRM/Campaign/Form/addCampaignToComponent.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e590774ea48_68830573 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/Campaign/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('campaignInfo')['showAddCampaign']) {?>

  <tr class="<?php echo $_smarty_tpl->getValue('campaignTrClass');?>
">
    <td class="label"><?php echo $_smarty_tpl->getValue('form')['campaign_id']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"campaign_id",'file'=>"CRM/Campaign/Form/addCampaignToComponent.hlp"), $_smarty_tpl);?>
</td>
    <td class="view-value"><?php echo $_smarty_tpl->getValue('form')['campaign_id']['html'];?>
</td>
  </tr>

<?php }?>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
