<?php
/* Smarty version 5.7.0, created on 2026-07-08 15:04:55
  from 'file:CRM/Admin/Form/MailSettings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e5907743d37_77521140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a92f6fde92ae18f9b41be99410a514a2d37811fe' => 
    array (
      0 => 'CRM/Admin/Form/MailSettings.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/common/formButtons.tpl' => 2,
    'file:CRM/Campaign/Form/addCampaignToComponent.tpl' => 1,
  ),
))) {
function content_6a4e5907743d37_77521140 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/Admin/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="crm-block crm-form-block crm-mail-settings-form-block">
  <?php if ($_smarty_tpl->getValue('action') == 8) {?>
    <div class="messages status no-popup">
      <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('icon')) {
throw new \Smarty\Exception('block tag \'icon\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('icon')->handle(array('icon'=>"fa-info-circle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>WARNING: Deleting this option will result in the loss of mail settings data.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Do you want to continue?<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
    <div class="crm-submit-buttons"><?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?></div>
  <?php } else { ?>
    <table class="form-layout-compressed">

      <tr class="crm-mail-settings-form-block-name"><td class="label"><?php echo $_smarty_tpl->getValue('form')['name']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['name']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Name of this group of settings.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-server"><td class="label"><?php echo $_smarty_tpl->getValue('form')['server']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['server']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Name or IP address of mail server machine.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-username"><td class="label"><?php echo $_smarty_tpl->getValue('form')['username']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['username']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Username to use when polling (for IMAP and POP3).<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-password"><td class="label"><?php echo $_smarty_tpl->getValue('form')['password']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['password']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Password to use when polling (for IMAP and POP3).<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-localpart"><td class="label"><?php echo $_smarty_tpl->getValue('form')['localpart']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['localpart']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Optional local part (e.g., 'civimail+' for addresses like civimail+s.1.2@example.com).<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-domain"><td class="label"><?php echo $_smarty_tpl->getValue('form')['domain']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['domain']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Email address domain (the part after @).<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-return_path"><td class="label"><?php echo $_smarty_tpl->getValue('form')['return_path']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'return_path'), $_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->getValue('form')['return_path']['html'];?>
</td><tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Contents of the Return-Path header.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-protocol"><td class="label"><?php echo $_smarty_tpl->getValue('form')['protocol']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['protocol']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Name of the protocol to use for polling.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-source"><td class="label"><?php echo $_smarty_tpl->getValue('form')['source']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['source']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Folder to poll from when using IMAP (will default to INBOX when empty), path to poll from when using Maildir, etc..<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-is_ssl"><td class="label"><?php echo $_smarty_tpl->getValue('form')['is_ssl']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['is_ssl']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Whether to use SSL for IMAP and POP3 or not.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-is_default"><td class="label"><?php echo $_smarty_tpl->getValue('form')['is_default']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['is_default']['html'];?>
</td></tr>
      <tr><td class="label">&nbsp;</td><td class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>How this mail account will be used. Only one box may be used for bounce processing. It will also be used as the envelope email when sending mass mailings.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td></tr>

      <tr class="crm-mail-settings-form-block-is_non_case_email_skipped"><td class="label">&nbsp;</td><td><?php echo $_smarty_tpl->getValue('form')['is_non_case_email_skipped']['html'];
echo $_smarty_tpl->getValue('form')['is_non_case_email_skipped']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'is_non_case_email_skipped'), $_smarty_tpl);?>
</td></tr>

      <tr class="crm-mail-settings-form-block-is_contact_creation_disabled_if_no_match"><td class="label">&nbsp;</td><td><?php echo $_smarty_tpl->getValue('form')['is_contact_creation_disabled_if_no_match']['html'];
echo $_smarty_tpl->getValue('form')['is_contact_creation_disabled_if_no_match']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'is_contact_creation_disabled_if_no_match'), $_smarty_tpl);?>
</td></tr>

      <tr class="crm-mail-settings-form-block-activity_type_id"><td class="label"><?php echo $_smarty_tpl->getValue('form')['activity_type_id']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'activity_type_id'), $_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->getValue('form')['activity_type_id']['html'];?>
</td></tr>

      <tr class="crm-mail-settings-form-block-activity_status"><td class="label"><?php echo $_smarty_tpl->getValue('form')['activity_status']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['activity_status']['html'];?>
</td></tr>

      <?php $_smarty_tpl->renderSubTemplate("file:CRM/Campaign/Form/addCampaignToComponent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('campaignTrClass'=>"crm-mail-settings-form-block-campaign_id"), (int) 0, $_smarty_current_dir);
?>

      <tr class="crm-mail-settings-form-block-activity_source"><td class="label"><?php echo $_smarty_tpl->getValue('form')['activity_source']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>'activity_source'), $_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->getValue('form')['activity_source']['html'];?>
</td></tr>
      <tr class="crm-mail-settings-form-block-activity_targets"><td class="label"><?php echo $_smarty_tpl->getValue('form')['activity_targets']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['activity_targets']['html'];?>
</td></tr>
      <tr class="crm-mail-settings-form-block-activity_assignees"><td class="label"><?php echo $_smarty_tpl->getValue('form')['activity_assignees']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['activity_assignees']['html'];?>
</td></tr>

      <tr class="crm-mail-settings-form-block-is_active"><td class="label"><?php echo $_smarty_tpl->getValue('form')['is_active']['label'];?>
</td><td><?php echo $_smarty_tpl->getValue('form')['is_active']['html'];?>
</td></tr>
    </table>

    <div class="crm-submit-buttons"><?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?></div>
  <?php }?>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
  CRM.$(function($) {
    var $form = $('form.<?php echo $_smarty_tpl->getValue('form')['formClass'];?>
');
    function showActivityFields() {
      var fields = [
        '.crm-mail-settings-form-block-activity_status',
        '.crm-mail-settings-form-block-is_non_case_email_skipped',
        '.crm-mail-settings-form-block-is_contact_creation_disabled_if_no_match',
        '.crm-mail-settings-form-block-activity_type_id',
        '.crm-mail-settings-form-block-campaign_id',
        '.crm-mail-settings-form-block-activity_source',
        '.crm-mail-settings-form-block-activity_targets',
        '.crm-mail-settings-form-block-activity_assignees',
        '.crm-mail-settings-form-block-is_active',
      ];
      $(fields.join(', '), $form).toggle($(this).val() === '0');
    }
    $('select[name="is_default"]').each(showActivityFields).change(showActivityFields);
  });
<?php echo '</script'; ?>
>

<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
