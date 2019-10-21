<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:33:44
         compiled from "/var/www/html/ramietechhotels/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12385107255dadacb0643647-12111596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9bce5058a1ab26d31277ff3246b0e4908cc63d0' => 
    array (
      0 => '/var/www/html/ramietechhotels/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureNaviagtionMenu.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12385107255dadacb0643647-12111596',
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
  'unifunc' => 'content_5dadacb0646192_40165875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadacb0646192_40165875')) {function content_5dadacb0646192_40165875($_smarty_tpl) {?>

<li>
	<a class="navigation-link jsNaviLink" data-block="#hotelAmenitiesBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
#hotelAmenitiesBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
