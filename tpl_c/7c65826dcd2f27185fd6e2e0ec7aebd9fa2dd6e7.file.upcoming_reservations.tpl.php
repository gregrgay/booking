<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:12:19
         compiled from "/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Dashboard/upcoming_reservations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122231547151c86fe3bc8ea1-65875159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c65826dcd2f27185fd6e2e0ec7aebd9fa2dd6e7' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Dashboard/upcoming_reservations.tpl',
      1 => 1372087487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122231547151c86fe3bc8ea1-65875159',
  'function' => 
  array (
    'displayReservation' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'reservation' => 0,
    'DefaultTitle' => 0,
    'UserId' => 0,
    'Timezone' => 0,
    'Total' => 0,
    'colspan' => 0,
    'TodaysReservations' => 0,
    'TomorrowsReservations' => 0,
    'ThisWeeksReservations' => 0,
    'NextWeeksReservations' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c86fe3cb88a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c86fe3cb88a')) {function content_51c86fe3cb88a($_smarty_tpl) {?>

<?php if (!function_exists('smarty_template_function_displayReservation')) {
    function smarty_template_function_displayReservation($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayReservation']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<tr class="reservation" id="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
	<td style="min-width: 250px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['reservation']->value->Title)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['DefaultTitle']->value : $tmp);?>
</td>
	<td style="min-width:150px;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['reservation']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['reservation']->value->LastName),$_smarty_tpl);?>
 <?php if (!$_smarty_tpl->tpl_vars['reservation']->value->IsUserOwner($_smarty_tpl->tpl_vars['UserId']->value)){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"users.png",'altKey'=>'Participant'),$_smarty_tpl);?>
<?php }?></td>
	<td width="200px"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</td>
	<td width="200px"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</td>
	<td style="min-width: 150px; max-width: 250px;"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>
</td>
</tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>



<div class="dashboard" id="upcomingReservationsDashboard">
	<div class="dashboardHeader">
		<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
</a> (<?php echo $_smarty_tpl->tpl_vars['Total']->value;?>
)
	</div>
	<div class="dashboardContents">
		<?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable("5", null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['Total']->value>0){?>
		<table>
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Today"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TodaysReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TodaysReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
			
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Tomorrow"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TomorrowsReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TomorrowsReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
			
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LaterThisWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['ThisWeeksReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ThisWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
			
			<tr class="timespan">
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NextWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['NextWeeksReservations']->value);?>
)</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NextWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value){
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                <?php smarty_template_function_displayReservation($_smarty_tpl,array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value));?>

			<?php } ?>
		</table>
		<?php }else{ ?>
			<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoUpcomingReservations"),$_smarty_tpl);?>
</div>
		<?php }?>
	</div>
</div><?php }} ?>