<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:12:19
         compiled from "/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193258536451c86fe3b15275-09040263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d3645ab59f3a04b3d920e0a652ccfe08238dbe9' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/dashboard.tpl',
      1 => 1372087487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193258536451c86fe3b15275-09040263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'dashboardItem' => 0,
    'Path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c86fe3b7be1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c86fe3b7be1')) {function content_51c86fe3b7be1($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cssFiles'=>'css/dashboard.css,css/jquery.qtip.min.css'), 0);?>


<ul id="dashboardList">
<?php  $_smarty_tpl->tpl_vars['dashboardItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dashboardItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dashboardItem']->key => $_smarty_tpl->tpl_vars['dashboardItem']->value){
$_smarty_tpl->tpl_vars['dashboardItem']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['dashboardItem']->value->PageLoad();?>
</li>
<?php } ?>
</ul>

<script type="text/javascript" src="scripts/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
scripts/dashboard.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	var dashboardOpts = {
		reservationUrl: "<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=",
		summaryPopupUrl: "ajax/respopup.php"
	};

	var dashboard = new Dashboard(dashboardOpts);
	dashboard.init();   
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>