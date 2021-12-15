{*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="_desktop_contact_link">
  <div id="contact-link">
    {if isset($tc_config.BLOCKCONTACTINFOS_PHONE_CALL) && $tc_config.BLOCKCONTACTINFOS_PHONE_CALL}
      <div class="contact_link_item">
          <a href="tel:{$tc_config.BLOCKCONTACTINFOS_PHONE_CALL}">
              <i class="fa fa-phone" aria-hidden="true"></i>
              {l s='Phone: ' d='Modules.Contactinfo.Shop'}{$tc_config.BLOCKCONTACTINFOS_PHONE_LABEL}
          </a>
      </div>
    {/if}
    {if isset($contact_infos.email) && $contact_infos.email}
     <div class="contact_link_item">
          <a href="mailto:{$contact_infos.email}">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              {l s='Email: ' d='Modules.Contactinfo.Shop'}{$contact_infos.email}
          </a>
      </div>
    {/if}
  </div>
</div>
