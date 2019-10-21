<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:13
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/order-carrier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12169175175dadab655250e6-98527225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c60c063b452553d1ac0bf12a4f2f94f43e3d364c' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/order-carrier.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12169175175dadab655250e6-98527225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkedTOS' => 0,
    'link_conditions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab65527888_67543243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab65527888_67543243')) {function content_5dadab65527888_67543243($_smarty_tpl) {?>

<div class="box" id="tc_cont">
    <p class="checkbox">
        <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
        <label for="cgv" id="tc_txt"><?php echo smartyTranslate(array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl);?>
</label>
        <a id="tc_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow" ><?php echo smartyTranslate(array('s'=>'(Read the Terms of Service)'),$_smarty_tpl);?>
</a>
    </p>
</div><?php }} ?>
