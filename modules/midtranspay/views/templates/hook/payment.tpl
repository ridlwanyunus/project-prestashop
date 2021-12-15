{if $MT_DISABLE_NON_MIGS_BTN != 1 }
<div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
      {if version_compare(Configuration::get('PS_INSTALL_VERSION'), '1.5') == -1}
        <a class="bankwire" href="{$base_dir|cat:'modules/midtranspay/payment.php'}" title="Pay Via Midtrans">
      {else}
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment')}" title="Pay Via Midtrans">
      {/if}
        <img src="{$this_path}logo/Midtrans.png" alt="{l s='Pay via Midtrans' mod='midtranspay'}" height="30px"/><br>
        {$MT_DISPLAY_TITLE}
      </a>
    </p>  
  </div>
</div>
{/if}

{* ========================================== *}
{* Other additional payment method goes below *}
{* ========================================== *}

{if isset($MT_ENABLED_MIGS_BTN) && $MT_ENABLED_MIGS_BTN == 1 }
<div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_MIGS_BTN'], true)}" title="Pay Via Midtrans MIGS channel">
        <img src="{$this_path}logo/MIGS.png" alt="{l s='Pay via Midtrans' mod='midtranspay'}" height="30px"/><br>
        {$MT_TITLE_MIGS_BTN}
      </a>
    </p>  
  </div>
</div>
{/if}

{if isset($MT_ENABLED_PROMO_BTN) && $MT_ENABLED_PROMO_BTN == 1 && $promo_available == 'available' }
<div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_PROMO_BTN'], true)}" title="Pay Via Midtrans promo">
        <img src="{$this_path}logo/promo.png" alt="{l s='Pay via Midtrans' mod='midtranspay'}" height="30px"/><br>
        {$MT_TITLE_PROMO_BTN}
      </a>
    </p>  
  </div>
</div>
{/if}

{if isset($MT_ENABLED_INSTALLMENTMIGS_BTN) && $MT_ENABLED_INSTALLMENTMIGS_BTN == 1 && $installment_available == 'available'}
<div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_INSTALLMENTMIGS_BTN'], true)}" title="Pay Via Midtrans INSTALLMENT MIGS channel">
        <img src="{$this_path}logo/MIGS-installment.png" alt="{l s='Pay via Midtrans' mod='midtranspay'}" height="30px"/><br>
        {$MT_TITLE_INSTALLMENTMIGS_BTN}
      </a>
    </p>  
  </div>
</div>
{/if}

{if isset($MT_ENABLED_INSTALLMENTON_BTN) && $MT_ENABLED_INSTALLMENTON_BTN == 1 && $installment_available == 'available'}
<div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_INSTALLMENTON_BTN'], true)}" title="Pay Via Midtrans INSTALLMENT Online">
        <img src="{$this_path}logo/online-installment.png" alt="{l s='Pay via Midtrans' mod='midtranspay'}" height="30px"/><br>
        {$MT_TITLE_INSTALLMENTON_BTN}
      </a>
    </p>  
  </div>
</div>
{/if}

{if isset($MT_ENABLED_INSTALLMENTOFF_BTN) && $MT_ENABLED_INSTALLMENTOFF_BTN == 1 && $installment_available == 'available'}
<div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_INSTALLMENTOFF_BTN'], true)}" title="Pay Via Midtrans INSTALLMENT Offline">
        <img src="{$this_path}logo/offline-installment.png" alt="{l s='Pay via Midtrans' mod='midtranspay'}" height="30px"/><br>
        {$MT_TITLE_INSTALLMENTOFF_BTN}
      </a>
    </p>  
  </div>
</div>
{/if}

{if isset($installment_available) && $installment_available == 'unavailable'}
<div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
        <a class="cheque" title="Installment unavailable">
        <span>Credit Card installment is not available for this product, product is below minimum price for installment (IDR {$MT_MINAMOUNT})</span>
      </a>
    </p>  
  </div>
</div>
{/if}

{* ========================================== *}
{* Additional Custom VA Button goes below *}
{* ========================================== *}

{if isset($MT_ENABLED_CUSTOMVA_BTN) && $MT_ENABLED_CUSTOMVA_BTN == 1}
  {if in_array('bca', $MT_LIST_CUSTOMVA)}
  <div class="row">
    <div class="col-xs-12">
      <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_CUSTOMVA_BTN','bank' => 'bca'], true)}" title="Pay Via Midtrans BCA Bank Transfer">
          Bank Transfer BCA
        </a>
      </p>  
    </div>
  </div>
  {/if}

  {if in_array('mandiri', $MT_LIST_CUSTOMVA)}
  <div class="row">
    <div class="col-xs-12">
      <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_CUSTOMVA_BTN','bank' => 'mandiri'], true)}" title="Pay Via Midtrans Mandiri Bank Transfer">
          Bank Transfer Mandiri
        </a>
      </p>  
    </div>
  </div>
  {/if}

  {if in_array('permata', $MT_LIST_CUSTOMVA)}
  <div class="row">
    <div class="col-xs-12">
      <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_CUSTOMVA_BTN','bank' => 'permata'], true)}" title="Pay Via Midtrans Mandiri Bank Transfer">
          Bank Transfer Permata
        </a>
      </p>  
    </div>
  </div>
  {/if}

  {if in_array('other_va', $MT_LIST_CUSTOMVA)}
  <div class="row">
    <div class="col-xs-12">
      <p class="payment_module">
        <a class="bankwire" href="{$link->getModuleLink('midtranspay', 'payment', ['feature' => 'MT_ENABLED_CUSTOMVA_BTN','bank' => 'other_va'], true)}" title="Pay Via Midtrans Any Bank Transfer">
          Bank Transfer (Transfer From Any Bank)
        </a>
      </p>  
    </div>
  </div>
  {/if}
{/if}