<?php
/* Smarty version 3.1.39, created on 2021-12-15 19:58:04
  from '/var/www/html/prestashop/admin639namedi/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b9e65c6928c5_58608102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ac8b5f61bcf27d5055d8d67bb1cb73a2a9f7e94' => 
    array (
      0 => '/var/www/html/prestashop/admin639namedi/themes/default/template/content.tpl',
      1 => 1639281038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9e65c6928c5_58608102 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
