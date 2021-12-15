<?php
/* Smarty version 3.1.39, created on 2021-12-15 19:53:14
  from '/var/www/html/prestashop/modules/ybc_newsletter/views/templates/hook/template6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b9e53aab5da2_68345334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020b0fdfbaa3bba685a133a3fb7f7c95659d17af' => 
    array (
      0 => '/var/www/html/prestashop/modules/ybc_newsletter/views/templates/hook/template6.tpl',
      1 => 1639493624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9e53aab5da2_68345334 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="s6 ybc-newsletter-popup<?php if ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_MOBILE_HIDE']->value) {?> ynp-mobile-hide<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_TEMPLATE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ybc-mail-wrapper">
    <div class="ynp-div-l2 ybc_animation">
        <div class="ynp-div-l3" >
            <div class="ybc_nlt_content ybc_animation">
                <span id="ynp-close" class="ynp-close button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close popup','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</span>
                <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value != '') {?>
                    <div class="img_bg">
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_IMAGE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" />
                        <div class="ynp-input-row">
                            <label for="ynp-email-input"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email: ','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
 </label>
                            <input type="text" id="ynp-email-input" class="ynp-email-input" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email...','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
" />
                            <input class="button ynp-submit" type="submit" name="ynpSubmit" id="ynp-submit" value="Subscribe" />
                        </div>
                    </div>
                <?php }?>
                <form class="ynp-form ynp-form-popup" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_ACTION']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <div class="ynp-inner">
                        <div class="ynp-loading-div">
                            <img class="ynp-loading" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOADING_IMG']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
" />
                        </div>                            
                        <div class="ynp-inner-wrapper">
                            <?php if ($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOGO']->value) {?>
                                <div class="header_logo_center">
                                    <div class="nlt_header_logo_center">
                                        <div class="nlt_header_logo_table_cell">
                                            <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_LOGO']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" />    
                                        </div>
                                    </div>                                
                                </div>
                            <?php }?>
                            <div class="ynp_content_6">
                                <?php if ((isset($_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value)) && $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value != '') {?>
                                    <h4><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_TITLE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['YBC_NEWSLETTER_POPUP_CONTENT']->value;?>

                            </div>              
                        </div>
                        <div class="ynp-input-checkbox">
                            <input type="checkbox" id="ynp-input-dont-show" class="ynp-input-dont-show" name="ynpcheckbox" />
                            <label for="ynp-input-dont-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show this again','mod'=>'ybc_newsletter'),$_smarty_tpl ) );?>
</label>
                        </div> 
                    </div>
                </form>
                <div class="ybc-pp-clear"></div>
            </div>
        </div>
    </div>
</div><?php }
}
