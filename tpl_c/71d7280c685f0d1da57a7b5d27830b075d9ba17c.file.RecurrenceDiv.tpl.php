<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:02:48
         compiled from "/Applications/MAMP/htdocs/phpScheduleIttest/lib/Common/../../tpl/Controls/RecurrenceDiv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165063607751c86da88d4274-19178922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d7280c685f0d1da57a7b5d27830b075d9ba17c' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIttest/lib/Common/../../tpl/Controls/RecurrenceDiv.tpl',
      1 => 1372087487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165063607751c86da88d4274-19178922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RepeatOptions' => 0,
    'k' => 0,
    'v' => 0,
    'RepeatEveryOptions' => 0,
    'RepeatTerminationDate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c86da899b5d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c86da899b5d')) {function content_51c86da899b5d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/Applications/MAMP/htdocs/phpScheduleIttest/lib/Common/../../lib/external/Smarty/plugins/function.html_options.php';
?>
<div id="repeatDiv">
	<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatPrompt"),$_smarty_tpl);?>
</label>
	<select id="repeatOptions" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_options'),$_smarty_tpl);?>
 class="pulldown" style="width:250px">
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RepeatOptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['v']->value['key']),$_smarty_tpl);?>
</option>
	<?php } ?>
	</select>

	<div id="repeatEveryDiv" style="display:none;" class="days weeks months years">
		<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatEveryPrompt"),$_smarty_tpl);?>
</label>
		<select id="repeatInterval" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_every'),$_smarty_tpl);?>
 class="pulldown" style="width:55px">
		<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value,'output'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value),$_smarty_tpl);?>

		</select>
		<span class="days"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['daily']['everyKey']),$_smarty_tpl);?>
</span>
		<span class="weeks"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['weekly']['everyKey']),$_smarty_tpl);?>
</span>
		<span class="months"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['monthly']['everyKey']),$_smarty_tpl);?>
</span>
		<span class="years"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['yearly']['everyKey']),$_smarty_tpl);?>
</span>
	</div>
	<div id="repeatOnWeeklyDiv" style="display:none;" class="weeks">
		<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatDaysPrompt"),$_smarty_tpl);?>
</label>
		<input type="checkbox"
			   id="repeatDay0" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_sunday'),$_smarty_tpl);?>
 /><label
			for="repeatDay0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySundaySingle"),$_smarty_tpl);?>
</label>
		<input type="checkbox"
			   id="repeatDay1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_monday'),$_smarty_tpl);?>
 /><label
			for="repeatDay1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayMondaySingle"),$_smarty_tpl);?>
</label>
		<input type="checkbox"
			   id="repeatDay2" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_tuesday'),$_smarty_tpl);?>
 /><label
			for="repeatDay2"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayTuesdaySingle"),$_smarty_tpl);?>
</label>
		<input type="checkbox"
			   id="repeatDay3" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_wednesday'),$_smarty_tpl);?>
 /><label
			for="repeatDay3"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayWednesdaySingle"),$_smarty_tpl);?>
</label>
		<input type="checkbox"
			   id="repeatDay4" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_thursday'),$_smarty_tpl);?>
 /><label
			for="repeatDay4"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayThursdaySingle"),$_smarty_tpl);?>
</label>
		<input type="checkbox"
			   id="repeatDay5" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_friday'),$_smarty_tpl);?>
 /><label
			for="repeatDay5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayFridaySingle"),$_smarty_tpl);?>
</label>
		<input type="checkbox"
			   id="repeatDay6" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_saturday'),$_smarty_tpl);?>
 /><label
			for="repeatDay6"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySaturdaySingle"),$_smarty_tpl);?>
</label>
	</div>
	<div id="repeatOnMonthlyDiv" style="display:none;" class="months">
		<input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl);?>
 value="<?php echo RepeatMonthlyType::DayOfMonth;?>
"
			   id="repeatMonthDay" checked="checked"/>
		<label for="repeatMonthDay"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"repeatDayOfMonth"),$_smarty_tpl);?>
</label>
		<input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl);?>
 value="<?php echo RepeatMonthlyType::DayOfWeek;?>
"
			   id="repeatMonthWeek"/>
		<label for="repeatMonthWeek"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"repeatDayOfWeek"),$_smarty_tpl);?>
</label>
	</div>
	<div id="repeatUntilDiv" style="display:none;">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatUntilPrompt"),$_smarty_tpl);?>

		<input type="text" id="EndRepeat" class="dateinput" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>
"/>
		<input type="hidden" id="formattedEndRepeat" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'end_repeat_date'),$_smarty_tpl);?>

			   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
	</div>
</div><?php }} ?>