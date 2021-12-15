<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:31
  from '/var/www/html/prestashop/modules/ybc_specificprices/views/templates/hook/renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b67b217dd3_17733960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1fd7c69646968ada76095cf9d5046e30c06706d' => 
    array (
      0 => '/var/www/html/prestashop/modules/ybc_specificprices/views/templates/hook/renderJs.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b67b217dd3_17733960 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var day = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'day','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var hr = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hour','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var min = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'min','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var sec = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sec','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var days = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var hrs = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hrs','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var mins = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'mins','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var secs = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'secs','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
><?php }
}
