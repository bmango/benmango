<?php
/* Smarty version 5.7.0, created on 2026-07-08 15:03:05
  from 'file:CRM/Admin/Page/Job.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e589967ebc6_05695252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3db551ae255e52993ff75b64e40d2ffb115ec11' => 
    array (
      0 => 'CRM/Admin/Page/Job.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Admin/Form/Job.tpl' => 1,
    'file:CRM/common/enableDisableApi.tpl' => 1,
  ),
))) {
function content_6a4e589967ebc6_05695252 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/Admin/Page';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('action') == 1 || $_smarty_tpl->getValue('action') == 2 || $_smarty_tpl->getValue('action') == 8 || $_smarty_tpl->getValue('action') == 4) {?>
   <?php $_smarty_tpl->renderSubTemplate("file:CRM/Admin/Form/Job.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
  <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'docUrlText', null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>(How to setup cron on the command line...)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
  <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'runAllURL', null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>'civicrm/admin/runjobs','q'=>"reset=1"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
  <div class="help">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>CiviCRM relies on a number of scheduled jobs that run automatically on a regular basis. These jobs keep data up-to-date and perform other important tasks.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('runAllURL')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>For most sites, your system administrator should set up one or more 'cron' tasks to run the enabled jobs. You can also <a href="%1">run all scheduled jobs manually</a>, or run specific jobs from this screen.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('runAllURL')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"sysadmin/setup/jobs",'text'=>$_smarty_tpl->getValue('docUrlText')), $_smarty_tpl);?>

  </div>
  <div class="crm-content-block crm-block">
  <?php if ($_smarty_tpl->getValue('rows')) {?>
      <?php if ($_smarty_tpl->getValue('action') != 1 && $_smarty_tpl->getValue('action') != 2) {?>
        <div class="action-link">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/job/add','q'=>"action=add&reset=1",'id'=>"newJob",'icon'=>"plus-circle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add New Scheduled Job<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/job/add','q'=>"action=add&reset=1",'id'=>"newJob",'icon'=>"plus-circle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/joblog','q'=>"reset=1",'id'=>"jobLog",'icon'=>"list-alt"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>View Log (all jobs)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/joblog','q'=>"reset=1",'id'=>"jobLog",'icon'=>"list-alt"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
      <?php }?>

<div id="ltype">
    <?php $_smarty_tpl->renderSubTemplate("file:CRM/common/enableDisableApi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?><table class="selector row-highlight"><tr class="columnheader"><th ><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Name (Frequency)/Description<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th ><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Command/Parameters<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th ><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Last Run<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th ><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Enabled?<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></th><th ></th></tr><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?><tr id="job-<?php echo $_smarty_tpl->getValue('row')['id'];?>
" class="crm-entity <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>"odd-row,even-row"), $_smarty_tpl);?>
 <?php echo $_smarty_tpl->getValue('row')['class'];
if (!$_smarty_tpl->getValue('row')['is_active']) {?> disabled<?php }?>"><td class="crm-job-name"><strong><span data-field="name"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('row')['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></strong> (<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('row')['run_frequency'], ENT_QUOTES, 'UTF-8', true);?>
)<br/><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('description',$_smarty_tpl->getValue('row'))) {
echo htmlspecialchars((string)$_smarty_tpl->getValue('row')['description'], ENT_QUOTES, 'UTF-8', true);
}?><br /><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>API Entity:<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('row')['api_entity'], ENT_QUOTES, 'UTF-8', true);?>
<br/><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>API Action:<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <strong><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('row')['api_action'], ENT_QUOTES, 'UTF-8', true);?>
</strong><br/></td><td class="crm-job-name"><?php if ($_smarty_tpl->getValue('row')['parameters'] == null) {?><em><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>no parameters<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></em><?php } else {
echo nl2br((string) $_smarty_tpl->getSmarty()->getModifierCallback('purify')($_smarty_tpl->getValue('row')['parameters']), (bool) 1);
}?></td><td class="crm-job-name"><?php if ($_smarty_tpl->getValue('row')['last_run'] == null) {?>never<?php } else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('crmDate')($_smarty_tpl->getValue('row')['last_run'],$_smarty_tpl->getValue('config')->dateformatDatetime);
}?></td><td id="row_<?php echo $_smarty_tpl->getValue('row')['id'];?>
_status" class="crm-job-is_active"><?php if ($_smarty_tpl->getValue('row')['is_active'] == 1) {?> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Yes<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php } else { ?> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>No<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?> <?php }?></td><td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('smarty')($_smarty_tpl->getValue('row')['action'],'nodefaults'),'xx',$_smarty_tpl->getValue('row')['id']);?>
</td></tr><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></table>

    <?php if ($_smarty_tpl->getValue('action') != 1 && $_smarty_tpl->getValue('action') != 2) {?>
        <div class="action-link">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/job/add','q'=>"action=add&reset=1",'id'=>"newJob-bottom",'icon'=>"plus-circle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add New Scheduled Job<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/job/add','q'=>"action=add&reset=1",'id'=>"newJob-bottom",'icon'=>"plus-circle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/joblog','q'=>"reset=1",'id'=>"jobLog-bottom",'icon'=>"list-alt"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>View Log (all jobs)<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>'civicrm/admin/joblog','q'=>"reset=1",'id'=>"jobLog-bottom",'icon'=>"list-alt"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <?php }?>
</div>
<?php } elseif ($_smarty_tpl->getValue('action') != 1) {?>
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
?>There are no jobs configured.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
     </div>
     <div class="action-link">
       <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>'civicrm/admin/job/add','q'=>"action=add&reset=1"), $_smarty_tpl);?>
" id="newJob-nojobs" class="button"><span><i class="crm-i fa-plus-circle" role="img" aria-hidden="true"></i> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Add New Scheduled Job<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span></a>
     </div>

<?php }?>
</div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
