<?php
/* Smarty version 5.7.0, created on 2026-07-08 14:44:11
  from 'file:CRM/Custom/Form/Field.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6a4e542be64427_76680990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd025d16fcda0ed3db60cf963d6bd98dac4d210d8' => 
    array (
      0 => 'CRM/Custom/Form/Field.tpl',
      1 => 1782947996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CRM/Core/I18n/Dialog.tpl' => 3,
    'file:CRM/Custom/Form/Optionfields.tpl' => 1,
    'file:CRM/common/formButtons.tpl' => 1,
  ),
))) {
function content_6a4e542be64427_76680990 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/benmang1/public_html/drupal-project/vendor/civicrm/civicrm-core/templates/CRM/Custom/Form';
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmScope')) {
throw new \Smarty\Exception('block tag \'crmScope\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?><div class="crm-block crm-form-block crm-custom-field-form-block">
  <table class="form-layout">
    <tr class="crm-custom-field-form-block-label">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['label']['label'];?>

        <?php if ($_smarty_tpl->getValue('action') == 2) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:CRM/Core/I18n/Dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('table'=>'civicrm_custom_field','field'=>'label','id'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
      </td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['label']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-data_type">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['data_type']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['data_type']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-file_is_public">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['file_is_public']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"file_is_public"), $_smarty_tpl);?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['file_is_public']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-html_type">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['html_type']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['html_type']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-fk_entity">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['fk_entity']['label'];?>
 <span class="crm-marker">*</span></td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['fk_entity']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-fk_entity_on_delete">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['fk_entity_on_delete']['label'];?>
 <span class="crm-marker">*</span></td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['fk_entity_on_delete']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-serialize">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['serialize']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['serialize']['html'];?>
</td>
    </tr>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('array_key_exists')('in_selector',$_smarty_tpl->getValue('form'))) {?>
      <tr class='crm-custom-field-form-block-in_selector'>
        <td class='label'><?php echo $_smarty_tpl->getValue('form')['in_selector']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"in_selector"), $_smarty_tpl);?>
</td>
        <td class='html-adjust'><?php echo $_smarty_tpl->getValue('form')['in_selector']['html'];?>
</td>
      </tr>
    <?php }?>
    <tr class="crm-custom-field-form-block-text_length"  id="textLength">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['text_length']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['text_length']['html'];?>
</td>
    </tr>

    <tr id='showoption' <?php if ($_smarty_tpl->getValue('action') == 1 || $_smarty_tpl->getValue('action') == 2) {?>class="hiddenElement"<?php }?>>
      <td colspan="2">
        <table class="form-layout-compressed">
                    <?php $_smarty_tpl->renderSubTemplate("file:CRM/Custom/Form/Optionfields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </table>
      </td>
    </tr>
    <tr id='contact_reference_group'>
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['group_id']['label'];?>
</td>
      <td class="html-adjust">
        <?php echo $_smarty_tpl->getValue('form')['group_id']['html'];?>

        &nbsp;&nbsp;<span><a class="crm-hover-button toggle-contact-ref-mode" href="#Advance"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Advanced Filter<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></span>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', 'searchPreferences', null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('crmURL')->handle(array('p'=>"civicrm/admin/setting/search",'q'=>"reset=1"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <div class="messages status no-popup"><i class="crm-i fa-exclamation-triangle" role="img" aria-hidden="true"></i> <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('searchPreferences')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>If you are planning on using this field in front-end profile, event registration or contribution forms, you should 'Limit List to Group' or configure an 'Advanced Filter'  (so that you do not unintentionally expose your entire set of contacts). Users must have either 'access contact reference fields' OR 'access CiviCRM' permission in order to use contact reference autocomplete fields. You can assign 'access contact reference fields' to the anonymous role if you want un-authenticated visitors to use this field. Use <a href='%1'>Search Preferences - Contact Reference Options</a> to control the fields included in the search results.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(1=>$_smarty_tpl->getValue('searchPreferences')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
      </td>
    </tr>
    <tr id='field_advance_filter'>
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['filter']['label'];?>
</td>
      <td class="html-adjust">
        <?php echo $_smarty_tpl->getValue('form')['filter']['html'];?>

        <span class="api3-filter-info"><a class="crm-hover-button toggle-contact-ref-mode" href="#Group"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Filter by Group<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></a></span>
        <br />
        <span class="description api3-filter-info">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Filter contact search results for this field using Contact get API parameters. EXAMPLE: To list Students in group 3:<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          <code>action=get&group=3&contact_sub_type=Student</code>
          <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"dev/api"), $_smarty_tpl);?>

        </span>
        <span class="description api4-filter-info">
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Filter search results for this field using API-style parameters<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          (<code>field=value&another_field=val1,val2</code>).<br>
          <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>EXAMPLE (Contact entity): To list Students in "Volunteers" or "Supporters" groups:<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
          <code>contact_sub_type=Student&groups:name=Volunteers,Supporters</code>
          <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('docURL')->handle(array('page'=>"dev/api"), $_smarty_tpl);?>

        </span>
      </td>
    </tr>
    <tr class="crm-custom-field-form-block-options_per_line" id="optionsPerLine">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['options_per_line']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['options_per_line']['html'],'two');?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-start_date_years" id="startDateRange">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['start_date_years']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['start_date_years']['html'];?>
 <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>years prior to current date.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="crm-custom-field-form-block-end_date_years" id="endDateRange">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['end_date_years']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['end_date_years']['html'];?>
 <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>years after the current date.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></td>
    </tr>
    <tr class="crm-custom-field-form-block-date_format"  id="includedDatePart">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['date_format']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['date_format']['html'];?>
&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getValue('form')['time_format']['label'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->getValue('form')['time_format']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-note_rows"  id="noteRows" >
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['note_rows']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['note_rows']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-note_columns" id="noteColumns" >
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['note_columns']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['note_columns']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-note_length" id="noteLength" >
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['note_length']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"note_length"), $_smarty_tpl);?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['note_length']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-weight" >
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['weight']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"weight"), $_smarty_tpl);?>
</td>
      <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['weight']['html'],'two');?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-default_value" id="hideDefault" >
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['default_value']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"default_value"), $_smarty_tpl);?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['default_value']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-help_pre">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['help_pre']['label'];?>
 <?php if ($_smarty_tpl->getValue('action') == 2) {
$_smarty_tpl->renderSubTemplate('file:CRM/Core/I18n/Dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('table'=>'civicrm_custom_field','field'=>'help_pre','id'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
}?></td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['help_pre']['html'],'huge');?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-help_post">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['help_post']['label'];?>
 <?php if ($_smarty_tpl->getValue('action') == 2) {
$_smarty_tpl->renderSubTemplate('file:CRM/Core/I18n/Dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('table'=>'civicrm_custom_field','field'=>'help_post','id'=>$_smarty_tpl->getValue('id')), (int) 0, $_smarty_current_dir);
}?></td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('crmAddClass')($_smarty_tpl->getValue('form')['help_post']['html'],'huge');?>

        <?php if ($_smarty_tpl->getValue('action') != 4) {?>
          <br />
          <span class="description"><?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>Explanatory text displayed on back-end forms. Pre help is displayed inline on the form (above the field). Post help is displayed in a pop-up - users click the help balloon to view help text.<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?></span>
        <?php }?>
      </td>
    </tr>
    <tr class="crm-custom-field-form-block-is_required">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['is_required']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"is_required"), $_smarty_tpl);?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['is_required']['html'];?>
</td>
    </tr>
    <tr id ="searchable" class="crm-custom-field-form-block-is_searchable">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['is_searchable']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"is_searchable"), $_smarty_tpl);?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['is_searchable']['html'];?>
</td>
    </tr>
    <tr id="searchByRange" class="crm-custom-field-form-block-is_search_range">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['is_search_range']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['is_search_range']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-is_active">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['is_active']['label'];?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['is_active']['html'];?>
</td>
    </tr>
    <tr class="crm-custom-field-form-block-is_view">
      <td class="label"><?php echo $_smarty_tpl->getValue('form')['is_view']['label'];?>
 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('help')->handle(array('id'=>"is_view"), $_smarty_tpl);?>
</td>
      <td class="html-adjust"><?php echo $_smarty_tpl->getValue('form')['is_view']['html'];?>
</td>
    </tr>
  </table>
  <div class="crm-submit-buttons"><?php $_smarty_tpl->renderSubTemplate("file:CRM/common/formButtons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('location'=>"bottom"), (int) 0, $_smarty_current_dir);
?></div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
  CRM.$(function($) {
    const
      $form = $('form.<?php echo $_smarty_tpl->getValue('form')['formClass'];?>
'),
      dataToHTML = <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('json')($_smarty_tpl->getValue('dataToHTML'));?>
,
      originalHtmlType = '<?php echo $_smarty_tpl->getValue('originalHtmlType');?>
',
      existingMultiValueCount = <?php if (( !$_smarty_tpl->hasVariable('existingMultiValueCount') || empty($_smarty_tpl->getValue('existingMultiValueCount')))) {?>null<?php } else {
echo $_smarty_tpl->getValue('existingMultiValueCount');
}?>,
      originalSerialize = <?php if (( !$_smarty_tpl->hasVariable('originalSerialize') || empty($_smarty_tpl->getValue('originalSerialize')))) {?>false<?php } else { ?>true<?php }?>,
      htmlTypes = CRM.utils.getOptions($('#html_type', $form)),
      htmlTypesWithOptionalSerialize = <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('json')($_smarty_tpl->getValue('htmlTypesWithOptionalSerialize'));?>
,
      htmlTypesWithMandatorySerialize = <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('json')($_smarty_tpl->getValue('htmlTypesWithMandatorySerialize'));?>
;

    // Vars used by makeDefaultValueField()
    let oldDataType = null,
      oldSerialize = null,
      oldHasOptionGroup = null,
      oldOptionGroupId = null;

    function onChangeDataType() {
      const dataType = $('#data_type', $form).val();
      const allowedHtmlTypes = htmlTypes.filter(type =>
        dataToHTML[dataType].includes(type.key)
      );
      CRM.utils.setOptions($('#html_type', $form), allowedHtmlTypes);
      if (!$('#html_type', $form).val()) {
        $('#html_type', $form).val(dataToHTML[dataType][0]).change();
      }
      // Hide html_type if there is only one option
      $('.crm-custom-field-form-block-html_type').toggle(allowedHtmlTypes.length > 1);
      customOptionHtmlType(dataType);

      // Show/hide entityReference selector
      $('.crm-custom-field-form-block-fk_entity').toggle(dataType === 'EntityReference');
      $('.crm-custom-field-form-block-fk_entity_on_delete').toggle(dataType === 'EntityReference');

      // Toggle file access
      $('tr.crm-custom-field-form-block-file_is_public').toggle(dataType === 'File');
    }

    function onChangeHtmlType() {
      const htmlType = $('#html_type', $form).val();
      const dataType = $('#data_type', $form).val();

      if (htmlTypesWithMandatorySerialize.includes(htmlType)) {
        $('#serialize', $form).prop('checked', true);
      }
      else if (!htmlTypesWithOptionalSerialize.includes(htmlType)) {
        $('#serialize', $form).prop('checked', false);
      }

      if (!['CheckBox', 'Radio'].includes(htmlType)) {
        $("#options_per_line", $form).val('');
      }

      showSearchRange(dataType);
      customOptionHtmlType();
    }

    function showSearchRange(dataType) {
      const showRange = ['Date', 'Int', 'Float', 'Money'].includes(dataType);
      $("#searchByRange", $form).toggle(showRange);
    }

    function toggleContactRefFilter(e) {
      let setSelected = $(this).attr('href');
      if (!setSelected) {
        setSelected = $('#filter_selected').val();
      } else {
        $('#filter_selected').val(setSelected.slice(1));
      }
      if (setSelected == '#Advance') {
        $('#contact_reference_group, .api4-filter-info').hide();
        $('#field_advance_filter, .api3-filter-info').show();
      } else {
        $('#field_advance_filter').hide( );
        $('#contact_reference_group').show( );
      }
      e && e.preventDefault && e.preventDefault();
    }
    $('.toggle-contact-ref-mode', $form).click(toggleContactRefFilter);

    function hasOptionGroup() {
      const dataType = $("#data_type", $form).val();
      const htmlType = $("#html_type", $form).val();
      return (['String', 'Int', 'Float', 'Money'].includes(dataType)) && !['Text', 'Hidden'].includes(htmlType);
    }

    function customOptionHtmlType() {
      const dataType = $("#data_type", $form).val();
      const htmlType = $("#html_type", $form).val();
      const serialize = $("#serialize", $form).is(':checked');

      if (!htmlType) {
        return;
      }

      if (dataType === 'ContactReference') {
        toggleContactRefFilter();
      } else if (dataType === 'EntityReference') {
        $('#field_advance_filter, .api4-filter-info').show();
        $('#contact_reference_group, .api3-filter-info').hide();
      } else {
        $('#field_advance_filter, #contact_reference_group', $form).hide();
      }

      if (hasOptionGroup()) {
        $("#showoption", $form).show();
        $("#searchByRange", $form).hide();
        const reuseOptions = $('[name=option_type]:checked', $form).val() === '2';
        $("#hideDefault", $form).toggle(reuseOptions);
      }
      else if (['String', 'Int', 'Float', 'Money'].includes(dataType)) {
        $("#hideDefault, #searchable", $form).show();
      } else {
        if (dataType === 'File') {
          $("#default_value", $form).val('');
          $("#hideDefault, #searchable", $form).hide();
        } else if (dataType === 'ContactReference') {
          $("#hideDefault").hide();
        } else {
          $("#hideDefault, #searchable", $form).show();
        }
      }

      if (['String', 'Int', 'Float', 'Money'].includes(dataType) && !['Text', 'Hidden'].includes(htmlType)) {
        if (serialize) {
          $('div[id^=checkbox]', '#optionField').show();
          $('div[id^=radio]', '#optionField').hide();
        } else {
          $('div[id^=radio]', '#optionField').show();
          $('div[id^=checkbox]', '#optionField').hide();
        }
      }

      $("#optionsPerLine", $form).toggle((htmlType === "CheckBox" || htmlType === "Radio") && dataType !== 'Boolean');

      $("#startDateRange, #endDateRange, #includedDatePart", $form).toggle(dataType === 'Date');

      $("#textLength", $form).toggle(dataType === 'String' && !serialize);

      $("#noteColumns, #noteRows, #noteLength", $form).toggle(dataType === 'Memo');

      $(".crm-custom-field-form-block-serialize", $form).toggle(htmlTypesWithOptionalSerialize.includes(htmlType) && dataType !== 'EntityReference');

      makeDefaultValueField(dataType);
    }

    function makeDefaultValueField(newDataType) {
      const field = $('#default_value', $form);
      const newSerialize = $("#serialize", $form).is(':checked');
      const newHasOptionGroup = hasOptionGroup();
      const newOptionGroupId = $('[name=option_group_id]', $form).val();

      // First, check if this function needs to run by comparing old values with new values
      if (oldDataType === newDataType && oldSerialize === newSerialize && oldHasOptionGroup === newHasOptionGroup && oldOptionGroupId === newOptionGroupId) {
        return;
      }
      // Store values for next time to ensure function doesn't run more often than necessary
      // This prevents rapidly creating/destroying/creating/destroying select2 element which can cause race condition errors
      oldDataType = newDataType;
      oldSerialize = newSerialize;
      oldHasOptionGroup = newHasOptionGroup;
      oldOptionGroupId = newOptionGroupId;

      const autocompeteApiParams = {
        formName: 'qf:<?php echo $_smarty_tpl->getValue('form')['formClass'];?>
',
        fieldName: 'CustomField.default_value',
      };
      const autocompleteSelectParams = {
        multiple: newSerialize,
      };
      field.crmDatepicker('destroy');
      field.crmAutocomplete('destroy');
      switch (newDataType) {
        case 'Date':
          field.crmDatepicker({date: 'yy-mm-dd', time: false});
          return;

        case 'Boolean':
          field.crmSelect2({data: [{id: '1', text: ts('Yes')}, {id: '0', text: ts('No')}], placeholder: ' '});
          return;

        case 'Country':
          field.crmAutocomplete('Country', autocompeteApiParams, autocompleteSelectParams);
          return;

        case 'StateProvince':
          field.crmAutocomplete('StateProvince', autocompeteApiParams, autocompleteSelectParams);
          return;
      }
      if (newHasOptionGroup && newOptionGroupId) {
        autocompeteApiParams.filters = {option_group_id: newOptionGroupId};
        autocompeteApiParams.key = 'value';
        field.crmAutocomplete('OptionValue', autocompeteApiParams, autocompleteSelectParams);
      }
    }

    // Watch changes
    $('#html_type, #is_searchable', $form).change(onChangeHtmlType);
    $('#data_type', $form).change(onChangeDataType);

    // Set initial form state
    onChangeDataType();
    onChangeHtmlType();

    // When changing the set of options, clear & rebuild the default value selector
    $('[name=option_type],[name=option_group_id],[name=serialize]', $form).click(() => {
      $('#default_value', $form).val('');
      customOptionHtmlType();
    });

    $form.submit(function() {
      const htmlType = $('#html_type', $form).val();
      const serialize = $("#serialize", $form).is(':checked');
      let htmlTypeLabel = (serialize && ['Select', 'Autocomplete-Select'].includes(htmlType)) ? ts('Multi-Select') : htmlTypes.find(item => item.key === htmlType).value;
      if (originalHtmlType && (originalHtmlType !== htmlType || originalSerialize !== serialize)) {
        let origHtmlTypeLabel = (originalSerialize && originalHtmlType === 'Select') ? ts('Multi-Select') : htmlTypes.find(item => item.key === originalHtmlType).value;
        if (originalSerialize && !serialize && existingMultiValueCount) {
          return confirm(ts('WARNING: Changing this multivalued field to singular will result in the loss of data!')
            + "\n" + ts('%1 existing records contain multiple values - the data in each of these fields will be truncated to a single value.', {1: existingMultiValueCount})
          )
        } else {
          return confirm(ts('Change this field from %1 to %2? Existing data will be preserved.', {1: origHtmlTypeLabel, 2: htmlTypeLabel}));
        }
      }
    });
  });
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->getValue('action') == 2 && !( !$_smarty_tpl->hasVariable('hasOptionGroup') || empty($_smarty_tpl->getValue('hasOptionGroup')))) {?>
  <div class="action-link">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('crmButton')) {
throw new \Smarty\Exception('block tag \'crmButton\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>"civicrm/admin/custom/group/field/option",'q'=>"reset=1&action=browse&fid=".((string)$_smarty_tpl->getValue('id'))."&gid=".((string)$_smarty_tpl->getValue('gid')),'icon'=>"pencil"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ts')) {
throw new \Smarty\Exception('block tag \'ts\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>View / Edit Multiple Choice Options<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ts')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmButton')->handle(array('p'=>"civicrm/admin/custom/group/field/option",'q'=>"reset=1&action=browse&fid=".((string)$_smarty_tpl->getValue('id'))."&gid=".((string)$_smarty_tpl->getValue('gid')),'icon'=>"pencil"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
  </div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('crmScope')->handle(array('extensionKey'=>''), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
