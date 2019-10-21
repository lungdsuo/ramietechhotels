<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:33:44
         compiled from "/var/www/html/ramietechhotels/modules/wkfooterexploreblock/views/templates/hook/hotelExternalNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17490439705dadacb0657207-16203720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe82fea198d6ff7b4bb6f1054975f9c925af6dc' => 
    array (
      0 => '/var/www/html/ramietechhotels/modules/wkfooterexploreblock/views/templates/hook/hotelExternalNaviagtionMenu.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17490439705dadacb0657207-16203720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'explore_links' => 0,
    'exploreLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadacb065a858_44485233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadacb065a858_44485233')) {function content_5dadacb065a858_44485233($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['explore_links']->value)&&$_smarty_tpl->tpl_vars['explore_links']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['exploreLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exploreLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['explore_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exploreLink']->key => $_smarty_tpl->tpl_vars['exploreLink']->value) {
$_smarty_tpl->tpl_vars['exploreLink']->_loop = true;
?>
		<li>
			<a class="navigation-link" href="<?php echo $_smarty_tpl->tpl_vars['exploreLink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['exploreLink']->value['name'];?>
</a>
		</li>
	<?php } ?>
<?php }?><?php }} ?>
