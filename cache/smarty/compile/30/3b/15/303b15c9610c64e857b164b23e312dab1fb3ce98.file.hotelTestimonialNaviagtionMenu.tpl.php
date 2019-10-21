<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:33:44
         compiled from "/var/www/html/ramietechhotels/modules/wktestimonialblock/views/templates/hook/hotelTestimonialNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1208093835dadacb0648545-35793651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '303b15c9610c64e857b164b23e312dab1fb3ce98' => 
    array (
      0 => '/var/www/html/ramietechhotels/modules/wktestimonialblock/views/templates/hook/hotelTestimonialNaviagtionMenu.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208093835dadacb0648545-35793651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadacb064ae44_87620767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadacb064ae44_87620767')) {function content_5dadacb064ae44_87620767($_smarty_tpl) {?>

<li>
	<a class="navigation-link jsNaviLink" data-block="#hotelTestimonialBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
#hotelTestimonialBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'wktestimonialblock'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
