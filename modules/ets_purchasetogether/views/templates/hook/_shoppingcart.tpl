<div id="_desktop_cart" data-refresh-url="{$refresh_url}">  
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
    <a rel="nofollow" href="{$cart_url}">
        <i class="icon_bag_alt"></i>
        <span class="cart-products-count">{$cart.products_count}</span>
    </a>
    
    <!-- begin -->
    <div class="body cart-hover-content">
          <ul>
            {foreach from=$cart.products item=product}
              <li class="cart-wishlist-item">{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
            {/foreach}
          </ul>
          <div class="cart-subtotals">
            {foreach from=$cart.subtotals item="subtotal"}
              <div class="{$subtotal.type}">
                <span class="label">{$subtotal.label}</span>
                <span class="value">{$subtotal.value}</span>
              </div>
            {/foreach}
          </div>
          <div class="cart-total">
            <span class="label">{$cart.totals.total.label}</span>
            <span class="value">{$cart.totals.total.value}</span>
          </div>
          <div class="cart-wishlist-action">
              {*<a class="cart-wishlist-viewcart" href="{$cart_url}">view cart</a>*}
              <a class="cart-wishlist-checkout" href="{$urls.pages.order}">{l s='Check Out' d='Shop.Theme.Actions'}</a>
            </div>
      </div>
      <!-- end -->
  </div>

      
</div>
