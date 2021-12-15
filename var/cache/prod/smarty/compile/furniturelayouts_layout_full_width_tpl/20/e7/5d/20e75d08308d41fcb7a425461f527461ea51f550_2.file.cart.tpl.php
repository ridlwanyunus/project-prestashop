<?php
/* Smarty version 3.1.39, created on 2021-12-15 19:54:36
  from '/var/www/html/prestashop/themes/furniture/templates/checkout/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b9e58c590f02_94366433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20e75d08308d41fcb7a425461f527461ea51f550' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/templates/checkout/cart.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_61b9e58c590f02_94366433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148815360561b9e58c58aa31_19013042', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_52905959561b9e58c58ba36_53761191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_90732178361b9e58c58c9b9_68769747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        <?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_totals'} */
class Block_211226452761b9e58c58ea24_08298550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_144557731261b9e58c58f520_00475233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_145491628861b9e58c58e338_12687243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="card cart-summary">
    
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211226452761b9e58c58ea24_08298550', 'cart_totals', $this->tplIndex);
?>

    
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144557731261b9e58c58f520_00475233', 'cart_actions', $this->tplIndex);
?>

    
              </div>
            <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'display_reassurance'} */
class Block_108800293361b9e58c590254_96594821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'display_reassurance'} */
/* {block 'content'} */
class Block_148815360561b9e58c58aa31_19013042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148815360561b9e58c58aa31_19013042',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_52905959561b9e58c58ba36_53761191',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_90732178361b9e58c58c9b9_68769747',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_145491628861b9e58c58e338_12687243',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_211226452761b9e58c58ea24_08298550',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_144557731261b9e58c58f520_00475233',
  ),
  'display_reassurance' => 
  array (
    0 => 'Block_108800293361b9e58c590254_96594821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">
    <div class="cart-grid">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52905959561b9e58c58ba36_53761191', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90732178361b9e58c58c9b9_68769747', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
        <div>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        </div>
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145491628861b9e58c58e338_12687243', 'cart_summary', $this->tplIndex);
?>

    
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108800293361b9e58c590254_96594821', 'display_reassurance', $this->tplIndex);
?>

      </div>

    </div>
  </div>
<?php
}
}
/* {/block 'content'} */
}
