<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:20:34
  from '/var/www/html/prestashop/modules/midtranspay/views/templates/hook/infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b642d05127_05064837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f314d2f1b51a883f0086bb30c6fc041ee0782a9' => 
    array (
      0 => '/var/www/html/prestashop/modules/midtranspay/views/templates/hook/infos.tpl',
      1 => 1639495222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b642d05127_05064837 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-info">
<img src="../modules/midtranspay/Midtrans.png" style="float:left; margin-right:15px;">
<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept secure payments by Midtrans.",'mod'=>'midtranspay'),$_smarty_tpl ) );?>
</strong></p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Please consult your Midtrans Merchant Administration Portal for settings.",'mod'=>'midtranspay'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
