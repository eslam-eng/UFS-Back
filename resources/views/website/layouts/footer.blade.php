@php
$company = App\Models\Company::admin();
@endphp

<style>
    #footer .widgets_row .footer_logo a img
    {
        height: 90px;
    }
</style>
<footer id="footer">
    <div class="widgets_row">
        <div class="container">
            <div class="footer_widgets">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer_logo">
                            <a href="{{ url('/') }}" data-wpel-link="internal">
                                <img src="{{ url('/logo.png') }}" alt="{{ $company->name }}">
                            </a>
                        </div>
                        <div class="footer_text">
                            <p>
                                {{ $company->notes }}
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="nav_menu-2" class="widget widget_nav_menu">
                            <h6 class="widget_title">{{ ___('Useful Links') }}</h6>
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">

                                    <li id="menu-item-793"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793">
                                        <a href="{{ url('/about') }}" data-wpel-link="internal">
                                            {{ ___('About Us') }}
                                        </a>
                                    </li>

                                    <li id="menu-item-793"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793">
                                        <a href="{{ url('/services') }}" data-wpel-link="internal">
                                            {{ ___('Our Services') }}
                                        </a>
                                    </li>

                                    <li id="menu-item-793"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793">
                                        <a href="{{ url('/contact') }}" data-wpel-link="internal">
                                            {{ ___('Contact Us') }}
                                        </a>
                                    </li>

                                    <li id="menu-item-793"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793">
                                        <a href="{{ url('/awb-track') }}" data-wpel-link="internal">
                                            {{ ___('Track Awb') }}
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="contacts-2" class="widget widget_contacts">
                            <h6 class="widget_title">{{ ___('Get In Touch') }}</h6>
                            <ul>
                                <li>
                                    <div class="icon"><i class="stm-location-2"></i></div>
                                    <a class="text"  target="_blank" href="https://www.google.com/maps/place/{{ $company->address }}">
                                        <p>{{ $company->address }}</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="icon"><i class="stm-iphone"></i></div>
                                    <a class="text" href="tel:{{ $company->phone }}" >
                                        <p>CALL FREE: {{ $company->phone }}</p>
                                    </a>
                                </li>
                                <li>
                                    <div class="icon"><i class="stm-fax"></i></div>
                                    <div class="text">
                                        <p>FAX: {{ $company->fax }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="stm-email"></i></div>
                                    <div class="text">
                                        <p><a href="mailto:Customer.Service@ufs-eg.com">Customer.Service@ufs-eg.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="stm-clock"></i></div>
                                    <a class="text" target="_blank" href="https://www.google.com/maps/place/{{ optional($company->city)->name }}-{{ optional($company->area)->name }}" >
                                        <p>{{ optional($company->city)->name }} - {{ optional($company->area)->name }}</p>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <section id="tp_widget_recent_tweets-3" class="widget widget_tp_widget_recent_tweets">
                            <h6 class="widget_title">Latest Tweets</h6>
                            <div class="tp_recent_tweets">
                                <ul>
                                    <li><span>Warm Christmas Gifts by Stylemix - <a href="https://t.co/3gw6N6QDWV"
                                                target="_blank" data-wpel-link="external"
                                                rel="nofollow external noopener noreferrer">https://t.co/3gw6N6QDWV</a></span><a
                                            class="twitter_time" target="_blank"
                                            href="https://twitter.com/stylemix_themes/statuses/1341705286260822017"
                                            data-wpel-link="external" rel="nofollow external noopener noreferrer">87
                                            days
                                            ago</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_row">
        <div class="container">
            <div class="copyright_row_wr">
                <div class="socials">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com" target="_blank" class="social-facebook"
                                data-wpel-link="external" rel="nofollow external noopener noreferrer">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" target="_blank" class="social-twitter"
                                data-wpel-link="external" rel="nofollow external noopener noreferrer">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" target="_blank" class="social-instagram"
                                data-wpel-link="external" rel="nofollow external noopener noreferrer">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com" target="_blank" class="social-google-plus"
                                data-wpel-link="external" rel="nofollow external noopener noreferrer">
                                <i class="stm-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.vimeo.com" target="_blank" class="social-vimeo"
                                data-wpel-link="external" rel="nofollow external noopener noreferrer">
                                <i class="fa fa-vimeo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com" target="_blank" class="social-linkedin"
                                data-wpel-link="external" rel="nofollow external noopener noreferrer">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="copyright">
                    Copyright © 2020-2021 Logistics Theme by <a href="http://dtcesolutions.com/" target="_blank"
                        data-wpel-link="external" rel="nofollow external noopener noreferrer">DTC ESolutions</a>. All
                    rights reserved
                </div>
            </div>
        </div>
    </div>
</footer>
