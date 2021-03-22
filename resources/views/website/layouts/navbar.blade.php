@php
    $company = App\Models\Company::admin();
@endphp

<header id="header">
    <div class="top_bar">
        <div class="container">
            <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-dropdown js-wpml-ls-legacy-dropdown"
                id="lang_sel">
                <ul>

                    <li tabindex="0"
                        class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-item-legacy-dropdown">
                        <a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle lang_sel_sel icl-en"><span
                                class="wpml-ls-native icl_lang_sel_native">English</span>
                            </a>

                        <ul class="wpml-ls-sub-menu">
                            <li class="icl-de wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-de">
                                <a href="#" class="wpml-ls-link">
                                    <span  class="wpml-ls-display icl_lang_sel_translated">Arabic</span>
                                </a>
                            </li>
                        </ul>

                    </li>

                </ul>
            </div>
            <div class="top_bar_info_wr">

                <ul class="top_bar_info" id="top_bar_info_1" style="display: block;">
                    <li>
                        <i class="stm-iphone"></i>
                        <span>CALL FREE: {{ $company->phone }}</span>
                    </li>
                    <li>
                        <a href="mailto:{{ $company->email }}">
                            <i class="stm-email"></i>
                            <span>{{ $company->email }}</span>
                        </a>
                    </li>
                    <li>
                        <i class="stm-clock"></i>
                        <span>{{ $company->address }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="top_nav_wr">
        <div class="top_nav_affix affix-top">
            <div class="container">
                <div class="top_nav">
                    <div id="menu_toggle">
                        <button></button>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle">
                            <div class="logo">
                                <a  href="{{ url('/') }}"  data-wpel-link="internal">
                                    <img src="{{ url('/logo.png') }}" alt="{{ $company->name }}">
                                </a>
                            </div>
                            <div class="mobile_logo">
                                <a href="{{ url('/') }}" data-wpel-link="internal">
                                    <img src="{{ url('/logo.png') }}" alt="{{ $company->name }}">
                                </a>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <div class="top_nav_menu_wr">
                                <ul id="menu-primary-menu" class="top_nav_menu">
                                    <li id="menu-item-7" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-7">
                                        <a href="{{ url('/') }}" aria-current="page" data-wpel-link="internal">
                                            {{ ___('Home') }}
                                        </a>
                                    </li>
                                    <li id="menu-item-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-7">
                                        <a href="{{ url('/about') }}" aria-current="page" data-wpel-link="internal">
                                            {{ ___('About Us') }}
                                        </a>
                                    </li>
                                    <li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-7">
                                        <a href="{{ url('/services') }}" aria-current="page" data-wpel-link="internal">
                                            {{ ___('Our Services') }}
                                        </a>
                                    </li>
                                    <li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-7">
                                        <a href="{{ url('/contact') }}" aria-current="page" data-wpel-link="internal">
                                            {{ ___('Contact Us') }}
                                        </a>
                                    </li>
                                    <li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-7">
                                        <a href="{{ url('/request-pickup') }}" aria-current="page" data-wpel-link="internal">
                                            {{ ___('Request A Pickup') }}
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="media-right media-middle">
                            <div class="top_search">
                                <div class="search_button"><i class="stm-tracking"></i></div>
                                <div class="top_search_form">
                                    <p>For more detailed tracking and status information, sign in or contact your local
                                        BestLogistic representative for access.</p>
                                    <form action="{{ route('trackAwb') }}" method="get">
                                        @csrf
                                        <input type="text" placeholder="Enter Reference number" value=""
                                            name="track_number">
                                        <button type="submit"><i class="stm-arrow-next"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top_mobile_menu_wr">
                        <ul id="menu-primary-menu-1" class="top_mobile_menu">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-7">
                                <a href="https://logistics.stylemixthemes.com/" aria-current="page"
                                    data-wpel-link="internal">Home</a></li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-641">
                                <a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-645">
                                        <a href="https://logistics.stylemixthemes.com/services-icon/"
                                            data-wpel-link="internal">Services – Icons Grid</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-688">
                                        <a href="https://logistics.stylemixthemes.com/services-grid/"
                                            data-wpel-link="internal">Services – Images Grid</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-822"><a
                                            href="/services/sea-freight/" data-wpel-link="internal">Single Service
                                            Template</a></li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-273">
                                <a href="#">News</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-274"><a
                                            href="/news/?layout=grid&amp;sidebar_id=272" data-wpel-link="internal">News
                                            – Grid View with Sidebar</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-275"><a
                                            href="/news/" data-wpel-link="internal">News – List View with Sidebar</a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-823"><a
                                            href="/face-the-challenges-of-increasing-chain-complexity/"
                                            data-wpel-link="internal">News – Post Template with Sidebar</a></li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-47">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-426">
                                        <a href="https://logistics.stylemixthemes.com/about-us/"
                                            data-wpel-link="internal">About Us</a></li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-546">
                                        <a href="#">Our Team</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-552">
                                                <a href="https://logistics.stylemixthemes.com/our-team-grid/"
                                                    data-wpel-link="internal">Team – Grid View</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-522">
                                                <a href="https://logistics.stylemixthemes.com/our-team-list/"
                                                    data-wpel-link="internal">Team – List View</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-503">
                                        <a href="https://logistics.stylemixthemes.com/vacancies/"
                                            data-wpel-link="internal">Vacancies</a></li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-819">
                                        <a href="#">Gallery</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-564">
                                                <a href="https://logistics.stylemixthemes.com/gallery-grid/"
                                                    data-wpel-link="internal">Gallery – Grid</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623">
                                                <a href="https://logistics.stylemixthemes.com/gallery-masonry/"
                                                    data-wpel-link="internal">Gallery – Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458">
                                        <a href="https://logistics.stylemixthemes.com/incoterms/"
                                            data-wpel-link="internal">Incoterms</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903">
                                        <a href="https://logistics.stylemixthemes.com/request-a-quote/"
                                            data-wpel-link="internal">Request a Quote</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-473">
                                        <a href="https://logistics.stylemixthemes.com/track-your-shipment/"
                                            data-wpel-link="internal">Track Your Shipment</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-309">
                                        <a href="https://logistics.stylemixthemes.com/shortcodes/"
                                            data-wpel-link="internal">Shortcodes</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a
                                            href="https://logistics.stylemixthemes.com/typography/"
                                            data-wpel-link="internal">Typography</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-446"><a
                                    href="https://logistics.stylemixthemes.com/contacts/"
                                    data-wpel-link="internal">Contacts</a></li>
                        </ul>
                        <div class="mobile_search_form">
                            <p>For more detailed tracking and status information, sign in or contact your local
                                BestLogistic representative for access.</p>
                            <form>
                                <div class="search_button"><i class="stm-tracking"></i></div>
                                <input type="text" placeholder="Enter Reference number" value="" name="track_number">
                                <button type="submit"><i class="stm-arrow-next"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (isset($title))
    <div class="page_title">
        <div class="container">
            <h1>{{ ___($title) }}</h1>
        </div>
    </div>
    @endif
</header>

