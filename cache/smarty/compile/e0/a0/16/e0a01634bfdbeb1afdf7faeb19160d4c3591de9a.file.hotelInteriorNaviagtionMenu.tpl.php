<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:33:44
         compiled from "/var/www/html/ramietechhotels/modules/wkabouthotelblock/views/templates/hook/hotelInteriorNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6633730695dadacb063e976-01542126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a01634bfdbeb1afdf7faeb19160d4c3591de9a' => 
    array (
      0 => '/var/www/html/ramietechhotels/modules/wkabouthotelblock/views/templates/hook/hotelInteriorNaviagtionMenu.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6633730695dadacb063e976-01542126',
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
  'unifunc' => 'content_5dadacb0641935_99138930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadacb0641935_99138930')) {function content_5dadacb0641935_99138930($_smarty_tpl) {?>

<li>
	<a class="navigation-link jsNaviLink" data-block="#hotelInteriorBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
#hotelInteriorBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
