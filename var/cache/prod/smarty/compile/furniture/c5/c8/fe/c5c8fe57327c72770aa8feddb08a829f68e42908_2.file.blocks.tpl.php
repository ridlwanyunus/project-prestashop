<?php
/* Smarty version 3.1.39, created on 2021-12-14 22:21:47
  from '/var/www/html/prestashop/themes/furniture/modules/ybc_blog/views/templates/hook/blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b8b68b1e16a1_91848951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5c8fe57327c72770aa8feddb08a829f68e42908' => 
    array (
      0 => '/var/www/html/prestashop/themes/furniture/modules/ybc_blog/views/templates/hook/blocks.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b8b68b1e16a1_91848951 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'ybc_blog_page') {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_CATEGORIES_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_CATEGORIES_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogCategoriesBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_SEARCH_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_SEARCH_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogSearchBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_LATEST_NEWS_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_LATEST_NEWS_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogNewsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_POPULAR_POST_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_POPULAR_POST_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogPopularPostsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_FEATURED_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_FEATURED_BLOCK']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogFeaturedPostsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_TAGS_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_TAGS_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogTagsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_GALLERY_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_SHOW_GALLERY_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogGalleryBlock'),$_smarty_tpl ) );?>

    <?php }
}
}
}
