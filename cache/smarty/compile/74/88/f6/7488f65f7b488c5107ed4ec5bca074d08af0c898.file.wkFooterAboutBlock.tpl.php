<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:33:44
         compiled from "/var/www/html/ramietechhotels/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10818643055dadacb0840a95-13939113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7488f65f7b488c5107ed4ec5bca074d08af0c898' => 
    array (
      0 => '/var/www/html/ramietechhotels/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10818643055dadacb0840a95-13939113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_SHORT_DESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadacb0842cf5_68722648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadacb0842cf5_68722648')) {function content_5dadacb0842cf5_68722648($_smarty_tpl) {?>

<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'About','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-about-hotel">
			<p><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['WK_HTL_SHORT_DESC']->value,220,'',true), ENT_QUOTES, 'UTF-8', true);?>
</p>
		</div>
	</section>
</div><?php }} ?>
