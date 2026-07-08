<?php
/* Smarty version 5.7.0, created on 2026-07-08 15:08:45
  from 'file:CRM/Admin/Form/Setting/Smtp.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e59ed0a69a6_75647148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec016296690b10f07c7a7a0edd85a55230461327' => 
    array (
      0 => 'CRM/Admin/Form/Setting/Smtp.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Admin/Form/Setting/SettingField.tpl' => 1,
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_6a4e59ed0a69a6_75647148 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/Admin/Form/Setting';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if (!( !$_smarty_tpl->hasVariable('readOnlyFields') || empty($_smarty_tpl->getValue('readOnlyFields')))) {?>
  <div class="description">
    <i class="crm-i fa-lock" role="img" aria-hidden="true"></i>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Some fields are loaded as 'readonly' as they have been set (overridden) in civicrm.settings.php.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
  </div>
<?php }?>
<div class="crm-block crm-form-block crm-smtp-form-block">
  <div>
  <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>General<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
    <table class="form-layout-compressed">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('settingSections')['default']['fields'], 'fieldSpec', false, 'setting_name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('setting_name')->value => $_smarty_tpl->getVariable('fieldSpec')->value) {
$foreach0DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate("file:CRM/Admin/Form/Setting/SettingField.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </table>
  </div>
  <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')) {
throw new \Smarty\Exception('block tag \'crmRegion\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"smtp-mailer-config"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
  <div class="crm-smtp-mailer-form-block">
  <h3><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Mailer Configuration<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></h3>
  <div class="help">
    <p><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>CiviCRM offers several options to send emails. You can send a test email to check your settings by clicking "Save and Send Test Email". If you're unsure of the correct values, check with your system administrator, ISP or hosting provider.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></p>
    <p><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>If you do not want users to send outbound mail from CiviCRM, select "Disable Outbound Email". NOTE: If you disable outbound email, and you are using Online Contribution pages or online Event Registration - you will need to disable automated receipts and registration confirmations.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></p>
    <p><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>If you choose Redirect to Database, all emails will be recorded as archived mailings instead of being sent out. They can be found in the civicrm_mailing_spool table in the CiviCRM database.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></p>
  </div>
     <table>
           <tr class="crm-smtp-form-block-outBound_option">
              <td class="label"><?php echo $_smarty_tpl->getValue('form')['outBound_option']['label'];?>
</td>
              <td>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('outBound_option',$_smarty_tpl->getValue('readOnlyFields'))) {?>
                  <i class="crm-i fa-lock disabled" role="img" aria-hidden="true"></i>
                <?php }?>
                <?php echo $_smarty_tpl->getValue('form')['outBound_option']['html'];?>

              </td>
           </tr>
        </table>
            <div id="bySMTP" class="mailoption">
            <fieldset>
                <legend><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>SMTP Configuration<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></legend>
                <table class="form-layout-compressed">
                    <tr class="crm-smtp-form-block-smtpServer">
                       <td class="label"><?php echo $_smarty_tpl->getValue('form')['smtpServer']['label'];?>
</td>
                       <td>
                         <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('smtpServer',$_smarty_tpl->getValue('readOnlyFields'))) {?>
                           <i class="crm-i fa-lock disabled" role="img" aria-hidden="true"></i>
                         <?php }?>
                         <?php echo $_smarty_tpl->getValue('form')['smtpServer']['html'];?>
<br  />
                            <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Enter the SMTP server (machine) name, such as "smtp.example.com".  If the server uses SSL, add "ssl://" to the beginning of the server name, such as "ssl://smtp.example.com".<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
                       </td>
                    </tr>
                    <tr class="crm-smtp-form-block-smtpPort">
                       <td class="label"><?php echo $_smarty_tpl->getValue('form')['smtpPort']['label'];?>
</td>
                       <td>
                         <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('smtpPort',$_smarty_tpl->getValue('readOnlyFields'))) {?>
                           <i class="crm-i fa-lock disabled" role="img" aria-hidden="true"></i>
                         <?php }?>
                         <?php echo $_smarty_tpl->getValue('form')['smtpPort']['html'];?>
<br />
                           <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>The most common SMTP port possibilities are 25, 465, and 587.  Check with your mail provider for the appropriate one.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
                       </td>
                    </tr>
                    <tr class="crm-smtp-form-block-smtpAuth">
                       <td class="label"><?php echo $_smarty_tpl->getValue('form')['smtpAuth']['label'];?>
</td>
                       <td>
                         <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('smtpAuth',$_smarty_tpl->getValue('readOnlyFields'))) {?>
                           <i class="crm-i fa-lock disabled" role="img" aria-hidden="true"></i>
                         <?php }?>
                         <?php echo $_smarty_tpl->getValue('form')['smtpAuth']['html'];?>
<br />
                         <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Does your SMTP server require authentication (user name + password)?<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
                       </td>
                    </tr>
                    <tr class="crm-smtp-form-block-smtpUsername">
                       <td class="label"><?php echo $_smarty_tpl->getValue('form')['smtpUsername']['label'];?>
</td>
                       <td>
                         <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('smtpUsername',$_smarty_tpl->getValue('readOnlyFields'))) {?>
                           <i class="crm-i fa-lock disabled" role="img" aria-hidden="true"></i>
                         <?php }?>
                         <?php echo $_smarty_tpl->getValue('form')['smtpUsername']['html'];?>

                       </td>
                    </tr>
                    <tr class="crm-smtp-form-block-smtpPassword">
                       <td class="label"><?php echo $_smarty_tpl->getValue('form')['smtpPassword']['label'];?>
</td>
                       <td>
                         <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')('smtpPassword',$_smarty_tpl->getValue('readOnlyFields'))) {?>
                           <i class="crm-i fa-lock disabled" role="img" aria-hidden="true"></i>
                         <?php }?>
                         <?php echo $_smarty_tpl->getValue('form')['smtpPassword']['html'];?>
<br />
                           <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>If your SMTP server requires authentication, enter your Username and Password here.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
                       </td>
                    </tr>
                </table>
           </fieldset>
        </div>
        <div id="bySendmail" class="mailoption">
            <fieldset>
                <legend><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Sendmail Configuration<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></legend>
                   <table class="form-layout-compressed">
                     <tr class="crm-smtp-form-block-sendmail_path">
                        <td class="label"><?php echo $_smarty_tpl->getValue('form')['sendmail_path']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('form')['sendmail_path']['html'];?>
<br />
                            <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Enter the Sendmail Path. EXAMPLE: /usr/sbin/sendmail<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
                        </td>
                     </tr>
                     <tr class="crm-smtp-form-block-sendmail_args">
                        <td class="label"><?php echo $_smarty_tpl->getValue('form')['sendmail_args']['label'];?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('form')['sendmail_args']['html'];?>
</td>
                     </tr>
                    </table>
            </fieldset>
        </div>
        <div class="spacer"></div>
        <div class="crm-submit-buttons">
            <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>''), (int) 0, $_smarty_current_dir);
?>
        </div>


<?php echo '<script'; ?>
 type="text/javascript">
    CRM.$(function($) {
      var mailSetting = $("input[name='outBound_option']:checked").val( );

      var archiveWarning = "<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>WARNING: You are switching from a testing mode (Redirect to Database) to a live mode. Check Mailings > Archived Mailings, and delete any test mailings that are not in Completed status prior to running the mailing cron job for the first time. This will ensure that test mailings are not actually sent out.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array('escape'=>'js'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>";

        showHideMailOptions( $("input[name='outBound_option']:checked").val( ) ) ;

        function showHideMailOptions( value ) {
            switch( value ) {
              case "0":
                $("#bySMTP").show( );
                $("#bySendmail").hide( );
                $("#_qf_Smtp_refresh_test").prop('disabled', false);
                if (mailSetting == '5') {
                  alert(archiveWarning);
                }
              break;
              case "1":
                $("#bySMTP").hide( );
                $("#bySendmail").show( );
                $("#_qf_Smtp_refresh_test").prop('disabled', false);
                if (mailSetting == '5') {
                  alert(archiveWarning);
                }
              break;
              case "3":
                $('.mailoption').hide();
                $("#_qf_Smtp_refresh_test").prop('disabled', false);
                if (mailSetting == '5') {
                  alert(archiveWarning);
                }
              break;
              default:
                $("#bySMTP").hide( );
                $("#bySendmail").hide( );
                $("#_qf_Smtp_refresh_test").prop('disabled', true);
            }
        }

        $("input[name='outBound_option']").click( function( ) {
            showHideMailOptions( $(this).val( ) );
        });
    });

<?php echo '</script'; ?>
>

  </div>
  <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmRegion')->handle(array('name'=>"smtp-mailer-config"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
