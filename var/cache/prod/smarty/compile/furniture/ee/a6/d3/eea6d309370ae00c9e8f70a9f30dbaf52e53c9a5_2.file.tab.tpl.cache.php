<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:31
  from '/var/www/html/prestashop/themes/furniture/modules/ps_bestsellers/views/templates/hook/tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b67b724e95_66571718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea6d309370ae00c9e8f70a9f30dbaf52e53c9a5' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/modules/ps_bestsellers/views/templates/hook/tab.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b67b724e95_66571718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '201981102461b8b67b723ce7_49133964';
?>
<li>
    <a class="nav-link" data-toggle="tab" href="#bestseller_products">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

    </a>
</li><?php }
}
