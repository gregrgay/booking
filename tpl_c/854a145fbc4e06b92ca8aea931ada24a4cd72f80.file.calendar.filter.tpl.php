<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:14:50
         compiled from "/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Calendar/calendar.filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109622941251c8707a7211d5-36382946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '854a145fbc4e06b92ca8aea931ada24a4cd72f80' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Calendar/calendar.filter.tpl',
      1 => 1372087487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109622941251c8707a7211d5-36382946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filters' => 0,
    'filter' => 0,
    'subfilter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c8707a76fdb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c8707a76fdb')) {function content_51c8707a76fdb($_smarty_tpl) {?>
<div id="filter">
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangeCalendar"),$_smarty_tpl);?>

<select id="calendarFilter" class="textbox">
<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value->GetFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['filter']->value->Id();?>
" class="schedule" <?php if ($_smarty_tpl->tpl_vars['filter']->value->Selected()){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['filter']->value->Name();?>
</option>
	<?php  $_smarty_tpl->tpl_vars['subfilter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subfilter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value->GetFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subfilter']->key => $_smarty_tpl->tpl_vars['subfilter']->value){
$_smarty_tpl->tpl_vars['subfilter']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Id();?>
" class="resource" <?php if ($_smarty_tpl->tpl_vars['subfilter']->value->Selected()){?>selected="selected"<?php }?>>-- <?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Name();?>
</option>
	<?php } ?>
<?php } ?>

</select>
</div><?php }} ?>