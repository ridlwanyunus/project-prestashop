<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:47
  from '/var/www/html/prestashop/themes/furniture/modules/ybc_blog/views/templates/hook/categories_str.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b68b0c7016_99481522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '813f99c09ebce75b448628ceb854068ffea8498d' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/modules/ybc_blog/views/templates/hook/categories_str.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b68b0c7016_99481522 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value && count($_smarty_tpl->tpl_vars['categories']->value) > 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
<br />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ((isset($_smarty_tpl->tpl_vars['categories']->value[0]['title']))) {?>
    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value[0]['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

<?php }
}
}
