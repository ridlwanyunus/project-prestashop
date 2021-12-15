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

<div class="block-contact links wrapper">
    <h4 class="text-uppercase title-footer-block block-contact-title hidden-xs-down">{l s='Contact Us' d='Shop.Theme'}</h4>
    
    <div class="title clearfix hidden-md-up" data-target="#contact_footer" data-toggle="collapse">
        <span class="h3">{l s='Contact Us' d='Shop.Theme.CustomerAccount'}</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">expand_more</i>
            <i class="material-icons remove">expand_less</i>
          </span>
        </span>
    </div>
    <div id="contact_footer" class="contactinfo_footer collapse">
      {if isset($tc_config.YBC_TC_CONTACT_PAGE_TEXT) && $tc_config.YBC_TC_CONTACT_PAGE_TEXT}
        <div class="text_contact_footer">
            {$tc_config.YBC_TC_CONTACT_PAGE_TEXT}
        </div>
      {/if}
      {if isset($tc_config.BLOCKCONTACTINFOS_ADDRESS) && $tc_config.BLOCKCONTACTINFOS_ADDRESS}
            <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                {l s='Address:' d='Shop.Theme'}
                {$tc_config.BLOCKCONTACTINFOS_ADDRESS}
            </div>
      {else if (isset($contact_infos.address.address1) && $contact_infos.address.address1) || (isset($contact_infos.address.address2) && $contact_infos.address.address2)}
          {if $contact_infos.address.address1}
              <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                {l s='Address: [1]%address1%[/1]'
                  sprintf=[
                  '[1]' => '<span>',
                  '[/1]' => '</span>',
                  '%address1%' => $contact_infos.address.address1
                  ]
                  d='Shop.Theme'
                }
              </div>
          {/if}
          {if $contact_infos.address.address2}
              <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                {l s='Address2: [1]%address2%[/1]'
                  sprintf=[
                  '[1]' => '<span>',
                  '[/1]' => '</span>',
                  '%address2%' => $contact_infos.address.address2
                  ]
                  d='Shop.Theme'
                }
              </div>
          {/if}
      {else}
        {if isset($contact_infos.address.formatted) && $contact_infos.address.formatted}
            <div>
                <i aria-hidden="true" class="icon_pin_alt"></i>
                {l s='Address: [1]%address%[/1]'
                  sprintf=[
                  '[1]' => '<span>',
                  '[/1]' => '</span>',
                  '%address%' => $contact_infos.address.formatted
                  ]
                  d='Shop.Theme'
                }
              </div>
        {/if}
      {/if}

      {if isset($tc_config.BLOCKCONTACTINFOS_PHONE_LABEL) && $tc_config.BLOCKCONTACTINFOS_PHONE_LABEL}
        <div>
            <a href="tel:{$tc_config.BLOCKCONTACTINFOS_PHONE_CALL}">
              <i class="fa fa-phone"></i>
              {l s='Phone: ' d='Modules.Contactinfo.Shop'}{$tc_config.BLOCKCONTACTINFOS_PHONE_LABEL}
          </a>
        </div>
      {/if}
      {if $contact_infos.fax}
        <div>
            {l s='Fax:' d='Shop.Theme' }{$contact_infos.fax nofilter}
        </div>
      {/if}
      {if $contact_infos.email}
        <div>
            <a href="mailto:{$contact_infos.email}">
                <i aria-hidden="true" class="icon_mail_alt"></i>
                {l s='Email: ' d='Shop.Theme' } {$contact_infos.email}
            </a>
        </div>
      {/if}
      {if isset($tc_config.BLOCKCONTACTINFOS_SKYPE) && $tc_config.BLOCKCONTACTINFOS_SKYPE}
        <div>
            <a href="skype:live:{$tc_config.BLOCKCONTACTINFOS_SKYPE}?call">
                <i class="fa fa-skype"></i>
                {l s='Skype:' d='Shop.Theme'} {$tc_config.BLOCKCONTACTINFOS_SKYPE}
            </a>
        </div>
      {/if}
    </div>
</div>