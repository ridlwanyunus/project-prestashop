<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:31
  from '/var/www/html/prestashop/modules/pleasewait/views/templates/hook/pleasewait.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b67b99d811_47911192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44475f49c516d7a6ee209b213310669b85564bdf' => 
    array (
      0 => '/var/www/html/prestashop/modules/pleasewait/views/templates/hook/pleasewait.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b67b99d811_47911192 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['PLW_HTML']->value || $_smarty_tpl->tpl_vars['PLW_LOADING_MESSAGE']->value) {?>
    <div class="plw_content" style="background: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PLW_BACKGROUND_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;">
        <div class="plw_content_center">
            <?php if ($_smarty_tpl->tpl_vars['PLW_HTML']->value) {?><div class="plw_icon"><?php echo str_replace(array('{bgcolor}','{size}','{size2}'),array($_smarty_tpl->tpl_vars['PLW_ICON_COLOR']->value,$_smarty_tpl->tpl_vars['PLW_SPINNER_SIZE']->value,$_smarty_tpl->tpl_vars['PLW_SPINNER_SIZE2']->value),$_smarty_tpl->tpl_vars['PLW_HTML']->value);?>
</div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['PLW_LOADING_MESSAGE']->value) {?><div class="plw_text" style="color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PLW_TEXT_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PLW_LOADING_MESSAGE']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
        </div>
    </div>
<?php }
}
}
