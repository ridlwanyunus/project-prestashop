<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:31
  from '/var/www/html/prestashop/modules/ybc_specificprices/views/templates/hook/display_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b67b330f68_06730273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc3f7f54d487eae7ec3bdce711d735be4e33fffa' => 
    array (
      0 => '/var/www/html/prestashop/modules/ybc_specificprices/views/templates/hook/display_product.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ybc_specificprices/views/templates/hook/_product.tpl' => 1,
  ),
),false)) {
function content_61b8b67b330f68_06730273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="ybc_countdown col-sm-12 col-md-6 col-lg-6">
    <div id="ybc_specificprices">
        <h3 class="h1 products-section-title text-uppercase">
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['specific_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </h3>
        <div class="ets-product-specific">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121520102261b8b67b32f852_66093917', 'product_miniature');
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
/* {block 'product_miniature'} */
class Block_121520102261b8b67b32f852_66093917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_121520102261b8b67b32f852_66093917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:modules/ybc_specificprices/views/templates/hook/_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php
}
}
/* {/block 'product_miniature'} */
}
