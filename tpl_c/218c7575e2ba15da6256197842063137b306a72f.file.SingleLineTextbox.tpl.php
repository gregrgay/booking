<?php /* Smarty version Smarty-3.1.7, created on 2013-06-24 18:14:13
         compiled from "/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Controls/Attributes/SingleLineTextbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119872153951c870554a6925-96269994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218c7575e2ba15da6256197842063137b306a72f' => 
    array (
      0 => '/Applications/MAMP/htdocs/phpScheduleIt/lib/Common/../../tpl/Controls/Attributes/SingleLineTextbox.tpl',
      1 => 1372087487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119872153951c870554a6925-96269994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributeName' => 0,
    'attribute' => 0,
    'align' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51c870554da67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c870554da67')) {function content_51c870554da67($_smarty_tpl) {?>
<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Label(), ENT_QUOTES, 'UTF-8', true);?>
</label>
<?php if ($_smarty_tpl->tpl_vars['align']->value=='vertical'){?>
<br/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['readonly']->value){?>
<span class="attributeValue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php }else{ ?>
<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
" class="customAttribute textbox" />
<?php }?><?php }} ?>