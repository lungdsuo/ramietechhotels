<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:14
         compiled from "/var/www/html/ramietechhotels/admin/themes/default/template/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12808765935dadab66060a83-24808566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d2af51071dd768058c1b5bb93438439fe8b0fa5' => 
    array (
      0 => '/var/www/html/ramietechhotels/admin/themes/default/template/footer.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12808765935dadab66060a83-24808566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'timer_start' => 0,
    'host_mode' => 0,
    'iso_is_fr' => 0,
    'php_errors' => 0,
    'modals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab66068774_28209323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab66068774_28209323')) {function content_5dadab66068774_28209323($_smarty_tpl) {?>

	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
<div id="footer" class="bootstrap hide">

	<div class="col-sm-2 hidden-xs">
		<a href="https://webkul.com/" class="_blank">Webkul&trade;</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="<?php echo smartyTranslate(array('s'=>'Load time: '),$_smarty_tpl);?>
"></i> <?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
	</div>

	<div class="col-sm-2 hidden-xs">
		<div class="social-networks">
			<a class="link-social link-twitter _blank" href="https://twitter.com/qloapps" title="Twitter">
				<i class="icon-twitter"></i>
			</a>
			<a class="link-social link-facebook _blank" href="https://www.facebook.com/qloapps" title="Facebook">
				<i class="icon-facebook"></i>
			</a>
			<a class="link-social link-github _blank" href="https://github.com/webkul/hotelcommerce" title="Github">
				<i class="icon-github"></i>
			</a>
			<a class="link-social link-google _blank" href="https://plus.google.com/110221570427070809661" title="Google">
				<i class="icon-google-plus"></i>
			</a>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="footer-contact">
			<a href="https://qloapps.com/contact/" class="footer_link _blank">
				<i class="icon-envelope"></i>
				<?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="https://forums.qloapps.com/category/7/bug-report" class="footer_link _blank">
				<i class="icon-bug"></i>
				<?php echo smartyTranslate(array('s'=>'Bug Tracker'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="https://forums.qloapps.com/" class="footer_link _blank">
				<i class="icon-comments"></i>
				<?php echo smartyTranslate(array('s'=>'Forum'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="https://store.webkul.com/Qloapps.html" class="footer_link _blank">
				<i class="icon-puzzle-piece"></i>
				<?php echo smartyTranslate(array('s'=>'Addons'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="https://qloapps.com/qlo-reservation-system/" class="footer_link _blank">
				<i class="icon-book"></i>
				<?php echo smartyTranslate(array('s'=>'Training'),$_smarty_tpl);?>

			</a>
			<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>
			/&nbsp;
			<a href="http://status.prestashop.com/" class="footer_link _blank">
				<i class="icon-circle status-page-dot"></i>
				<span class="status-page-description"></span>
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value&&!$_smarty_tpl->tpl_vars['host_mode']->value) {?>
			<p>Questions • Renseignements • Formations :
				<strong>+33 (0)1.40.18.30.04</strong>
			</p>
			<?php }?>
		</div>
	</div>

	<div class="col-sm-3">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['modals']->value)) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }} ?>
