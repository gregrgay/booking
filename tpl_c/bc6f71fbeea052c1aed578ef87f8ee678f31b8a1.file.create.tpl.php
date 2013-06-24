<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:02:48
         compiled from "/Applications/MAMP/htdocs/phpScheduleIttest/lib/Common/../../tpl/Reservation/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17935296051c86da818a435-93573617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc6f71fbeea052c1aed578ef87f8ee678f31b8a1' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIttest/lib/Common/../../tpl/Reservation/create.tpl',
      1 => 1372089640,
      2 => 'file',
    ),
    '1c428a71af9c537216633fc588e7a893eb6884af' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIttest/lib/Common/../../tpl/globalheader.tpl',
      1 => 1372087771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17935296051c86da818a435-93573617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ReservationUserName' => 0,
    'UserId' => 0,
    'CanChangeUser' => 0,
    'ResourceName' => 0,
    'ResourceId' => 0,
    'ScheduleId' => 0,
    'ShowAdditionalResources' => 0,
    'AvailableAccessories' => 0,
    'StartDate' => 0,
    'StartPeriods' => 0,
    'period' => 0,
    'SelectedStart' => 0,
    'selected' => 0,
    'EndDate' => 0,
    'EndPeriods' => 0,
    'SelectedEnd' => 0,
    'HideRecurrence' => 0,
    'RepeatTerminationDate' => 0,
    'Description' => 0,
    'UploadsEnabled' => 0,
    'MaxUploadSize' => 0,
    'RemindersEnabled' => 0,
    'ShowUserDetails' => 0,
    'ShowParticipation' => 0,
    'Attributes' => 0,
    'attribute' => 0,
    'ReservationId' => 0,
    'ReferenceNumber' => 0,
    'ReservationAction' => 0,
    'ReturnUrl' => 0,
    'AvailableResources' => 0,
    'resource' => 0,
    'AdditionalResourceIds' => 0,
    'checked' => 0,
    'accessory' => 0,
    'RepeatType' => 0,
    'RepeatInterval' => 0,
    'RepeatMonthlyType' => 0,
    'RepeatWeekdays' => 0,
    'day' => 0,
    'ReminderTimeStart' => 0,
    'ReminderTimeEnd' => 0,
    'ReminderIntervalStart' => 0,
    'ReminderIntervalEnd' => 0,
    'Participants' => 0,
    'user' => 0,
    'Invitees' => 0,
    'Accessories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c86da88b4f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c86da88b4f8')) {function content_51c86da88b4f8($_smarty_tpl) {?>

<?php /*  Call merged included template "globalheader.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cssFiles'=>'css/reservation.css,css/jquery.qtip.min.css'), 0, '17935296051c86da818a435-93573617');
content_51c86da81dcc9($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "globalheader.tpl" */?>


<div id="reservationbox">

<form id="reservationForm" method="post" enctype="multipart/form-data">
<div class="reservationHeader">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CreateReservationHeading"),$_smarty_tpl);?>
</h3>
</div>
<div id="reservationDetails">
    <ul class="no-style">
        <li>
            <span id="userName"><?php echo $_smarty_tpl->tpl_vars['ReservationUserName']->value;?>
</span> <input id="userId"
                                                                     type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>

                                                                     value="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"/>
		<?php if ($_smarty_tpl->tpl_vars['CanChangeUser']->value){?>
            <a href="#" id="showChangeUsers">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Change'),$_smarty_tpl);?>
)</a>

            <div id="changeUserDialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangeUser'),$_smarty_tpl);?>
" class="dialog"></div>
		<?php }?>
        </li>
        <li style="display:none;" id="changeUsers">
            <input type="text" id="changeUserAutocomplete" class="input" style="width:250px;"/>
            |
            <button id="promptForChangeUsers" type="button" class="button" style="display:inline">
                <img src="img/users.png"/>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllUsers'),$_smarty_tpl);?>

            </button>
        </li>
    </ul>
    <ul class="no-style">
        <li class="inline">
            <div>
                <div style="float:left;">
                    <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceList"),$_smarty_tpl);?>
</label><br/>

                    <div id="resourceNames" style="display:inline">
                        <a href="#" class="resourceDetails"><?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>
</a>
                        <input class="resourceId" type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"/>
                        <input type="hidden" id="scheduleId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
"/>
                    </div>
				<?php if ($_smarty_tpl->tpl_vars['ShowAdditionalResources']->value){?>
                    <a href="#"
                       onclick="$('#dialogAddResources').dialog('open'); return false;">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoreResources'),$_smarty_tpl);?>

                        )</a>
				<?php }?>
                    <div id="additionalResources"></div>
                </div>
                <div style="float:right;">
				<?php if (count($_smarty_tpl->tpl_vars['AvailableAccessories']->value)>0){?>
                    <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Accessories"),$_smarty_tpl);?>
</label>
                    <a href="#" id="addAccessoriesPrompt">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
)</a>

                    <div id="accessories"></div>
				<?php }?>
                </div>
            </div>
            <div style="clear:both;height:0;">&nbsp;</div>
        </li>
        <li>
            <label for="BeginDate" style="width:50px;display:inline-block;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
            <input type="text" id="BeginDate" class="dateinput" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>
"/>
            <input type="hidden" id="formattedBeginDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>

                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
            <select id="BeginPeriod" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_PERIOD'),$_smarty_tpl);?>
 class="pulldown" style="width:150px">
			<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StartPeriods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value){
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['period']->value->IsReservable()){?>
					<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['SelectedStart']->value){?>
						<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(' selected="selected"', null, 0);?>
					<?php }?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['period']->value->Begin();?>
"<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['period']->value->Label();?>
</option>
				<?php }?>
			<?php } ?>
            </select>
        </li>
        <li>
            <label for="EndDate" style="width:50px;display:inline-block;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
            <input type="text" id="EndDate" class="dateinput" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>
"/>
            <input type="hidden" id="formattedEndDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>

                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
            <select id="EndPeriod" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_PERIOD'),$_smarty_tpl);?>
 class="pulldown" style="width:150px">
			<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EndPeriods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value){
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['period']->value->BeginDate()->IsMidnight()){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['period']->value->Begin();?>
"<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['period']->value->Label();?>
</option>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['period']->value->IsReservable()){?>
					<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['SelectedEnd']->value){?>
						<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(' selected="selected"', null, 0);?>
					<?php }?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['period']->value->End();?>
"<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['period']->value->LabelEnd();?>
</option>
				<?php }?>
			<?php } ?>
            </select>
        </li>
        <li>
            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationLength'),$_smarty_tpl);?>
</label>

            <div class="durationText">
                <span id="durationDays">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
,
                <span id="durationHours">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>

            </div>
        </li>
	<?php if ($_smarty_tpl->tpl_vars['HideRecurrence']->value){?>
        <li style="display:none">
			<?php }else{ ?>
    <li>
	<?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"RecurrenceControl",'RepeatTerminationDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>

    </li>
        <li class="rsv-box-l">
            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ReservationTitle"),$_smarty_tpl);?>
<br/>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"RESERVATION_TITLE",'class'=>"input",'tabindex'=>"100",'value'=>"ReservationTitle"),$_smarty_tpl);?>

            </label>
        </li>
        <li class="rsv-box-l">
            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ReservationDescription"),$_smarty_tpl);?>
<br/>
                <textarea id="description" name="<?php echo FormKeys::DESCRIPTION;?>
" class="input-area" rows="2" cols="52"
                          tabindex="110"><?php echo $_smarty_tpl->tpl_vars['Description']->value;?>
</textarea>
            </label>
        </li>
	<?php if ($_smarty_tpl->tpl_vars['UploadsEnabled']->value){?>
        <li>
            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AttachFile'),$_smarty_tpl);?>
<br/>
                <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_FILE'),$_smarty_tpl);?>
 /> <span class="note">(<?php echo $_smarty_tpl->tpl_vars['MaxUploadSize']->value;?>

                    MB <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Maximum'),$_smarty_tpl);?>
)</span>
            </label>
        </li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['RemindersEnabled']->value){?>
        <li>
            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SendReminder'),$_smarty_tpl);?>
</label> <br/>

            <div id="reminderOptionsStart">
                <input type="checkbox" class="reminderEnabled" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'START_REMINDER_ENABLED'),$_smarty_tpl);?>
/>
                <input type="text" size="3" maxlength="3" value="15" class="reminderTime textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'START_REMINDER_TIME'),$_smarty_tpl);?>
/>
                <select class="reminderInterval textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'START_REMINDER_INTERVAL'),$_smarty_tpl);?>
>
                    <option value="<?php echo ReservationReminderInterval::Minutes;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</option>
                    <option value="<?php echo ReservationReminderInterval::Hours;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</option>
                    <option value="<?php echo ReservationReminderInterval::Days;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</option>
                </select>
                <span class="reminderLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReminderBeforeStart'),$_smarty_tpl);?>
</span>
            </div>
            <div id="reminderOptionsEnd">
                <input type="checkbox" class="reminderEnabled" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_REMINDER_ENABLED'),$_smarty_tpl);?>
/>
                <input type="text" size="3" maxlength="3" value="15" class="reminderTime textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_REMINDER_TIME'),$_smarty_tpl);?>
/>
                <select class="reminderInterval textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_REMINDER_INTERVAL'),$_smarty_tpl);?>
>
					<option value="<?php echo ReservationReminderInterval::Minutes;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</option>
					<option value="<?php echo ReservationReminderInterval::Hours;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</option>
					<option value="<?php echo ReservationReminderInterval::Days;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</option>
                </select>
                <span class="reminderLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReminderBeforeEnd'),$_smarty_tpl);?>
</span>
            </div>
        </li>
	<?php }?>
    </ul>
</div>
<!--
<?php if ($_smarty_tpl->tpl_vars['ShowUserDetails']->value&&$_smarty_tpl->tpl_vars['ShowParticipation']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ("Reservation/participation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
<?php echo $_smarty_tpl->getSubTemplate ("Reservation/private-participation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
-->
<div style="clear:both;">&nbsp;</div>

<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>0){?>
<div class="customAttributes">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
</h3>
    <ul>
		<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
            <li class="customAttribute">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value),$_smarty_tpl);?>

            </li>
		<?php } ?>
    </ul>
</div>
<div style="clear:both;">&nbsp;</div>
<?php }?>

<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'reservation_id'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationId']->value;?>
"/>
<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'reference_number'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
"/>
<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'reservation_action'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationAction']->value;?>
"/>
<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 id="hdnSeriesUpdateScope"
       value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>

<div style="float:left;">

    &nbsp;

</div>
<div style="float:right;">

    <button type="button" class="button save create">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Create'),$_smarty_tpl);?>

    </button>

    <button type="button" class="button" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
'">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>

    </button>
</div>

<?php if ($_smarty_tpl->tpl_vars['UploadsEnabled']->value){?>
	
	
<?php }?>
</form>

<div id="dialogAddResources" class="dialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddResources'),$_smarty_tpl);?>
" style="display:none;">

<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AvailableResources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value){
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess){?>
		<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
		<?php if (is_array($_smarty_tpl->tpl_vars['AdditionalResourceIds']->value)&&in_array($_smarty_tpl->tpl_vars['resource']->value->Id,$_smarty_tpl->tpl_vars['AdditionalResourceIds']->value)){?>
			<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('checked="checked"', null, 0);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['resource']->value->Id==$_smarty_tpl->tpl_vars['ResourceId']->value){?>
			<?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('checked="checked"', null, 0);?>
		<?php }?>

        <p>
            <input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ADDITIONAL_RESOURCES','multi'=>true),$_smarty_tpl);?>
 id="additionalResource<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                   value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 />
            <label for="additionalResource<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</label>
        </p>
	<?php }?>
<?php } ?>
    <br/>
    <button id="btnConfirmAddResources" class="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
    <button id="btnClearAddResources" class="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
</div>

<div id="dialogAddAccessories" class="dialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddAccessories'),$_smarty_tpl);?>
" style="display:none;">
    <table width="100%">
        <tr>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Accessory'),$_smarty_tpl);?>
</td>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuantityRequested'),$_smarty_tpl);?>
</td>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuantityAvailable'),$_smarty_tpl);?>
</td>
        </tr>
	<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AvailableAccessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value){
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
</td>
            <td>
                <input type="hidden" class="name" value="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
"/>
                <input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
"/>
				<?php if ($_smarty_tpl->tpl_vars['accessory']->value->QuantityAvailable==1){?>
                    <input type="checkbox" name="accessory<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
" value="1" size="3"/>
					<?php }else{ ?>
                    <input type="text" name="accessory<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
" value="0" size="3"/>
				<?php }?>
            </td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['accessory']->value->QuantityAvailable)===null||$tmp==='' ? '&infin;' : $tmp);?>
</td>
        </tr>
	<?php } ?>
    </table>
    <br/>
    <button id="btnConfirmAddAccessories" class="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
    <button id="btnCancelAddAccessories" class="button"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
</div>

<div id="dialogSave" style="display:none;">
    <div id="creatingNotification" style="position:relative; top:170px;">
	
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreatingReservation'),$_smarty_tpl);?>
...<br/>
	
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif",'alt'=>"Creating reservation"),$_smarty_tpl);?>

    </div>
    <div id="result" style="display:none;"></div>
</div>
<!-- reservationbox ends -->
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"BeginDate",'AltId'=>"formattedBeginDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndDate",'AltId'=>"formattedEndDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndRepeat",'AltId'=>"formattedEndRepeat",'DefaultDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>


<script type="text/javascript" src="scripts/js/jquery.textarea-expander.js"></script>
<script type="text/javascript" src="scripts/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="scripts/js/jquery.form-3.09.min.js"></script>
<script type="text/javascript" src="scripts/resourcePopup.js"></script>
<script type="text/javascript" src="scripts/date-helper.js"></script>
<script type="text/javascript" src="scripts/recurrence.js"></script>
<script type="text/javascript" src="scripts/reservation.js"></script>
<script type="text/javascript" src="scripts/autocomplete.js"></script>
<script type="text/javascript" src="scripts/force-numeric.js"></script>
<script type="text/javascript" src="scripts/reservation-reminder.js"></script>

<script type="text/javascript">

    $(document).ready(function ()
    {
        var scopeOptions = {
            instance:'<?php echo SeriesUpdateScope::ThisInstance;?>
',
            full:'<?php echo SeriesUpdateScope::FullSeries;?>
',
            future:'<?php echo SeriesUpdateScope::FutureInstances;?>
'
        };

        var reservationOpts = {
            additionalResourceElementId:'<?php echo FormKeys::ADDITIONAL_RESOURCES;?>
',
            accessoryListInputId:'<?php echo FormKeys::ACCESSORY_LIST;?>
[]',
            returnUrl:'<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
',
            scopeOpts:scopeOptions,
            createUrl:'ajax/reservation_save.php',
            updateUrl:'ajax/reservation_update.php',
            deleteUrl:'ajax/reservation_delete.php',
            userAutocompleteUrl:"ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
            changeUserAutocompleteUrl:"ajax/autocomplete.php?type=<?php echo AutoCompleteType::MyUsers;?>
"
        };

        var recurOpts = {
            repeatType:'<?php echo $_smarty_tpl->tpl_vars['RepeatType']->value;?>
',
            repeatInterval:'<?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
',
            repeatMonthlyType:'<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
',
            repeatWeekdays:[<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatWeekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
$_smarty_tpl->tpl_vars['day']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
,<?php } ?>]
        };

        var reminderOpts = {
            reminderTimeStart:'<?php echo $_smarty_tpl->tpl_vars['ReminderTimeStart']->value;?>
',
            reminderTimeEnd:'<?php echo $_smarty_tpl->tpl_vars['ReminderTimeEnd']->value;?>
',
            reminderIntervalStart:'<?php echo $_smarty_tpl->tpl_vars['ReminderIntervalStart']->value;?>
',
            reminderIntervalEnd:'<?php echo $_smarty_tpl->tpl_vars['ReminderIntervalEnd']->value;?>
'
        };

        var recurrence = new Recurrence(recurOpts);
        recurrence.init();

        var reservation = new Reservation(reservationOpts);
        reservation.init('<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
');

        var reminders = new Reminder(reminderOpts);
        reminders.init();

	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Participants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        reservation.addParticipant("<?php echo strtr($_smarty_tpl->tpl_vars['user']->value->FullName, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", "<?php echo strtr($_smarty_tpl->tpl_vars['user']->value->UserId, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
	<?php } ?>

	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Invitees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        reservation.addInvitee("<?php echo strtr($_smarty_tpl->tpl_vars['user']->value->FullName, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", '<?php echo $_smarty_tpl->tpl_vars['user']->value->UserId;?>
');
	<?php } ?>

	<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value){
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
        reservation.addAccessory('<?php echo $_smarty_tpl->tpl_vars['accessory']->value->AccessoryId;?>
', '<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
', "<?php echo strtr($_smarty_tpl->tpl_vars['accessory']->value->Name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
	<?php } ?>

        var ajaxOptions = {
            target:'#result', // target element(s) to be updated with server response
            beforeSubmit:reservation.preSubmit, // pre-submit callback
            success:reservation.showResponse  // post-submit callback
        };

        $('#reservationForm').submit(function ()
        {
            $(this).ajaxSubmit(ajaxOptions);
            return false;
        });
        $('#description').TextAreaExpander();


    });
</script>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:02:48
         compiled from "/Applications/MAMP/htdocs/phpScheduleIttest/lib/Common/../../tpl/globalheader.tpl" */ ?>
<?php if ($_valid && !is_callable('content_51c86da81dcc9')) {function content_51c86da81dcc9($_smarty_tpl) {?>
<?php echo '<?xml';?> version="1.0" encoding="<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
		xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $_smarty_tpl->tpl_vars['HtmlLang']->value;?>
" xml:lang="<?php echo $_smarty_tpl->tpl_vars['HtmlLang']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['HtmlTextDirection']->value;?>
">
<head>
	<title><?php if ($_smarty_tpl->tpl_vars['TitleKey']->value!=''){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['TitleKey']->value,'args'=>$_smarty_tpl->tpl_vars['TitleArgs']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<?php }?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"/>
	<meta name="robots" content="noindex" />
<?php if ($_smarty_tpl->tpl_vars['ShouldLogout']->value){?>
	<meta http-equiv="REFRESH" content="<?php echo $_smarty_tpl->tpl_vars['SessionTimeoutSeconds']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php?<?php echo QueryStringKeys::REDIRECT;?>
=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
">
<?php }?>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
favicon.ico"/>
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
favicon.ico"/>
	<?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value){?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/js/jquery-ui-1.9.0.custom.min.js"></script>
	<?php }else{ ?>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
	<?php }?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/phpscheduleit.js"></script>
	<!-- <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/menubar.js"></script> -->
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/menu_new.js"></script>
	<style type="text/css">
		@import url(<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
css/nav.css);
		@import url(<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
css/style.css);
		<?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value){?>
			@import url(<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/css/smoothness/jquery-ui-1.9.0.custom.min.css);
		<?php }else{ ?>
			@import url(//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/smoothness/jquery-ui.css);
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cssFiles']->value!=''){?>
			<?php $_smarty_tpl->tpl_vars['CssFileList'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['cssFiles']->value), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CssFileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value){
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			@import url(<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
);
			<?php } ?>
		<?php }?>
		@import url('<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
');
		<?php if ($_smarty_tpl->tpl_vars['CssExtensionFile']->value!=''){?>
			@import url('<?php echo $_smarty_tpl->tpl_vars['CssExtensionFile']->value;?>
');
		<?php }?>
	</style>

	<?php if ($_smarty_tpl->tpl_vars['printCssFiles']->value!=''){?>
		<?php $_smarty_tpl->tpl_vars['PrintCssFileList'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['printCssFiles']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PrintCssFileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value){
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
		<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
' media='print' />
		<?php } ?>
	<?php }?>

	<script type="text/javascript">
		$(document).ready(function () {
		initMenu();
		});
	</script>
</head>
<body>
<div id="wrapper">
<a href="#content" class="skiplink" accesskey="c">jump to content (c)</a><a href="#menu" class="skiplink" accesskey="m">jump to main navigation (m)</a>
	<div id="doc">
		<div id="logo" class=".fl-site-link"><a href="<?php echo $_smarty_tpl->tpl_vars['HomeUrl']->value;?>
">
		<span>Inclusive Design Institute</span></a>
		<br style="clear:both;" /></div>
		
		<div id="header">
			<div id="header-top">
				<div id="signout">
				<?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value){?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"SignedInAs"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
<br/><a
						href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"SignOut"),$_smarty_tpl);?>
</a>
					<?php }else{ ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NotSignedIn"),$_smarty_tpl);?>
<br/>
					<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
index.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LogIn"),$_smarty_tpl);?>
</a>
				<?php }?>
				</div>
			</div>
			<div role="navigation" aria-label="Main menu" id="navigation" class="fl-site-nav-main">
			<div class="idi-nav-links">
			<a name="mainnav" title="main navigation"></a>
			<ul id="menu">
			<li class="mainli" class><a href="http://inclusivedesign.ca" id="home">Home</a></li>
					<li class="mainli" ><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::BROWSE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Browse"),$_smarty_tpl);?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value){?>
				<li class="mainli"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::DASHBOARD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Dashboard"),$_smarty_tpl);?>
</a></li>
				<li class="mainli"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PROFILE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"MyAccount"),$_smarty_tpl);?>
</a>
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PROFILE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Profile"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangePassword"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::NOTIFICATION_PREFERENCES;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NotificationPreferences"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PARTICIPATION;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OpenInvitations"),$_smarty_tpl);?>
</a></li>
					</ul>
				</li>
				<li class="mainli"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Schedule"),$_smarty_tpl);?>
</a>
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::SCHEDULE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Bookings"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::MY_CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"MyCalendar"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceCalendar"),$_smarty_tpl);?>
</a></li>
						<!--<li><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Current Status"),$_smarty_tpl);?>
</a></li>-->
						<!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::OPENINGS;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FindAnOpening"),$_smarty_tpl);?>
</a></li>-->
					</ul>
				</li>
			<?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value){?>
				<li class="mainli"><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ApplicationManagement'),$_smarty_tpl);?>
</a>
					<ul>
						<li><a
								href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageReservations"),$_smarty_tpl);?>
</a>
							<ul>
								<li><a
										href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a></li>
							</ul>
						</li>
						<li><a
								href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a></li>
						<li><a
								href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a>
							<ul>
								<li><a
										href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_accessories.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAccessories"),$_smarty_tpl);?>
</a></li>
							</ul>
						</li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_quotas.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageQuotas"),$_smarty_tpl);?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_announcements.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAnnouncements"),$_smarty_tpl);?>
</a></li>
						<li><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Customization"),$_smarty_tpl);?>
</a>
								<ul>
									<li><a
											href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_attributes.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Attributes"),$_smarty_tpl);?>
</a></li>
									<?php if ($_smarty_tpl->tpl_vars['EnableConfigurationPage']->value){?><li><a
											href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_configuration.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageConfiguration"),$_smarty_tpl);?>
</a></li>
									<?php }?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_theme.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LookAndFeel"),$_smarty_tpl);?>
</a></li>
								</ul>
							</li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/server_settings.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ServerSettings"),$_smarty_tpl);?>
</a></li>
					</ul>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CanViewResponsibilities']->value){?>
				<li><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Responsibilities'),$_smarty_tpl);?>
</a>
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['CanViewGroupAdmin']->value){?>
							<li><a
									href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupReservations'),$_smarty_tpl);?>
</a>
							</li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value||$_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value){?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value){?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceReservations'),$_smarty_tpl);?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value){?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedule_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ScheduleReservations'),$_smarty_tpl);?>
</a></li>
						<?php }?>
					</ul>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CanViewReports']->value){?>
			<li class="mainli"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reports'),$_smarty_tpl);?>
</a>
				<ul>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GenerateReport'),$_smarty_tpl);?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_SAVED;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MySavedReports'),$_smarty_tpl);?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_COMMON;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommonReports'),$_smarty_tpl);?>
</a></li>
				</ul>
			</li>
			<?php }?>
			<?php }?>
				<li class="mainli"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Help'),$_smarty_tpl);?>
</a><ul>
				
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php?ht=admin"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Administration'),$_smarty_tpl);?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php?ht=about"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'About'),$_smarty_tpl);?>
</a></li>
				</ul></li>
		
			</ul>
			</div>
			<!-- end #nav -->
			</div>
		</div>
		<!-- end #header -->
		<div id="content">
		<a name="content" title="content anchor"></a><?php }} ?>