<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:06
  from '/var/www/html/prestashop/modules/ets_megamenu/views/templates/hook/block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b6628de682_38402608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c80ee85108247350fac4ee319a286eb1de9be7b3' => 
    array (
      0 => '/var/www/html/prestashop/modules/ets_megamenu/views/templates/hook/block.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b6628de682_38402608 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value && $_smarty_tpl->tpl_vars['block']->value['enabled']) {?>    
    <div class="ets_mm_block mm_block_type_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['block']->value['block_type']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['block']->value['display_title']) {?>mm_hide_title<?php }?>">
        <h4><?php if ($_smarty_tpl->tpl_vars['block']->value['title_link']) {?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['title_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['title_link']) {?></a><?php }?></h4>
        <div class="ets_mm_block_content">        
            <?php if ($_smarty_tpl->tpl_vars['block']->value['block_type'] == 'CATEGORY') {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['block']->value['categoriesHtml']))) {
echo $_smarty_tpl->tpl_vars['block']->value['categoriesHtml'];
}?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type'] == 'MNFT') {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['block']->value['manufacturers'])) && $_smarty_tpl->tpl_vars['block']->value['manufacturers']) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['manufacturers'], 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                            <li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type'] == 'CMS') {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['block']->value['cmss'])) && $_smarty_tpl->tpl_vars['block']->value['cmss']) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['cmss'], 'cms');
$_smarty_tpl->tpl_vars['cms']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->do_else = false;
?>
                            <li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cms']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cms']->value['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type'] == 'IMAGE') {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['block']->value['image'])) && $_smarty_tpl->tpl_vars['block']->value['image']) {
if ($_smarty_tpl->tpl_vars['block']->value['image_link']) {?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['image_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['block']->value['image_link']) {?></a><?php }
}?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type'] == 'PRODUCT') {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['block']->value['productsHtml']))) {
echo $_smarty_tpl->tpl_vars['block']->value['productsHtml'];
}?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

            <?php }?>
        </div>
    </div>
<?php }
}
}
