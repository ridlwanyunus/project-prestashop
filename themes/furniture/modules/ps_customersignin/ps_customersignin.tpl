<div id="_desktop_user_info">
  <div class="user-info">
    {if $logged}
        <span class="show_on_mobile">{l s='Hi, ' d='Shop.Theme.Actions'}{$customer.firstname} <i class="material-icons material-icons-expand_more"></i></span>       
        <div class="toggle_user_mobile">
          <a class="user-info-account" href="{$my_account_url}" title="{l s='My account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >
            <span><i class="fa fa-user-o"></i> {l s='My account' d='Shop.Theme.Actions'}</span>
          </a>
          <a class="logout" href="{$logout_url}" rel="nofollow" >
            <i class="fa fa-unlock"></i> {l s='Sign out' d='Shop.Theme.Actions'}
          </a>
        </div>
    {else}
          <a class="user-info-account" href="{$my_account_url}" title="{l s='My account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >
            <span><i class="fa fa-user-o"></i> {l s='My account' d='Shop.Theme.Actions'}</span>
          </a>
          <a class="login" href="{$my_account_url}" title="{l s='Log in to your customer account' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >
            <span><i class="fa fa-lock"></i> {l s='Sign in' d='Shop.Theme.Actions'}</span>
          </a>
    {/if}
  </div>
</div>