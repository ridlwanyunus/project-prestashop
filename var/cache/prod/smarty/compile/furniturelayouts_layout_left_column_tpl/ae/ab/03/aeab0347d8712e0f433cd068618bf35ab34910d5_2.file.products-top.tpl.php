<?php
/* Smarty version 3.1.39, created on 2021-12-15 19:54:18
  from '/var/www/html/prestashop/themes/furniture/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b9e57a0baf21_46790750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeab0347d8712e0f433cd068618bf35ab34910d5' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/templates/catalog/_partials/products-top.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_61b9e57a0baf21_46790750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="row products-selection">
  <div class="col-md-6 hidden-sm-down total-products">
            <ul class="display hidden-xs">
            <li id="grid" class="active">
                <a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid'),$_smarty_tpl ) );?>
">
                    <i class="fa fa-th"></i>
                </a>
            </li>
            <li id="list">
                <a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List'),$_smarty_tpl ) );?>
">
                    <i class="fa fa-list"></i>
                </a>
            </li>
      </ul>
  </div>
  <div class="col-md-6">
    <div class="row sort-by-row">
      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213073939961b9e57a0b9ec0_43996311', 'sort_by');
?>

    </div>
  </div>
  </div>
<?php }
/* {block 'sort_by'} */
class Block_213073939961b9e57a0b9ec0_43996311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_213073939961b9e57a0b9ec0_43996311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
      <?php
}
}
/* {/block 'sort_by'} */
}
