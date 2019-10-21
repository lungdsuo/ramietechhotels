<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:47:19
         compiled from "/var/www/html/ramietechhotels/backoffice/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1689316865dadafdf414a43-51553461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0eb5d03bcb43eeffac6977755f732885b298268' => 
    array (
      0 => '/var/www/html/ramietechhotels/backoffice/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1689316865dadafdf414a43-51553461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadafdf416932_80789443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadafdf416932_80789443')) {function content_5dadafdf416932_80789443($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
