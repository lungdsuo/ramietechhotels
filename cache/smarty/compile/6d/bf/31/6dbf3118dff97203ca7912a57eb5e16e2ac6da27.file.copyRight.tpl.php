<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:33:44
         compiled from "/var/www/html/ramietechhotels/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19593238635dadacb08cb734-66309223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dbf3118dff97203ca7912a57eb5e16e2ac6da27' => 
    array (
      0 => '/var/www/html/ramietechhotels/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19593238635dadacb08cb734-66309223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_ESTABLISHMENT_YEAR' => 0,
    'base_dir' => 0,
    'WK_HTL_CHAIN_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadacb08cdaa7_07926810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadacb08cdaa7_07926810')) {function content_5dadacb08cdaa7_07926810($_smarty_tpl) {?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value;?>
</a>.&nbsp;<?php echo smartyTranslate(array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</p>
</div><?php }} ?>
