{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="special_products" class="featured-products clearfix home-block-section col-xs-12 col-sm-12">
  <div class="products product_list">
    {assign var='isp' value=0}
    {foreach from=$products item="product"}
        {if $isp%2 == 0}    
            <div class="group_item_products">
        {/if}
        {assign var='isp' value=$isp+1}
            {include file="catalog/_partials/miniatures/product.tpl" product=$product}
        {if $isp%2 == 0}
            </div>
        {/if}
    {/foreach}
    {if $isp%2 != 0}
            </div>
    {/if}
  </div>
</div>
