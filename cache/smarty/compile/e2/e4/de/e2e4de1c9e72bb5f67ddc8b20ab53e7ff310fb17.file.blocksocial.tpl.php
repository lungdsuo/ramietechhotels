<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:13
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3273107075dadab65ad05d2-49655682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e4de1c9e72bb5f67ddc8b20ab53e7ff310fb17' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/modules/blocksocial/blocksocial.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3273107075dadab65ad05d2-49655682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab65ae30b9_72413669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab65ae30b9_72413669')) {function content_5dadab65ae30b9_72413669($_smarty_tpl) {?>

<div class="row">
    <section class="col-xs-12 col-sm-12">
        <div class="row margin-lr-0 footer-section-heading">
            <p><?php echo smartyTranslate(array('s'=>'Follow us on','mod'=>'blocksocial'),$_smarty_tpl);?>
</p>
            <hr/>
        </div>
        <div class="row margin-lr-0" id="social_block">
            <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['facebook_url']->value)&&$_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
                    <li class="facebook">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['twitter_url']->value)&&$_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
                    <li class="twitter">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['rss_url']->value)&&$_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
                    <li class="rss">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['youtube_url']->value)&&$_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
                    <li class="youtube">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['google_plus_url']->value)&&$_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
                    <li class="google-plus">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['pinterest_url']->value)&&$_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
                    <li class="pinterest">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['vimeo_url']->value)&&$_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?>
                    <li class="vimeo">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['instagram_url']->value)&&$_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
                    <li class="instagram">
                        <a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span><?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
                        </a>
                    </li>
                <?php }?>
            </ul>
            <div class="clearfix"></div>
        </div>
    </section>
</div><?php }} ?>
