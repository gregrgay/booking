<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:12:19
         compiled from "/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Dashboard/announcements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204512265951c86fe3b90a32-01746248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0abd39f173ec4477bcf56ee02055ea005c9086ff' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Dashboard/announcements.tpl',
      1 => 1372087487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204512265951c86fe3b90a32-01746248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Announcements' => 0,
    'each' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c86fe3bb91d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c86fe3bb91d')) {function content_51c86fe3bb91d($_smarty_tpl) {?>
<div class="dashboard" id="announcementsDashboard">
	<div id="announcementsHeader" class="dashboardHeader">
		<a href="javascript:void(0);" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Announcements"),$_smarty_tpl);?>
</a>
	</div>
	<div class="dashboardContents">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['each'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['each']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['each']->key => $_smarty_tpl->tpl_vars['each']->value){
$_smarty_tpl->tpl_vars['each']->_loop = true;
?>
			    <li><?php echo nl2br(html_entity_decode($_smarty_tpl->tpl_vars['each']->value));?>
</li>
			<?php }
if (!$_smarty_tpl->tpl_vars['each']->_loop) {
?>
				<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoAnnouncements"),$_smarty_tpl);?>
</div>
			<?php } ?>
		</ul>
	</div>
</div><?php }} ?>