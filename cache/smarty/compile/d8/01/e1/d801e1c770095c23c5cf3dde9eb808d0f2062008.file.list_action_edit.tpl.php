<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:14
         compiled from "/var/www/html/ramietechhotels/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4004903485dadab662d4619-65319700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd801e1c770095c23c5cf3dde9eb808d0f2062008' => 
    array (
      0 => '/var/www/html/ramietechhotels/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4004903485dadab662d4619-65319700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab662d6e53_56846929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab662d6e53_56846929')) {function content_5dadab662d6e53_56846929($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
