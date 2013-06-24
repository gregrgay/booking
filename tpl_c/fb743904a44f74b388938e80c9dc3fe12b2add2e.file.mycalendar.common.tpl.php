<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:14:41
         compiled from "/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Calendar/mycalendar.common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155010322251c87071ead799-64684947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb743904a44f74b388938e80c9dc3fe12b2add2e' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Calendar/mycalendar.common.tpl',
      1 => 1372087487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155010322251c87071ead799-64684947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IsSubscriptionAllowed' => 0,
    'IsSubscriptionEnabled' => 0,
    'SubscriptionUrl' => 0,
    'Calendar' => 0,
    'reservation' => 0,
    'view' => 0,
    'DisplayDate' => 0,
    'DayNames' => 0,
    'DayNamesShort' => 0,
    'MonthNames' => 0,
    'MonthNamesShort' => 0,
    'TimeFormat' => 0,
    'DateFormat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c8707203772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c8707203772')) {function content_51c8707203772($_smarty_tpl) {?>
<div class="calendar-subscription">
<?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value){?>
	<a href="#" id="turnOffSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-minus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a>
	<?php if ($_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value){?>
		<a id="subscribeTocalendar" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-share.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscribeToCalendar'),$_smarty_tpl);?>
</a>
		<br/>URL: <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
	<?php }else{ ?>
		<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscriptionsAreDisabled'),$_smarty_tpl);?>
</span>
	<?php }?>
<?php }else{ ?>
	<a href="#" id="turnOnSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-plus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
<?php }?>
</div>

<div id="calendar"></div>

<script type="text/javascript" src="scripts/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="scripts/reservationPopup.js"></script>
<script type="text/javascript" src="scripts/calendar.js"></script>
<script type="text/javascript" src="scripts/js/fullcalendar.min.js"></script>
<script type="text/javascript" src="scripts/admin/edit.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	var reservations = [];
	<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Calendar']->value->Reservations(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
		reservations.push({
			id: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
',
			title: '<?php echo strtr($_smarty_tpl->tpl_vars['reservation']->value->ResourceName, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
 <?php echo strtr($_smarty_tpl->tpl_vars['reservation']->value->Title, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
			start: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate,'key'=>'fullcalendar'),$_smarty_tpl);?>
',
			end: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate,'key'=>'fullcalendar'),$_smarty_tpl);?>
',
			url: 'reservation.php?rn=<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
',
			allDay: false
		});
	<?php } ?>

	var options = {
					view: '<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
',
					year: <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Year();?>
,
					month: <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Month();?>
,
					date: <?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Day();?>
,
					dayClickUrl: '<?php echo Pages::MY_CALENDAR;?>
?ct=<?php echo CalendarTypes::Day;?>
',
					dayNames: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['DayNames']->value),$_smarty_tpl);?>
,
					dayNamesShort: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['DayNamesShort']->value),$_smarty_tpl);?>
,
					monthNames: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['MonthNames']->value),$_smarty_tpl);?>
,
					monthNamesShort: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['MonthNamesShort']->value),$_smarty_tpl);?>
,
					timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
',
					dayMonth: '<?php echo $_smarty_tpl->tpl_vars['DateFormat']->value;?>
',
					firstDay: 0,
					subscriptionEnableUrl: '<?php echo Pages::MY_CALENDAR;?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo PersonalCalendarActions::ActionEnableSubscription;?>
',
					subscriptionDisableUrl: '<?php echo Pages::MY_CALENDAR;?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo PersonalCalendarActions::ActionDisableSubscription;?>
'
				};
		
	var calendar = new Calendar(options, reservations);
	calendar.init();
});
</script><?php }} ?>