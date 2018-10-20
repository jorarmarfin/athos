@if (Config::get('header.top-bar-right'))    
<div class="top_bar_right">
    <div class="top_bar_right_wrapper">
        <!-- Shopping cart icon-->
        <a id="header_cart" href="#"><i class="icon-basket"></i><span>8</span></a><a id="search_button" href="#"><i class="icon-search"></i></a>
        <!--wpml flags selector-->
        <div class="wpml-languages enabled">
            <a class="active tooltip" href="#" data-tooltip="No translations available for this page"><img src="images/flags/en.png" alt="English" /><i class="icon-down-open-mini"></i>
            </a>
            <ul class="wpml-lang-dropdown">
                <li>
                    <a href="#"><img src="images/flags/fr.png" alt="French" />
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/flags/de.png" alt="German" />
                    </a>
                </li>
                <li>
                    <a href="#"><img src="images/flags/pl.png" alt="Polish" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif                            
