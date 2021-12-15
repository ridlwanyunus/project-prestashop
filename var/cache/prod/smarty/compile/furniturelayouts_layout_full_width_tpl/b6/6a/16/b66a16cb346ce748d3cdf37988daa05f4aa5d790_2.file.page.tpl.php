<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:31
  from '/var/www/html/prestashop/themes/furniture/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b67b5d8f86_09308118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b66a16cb346ce748d3cdf37988daa05f4aa5d790' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/templates/page.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b67b5d8f86_09308118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136205616761b8b67b5d4b35_97568222', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_145588741461b8b67b5d5395_25298666 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h2><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h2>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_97827529961b8b67b5d4f27_31387431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145588741461b8b67b5d5395_25298666', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_190692173361b8b67b5d7630_02981810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_94981658561b8b67b5d7b73_21324280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_53016838461b8b67b5d7250_95672740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190692173361b8b67b5d7630_02981810', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94981658561b8b67b5d7b73_21324280', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_154021221561b8b67b5d8652_68101804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_134384203361b8b67b5d8319_60903226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154021221561b8b67b5d8652_68101804', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_136205616761b8b67b5d4b35_97568222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136205616761b8b67b5d4b35_97568222',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_97827529961b8b67b5d4f27_31387431',
  ),
  'page_title' => 
  array (
    0 => 'Block_145588741461b8b67b5d5395_25298666',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_53016838461b8b67b5d7250_95672740',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_190692173361b8b67b5d7630_02981810',
  ),
  'page_content' => 
  array (
    0 => 'Block_94981658561b8b67b5d7b73_21324280',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_134384203361b8b67b5d8319_60903226',
  ),
  'page_footer' => 
  array (
    0 => 'Block_154021221561b8b67b5d8652_68101804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97827529961b8b67b5d4f27_31387431', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53016838461b8b67b5d7250_95672740', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134384203361b8b67b5d8319_60903226', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
