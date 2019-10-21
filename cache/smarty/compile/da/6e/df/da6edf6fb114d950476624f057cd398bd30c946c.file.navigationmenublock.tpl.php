<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 18:33:44
         compiled from "/var/www/html/ramietechhotels/modules/blocknavigationmenu/views/templates/hook/navigationmenublock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10293704265dadacb0632e73-28464028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da6edf6fb114d950476624f057cd398bd30c946c' => 
    array (
      0 => '/var/www/html/ramietechhotels/modules/blocknavigationmenu/views/templates/hook/navigationmenublock.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10293704265dadacb0632e73-28464028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadacb063c1c5_95289016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadacb063c1c5_95289016')) {function content_5dadacb063c1c5_95289016($_smarty_tpl) {?><div class="pull-right clearfix nav_menu_padding">
	<button type="button" class="nav_toggle">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
</div>

<div id="menu_cont" class="menu_cont_right">
	<div class="row margin-lr-0">
		<div class="col-xs-12 col-sm-12">
			<div class="row margin-lr-0">
				<span class="pull-right close_navbar"><i class="icon-close"></i></span>
			</div>
			<div class="row">
				<ul class="nav nav-pills nav-stacked wk-nav-style">
					<li>
						<a class="navigation-link" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Home','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>
</a>
					</li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayDefaultNavigationHook"),$_smarty_tpl);?>

					<li>
						<a class="navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>
</a>
					</li>
				</ul>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayExternalNavigationHook"),$_smarty_tpl);?>

			</div>
		</div>
	</div>
</div><?php }} ?>
