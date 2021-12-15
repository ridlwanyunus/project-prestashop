<?php
/* Smarty version 3.1.39, created on 2021-12-15 19:54:17
  from '/var/www/html/prestashop/themes/furniture/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b9e579daf909_45015106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf8ae7f6bac11eb450fa5b46c4ad2c3fb937ebe' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/templates/_partials/breadcrumb.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9e579daf909_45015106 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'prices-drop') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sales','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'my-account') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'search') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'sitemap') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'new-products') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Products','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'best-sales') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'stores') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stores','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'contact') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'order-confirmation') {?>
        <div class="breadcrumb_wrapper">
            <div class="container">
                <ul class="breadcrumb_page_other">
                    <li>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li>
                        <span>/</span>
                    </li>
                    <li>
                        <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Confirmation','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                    </li>
                </ul>
            </div>
        </div>
    <?php } else { ?>
        <div class="breadcrumb_wrapper">
            <div class="container">
            <nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                      <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </a>
                    <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
" />
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cart') {?>
                    <li itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                        <a>
                          <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
                        </a>
                      </li>
                <?php }?>
              </ol>
            </nav>
            </div>
        </div>
    <?php }?>
    
<?php }
}
}
