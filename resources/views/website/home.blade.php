@extends('website.master', ['title' => ''])

@section('styles')
    <style>
        .page_title {
            display: none !important;
        }

        .carousel-inner .item .carousel-caption {
            background-color: rgba(24, 54, 80, .65);
            top: 45%;
            bottom: 20%;
            left: 5%;
            width: 50%;
        }

        .carousel-inner .item .carousel-caption h3 {
            color: #fff;
        }

        .carousel-inner .item .carousel-caption p {
            color: #fff;
            font-size: 18px;
        }
    </style>
@endsection

@section('content')
    <article id="post-2" class="post-2 page type-page status-publish hentry">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="{{asset('/uploads/slider/slider_1.jpg')}}">
                    <div class="carousel-caption">
                        <h3>CONTINENTAL TRANSPORTATION</h3>
                        <p>
                            To best support your ever-changing logistics needs,
                            <br>we are continuously evolving our
                            transportation services.
                        </p>
                    </div>
                </div><!-- End Item -->

                <div class="item">
                    <img src="{{asset('/uploads/slider/slider_2.jpg')}}">
                    <div class="carousel-caption">
                        <h3>TRANSATLANTIC DELIVERY</h3>
                        <p>
                            Combined rail road transport is particularly well suited
                            <br>to the shipping of hazardous goods
                            since it reduces risk.
                        </p>
                    </div>
                </div><!-- End Item -->

                <div class="item">
                    <img src="{{asset('/uploads/slider/slider_3.jpg')}}">
                    <div class="carousel-caption">
                        <h3>SEA & OCEAN DELIVERY</h3>
                        <p>
                            Sea-Air cargo is the last to be loaded and the first to be unloaded,
                            <br>reducing transshipment
                            times and risk.
                        </p>
                    </div>
                </div><!-- End Item -->

                <div class="item">
                    <img src="{{asset('/uploads/slider/slider_4.jpg')}}">
                    <div class="carousel-caption">
                        <h3>WAREHOUSING STORAGE</h3>
                        <p>
                            You can opt for dedicated platforms from the advantages related to shared surfaces,<br>
                            resources and equipment.
                        </p>
                    </div>
                </div><!-- End Item -->

            </div><!-- End Carousel Inner -->

            <div class="vc_row-full-width"></div>

            {{--            <ul class="nav nav-pills nav-justified">--}}
            {{--                <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem ipsum dolor sit</small></a></li>--}}
            {{--                <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum dolor sit</small></a></li>--}}
            {{--                <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum dolor sit</small></a></li>--}}
            {{--                <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum dolor sit</small></a></li>--}}
            {{--            </ul>--}}


            <div data-vc-full-width="true" data-vc-full-width-init="true"
                 class="vc_row wpb_row vc_row-fluid base_bg_color vc_custom_1448432556856"
                 style="position: relative; left: -189.6px; box-sizing: border-box; width: 1519px; padding-left: 189.6px; padding-right: 189.4px;">
                <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">

                            <a href="#"
                               class="rev_slider_nav rev_slider_1 rev_slide_1 active">
					<span style="" class="icon">
			<i class="stm-transport842"></i>
		</span>
                                <span class="title">
				Road Freight			</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">

                            <a href="#"
                               class="rev_slider_nav rev_slider_1 rev_slide_2">
					<span style="" class="icon">
			<i class="stm-transport839"></i>
		</span>
                                <span class="title">
				Air Freight			</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">

                            <a href="#"
                               class="rev_slider_nav rev_slider_1 rev_slide_3">
					<span style="" class="icon">
			<i class="stm-ship"></i>
		</span>
                                <span class="title">
				Sea Freight			</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">

                            <a href="#"
                               class="rev_slider_nav rev_slider_1 rev_slide_4">
					<span style="" class="icon">
			<i class="stm-warehouse"></i>
		</span>
                                <span class="title">
				Warehousing			</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>


        </div><!-- End Carousel -->
        <div class="vc_row-full-width"></div>
        <div class="container">
            <div class="vc_row-full-width"></div>
            <div
                class="vc_row wpb_row vc_row-fluid vc_hidden-lg vc_hidden-md vc_hidden-sm vc_custom_1449213766351 vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-flex"
                style="min-height: 100vh;">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm">
                    <div class="vc_column-inner vc_custom_1449213666600">
                        <div class="wpb_wrapper">
                            <h1 style="color: #ffffff;text-align: left" class="vc_custom_heading white_stripe">Transport
                                WordPress Theme</h1>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p><span style="color: #ffffff; font-size: 16px; line-height: 28px;">Starting from
                                            loading to unloading and maintaining the highest standards in terms of safety
                                            while in transit, we take nothing to chance.</span></p>

                                </div>
                            </div>
                            <div class="vc_btn3-container vc_btn3-inline">
                                <button
                                    class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-outline vc_btn3-icon-right vc_btn3-color-theme_style_3">
                                    Learn
                                    More <i class="vc_btn3-icon stm-arrow-next"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1450264294682">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2><span style="font-weight: 300;">WELCOME TO OUR Company!</span></h2>
                                    <p>
                                        UFS is a supply chain improvement company. We are an operating company that manages several thousand shipments for our customers on a 24/7 basis.
                                        This includes collaborating with freight forwarders in the management of international import and export shipments.
                                    </p>
                                    <p>
                                        UFS is a relationship based company that believes the cultures of each organization we are partnering with needs to be compatible.
                                        This greatly improves the chances of successfully implementing any required improvements to our customers supply chain. We reach mutual consensus on these improvements through our unique “Guided Discovery Learning” method.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_hidden-sm vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="stm_video_popup">
                                <iframe src="https://player.vimeo.com/video/586881299?h=ae93979808" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/wVTAm3y4cYk?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="true"
                 class="vc_row wpb_row vc_row-fluid base_bg_color vc_custom_1450269319951"
                 style="position: relative; left: -189.6px; box-sizing: border-box; width: 1519px; padding-left: 189.6px; padding-right: 189.4px;">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_services">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <h2><span style="color: #ffffff; font-weight: 300;">Special Services</span></h2>
                                        <p><span style="color: rgba(255,255,255,.5);">Globally known for our ability to handle every last detail of our customers’ particular logistics and forwarding needs, TransCargo’s Special Services team takes care of all your logistics.</span>
                                        </p>
                                        <div class="owl-dots" id="owl-nav-6103fbca1fb53">
                                            <div class="owl-dot"><span></span></div>
                                            <div class="owl-dot"><span></span></div>
                                            <div class="owl-dot active"><span></span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="vc_services_carousel_wr">
                                            <div class="vc_services_carousel owl-carousel owl-theme owl-loaded"
                                                 id="owl-6103fbca1fb18">


                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                         style="transform: translate3d(-1710px, 0px, 0px); transition: all 0.25s ease 0s; width: 2565px;">
                                                        <div class="owl-item" style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/showfreight-2/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/dreamstime_xxl_20955694-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/dreamstime_xxl_20955694-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/dreamstime_xxl_20955694-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            Accuracy in packaging</h6>
                                                                        <p>
                                                                            Provides a scalable and customizable solution
                                                                            for customers who have programs to retire
                                                                            outdated IT assets.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/asset-recovery-2/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_54040023_Subscription_Monthly_M-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_54040023_Subscription_Monthly_M-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_54040023_Subscription_Monthly_M-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            <a href="https://logistics.stylemixthemes.com/services/asset-recovery-2/"
                                                                               data-wpel-link="internal">Car
                                                                                Transportation</a></h6>
                                                                        <p>Provides a scalable and customizable solution
                                                                            for customers who have programs to retire
                                                                            outdated IT assets.</p>
                                                                        <a href="https://logistics.stylemixthemes.com/services/asset-recovery-2/"
                                                                           class="read_more"
                                                                           data-wpel-link="internal"><em>read
                                                                                more</em><span>→</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/multimodal-transport/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_91953311_Subscription_Monthly_M-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_91953311_Subscription_Monthly_M-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_91953311_Subscription_Monthly_M-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            <a href="https://logistics.stylemixthemes.com/services/multimodal-transport/"
                                                                               data-wpel-link="internal">Multimodal
                                                                                Transport</a></h6>
                                                                        <p>Combined rail road transport is particularly
                                                                            well suited to the shipping of hazardous
                                                                            goods since it reduces risk.</p>
                                                                        <a href="https://logistics.stylemixthemes.com/services/multimodal-transport/"
                                                                           class="read_more"
                                                                           data-wpel-link="internal"><em>read
                                                                                more</em><span>→</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/sea-freight-2/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_66820150_Subscription_Monthly_M-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_66820150_Subscription_Monthly_M-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_66820150_Subscription_Monthly_M-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            <a href="https://logistics.stylemixthemes.com/services/sea-freight-2/"
                                                                               data-wpel-link="internal">Road
                                                                                Freight</a></h6>
                                                                        <p>To best support your ever-changing logistics
                                                                            needs, we are continuously evolving our
                                                                            transportation services.</p>
                                                                        <a href="https://logistics.stylemixthemes.com/services/sea-freight-2/"
                                                                           class="read_more"
                                                                           data-wpel-link="internal"><em>read
                                                                                more</em><span>→</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/sea-freight/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_70457153_Subscription_Monthly_M-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_70457153_Subscription_Monthly_M-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_70457153_Subscription_Monthly_M-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            <a href="https://logistics.stylemixthemes.com/services/sea-freight/"
                                                                               data-wpel-link="internal">Sea Freight</a>
                                                                        </h6>
                                                                        <p>Sea-Air cargo is the last to be loaded and
                                                                            the first to be unloaded, reducing
                                                                            transshipment times and risk.</p>
                                                                        <a href="https://logistics.stylemixthemes.com/services/sea-freight/"
                                                                           class="read_more"
                                                                           data-wpel-link="internal"><em>read
                                                                                more</em><span>→</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item" style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/air-freight/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_44261036_Subscription_Monthly_XL-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_44261036_Subscription_Monthly_XL-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_44261036_Subscription_Monthly_XL-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            <a href="https://logistics.stylemixthemes.com/services/air-freight/"
                                                                               data-wpel-link="internal">Air Freight</a>
                                                                        </h6>
                                                                        <p>Our AIRFAST services have been designed for
                                                                            customers who need their goods delivered
                                                                            urgently.</p>
                                                                        <a href="https://logistics.stylemixthemes.com/services/air-freight/"
                                                                           class="read_more"
                                                                           data-wpel-link="internal"><em>read
                                                                                more</em><span>→</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item active"
                                                             style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/packaging-and-storage/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_77985301_Subscription_Monthly_M-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_77985301_Subscription_Monthly_M-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_77985301_Subscription_Monthly_M-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>Packaging and
                                                                                Storage</h6>
                                                                        <p>Logistics Ground’s flexible model, using only quality carriers, means you benefit from improved service levels, greater flexibility and time-definite deliveries. Our expertise in transport management and planning allows us to design a solution that meets your needs and also quickly respond to any event disruptions.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item active"
                                                             style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/freight-forwarding/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_85388194_Subscription_Monthly_M-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_85388194_Subscription_Monthly_M-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_85388194_Subscription_Monthly_M-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            <a href="https://logistics.stylemixthemes.com/services/freight-forwarding/"
                                                                               data-wpel-link="internal">Freight
                                                                                Forwarding</a></h6>
                                                                        <p>With a global presence in 67 countries,
                                                                            TransCargo is one of the world’s largest
                                                                            freight forwarding companies.</p>
                                                                        <a href="https://logistics.stylemixthemes.com/services/freight-forwarding/"
                                                                           class="read_more"
                                                                           data-wpel-link="internal"><em>read
                                                                                more</em><span>→</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-item active"
                                                             style="width: 285px; margin-right: 0px;">
                                                            <div class="item">
                                                                <div class="item_wr">
                                                                    <div class="item_thumbnail">
                                                                        <a href="https://logistics.stylemixthemes.com/services/supply-chain-solutions/"
                                                                           data-wpel-link="internal">
                                                                            <img width="255" height="170"
                                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_72572617_Subscription_Monthly_M-255x170.jpg"
                                                                                 class="attachment-transcargo-image-255x170-croped size-transcargo-image-255x170-croped wp-post-image"
                                                                                 alt="" loading="lazy"
                                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_72572617_Subscription_Monthly_M-255x170.jpg 255w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_72572617_Subscription_Monthly_M-255x170@2x.jpg 510w"
                                                                                 sizes="(max-width: 255px) 100vw, 255px">
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6>
                                                                            <a href="https://logistics.stylemixthemes.com/services/supply-chain-solutions/"
                                                                               data-wpel-link="internal">Supply Chain
                                                                                Solutions</a></h6>
                                                                        <p>Provides a scalable and customizable solution
                                                                            for customers who have programs to retire
                                                                            outdated IT assets.</p>
                                                                        <a href="https://logistics.stylemixthemes.com/services/supply-chain-solutions/"
                                                                           class="read_more"
                                                                           data-wpel-link="internal"><em>read
                                                                                more</em><span>→</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-controls">
                                                    <div class="owl-nav">
                                                        <div class="owl-prev" style="display: none;">prev</div>
                                                        <div class="owl-next" style="display: none;">next</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function ($) {
                                        $("#owl-6103fbca1fb18").owlCarousel({
                                            dotsContainer: '#owl-nav-6103fbca1fb53',
                                            items: 3,
                                            autoplay: true,
                                            autoplayTimeout: 5000,
                                            smartSpeed: 250,
                                            responsive: {
                                                0: {
                                                    items: 1
                                                },
                                                768: {
                                                    items: 3
                                                },
                                                980: {
                                                    items: 3
                                                },
                                                1199: {
                                                    items: 3
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="3"
                 data-vc-parallax-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/bg-cta-2.jpg"
                 class="vc_row wpb_row vc_row-fluid convert_to_table overlay vc_custom_1450437407937 vc_row-has-fill vc_row-o-equal-height vc_row-flex vc_general vc_parallax vc_parallax-content-moving"
                 style="position: relative; left: -189.6px; box-sizing: border-box; width: 1519px; padding-left: 189.6px; padding-right: 189.4px;">
                <div class="wpb_column vc_column_container vc_col-sm-7">
                    <div class="vc_column-inner vc_custom_1450330273622">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: left" class="vc_custom_heading base_font_color heading_without_line">
                                Reach your destination 100% sure and safe</h2>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p><span style="color: #404040;">We designed a detailed homepage layouts that will fit
                                            any transportation industry size. We will take care of your cargo or your
                                            pasenger and deliver them safe and on time!</span></p>

                                </div>
                            </div>
                            <div class="vc_btn3-container vc_btn3-inline"><a role="button" href="{{url('/contact')}}"
                                                                             class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-flat vc_btn3-icon-right vc_btn3-color-theme_style_3">Contact
                                    Now <i class="vc_btn3-icon stm-arrow-next"></i></a></div>
                        </div>
                    </div>
                </div>
                <div
                    class="wpb_column vc_column_container vc_col-sm-5 vc_hidden-md vc_hidden-sm vc_hidden-xs vc_col-has-fill">
                    <div class="vc_column-inner vc_custom_1450446256472">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
                <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -200%;"
                     data-top-bottom="top: 0%;"
                     style="height: 300%; background-image: url(&quot;https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/bg-cta-2.jpg&quot;); top: -200%;">
                </div>
            </div>
            <div class="vc_row-full-width"></div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1451973457656">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-7">
                    <div class="vc_column-inner vc_custom_1450446299241">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: left" class="vc_custom_heading vc_custom_1450337112571">Latest
                                News</h2>
                            <div class="vc_news">
                                <ul class="news_list owl-carousel owl-theme owl-loaded" id="owl-605720a00e775">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage">
                                            <div class="owl-item" style="width: 540px; margin-right: 20px;">
                                                <li>
                                                    <div class="news_thumbnail">
                                                        <a href="https://logistics.stylemixthemes.com/face-the-challenges-of-increasing-chain-complexity/"
                                                           data-wpel-link="internal">
                                                            <img width="270" height="330"
                                                                 src="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_86085293_Subscription_Monthly_M-270x330.jpg"
                                                                 class="attachment-transcargo-image-270x330-croped size-transcargo-image-270x330-croped wp-post-image"
                                                                 alt="" loading="lazy"
                                                                 srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_86085293_Subscription_Monthly_M-270x330.jpg 270w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/Fotolia_86085293_Subscription_Monthly_M-270x330@2x.jpg 540w"
                                                                 sizes="(max-width: 270px) 100vw, 270px"> </a>
                                                        <div class="date">
                                                            <div class="day">26</div>
                                                            <div class="month">Nov</div>
                                                        </div>
                                                    </div>
                                                    <div class="news_content">
                                                        <p>Established in 2005, the group has grown to over 30 people
                                                            and
                                                            has completed 900 projects</p>
                                                    </div>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                                <script type="text/javascript">
                                    jQuery(document).ready(function ($) {
                                        $("#owl-605720a00e775").owlCarousel({
                                            dotsContainer: '#owl-nav-605720a00e7b1',
                                            items: 1,
                                            margin: 20,
                                            autoplay: true,
                                            autoplayTimeout: 5000,
                                            smartSpeed: 250
                                        });
                                    });

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-5">
                    <div class="vc_column-inner vc_custom_1450446304318">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: left" class="vc_custom_heading vc_custom_1450337066920">FAQ</h2>
                            <div class="vc_tta-container" data-vc-action="collapse">
                                <div
                                    class="vc_general vc_tta vc_tta-accordion vc_tta-color-theme_style vc_tta-style-outline vc_tta-shape-square vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-no-fill">
                                    <div class="vc_tta-panels-container">
                                        <div class="vc_tta-panels">
                                            <div class="vc_tta-panel vc_active" id="1450333286729-b84bb545-f459"
                                                 data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-heading">
                                                    <h4 class="vc_tta-panel-title vc_tta-controls-icon-position-right">
                                                        <a
                                                            href="#1450333286729-b84bb545-f459" data-vc-accordion=""
                                                            data-vc-container=".vc_tta-container"><span
                                                                class="vc_tta-title-text">How many times do i have to tell
                                                                you a few ways?</span><i
                                                                class="vc_tta-controls-icon vc_tta-controls-icon-chevron"></i></a>
                                                    </h4>
                                                </div>
                                                <div class="vc_tta-panel-body">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Progressively generate synergistic total linkage through
                                                                cross-media intellectual capital. Enthusiastically
                                                                parallel
                                                                task team building e-tailers without standards compliant
                                                                initiatives. Progressively monetize client-centric
                                                                outsourcing with excellent communities.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_tta-panel" id="1450333395266-cee3f8a0-cdaa"
                                                 data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-heading">
                                                    <h4 class="vc_tta-panel-title vc_tta-controls-icon-position-right">
                                                        <a
                                                            href="#1450333395266-cee3f8a0-cdaa" data-vc-accordion=""
                                                            data-vc-container=".vc_tta-container"><span
                                                                class="vc_tta-title-text">What is do i have to tell you a
                                                                few lorem?</span><i
                                                                class="vc_tta-controls-icon vc_tta-controls-icon-chevron"></i></a>
                                                    </h4>
                                                </div>
                                                <div class="vc_tta-panel-body">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Progressively generate synergistic total linkage through
                                                                cross-media intellectual capital. Enthusiastically
                                                                parallel
                                                                task team building e-tailers without standards compliant
                                                                initiatives. Progressively monetize client-centric
                                                                outsourcing with excellent communities.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_tta-panel" id="1450333393575-560e10ae-d671"
                                                 data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-heading">
                                                    <h4 class="vc_tta-panel-title vc_tta-controls-icon-position-right">
                                                        <a
                                                            href="#1450333393575-560e10ae-d671" data-vc-accordion=""
                                                            data-vc-container=".vc_tta-container"><span
                                                                class="vc_tta-title-text">I have a technical problem or
                                                                support issue I need resolved, who do I email?</span><i
                                                                class="vc_tta-controls-icon vc_tta-controls-icon-chevron"></i></a>
                                                    </h4>
                                                </div>
                                                <div class="vc_tta-panel-body">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Progressively generate synergistic total linkage through
                                                                cross-media intellectual capital. Enthusiastically
                                                                parallel
                                                                task team building e-tailers without standards compliant
                                                                initiatives. Progressively monetize client-centric
                                                                outsourcing with excellent communities.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_tta-panel" id="1450333390085-ccbb2f35-ff19"
                                                 data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-heading">
                                                    <h4 class="vc_tta-panel-title vc_tta-controls-icon-position-right">
                                                        <a
                                                            href="#1450333390085-ccbb2f35-ff19" data-vc-accordion=""
                                                            data-vc-container=".vc_tta-container"><span
                                                                class="vc_tta-title-text">What other services are you
                                                                compatible with?</span><i
                                                                class="vc_tta-controls-icon vc_tta-controls-icon-chevron"></i></a>
                                                    </h4>
                                                </div>
                                                <div class="vc_tta-panel-body">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Progressively generate synergistic total linkage through
                                                                cross-media intellectual capital. Enthusiastically
                                                                parallel
                                                                task team building e-tailers without standards compliant
                                                                initiatives. Progressively monetize client-centric
                                                                outsourcing with excellent communities.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_tta-panel" id="1450333387414-6ded1f9e-e822"
                                                 data-vc-content=".vc_tta-panel-body">
                                                <div class="vc_tta-panel-heading">
                                                    <h4 class="vc_tta-panel-title vc_tta-controls-icon-position-right">
                                                        <a
                                                            href="#1450333387414-6ded1f9e-e822" data-vc-accordion=""
                                                            data-vc-container=".vc_tta-container"><span
                                                                class="vc_tta-title-text">Are you hiring?</span><i
                                                                class="vc_tta-controls-icon vc_tta-controls-icon-chevron"></i></a>
                                                    </h4>
                                                </div>
                                                <div class="vc_tta-panel-body">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>Progressively generate synergistic total linkage through
                                                                cross-media intellectual capital. Enthusiastically
                                                                parallel
                                                                task team building e-tailers without standards compliant
                                                                initiatives. Progressively monetize client-centric
                                                                outsourcing with excellent communities.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"
                 class="vc_row wpb_row vc_row-fluid vc_custom_1450356826637 vc_row-no-padding"
                 style="position: relative; left: -189.6px; box-sizing: border-box; width: 1519px;">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_testimonials style_2" id="owl_wr_605720a0118aa"
                                 style="background-image: url({{url('/uploads/company/coufounder.jpg')}});">
                                <div class="container">
                                    <div class="vc_testimonials_carousel_wr">
                                        <div class="vc_testimonials_carousel owl-carousel owl-theme owl-loaded"
                                             id="owl_605720a0118e6">


                                            <div class="owl-stage-outer owl-height" style="height: 226.4px;">
                                                <div class="owl-stage">
                                                    <div class="owl-item active"
                                                         style="width: 535px; margin-right: 15px;">
                                                        <div class="item"
                                                             data-image="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/testimonial_bg_image_3.jpg">
                                                            <p>
                                                                UFS is a supply chain improvement company. We are an operating company that manages several thousand shipments for our customers on a 24/7 basis. This includes collaborating with freight forwarders in the management of
                                                                international import and export shipments.
                                                            </p>
                                                            <div class="sep"><i class="stm-testimonials-new-2"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-controls">
                                                <div class="owl-nav">
                                                    <div class="owl-prev" style="display: none;">prev</div>
                                                    <div class="owl-next" style="display: none;">next</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="true"
                 class="vc_row wpb_row vc_row-fluid reset-sm-paddings vc_custom_1451973500888 vc_row-has-fill"
                 style="position: relative; left: -189.6px; box-sizing: border-box; width: 1519px; padding-left: 189.6px; padding-right: 189.4px;">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-6">
                    <div class="vc_column-inner vc_custom_1450444940366">
                        <div class="wpb_wrapper">
                            <h2 style="text-align: left" class="vc_custom_heading">What makes us special?</h2>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p>Over 42,000 dedicated employees, working in 17 regional clusters around the
                                        globe,
                                        deliver operational excellence.</p>

                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid reset-sm-paddings vc_custom_1449127190171">
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
                                    <div class="vc_column-inner vc_custom_1450423994691">
                                        <div class="wpb_wrapper">
                                            <div class="stm_icon left icon_position_left">
                                                <div id="icon_wr_605720a014253" class="icon"
                                                     style="font-size: 71px; width: 95px;">
                                                </div>
                                                <div class="icon_text">
                                                    <div class="title" style="font-size: 14px; font-weight: 600;">
                                                        Packaging<br>
                                                        and Storage
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                jQuery(document).ready(function ($) {
                                                    $("#icon_wr_605720a014253 svg").attr('id',
                                                        'icon_605720a01428f');
                                                    new Vivus('icon_605720a01428f', {
                                                        type: 'async',
                                                        duration: 150,
                                                        animTimingFunction: Vivus['EASE_OUT']
                                                    });
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
                                    <div class="vc_column-inner vc_custom_1450423999162">
                                        <div class="wpb_wrapper">
                                            <div class="stm_icon left icon_position_left">
                                                <div id="icon_wr_605720a0147fe" class="icon"
                                                     style="font-size: 64px; width: 95px;">
                                                </div>
                                                <div class="icon_text">
                                                    <div class="title" style="font-size: 14px; font-weight: 600;">
                                                        Warehousing<br>
                                                        service
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                jQuery(document).ready(function ($) {
                                                    $("#icon_wr_605720a0147fe svg").attr('id',
                                                        'icon_605720a01483b');
                                                    new Vivus('icon_605720a01483b', {
                                                        type: 'async',
                                                        duration: 150,
                                                        animTimingFunction: Vivus['EASE_OUT']
                                                    });
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_inner vc_row-fluid reset-sm-paddings vc_custom_1449127193884">
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
                                    <div class="vc_column-inner vc_custom_1450424067703">
                                        <div class="wpb_wrapper">
                                            <div class="stm_icon left icon_position_left">
                                                <div id="icon_wr_605720a014eac" class="icon"
                                                     style="font-size: 51px; width: 95px;">
                                                </div>
                                                <div class="icon_text">
                                                    <div class="title" style="font-size: 14px; font-weight: 600;">
                                                        Ground<br>
                                                        Transport
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                jQuery(document).ready(function ($) {
                                                    $("#icon_wr_605720a014eac svg").attr('id',
                                                        'icon_605720a014eeb');
                                                    new Vivus('icon_605720a014eeb', {
                                                        type: 'async',
                                                        duration: 150,
                                                        animTimingFunction: Vivus['EASE_OUT']
                                                    });
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
                                    <div class="vc_column-inner vc_custom_1450424075450">
                                        <div class="wpb_wrapper">
                                            <div class="stm_icon left icon_position_left">
                                                <div id="icon_wr_605720a015367" class="icon"
                                                     style="font-size: 50px; width: 95px;">
                                                </div>
                                                <div class="icon_text">
                                                    <div class="title" style="font-size: 14px; font-weight: 600;">
                                                        Logistic<br>
                                                        Services
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                jQuery(document).ready(function ($) {
                                                    $("#icon_wr_605720a015367 svg").attr('id',
                                                        'icon_605720a0153a7');
                                                    new Vivus('icon_605720a0153a7', {
                                                        type: 'async',
                                                        duration: 150,
                                                        animTimingFunction: Vivus['EASE_OUT']
                                                    });
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-6">
                    <div class="vc_column-inner vc_custom_1451973486237">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid reset-sm-paddings">
                                <div class="base_bg_color wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1450423858601">
                                        <div class="wpb_wrapper">
                                            <h2 style="color: #ffffff;text-align: left" class="vc_custom_heading">
                                                Request a
                                                Free Quote</h2>[contact-form-7 404 "Not Found"]
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width"></div>
        </div>
        <!--.container-->
        <script type="text/javascript">
            function setREVStartSize(e) {
                try {
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                        newh;
                    pw = pw === 0 || isNaN(pw) ? window.innerWidth : pw;
                    e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                    if (e.layout === "fullscreen" || e.l === "fullscreen")
                        newh = Math.max(e.mh, window.innerHeight);
                    else {
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl)
                            if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                        e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl)
                            if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                        var nl = new Array(e.rl.length),
                            ix = 0,
                            sl;
                        e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                        for (var i in e.rl) nl[i] = e.rl[i] < window.innerWidth ? 0 : e.rl[i];
                        sl = nl[0];
                        for (var i in nl)
                            if (sl > nl[i] && nl[i] > 0) {
                                sl = nl[i];
                                ix = i;
                            }
                        var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);

                        newh = (e.type === "carousel" && e.justify === "true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e
                            .thumbh);
                    }

                    if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document
                        .createElement("style"));
                    document.getElementById(e.c).height = newh;
                    window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
                } catch (e) {
                    console.log("Failure at Presize of Slider:" + e)
                }
            };

        </script>
    </article>

@endsection
