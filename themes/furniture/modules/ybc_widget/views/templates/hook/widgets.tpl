{if $widgets}
    {if $widget_hook == "display-top-column" }
        
            <div class="home_widget_top_column">
                <ul class="ybc-widget-{$widget_hook} row">
                    {foreach from=$widgets item='widget'}
                        <li class="ybc-widget-item{if isset($widget.custom_class) && $widget.custom_class} {$widget.custom_class}{/if}">
                            <div class="ybc-widget-item-content">
                                {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                                    {if $widget.show_image && $widget.image}{if $widget.link}
                                        <a class="ybc_widget_link_img" href="{$widget.link}"
                                        {if $widget.show_image && $widget.image}{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'}style="background-image:url({$widget_module_path}images/widget/{$widget.image});"{/if}{/if}>{/if}
                                        <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}
                                        </a>
                                    {/if}
                                {/if}
                                
                                {if $widget.show_title && $widget.title || $widget.show_description && $widget.description}
                                <div class="ybc-widget-description-content"> 
                                    {if $widget.show_title && $widget.title}
                                        <h4 class="ybc-widget-title">
                                            {if $widget.link}
                                            <a href="{$widget.link}">{/if}{$widget.title}
                                            {if $widget.link}</a>{/if}
                                        </h4>
                                    {/if}
                                    {if isset($widget.subtitle) && $widget.subtitle}
                                        <h4 class="ybc-widget-subtitle">{$widget.subtitle}</h4>
                                    {/if}
                                    {if $widget.show_description && $widget.description}
                                        <div class="ybc-widget-description">
                                            {$widget.description nofilter}
                                        </div>
                                    {/if}
                                </div>
                                {/if}
                            </div>
                        </li>
                    {/foreach}
                </ul>                     
            </div>
            
    {else if ($widget_hook == "display-left-column" || $widget_hook == "display-right-column")}
        <div class="block">
            <ul class="ybc-widget-{$widget_hook} block_content">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {else if $widget_hook == "ybc-footer-links"}
            <ul class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
    {else if $widget_hook == "ybc-custom-4"}
        <ul class="ybc-widget-{$widget_hook}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                </li>
            {/foreach}
        </ul>
    {else if ($widget_hook == "ybc-custom-3" || $widget_hook == "ybc-custom-2" || $widget_hook == 'ybc-custom-1')}
        <ul class="ybc-widget-ybc-custom-1 ybc_widget_services col-xs-12 col-sm-12 {if isset($tc_config.YBC_TC_ENABLE_BANNER) && $tc_config.YBC_TC_ENABLE_BANNER != 1} hidden-xs-down{/if}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    <div class="ybc-widget-item-content {if $widget.custom_class} {$widget.custom_class}{/if}">
                        {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                        {if $widget.show_image && $widget.image}
                            {if $widget.link}
                                <a class="ybc_widget_link_img" href="{$widget.link}">
                                    <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />
                                </a>
                            {/if}
                        {/if}
                        <div class="ybc-widget-description-content">
                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                            <a href="{$widget.link}">{/if}
                            {$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                            {if $widget.subtitle}<h5 class="ybc-widget-subtitle">{$widget.subtitle}</h5>{/if}
                            {if $widget.show_description && $widget.description}
                                <div class="ybc-widget-description">{$widget.description nofilter}</div>
                            {/if}
                            {if $widget.link}<a class="button_widget" href="{$widget.link}">{l s='Shop now ' d='Shop.Theme.Active'} <i class="fa fa-angle-double-right"></i></a>{/if}
                        </div>
                    </div>
                </li>
                <li class="services_line_vertical"></li>
            {/foreach}
        </ul>
    {else if $widget_hook == "ybc-custom-6"}
        <section class="footer-block">
            <h4 class="" style="display: none;">{l s='Company' mod='ybc_widget'}</h4>
            <ul class="ybc-widget-{$widget_hook} block_content toggle-footer">                
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}
                                {if $widget.link}
                                    <a class="ybc_widget_link_img" href="{$widget.link}"
                                        {if $widget.show_image && $widget.image}{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'}style="background-image:url({$widget_module_path}images/widget/{$widget.image});"{/if}{/if}>
                                        <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />
                                    </a>
                                {/if}
                            {/if}
                            {if $widget.show_title && $widget.title}
                                {if $widget.link}<a href="{$widget.link}">{else}<span class="title">{/if}{$widget.title}{if $widget.link}</a>{else}</span>{/if}
                            {/if}
                            {if $widget.show_description && $widget.description}
                                <div class="ybc-widget-description">{$widget.description nofilter}</div>
                            {/if}
                        </div>
                    </li>
                {/foreach}
            </ul>  
        </section>      
    {else if $widget_hook == "ybc-custom-5"}
        <ul class="ybc-widget-ybc-custom-1{if isset($tc_config.YBC_TC_ENABLE_BANNER) && $tc_config.YBC_TC_ENABLE_BANNER}{else} hidden-xs{/if}">                
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        <div class="ybc-widget-item-content">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}
                                {if $widget.link}
                                    <a class="ybc_widget_link_img" href="{$widget.link}"
                                        {if $widget.show_image && $widget.image}{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'}style="background-image:url({$widget_module_path}images/widget/{$widget.image});"{/if}{/if}>
                                        <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />
                                    </a>
                                {/if}
                            {/if}
                            <div class="ybc-widget-description-content">
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                <a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                {if $widget.show_description && $widget.description}
                                    <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                {/if}
                            </div>
                        </div>
                    </li>
                {/foreach}
            </ul>
    {else if $widget_hook == "display-home"}
        <div class="ybc-widget-{$widget_hook} col-xs-12 col-sm-12{if isset($tc_config.YBC_TC_ENABLE_BANNER) && $tc_config.YBC_TC_ENABLE_BANNER} show_banner_on_mobile{/if}">
            <div class="ybc-widget-{$widget_hook}-content">
                {foreach from=$widgets item='widget'}
                        <div class="ybc-widget-item-content">
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}
                                {if $widget.link}
                                    <a class="ybc_widget_link_img" href="{$widget.link}"
                                        {if $widget.show_image && $widget.image}{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'}style="background-image:url({$widget_module_path}images/widget/{$widget.image});"{/if}{/if}>
                                        <img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />
                                    </a>
                                {/if}
                            {/if}
                            <p class="widget_sub_title">
                                {$widget.subtitle}
                            </p>
                            <div class="ybc-widget-description-content">
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                <a href="{$widget.link}">{/if}{$widget.title}{if $widget.link}</a>{/if}</h4>{/if}
                                {if $widget.show_description && $widget.description}
                                    <div class="ybc-widget-description">{$widget.description nofilter}</div>
                                {/if}
                            </div>
                        </div>
                {/foreach}
            </div>
        </div>
    {else}
            <div class="container">
            {if ($layouts == 'layout2')} <div class="row">{/if}
            <ul  class="ybc-widget-{$widget_hook}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item{if isset($tc_config.YBC_TC_FLOAT_CSS3) && $tc_config.YBC_TC_FLOAT_CSS3 == 1} wow zoomIn{/if}">
                        <div class="ybc-widget-item-content"> 
                            {if $widget.icon}<i class="fa {$widget.icon}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link}">{/if}<img src="{$widget_module_path}images/widget/{$widget.image}" alt="{$widget.title}" />{if $widget.link}</a>{/if}{/if}
                            
                            {if $widget.show_title && $widget.title || $widget.show_description && $widget.description}
                                <div class="ybc-widget-description-content"> 
                                    {if $widget.show_title && $widget.title}
                                        <h4 class="ybc-widget-title">
                                            {if $widget.link}
                                            <a href="{$widget.link}">{/if}{$widget.title}
                                            {if $widget.link}</a>{/if}
                                        </h4>
                                    {/if}
                                    {if $widget.show_description && $widget.description}
                                        <div class="ybc-widget-description">
                                            {$widget.description nofilter}
                                        </div>
                                    {/if}
                                </div>
                            {/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
          {if ($layouts == 'layout2')}</div>{/if}
            </div>
    {/if}
{/if}

