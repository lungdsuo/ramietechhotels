<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:38:45
         compiled from "/var/www/html/ramietechhotels/backoffice/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9977780575dadaddd82d9f8-81540417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf95bbc6f5c7158277d65f950d256d4867d9edb4' => 
    array (
      0 => '/var/www/html/ramietechhotels/backoffice/themes/default/template/content.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9977780575dadaddd82d9f8-81540417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadaddd82f414_09679375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadaddd82f414_09679375')) {function content_5dadaddd82f414_09679375($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
