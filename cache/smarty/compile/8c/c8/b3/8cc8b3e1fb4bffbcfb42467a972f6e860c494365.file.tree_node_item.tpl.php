<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:14
         compiled from "/var/www/html/ramietechhotels/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6089371805dadab665c7041-91080575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cc8b3e1fb4bffbcfb42467a972f6e860c494365' => 
    array (
      0 => '/var/www/html/ramietechhotels/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6089371805dadab665c7041-91080575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab665c7de0_33681934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab665c7de0_33681934')) {function content_5dadab665c7de0_33681934($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
