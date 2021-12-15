<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:06
  from 'module:midtranspayviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b6629759e6_27311919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f59e06d43c51abd45d04b382603fc54841925a' => 
    array (
      0 => 'module:midtranspayviewstemplates',
      1 => 1639495222,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b6629759e6_27311919 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MT_DISPLAY_DESCRIPTION']->value) {?>
<section>
  <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['MT_DISPLAY_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8');?>
</p>
</section>
<?php }
}
}
