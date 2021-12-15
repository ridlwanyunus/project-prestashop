<?php
/* Smarty version 3.1.39, created on 2021-12-15 20:08:14
  from '/var/www/html/prestashop/modules/ybc_blog/views/templates/hook/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b9e8beded1e7_43226678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73fef367f64648f492f52f7f2ea3f9d2417b5a1d' => 
    array (
      0 => '/var/www/html/prestashop/modules/ybc_blog/views/templates/hook/admin.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9e8beded1e7_43226678 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ybc_blog_error_message']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['ybc_blog_error_message']->value;?>

<?php }
echo '<script'; ?>
 type="text/javascript"> 
    var ybc_blog_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['ybc_blog_ajax_url']->value;?>
'; 
    var ybc_blog_default_lang = <?php echo intval($_smarty_tpl->tpl_vars['ybc_blog_default_lang']->value);?>
;
    var ybc_blog_is_updating = <?php echo intval($_smarty_tpl->tpl_vars['ybc_blog_is_updating']->value);?>
;                            
    var ybc_blog_is_config_page = <?php echo intval($_smarty_tpl->tpl_vars['ybc_blog_is_config_page']->value);?>
;
    var ybc_blog_invalid_file = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_invalid_file']->value,'html','UTF-8' ));?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_module_dir']->value,'html','UTF-8' ));?>
views/js/admin.js"><?php echo '</script'; ?>
>
<div class="bootstrap ybc_blog_admin">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <?php echo $_smarty_tpl->tpl_vars['ybc_blog_sidebar']->value;?>

                <div class="col-lg-10">
                    <?php echo $_smarty_tpl->tpl_vars['ybc_blog_body_html']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }
}
