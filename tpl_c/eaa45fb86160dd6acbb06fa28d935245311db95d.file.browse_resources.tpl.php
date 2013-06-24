<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:14:12
         compiled from "/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/browse_resources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98645360551c87054e4adc1-21752543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa45fb86160dd6acbb06fa28d935245311db95d' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/browse_resources.tpl',
      1 => 1372089044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98645360551c87054e4adc1-21752543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Schedules' => 0,
    'k' => 0,
    'v' => 0,
    'thistype' => 0,
    'Resources' => 0,
    'resource' => 0,
    'id' => 0,
    'date' => 0,
    'args' => 0,
    'GroupLookup' => 0,
    'AdminGroups' => 0,
    'Definitions' => 0,
    'AttributeList' => 0,
    'attribute' => 0,
    'scheduleId' => 0,
    'scheduleName' => 0,
    'adminGroup' => 0,
    'txtMinDuration' => 0,
    'txtMaxDuration' => 0,
    'txtStartNotice' => 0,
    'txtEndNotice' => 0,
    'txtMaxCapacity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c87055485c4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c87055485c4')) {function content_51c87055485c4($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../lib/external/Smarty/plugins/modifier.truncate.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cssFiles'=>'css/styles.css'), 0);?>


<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageResources'),$_smarty_tpl);?>
</h1>

<div id="globalError" class="error" style="display:none"></div>
<div class="admin">



<div id="filter">
<form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
    <label for="calendarFilter">Filter Resource Types: </label>
    <select name="schedule"  id="calendarFilter" class="textbox">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <?php if ($_POST['schedule']==$_smarty_tpl->tpl_vars['k']->value){?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected="selected" class="schedule" ><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
            <?php $_smarty_tpl->tpl_vars['thistype'] = new Smarty_variable($_smarty_tpl->tpl_vars['v']->value, null, 0);?>
        <?php }else{ ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
        <?php }?>
        <?php } ?>
    </select>
    <input type="submit" value="Fliter">
</form>
</div>
	<div class="title">
	<strong> Showing 
	<?php if ($_POST['schedule']){?>
	<?php echo $_smarty_tpl->tpl_vars['thistype']->value;?>

	<?php }else{ ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>

	<?php }?>
	</strong><br /><br/>
	</div>
<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value){
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->GetResourceId(), null, 0);?>
	<?php if (!$_POST['schedule']||$_POST['schedule']==$_smarty_tpl->tpl_vars['resource']->value->GetScheduleId()){?>
	<div class="resourceDetails" resourceId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<div style="float:left;max-width:100%;">
			<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>

			<div style="float:left; text-align:center; width:340px;">
				<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasImage()){?>
					<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['resource']->value->GetImage()),$_smarty_tpl);?>
" alt="Resource Image" class="image"/><br/>

					<?php }else{ ?>
					<div class="noImage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoImage'),$_smarty_tpl);?>
</div>
					<a class="update imageButton" href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddImage'),$_smarty_tpl);?>
</a>
				<?php }?>
				 <a href="reservation.php?rid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetScheduleId();?>
&rd=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl);?>
" title="Reserve <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resource']->value->GetName(), ENT_QUOTES, 'UTF-8', true);?>
">Reserve this resources</a>
				  
			</div>
			<div style="float:right;">

				<ul>
					<li>
						<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resource']->value->GetName(), ENT_QUOTES, 'UTF-8', true);?>
</h4>
					<!--	<a class="update renameButton" href="javascript:void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
</a> |
						<a class="update deleteButton" href="javascript:void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</a> --
					</li>
					<li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsOnline()){?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status.png"),$_smarty_tpl);?>
 <!-- <a class="update takeOfflineButton"
															 href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TakeOffline'),$_smarty_tpl);?>
</a> -->
							<?php }else{ ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-busy.png"),$_smarty_tpl);?>
<!-- <a class="update bringOnlineButton"
																  href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BringOnline'),$_smarty_tpl);?>
</a> -->
						<?php }?>

					</li>

					<li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AppearsOn','args'=>$_smarty_tpl->tpl_vars['Schedules']->value[$_smarty_tpl->tpl_vars['resource']->value->GetScheduleId()]),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->tpl_vars['args']->value;?>

						<!-- <a class="update changeScheduleButton" href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Move'),$_smarty_tpl);?>
</a> -->
					</li>
					<!-- <li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>

						<?php echo (($tmp = @$_smarty_tpl->tpl_vars['resource']->value->GetSortOrder())===null||$tmp==='' ? "-" : $tmp);?>

						<a class="update changeSortOrder" href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a>
					</li> -->
					<li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasLocation()){?>
							<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetLocation();?>

							<?php }else{ ?>
							<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoLocationLabel'),$_smarty_tpl);?>
</span>
						<?php }?>
						<!-- <a class="update changeLocationButton" href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a> -->
					</li>
					<li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasContact()){?>
							<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetContact();?>

							<?php }else{ ?>
							<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoContactLabel'),$_smarty_tpl);?>
</span>
						<?php }?>
					</li>
					<li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasDescription()){?>
							<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['resource']->value->GetDescription(),500,"...");?>

							<?php }else{ ?>
							<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);?>
</span>
						<?php }?>
						<!--<a class="update descriptionButton" href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a> -->
					</li>
					<li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasNotes()){?>
							<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['resource']->value->GetNotes(),500,"...");?>

							<?php }else{ ?>
							<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoNotesLabel'),$_smarty_tpl);?>
</span>
						<?php }?>
						<!-- <a class="update notesButton" href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a> -->
					</li>
					<li>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasAdminGroup()){?>
							<?php echo $_smarty_tpl->tpl_vars['GroupLookup']->value[$_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId()]->Name;?>

							<?php }else{ ?>
							<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourceAdministratorLabel'),$_smarty_tpl);?>
</span>
						<?php }?>
						<?php if (count($_smarty_tpl->tpl_vars['AdminGroups']->value)>0){?>
							<!-- <a class="update adminButton" href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a> -->
						<?php }?>
					</li>
					<!--<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetIsCalendarSubscriptionAllowed()){?>
							<a class="update disableSubscription"
							   href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a> 
							<?php }else{ ?>
							 <a class="update enableSubscription"
							   href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
						<?php }?>
					</li> -->
				</ul>
			</div>
		</div>
		<div>
			<div>
				<h5><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsageConfiguration'),$_smarty_tpl);?>
</h5> <!-- <a class="update changeConfigurationButton"
																 href="javascript: void(0);"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangeConfiguration'),$_smarty_tpl);?>
</a> -->
			</div>
			<div style="float:left;width:300px;">
				<ul>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinLength()){?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinLength()),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>

						<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxLength()){?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>

						<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval()){?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApprovalNone'),$_smarty_tpl);?>

						<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign()){?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionNotAutoGranted'),$_smarty_tpl);?>

						<?php }?>
					</li>

					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNotice()){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNotice()),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>

					<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxNotice()){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>

					<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday()){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceNotAllowMultiDay'),$_smarty_tpl);?>

					<?php }?>
					</li>
					<li>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

					<?php }?>
					</li>
				</ul>
			</div>
		</div>
		<?php if (count($_smarty_tpl->tpl_vars['Definitions']->value)>0){?>
			<div class="customAttributes">
				<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
 <!-- <a href="#"
															class="update changeAttributes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a> -->
				</h3>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AttributeList']->value->GetAttributeValues($_smarty_tpl->tpl_vars['id']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
						<li class="customAttribute" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>

						</li>
					<?php } ?>
				</ul>
			</div>
			<div style="clear:both;">&nbsp;</div>
		<?php }?>
					<div style="clear:both;">&nbsp;</div>
		<div class="actions">&nbsp;</div>
	</div>
	<hr style="height:1px; width:85%; ">
	<br />
	<?php }?>
<?php } ?>
</div>


<!--
<div class="admin" style="margin-top:30px">
	<div class="title">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddNewResource'),$_smarty_tpl);?>

	</div>
	<div>
		<div id="addResourceResults" class="error" style="display:none;"></div>
		<form id="addResourceForm" method="post">
			<table>
				<tr>
					<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</th>
					<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
</th>
					<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissions'),$_smarty_tpl);?>
</th>
					<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>
</th>
					<th>&nbsp;</th>
				</tr>
				<tr>
					<td><input type="text" class="textbox required" maxlength="85"
							   style="width:250px" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>
 />
					</td>
					<td>
						<select class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 style="width:100px">
						<?php  $_smarty_tpl->tpl_vars['scheduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheduleName']->_loop = false;
 $_smarty_tpl->tpl_vars['scheduleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleName']->key => $_smarty_tpl->tpl_vars['scheduleName']->value){
$_smarty_tpl->tpl_vars['scheduleName']->_loop = true;
 $_smarty_tpl->tpl_vars['scheduleId']->value = $_smarty_tpl->tpl_vars['scheduleName']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
						<?php } ?>
						</select>
					</td>
					<td>
						<select class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
 style="width:170px">
							<option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"None"),$_smarty_tpl);?>
</option>
							<option value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllUsers"),$_smarty_tpl);?>
</option>
						</select>
					</td>
					<td>
						<select class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl);?>
 style="width:170px">
							<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['adminGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adminGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->key => $_smarty_tpl->tpl_vars['adminGroup']->value){
$_smarty_tpl->tpl_vars['adminGroup']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
						<?php } ?>
						</select>
					</td>
					<td>
						<button type="button"
								class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"plus-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddResource'),$_smarty_tpl);?>
</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
-->

<input type="hidden" id="activeId" value=""/>

<div id="imageDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddImage'),$_smarty_tpl);?>
">

	<form id="imageForm" method="post" enctype="multipart/form-data">
		<input id="resourceImage" type="file" class="text" size="40" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl);?>
 />
		<br/>
		<span class="note">.gif, .jpg, or .png</span>
		<br/><br/>
		<button type="button"
				class="button uploadImage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="renameDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
">
	<form id="renameForm" method="post">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
: <input id="editName" type="text" class="textbox required" maxlength="85"
								   style="width:250px" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>
 />
		<br/><br/>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="scheduleDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoveToSchedule'),$_smarty_tpl);?>
">
	<form id="scheduleForm" method="post">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoveToSchedule'),$_smarty_tpl);?>
:
		<select id="editSchedule" class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
>
		<?php  $_smarty_tpl->tpl_vars['scheduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheduleName']->_loop = false;
 $_smarty_tpl->tpl_vars['scheduleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleName']->key => $_smarty_tpl->tpl_vars['scheduleName']->value){
$_smarty_tpl->tpl_vars['scheduleName']->_loop = true;
 $_smarty_tpl->tpl_vars['scheduleId']->value = $_smarty_tpl->tpl_vars['scheduleName']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
		<?php } ?>
		</select>
		<br/><br/>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="locationDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>
">
	<form id="locationForm" method="post">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>
:<br/>
		<input id="editLocation" type="text" class="textbox" maxlength="85"
			   style="width:250px" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_LOCATION'),$_smarty_tpl);?>
 /><br/>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>
:<br/>
		<input id="editContact" type="text" class="textbox" maxlength="85"
			   style="width:250px" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_CONTACT'),$_smarty_tpl);?>
 />
		<br/><br/>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="descriptionDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
">
	<form id="descriptionForm" method="post">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
:<br/>
		<textarea id="editDescription" class="textbox"
				  style="width:460px;height:150px;" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_DESCRIPTION'),$_smarty_tpl);?>
></textarea>
		<br/><br/>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="notesDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
">
	<form id="notesForm" method="post">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
:<br/>
		<textarea id="editNotes" class="textbox"
				  style="width:460px;height:150px;" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NOTES'),$_smarty_tpl);?>
></textarea>
		<br/><br/>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="configurationDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsageConfiguration'),$_smarty_tpl);?>
">
	<form id="configurationForm" method="post">
		<div style="margin-bottom: 10px;">
			<fieldset>
				<legend><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</legend>
				<ul>
					<li>
						<label>
							<input type="checkbox" id="noMinimumDuration"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>

						</label>
						<span class="noMinimumDuration">
							<br/>
						<?php $_smarty_tpl->_capture_stack[0][] = array("txtMinDuration", "txtMinDuration", null); ob_start(); ?>
							<input type='text' id='minDurationDays' size='3' class='days textbox' maxlength='3'/>
							<input type='text' id='minDurationHours' size='2' class='hours textbox' maxlength='2'/>
							<input type='text' id='minDurationMinutes' size='2' class='minutes textbox' maxlength='2'/>
							<input type='hidden' id='minDuration' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_DURATION'),$_smarty_tpl);?>
 />
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['txtMinDuration']->value),$_smarty_tpl);?>

						</span>
					</li>
					<li>
						<label>
							<input type="checkbox" id="noMaximumDuration"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>

						</label>
						<span class="noMaximumDuration">
							<br/>
						<?php $_smarty_tpl->_capture_stack[0][] = array("txtMaxDuration", "txtMaxDuration", null); ob_start(); ?>
							<input type='text' id='maxDurationDays' size='3' class='days textbox' maxlength='3'/>
							<input type='text' id='maxDurationHours' size='2' class='hours textbox' maxlength='2'/>
							<input type='text' id='maxDurationMinutes' size='2' class='minutes textbox' maxlength='2'/>
							<input type='hidden' id='maxDuration' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_DURATION'),$_smarty_tpl);?>
 />
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['txtMaxDuration']->value),$_smarty_tpl);?>

						</span>
					</li>
					<li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>

						<select id="allowMultiday" class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl);?>
>
							<option value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>
</option>
							<option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>
</option>
						</select>
					</li>
				</ul>
			</fieldset>
			<fieldset>
				<legend><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</legend>
				<ul>
					<li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>

						<select id="requiresApproval" class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl);?>
>
							<option value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>
</option>
							<option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>
</option>
						</select>
					</li>
					<li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>

						<select id="autoAssign" class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
>
							<option value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>
</option>
							<option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>
</option>
						</select>
					</li>
					<li>
						<label>
							<input type="checkbox" id="noStartNotice"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>

						</label>
						<span class="noStartNotice">
							<br/>
						<?php $_smarty_tpl->_capture_stack[0][] = array("txtStartNotice", "txtStartNotice", null); ob_start(); ?>
							<input type='text' id='startNoticeDays' size='3' class='days textbox' maxlength='3'/>
							<input type='text' id='startNoticeHours' size='2' class='hours textbox' maxlength='2'/>
							<input type='text' id='startNoticeMinutes' size='2' class='minutes textbox' maxlength='2'/>
							<input type='hidden' id='startNotice' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE'),$_smarty_tpl);?>
 />
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['txtStartNotice']->value),$_smarty_tpl);?>

						</span>
					</li>
					<li>
						<label>
							<input type="checkbox" id="noEndNotice"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>

						</label>					
						<span class="noEndNotice">
							<br/>
						<?php $_smarty_tpl->_capture_stack[0][] = array("txtEndNotice", "txtEndNotice", null); ob_start(); ?>
							<input type='text' id='endNoticeDays' size='3' class='days textbox' maxlength='3'/>
							<input type='text' id='endNoticeHours' size='2' class='hours textbox' maxlength='2'/>
							<input type='text' id='endNoticeMinutes' size='2' class='minutes textbox' maxlength='2'/>
							<input type='hidden' id='endNotice' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_NOTICE'),$_smarty_tpl);?>
 />
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['txtEndNotice']->value),$_smarty_tpl);?>

						</span>
					</li>
				</ul>
			</fieldset>
			<fieldset>
				<legend><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</legend>
				<ul>
					<li>
						<label>
							<input type="checkbox" id="unlimitedCapactiy"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

						</label>					
						<span class="unlimitedCapactiy">
							<br/>
						<?php $_smarty_tpl->_capture_stack[0][] = array("txtMaxCapacity", "txtMaxCapacity", null); ob_start(); ?>
							<input type='text' id='maxCapactiy' class='textbox' size='5'
								   maxlength='5' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>
 />
						<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['txtMaxCapacity']->value),$_smarty_tpl);?>

						</span>
					</li>
				</ul>
			</fieldset>
		</div>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="groupAdminDialog" class="dialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'WhoCanManageThisResource'),$_smarty_tpl);?>
">
	<form method="post" id="groupAdminForm">
		<select id="adminGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl);?>
 class="textbox">
			<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --</option>
		<?php  $_smarty_tpl->tpl_vars['adminGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adminGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->key => $_smarty_tpl->tpl_vars['adminGroup']->value){
$_smarty_tpl->tpl_vars['adminGroup']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
		<?php } ?>
		</select>
		<br/><br/>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="deleteDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
">
	<form id="deleteForm" method="post">
		<div class="error" style="margin-bottom: 25px;">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</h3>
			<br/><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarning'),$_smarty_tpl);?>
:
			<ul>
				<li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReservations'),$_smarty_tpl);?>
</li>
				<li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningPermissions'),$_smarty_tpl);?>
</li>
			</ul>
			<br/>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReassign'),$_smarty_tpl);?>

		</div>

		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div>

<div id="attributeDialog" class="dialog" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
">
	<div class="validationSummary">
		<ul><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"attributeValidator",'key'=>''),$_smarty_tpl);?>

		</ul>
	</div>

	<div class="customAttributes">
		<form method="post" id="attributesForm">
			<ul>
			<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Definitions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
				<li class="customAttribute">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value),$_smarty_tpl);?>

				</li>
			<?php } ?>
			</ul>
			<div style="clear:both;"></div>
			<br/>
			<button type="button"
					class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick-circle.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
			<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
		</form>
	</div>
	<hr>
</div>



<!-- 
<div id="sortOrderDialog" class="dialog" style="display:none;" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
">
	<form id="sortOrderForm" method="post">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
:
		<input type="text" id="editSortOrder" class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_SORT_ORDER'),$_smarty_tpl);?>
 maxlength="3" style="width:40px" />
		<br/><br/>
		<button type="button" class="button save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"disk-black.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</button>
		<button type="button" class="button cancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
	</form>
</div> 
-->




<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>