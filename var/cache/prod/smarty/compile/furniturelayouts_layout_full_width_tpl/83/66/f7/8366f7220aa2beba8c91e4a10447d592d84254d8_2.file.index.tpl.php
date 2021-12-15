<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:31
  from '/var/www/html/prestashop/themes/furniture/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b67b5d22d7_53895402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8366f7220aa2beba8c91e4a10447d592d84254d8' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/templates/index.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b67b5d22d7_53895402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101486051961b8b67b5cfcd0_29263200', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_104050735661b8b67b5d0eb9_00056667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_70046589561b8b67b5d14d4_16507624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_101486051961b8b67b5cfcd0_29263200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_101486051961b8b67b5cfcd0_29263200',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_104050735661b8b67b5d0eb9_00056667',
  ),
  'page_content' => 
  array (
    0 => 'Block_70046589561b8b67b5d14d4_16507624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaytopcolumn'),$_smarty_tpl ) );?>

    <div class="tabhome">
        <div class="tabhome_title">
            <h4 class="title_tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our products','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h4>
            <ul class="tabhome_title_list"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'tabHome'),$_smarty_tpl ) );?>
</ul>
        </div>
        <div class="tabhome_content">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'tabHomeContent'),$_smarty_tpl ) );?>

        </div>
    </div>
      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104050735661b8b67b5d0eb9_00056667', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70046589561b8b67b5d14d4_16507624', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
