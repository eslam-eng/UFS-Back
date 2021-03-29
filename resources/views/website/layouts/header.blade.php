
@php
$company = App\Models\Company::admin();
@endphp

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="{{ url('/') }}">
    <link rel="pingback" href="{{ url('/') }}">
    <link type="text/css" media="all" href="wp-content/cache/autoptimize/css/autoptimize_e8b5e2d7462247d83eebce4ca368d1e0.css" rel="stylesheet" />
    <link type="text/css" media="screen"  href="wp-content/cache/autoptimize/css/autoptimize_c794f6d9d9d13e7d4d00fbdd15a0a26b.css" rel="stylesheet" />
    <title>{{ $company->name }}</title>

    <meta name="description" content="{{ $company->name }}" />
    <meta name="robots" content="noodp" />
    <meta name="keywords" content="{{ $company->name }}" />
    <link rel="canonical" href="index.html" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $company->name }}" />
    <meta property="og:description" content="{{ $company->name }}" />
    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="{{ $company->name }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $company->name }}" />
    <meta name="twitter:title" content="{{ $company->name }}" />
    <script type='application/ld+json'>
        {
            "@context": "http:\/\/schema.org",
            "@type": "WebSite",
            "@id": "#website",
            "url": "https:\/\/logistics.stylemixthemes.com\/",
            "name": "Transcargo | For Transportation, Logistics and Shipping Companies",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https:\/\/logistics.stylemixthemes.com\/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }

    </script>
    <script type='application/ld+json'>
        {
            "@context": "http:\/\/schema.org",
            "@type": "Organization",
            "url": "https:\/\/logistics.stylemixthemes.com\/",
            "sameAs": [],
            "@id": "#organization",
            "name": "StylemixThemes",
            "logo": ""
        }

    </script>
    <!-- / Yoast SEO plugin. -->

    <link rel='dns-prefetch' href='{{ url("/") }}/http://stylemixthemes.com/' />
    <link rel='dns-prefetch' href='{{ url("/") }}/http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='{{ url("/") }}/http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Transcargo | For Transportation, Logistics and Shipping Companies &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Transcargo | For Transportation, Logistics and Shipping Companies &raquo; Comments Feed" href="comments/feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Transcargo | For Transportation, Logistics and Shipping Companies &raquo; Home Comments Feed" href="home/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/logistics.stylemixthemes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6"
            }
        };
        ! function(e, a, t) {
            var r, n, o, i, p = a.createElement("canvas"),
                s = p.getContext && p.getContext("2d");

            function c(e, t) {
                var a = String.fromCharCode;
                s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                var r = p.toDataURL();
                return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
            }

            function l(e) {
                if (!s || !s.fillText) return !1;
                switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                    case "flag":
                        return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356,
                            56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]));
                    case "emoji":
                        return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }

            function d(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (i = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports
                .everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports
                    .everythingExceptFlag && t.supports[i[o]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load",
                    n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji),
                    d(r.wpemoji)))
        }(window, document, window._wpemojiSettings);

    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>




    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}

    </style>





    <link rel='stylesheet' id='transcargo-stm-css' href='{{ url("/") }}/wp-content/cache/autoptimize/css/autoptimize_single_e77837ebe1d09622e74a7c24732e46785152.css?ver=1.0' type='text/css' media='all' />


    <link rel='stylesheet' id='transcargo-default-font-css' href='{{ url("/") }}/https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%26subset%3Dlatin%2Cgreek%2Cgreek-ext%2Cvietnamese%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic%7CTitillium+Web%3A400%2C200%2C200italic%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%26subset%3Dlatin%2Cgreek%2Cgreek-ext%2Cvietnamese%2Ccyrillic-ext%2Clatin-ext%2Ccyrillic&amp;subset=latin%2Clatin-ext&amp;ver=1.0' type='text/css' media='all' />

    <style id='js_composer_front-inline-css' type='text/css'>
        #header {
            background-repeat: repeat;
        }

        h1.no_before:before {
            display: none;
        }

        .owl-carousel .owl-item {
            position: relative;
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

    </style>

    <script type='text/javascript' src='{{ url("/") }}/wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ url("/") }}/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/add-to-any/addtoany.min4963.js?ver=1.1' id='addtoany-js'></script>
    <script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/revslider/public/assets/js/revolution.tools.minf049.js?ver=6.0' id='tp-tools-js'></script>
    <script type='text/javascript' src='{{ url("/") }}/wp-content/plugins/revslider/public/assets/js/rs6.min36b6.js?ver=6.1.7' id='revmin-js'></script>
    <script type='text/javascript' src='{{ url("/") }}/../stylemixthemes.com/api/envato-switcher/inline40df.js?ver=5.6' id='envato-switcher-js'></script>

    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/2.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.6" />
    <link rel='shortlink' href='{{ url("/") }}' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedd48d.json?url=https%3A%2F%2Flogistics.stylemixthemes.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed1d6f?url=https%3A%2F%2Flogistics.stylemixthemes.com%2F&amp;format=xml" />

    <script data-cfasync="false">
        window.a2a_config = window.a2a_config || {};
        a2a_config.callbacks = [];
        a2a_config.overlays = [];
        a2a_config.templates = {};
        (function(d, s, a, b) {
            a = d.createElement(s);
            b = d.getElementsByTagName(s)[0];
            a.async = 1;
            a.src = "../static.addtoany.com/menu/page.js";
            b.parentNode.insertBefore(a, b);
        })(document, "script");

    </script>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator" content="Powered by Slider Revolution 6.1.7 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="wp-content/uploads/2015/12/cropped-favicon-transcargo-32x32.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2015/12/cropped-favicon-transcargo-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/2015/12/cropped-favicon-transcargo-180x180.png" />
    <meta name="msapplication-TileImage" content="https://logistics.stylemixthemes.com/wp-content/uploads/2015/12/cropped-favicon-transcargo-270x270.png" />

    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1445941555299 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1448432556856 {
            margin-bottom: 80px !important;
        }

        .vc_custom_1449213766351 {
            margin-bottom: 60px !important;
            background-image: url(wp-content/uploads/2015/10/mobile_slided801.jpg?id=1051) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1450264294682 {
            margin-bottom: 80px !important;
        }

        .vc_custom_1450270522171 {
            margin-bottom: 0px !important;
            padding-top: 40px !important;
            padding-bottom: 14px !important;
        }

        .vc_custom_1450269319951 {
            margin-bottom: 0px !important;
            padding-top: 80px !important;
            padding-bottom: 80px !important;
        }

        .vc_custom_1450437407937 {
            margin-bottom: 80px !important;
        }

        .vc_custom_1451973457656 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1450356826637 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1450356867512 {
            margin-bottom: 0px !important;
            padding-top: 53px !important;
            padding-bottom: 53px !important;
        }

        .vc_custom_1451973500888 {
            background-color: #f7f7f7 !important;
        }

        .vc_custom_1446716672180 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1449213666600 {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }

        .vc_custom_1495104670618 {
            margin-top: -35px !important;
        }

        .vc_custom_1450267009214 {
            padding-top: 5px !important;
        }

        .vc_custom_1449142338264 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1449142329000 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1449142343672 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1449142350247 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1450330273622 {
            padding-top: 60px !important;
            padding-right: 0px !important;
            padding-bottom: 60px !important;
        }

        .vc_custom_1450446256472 {
            background-image: url(https://logistics.stylemixthemes.com/wp-content/uploads/2015/10/cta-girl-1.png?id=1182) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: contain !important;
        }

        .vc_custom_1450446299241 {
            margin-bottom: 60px !important;
        }

        .vc_custom_1450446304318 {
            margin-bottom: 60px !important;
        }

        .vc_custom_1450337112571 {
            margin-bottom: 38px !important;
        }

        .vc_custom_1450337066920 {
            margin-bottom: 38px !important;
        }

        .vc_custom_1450444940366 {
            padding-top: 80px !important;
            padding-bottom: 31px !important;
        }

        .vc_custom_1451973486237 {
            padding-left: 45px !important;
        }

        .vc_custom_1449127190171 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1449127193884 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1450423994691 {
            margin-bottom: 44px !important;
        }

        .vc_custom_1450423999162 {
            margin-bottom: 44px !important;
        }

        .vc_custom_1450424067703 {
            margin-bottom: 44px !important;
        }

        .vc_custom_1450424075450 {
            margin-bottom: 44px !important;
        }

        .vc_custom_1450423858601 {
            padding-top: 80px !important;
            padding-right: 40px !important;
            padding-bottom: 50px !important;
            padding-left: 40px !important;
        }

    </style>
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }

        </style>
    </noscript> <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N3ZB5MC');

    </script>
    <!-- End Google Tag Manager -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Product",
            "category": "Business",
            "url": "https://logistics.stylemixthemes.com/",
            "description": "Transcargo is the transportation, logistics, shipping company WordPress theme. Using Transcargo, you can easily create a modern website and start promoting your services. We studied and researched tons of logistic company and shipping company websites before planning the features of the theme to ensure we covered all necessary functions and abilities for transportation business website. It’s fully Responsive and Easy to Customize using intuitive Drag \u0026amp; Drop Visual Composer and Theme Options panel in WordPress Customizer. Transcargo – Transportation WordPress theme, Logistics WordPress theme, Shipping Company WordPress theme, Delivery Company WordPress theme. Transcargo is the only WordPress theme you need for Tra",
            "name": "Transcargo - Transportation WordPress Theme for Logistics",
            "image": "https://s3.envato.com/files/250863693/icon-transcargo.png",
            "brand": {
                "@type": "Brand",
                "name": "StylemixThemes"
            },
            "sku": 13947082,
            "mpn": "E-13947082",
            "offers": {
                "@type": "AggregateOffer",
                "availability": "http://schema.org/InStock",
                "lowPrice": "59.00",
                "highPrice": "1600.00",
                "offerCount": 1,
                "priceCurrency": "USD"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.82",
                "reviewCount": "102"
            }
        }

    </script>
    <script src="../rum-static.pingdom.net/pa-5f967c2b5eacee001500024b.js" async></script>
    <script async src='{{ url("/") }}/cdn-cgi/bm/cv/669835187/api.js'></script>
    @yield('script')
</head>
