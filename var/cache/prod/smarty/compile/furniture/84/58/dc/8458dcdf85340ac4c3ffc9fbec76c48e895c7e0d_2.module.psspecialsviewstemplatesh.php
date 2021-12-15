<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:31
  from 'module:psspecialsviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b67b94b827_44978783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8458dcdf85340ac4c3ffc9fbec76c48e895c7e0d' => 
    array (
      0 => 'module:psspecialsviewstemplatesh',
      1 => 1639493624,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_61b8b67b94b827_44978783 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="special_products" class="featured-products clearfix home-block-section col-xs-12 col-sm-12">
  <div class="products product_list">
    <?php $_smarty_tpl->_assignInScope('isp', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['isp']->value%2 == 0) {?>    
            <div class="group_item_products">
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('isp', $_smarty_tpl->tpl_vars['isp']->value+1);?>
            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['isp']->value%2 == 0) {?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['isp']->value%2 != 0) {?>
            </div>
    <?php }?>
  </div>
</div>
<?php }
}
