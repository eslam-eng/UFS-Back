<!DOCTYPE html>
<html>
    <title>{{ $resource->code }}</title>
    <style>
        /* W3.CSS 4.15 December 2020 by Jan Egil and Borge Refsnes */
        html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
        /* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
        html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}
        article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}summary{display:list-item}
        audio,canvas,progress,video{display:inline-block}progress{vertical-align:baseline}
        audio:not([controls]){display:none;height:0}[hidden],template{display:none}
        a{background-color:transparent}a:active,a:hover{outline-width:0}
        abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}
        b,strong{font-weight:bolder}dfn{font-style:italic}mark{background:#ff0;color:#000}
        small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
        sub{bottom:-0.25em}sup{top:-0.5em}figure{margin:1em 40px}img{border-style:none}
        code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}hr{box-sizing:content-box;height:0;overflow:visible}
        button,input,select,textarea,optgroup{font:inherit;margin:0}optgroup{font-weight:bold}
        button,input{overflow:visible}button,select{text-transform:none}
        button,[type=button],[type=reset],[type=submit]{-webkit-appearance:button}
        button::-moz-focus-inner,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{border-style:none;padding:0}
        button:-moz-focusring,[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring{outline:1px dotted ButtonText}
        fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}
        legend{color:inherit;display:table;max-width:100%;padding:0;white-space:normal}textarea{overflow:auto}
        [type=checkbox],[type=radio]{padding:0}
        [type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}
        [type=search]{-webkit-appearance:textfield;outline-offset:-2px}
        [type=search]::-webkit-search-decoration{-webkit-appearance:none}
        ::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}
        /* End extract */
        html,body{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}html{overflow-x:hidden}
        h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}
        .w3-serif{font-family:serif}.w3-sans-serif{font-family:sans-serif}.w3-cursive{font-family:cursive}.w3-monospace{font-family:monospace}
        h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}.w3-wide{letter-spacing:4px}
        hr{border:0;border-top:1px solid #eee;margin:20px 0}
        .w3-image{max-width:100%;height:auto}img{vertical-align:middle}a{color:inherit}
        .w3-table,.w3-table-all{border-collapse:collapse;border-spacing:0;width:100%;display:table}.w3-table-all{border:1px solid #ccc}
        .w3-bordered tr,.w3-table-all tr{border-bottom:1px solid #ddd}.w3-striped tbody tr:nth-child(even){background-color:#f1f1f1}
        .w3-table-all tr:nth-child(odd){background-color:#fff}.w3-table-all tr:nth-child(even){background-color:#f1f1f1}
        .w3-hoverable tbody tr:hover,.w3-ul.w3-hoverable li:hover{background-color:#ccc}.w3-centered tr th,.w3-centered tr td{text-align:center}
        .w3-table td,.w3-table th,.w3-table-all td,.w3-table-all th{padding:8px 8px;display:table-cell;text-align:left;vertical-align:top}
        .w3-table th:first-child,.w3-table td:first-child,.w3-table-all th:first-child,.w3-table-all td:first-child{padding-left:16px}
        .w3-btn,.w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
        .w3-btn:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)}
        .w3-btn,.w3-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}   
        .w3-disabled,.w3-btn:disabled,.w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none}
        .w3-btn.w3-disabled:hover,.w3-btn:disabled:hover{box-shadow:none}
        .w3-badge,.w3-tag{background-color:#000;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center}.w3-badge{border-radius:50%}
        .w3-ul{list-style-type:none;padding:0;margin:0}.w3-ul li{padding:8px 16px;border-bottom:1px solid #ddd}.w3-ul li:last-child{border-bottom:none}
        .w3-tooltip,.w3-display-container{position:relative}.w3-tooltip .w3-text{display:none}.w3-tooltip:hover .w3-text{display:inline-block}
        .w3-ripple:active{opacity:0.5}.w3-ripple{transition:opacity 0s}
        .w3-input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
        .w3-select{padding:9px 0;width:100%;border:none;border-bottom:1px solid #ccc}
        .w3-dropdown-click,.w3-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
        .w3-dropdown-hover:hover .w3-dropdown-content{display:block}
        .w3-dropdown-hover:first-child,.w3-dropdown-click:hover{background-color:#ccc;color:#000}
        .w3-dropdown-hover:hover > .w3-button:first-child,.w3-dropdown-click:hover > .w3-button:first-child{background-color:#ccc;color:#000}
        .w3-dropdown-content{cursor:auto;color:#000;background-color:#fff;display:none;position:absolute;min-width:160px;margin:0;padding:0;z-index:1}
        .w3-check,.w3-radio{width:24px;height:24px;position:relative;top:6px}
        .w3-sidebar{height:100%;width:200px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}
        .w3-bar-block .w3-dropdown-hover,.w3-bar-block .w3-dropdown-click{width:100%}
        .w3-bar-block .w3-dropdown-hover .w3-dropdown-content,.w3-bar-block .w3-dropdown-click .w3-dropdown-content{min-width:100%}
        .w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}
        .w3-main,#main{transition:margin-left .4s}
        .w3-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
        .w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:600px}
        .w3-bar{width:100%;overflow:hidden}.w3-center .w3-bar{display:inline-block;width:auto}
        .w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
        .w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
        .w3-bar .w3-button{white-space:normal}
        .w3-bar-block .w3-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
        .w3-bar-block.w3-center .w3-bar-item{text-align:center}.w3-block{display:block;width:100%}
        .w3-responsive{display:block;overflow-x:auto}
        .w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
        .w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
        .w3-col,.w3-half,.w3-third,.w3-twothird,.w3-threequarter,.w3-quarter{float:left;width:100%}
        .w3-col.s1{width:8.33333%}.w3-col.s2{width:16.66666%}.w3-col.s3{width:24.99999%}.w3-col.s4{width:33.33333%}
        .w3-col.s5{width:41.66666%}.w3-col.s6{width:49.99999%}.w3-col.s7{width:58.33333%}.w3-col.s8{width:66.66666%}
        .w3-col.s9{width:74.99999%}.w3-col.s10{width:83.33333%}.w3-col.s11{width:91.66666%}.w3-col.s12{width:99.99999%}
        @media (min-width:601px){.w3-col.m1{width:8.33333%}.w3-col.m2{width:16.66666%}.w3-col.m3,.w3-quarter{width:24.99999%}.w3-col.m4,.w3-third{width:33.33333%}
                                 .w3-col.m5{width:41.66666%}.w3-col.m6,.w3-half{width:49.99999%}.w3-col.m7{width:58.33333%}.w3-col.m8,.w3-twothird{width:66.66666%}
                                 .w3-col.m9,.w3-threequarter{width:74.99999%}.w3-col.m10{width:83.33333%}.w3-col.m11{width:91.66666%}.w3-col.m12{width:99.99999%}}
        @media (min-width:993px){.w3-col.l1{width:8.33333%}.w3-col.l2{width:16.66666%}.w3-col.l3{width:24.99999%}.w3-col.l4{width:33.33333%}
                                 .w3-col.l5{width:41.66666%}.w3-col.l6{width:49.99999%}.w3-col.l7{width:58.33333%}.w3-col.l8{width:66.66666%}
                                 .w3-col.l9{width:74.99999%}.w3-col.l10{width:83.33333%}.w3-col.l11{width:91.66666%}.w3-col.l12{width:99.99999%}}
        .w3-rest{overflow:hidden}.w3-stretch{margin-left:-16px;margin-right:-16px}
        .w3-content,.w3-auto{margin-left:auto;margin-right:auto}.w3-content{max-width:980px}.w3-auto{max-width:1140px}
        .w3-cell-row{display:table;width:100%}.w3-cell{display:table-cell}
        .w3-cell-top{vertical-align:top}.w3-cell-middle{vertical-align:middle}.w3-cell-bottom{vertical-align:bottom}
        .w3-hide{display:none!important}.w3-show-block,.w3-show{display:block!important}.w3-show-inline-block{display:inline-block!important}
        @media (max-width:1205px){.w3-auto{max-width:95%}}
        @media (max-width:600px){.w3-modal-content{margin:0 10px;width:auto!important}.w3-modal{padding-top:30px}
                                 .w3-dropdown-hover.w3-mobile .w3-dropdown-content,.w3-dropdown-click.w3-mobile .w3-dropdown-content{position:relative}	
                                 .w3-hide-small{display:none!important}.w3-mobile{display:block;width:100%!important}.w3-bar-item.w3-mobile,.w3-dropdown-hover.w3-mobile,.w3-dropdown-click.w3-mobile{text-align:center}
                                 .w3-dropdown-hover.w3-mobile,.w3-dropdown-hover.w3-mobile .w3-btn,.w3-dropdown-hover.w3-mobile .w3-button,.w3-dropdown-click.w3-mobile,.w3-dropdown-click.w3-mobile .w3-btn,.w3-dropdown-click.w3-mobile .w3-button{width:100%}}
        @media (max-width:768px){.w3-modal-content{width:500px}.w3-modal{padding-top:50px}}
        @media (min-width:993px){.w3-modal-content{width:900px}.w3-hide-large{display:none!important}.w3-sidebar.w3-collapse{display:block!important}}
        @media (max-width:992px) and (min-width:601px){.w3-hide-medium{display:none!important}}
        @media (max-width:992px){.w3-sidebar.w3-collapse{display:none}.w3-main{margin-left:0!important;margin-right:0!important}.w3-auto{max-width:100%}}
        .w3-top,.w3-bottom{position:fixed;width:100%;z-index:1}.w3-top{top:0}.w3-bottom{bottom:0}
        .w3-overlay{position:fixed;display:none;width:100%;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5);z-index:2}
        .w3-display-topleft{position:absolute;left:0;top:0}.w3-display-topright{position:absolute;right:0;top:0}
        .w3-display-bottomleft{position:absolute;left:0;bottom:0}.w3-display-bottomright{position:absolute;right:0;bottom:0}
        .w3-display-middle{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
        .w3-display-left{position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%)}
        .w3-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}
        .w3-display-topmiddle{position:absolute;left:50%;top:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
        .w3-display-bottommiddle{position:absolute;left:50%;bottom:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
        .w3-display-container:hover .w3-display-hover{display:block}.w3-display-container:hover span.w3-display-hover{display:inline-block}.w3-display-hover{display:none}
        .w3-display-position{position:absolute}
        .w3-circle{border-radius:50%}
        .w3-round-small{border-radius:2px}.w3-round,.w3-round-medium{border-radius:4px}.w3-round-large{border-radius:8px}.w3-round-xlarge{border-radius:16px}.w3-round-xxlarge{border-radius:32px}
        .w3-row-padding,.w3-row-padding>.w3-half,.w3-row-padding>.w3-third,.w3-row-padding>.w3-twothird,.w3-row-padding>.w3-threequarter,.w3-row-padding>.w3-quarter,.w3-row-padding>.w3-col{padding:0 8px}
        .w3-container,.w3-panel{padding:0.01em 16px}.w3-panel{margin-top:16px;margin-bottom:16px}
        .w3-code,.w3-codespan{font-family:Consolas,"courier new";font-size:16px}
        .w3-code{width:auto;background-color:#fff;padding:8px 12px;border-left:4px solid #4CAF50;word-wrap:break-word}
        .w3-codespan{color:crimson;background-color:#f1f1f1;padding-left:4px;padding-right:4px;font-size:110%}
        .w3-card,.w3-card-2{box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}
        .w3-card-4,.w3-hover-shadow:hover{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
        .w3-spin{animation:w3-spin 2s infinite linear}@keyframes w3-spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}
        .w3-animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
        .w3-animate-opacity{animation:opac 0.8s}@keyframes opac{from{opacity:0} to{opacity:1}}
        .w3-animate-top{position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
        .w3-animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
        .w3-animate-right{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
        .w3-animate-bottom{position:relative;animation:animatebottom 0.4s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
        .w3-animate-zoom {animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
        .w3-animate-input{transition:width 0.4s ease-in-out}.w3-animate-input:focus{width:100%!important}
        .w3-opacity,.w3-hover-opacity:hover{opacity:0.60}.w3-opacity-off,.w3-hover-opacity-off:hover{opacity:1}
        .w3-opacity-max{opacity:0.25}.w3-opacity-min{opacity:0.75}
        .w3-greyscale-max,.w3-grayscale-max,.w3-hover-greyscale:hover,.w3-hover-grayscale:hover{filter:grayscale(100%)}
        .w3-greyscale,.w3-grayscale{filter:grayscale(75%)}.w3-greyscale-min,.w3-grayscale-min{filter:grayscale(50%)}
        .w3-sepia{filter:sepia(75%)}.w3-sepia-max,.w3-hover-sepia:hover{filter:sepia(100%)}.w3-sepia-min{filter:sepia(50%)}
        .w3-tiny{font-size:10px!important}.w3-small{font-size:12px!important}.w3-medium{font-size:15px!important}.w3-large{font-size:18px!important}
        .w3-xlarge{font-size:24px!important}.w3-xxlarge{font-size:36px!important}.w3-xxxlarge{font-size:48px!important}.w3-jumbo{font-size:64px!important}
        .w3-left-align{text-align:left!important}.w3-right-align{text-align:right!important}.w3-justify{text-align:justify!important}.w3-center{text-align:center!important}
        .w3-border-0{border:0!important}.w3-border{border:1px solid #ccc!important}
        .w3-border-top{border-top:1px solid #ccc!important}.w3-border-bottom{border-bottom:1px solid #ccc!important}
        .w3-border-left{border-left:1px solid #ccc!important}.w3-border-right{border-right:1px solid #ccc!important}
        .w3-topbar{border-top:6px solid #ccc!important}.w3-bottombar{border-bottom:6px solid #ccc!important}
        .w3-leftbar{border-left:6px solid #ccc!important}.w3-rightbar{border-right:6px solid #ccc!important}
        .w3-section,.w3-code{margin-top:16px!important;margin-bottom:16px!important}
        .w3-margin{margin:16px!important}.w3-margin-top{margin-top:16px!important}.w3-margin-bottom{margin-bottom:16px!important}
        .w3-margin-left{margin-left:16px!important}.w3-margin-right{margin-right:16px!important}
        .w3-padding-small{padding:4px 8px!important}.w3-padding{padding:8px 16px!important}.w3-padding-large{padding:12px 24px!important}
        .w3-padding-16{padding-top:16px!important;padding-bottom:16px!important}.w3-padding-24{padding-top:24px!important;padding-bottom:24px!important}
        .w3-padding-32{padding-top:32px!important;padding-bottom:32px!important}.w3-padding-48{padding-top:48px!important;padding-bottom:48px!important}
        .w3-padding-64{padding-top:64px!important;padding-bottom:64px!important}
        .w3-padding-top-64{padding-top:64px!important}.w3-padding-top-48{padding-top:48px!important}
        .w3-padding-top-32{padding-top:32px!important}.w3-padding-top-24{padding-top:24px!important}
        .w3-left{float:left!important}.w3-right{float:right!important}
        .w3-button:hover{color:#000!important;background-color:#ccc!important}
        .w3-transparent,.w3-hover-none:hover{background-color:transparent!important}
        .w3-hover-none:hover{box-shadow:none!important}
        /* Colors */
        .w3-amber,.w3-hover-amber:hover{color:#000!important;background-color:#ffc107!important}
        .w3-aqua,.w3-hover-aqua:hover{color:#000!important;background-color:#00ffff!important}
        .w3-blue,.w3-hover-blue:hover{color:#fff!important;background-color:#2196F3!important}
        .w3-light-blue,.w3-hover-light-blue:hover{color:#000!important;background-color:#87CEEB!important}
        .w3-brown,.w3-hover-brown:hover{color:#fff!important;background-color:#795548!important}
        .w3-cyan,.w3-hover-cyan:hover{color:#000!important;background-color:#00bcd4!important}
        .w3-blue-grey,.w3-hover-blue-grey:hover,.w3-blue-gray,.w3-hover-blue-gray:hover{color:#fff!important;background-color:#607d8b!important}
        .w3-green,.w3-hover-green:hover{color:#fff!important;background-color:#4CAF50!important}
        .w3-light-green,.w3-hover-light-green:hover{color:#000!important;background-color:#8bc34a!important}
        .w3-indigo,.w3-hover-indigo:hover{color:#fff!important;background-color:#3f51b5!important}
        .w3-khaki,.w3-hover-khaki:hover{color:#000!important;background-color:#f0e68c!important}
        .w3-lime,.w3-hover-lime:hover{color:#000!important;background-color:#cddc39!important}
        .w3-orange,.w3-hover-orange:hover{color:#000!important;background-color:#ff9800!important}
        .w3-deep-orange,.w3-hover-deep-orange:hover{color:#fff!important;background-color:#ff5722!important}
        .w3-pink,.w3-hover-pink:hover{color:#fff!important;background-color:#e91e63!important}
        .w3-purple,.w3-hover-purple:hover{color:#fff!important;background-color:#9c27b0!important}
        .w3-deep-purple,.w3-hover-deep-purple:hover{color:#fff!important;background-color:#673ab7!important}
        .w3-red,.w3-hover-red:hover{color:#fff!important;background-color:#f44336!important}
        .w3-sand,.w3-hover-sand:hover{color:#000!important;background-color:#fdf5e6!important}
        .w3-teal,.w3-hover-teal:hover{color:#fff!important;background-color:#009688!important}
        .w3-yellow,.w3-hover-yellow:hover{color:#000!important;background-color:#ffeb3b!important}
        .w3-white,.w3-hover-white:hover{color:#000!important;background-color:#fff!important}
        .w3-black,.w3-hover-black:hover{color:#fff!important;background-color:#000!important}
        .w3-grey,.w3-hover-grey:hover,.w3-gray,.w3-hover-gray:hover{color:#000!important;background-color:#9e9e9e!important}
        .w3-light-grey,.w3-hover-light-grey:hover,.w3-light-gray,.w3-hover-light-gray:hover{color:#000!important;background-color:#f1f1f1!important}
        .w3-dark-grey,.w3-hover-dark-grey:hover,.w3-dark-gray,.w3-hover-dark-gray:hover{color:#fff!important;background-color:#616161!important}
        .w3-pale-red,.w3-hover-pale-red:hover{color:#000!important;background-color:#ffdddd!important}
        .w3-pale-green,.w3-hover-pale-green:hover{color:#000!important;background-color:#ddffdd!important}
        .w3-pale-yellow,.w3-hover-pale-yellow:hover{color:#000!important;background-color:#ffffcc!important}
        .w3-pale-blue,.w3-hover-pale-blue:hover{color:#000!important;background-color:#ddffff!important}
        .w3-text-amber,.w3-hover-text-amber:hover{color:#ffc107!important}
        .w3-text-aqua,.w3-hover-text-aqua:hover{color:#00ffff!important}
        .w3-text-blue,.w3-hover-text-blue:hover{color:#2196F3!important}
        .w3-text-light-blue,.w3-hover-text-light-blue:hover{color:#87CEEB!important}
        .w3-text-brown,.w3-hover-text-brown:hover{color:#795548!important}
        .w3-text-cyan,.w3-hover-text-cyan:hover{color:#00bcd4!important}
        .w3-text-blue-grey,.w3-hover-text-blue-grey:hover,.w3-text-blue-gray,.w3-hover-text-blue-gray:hover{color:#607d8b!important}
        .w3-text-green,.w3-hover-text-green:hover{color:#4CAF50!important}
        .w3-text-light-green,.w3-hover-text-light-green:hover{color:#8bc34a!important}
        .w3-text-indigo,.w3-hover-text-indigo:hover{color:#3f51b5!important}
        .w3-text-khaki,.w3-hover-text-khaki:hover{color:#b4aa50!important}
        .w3-text-lime,.w3-hover-text-lime:hover{color:#cddc39!important}
        .w3-text-orange,.w3-hover-text-orange:hover{color:#ff9800!important}
        .w3-text-deep-orange,.w3-hover-text-deep-orange:hover{color:#ff5722!important}
        .w3-text-pink,.w3-hover-text-pink:hover{color:#e91e63!important}
        .w3-text-purple,.w3-hover-text-purple:hover{color:#9c27b0!important}
        .w3-text-deep-purple,.w3-hover-text-deep-purple:hover{color:#673ab7!important}
        .w3-text-red,.w3-hover-text-red:hover{color:#f44336!important}
        .w3-text-sand,.w3-hover-text-sand:hover{color:#fdf5e6!important}
        .w3-text-teal,.w3-hover-text-teal:hover{color:#009688!important}
        .w3-text-yellow,.w3-hover-text-yellow:hover{color:#d2be0e!important}
        .w3-text-white,.w3-hover-text-white:hover{color:#fff!important}
        .w3-text-black,.w3-hover-text-black:hover{color:#000!important}
        .w3-text-grey,.w3-hover-text-grey:hover,.w3-text-gray,.w3-hover-text-gray:hover{color:#757575!important}
        .w3-text-light-grey,.w3-hover-text-light-grey:hover,.w3-text-light-gray,.w3-hover-text-light-gray:hover{color:#f1f1f1!important}
        .w3-text-dark-grey,.w3-hover-text-dark-grey:hover,.w3-text-dark-gray,.w3-hover-text-dark-gray:hover{color:#3a3a3a!important}
        .w3-border-amber,.w3-hover-border-amber:hover{border-color:#ffc107!important}
        .w3-border-aqua,.w3-hover-border-aqua:hover{border-color:#00ffff!important}
        .w3-border-blue,.w3-hover-border-blue:hover{border-color:#2196F3!important}
        .w3-border-light-blue,.w3-hover-border-light-blue:hover{border-color:#87CEEB!important}
        .w3-border-brown,.w3-hover-border-brown:hover{border-color:#795548!important}
        .w3-border-cyan,.w3-hover-border-cyan:hover{border-color:#00bcd4!important}
        .w3-border-blue-grey,.w3-hover-border-blue-grey:hover,.w3-border-blue-gray,.w3-hover-border-blue-gray:hover{border-color:#607d8b!important}
        .w3-border-green,.w3-hover-border-green:hover{border-color:#4CAF50!important}
        .w3-border-light-green,.w3-hover-border-light-green:hover{border-color:#8bc34a!important}
        .w3-border-indigo,.w3-hover-border-indigo:hover{border-color:#3f51b5!important}
        .w3-border-khaki,.w3-hover-border-khaki:hover{border-color:#f0e68c!important}
        .w3-border-lime,.w3-hover-border-lime:hover{border-color:#cddc39!important}
        .w3-border-orange,.w3-hover-border-orange:hover{border-color:#ff9800!important}
        .w3-border-deep-orange,.w3-hover-border-deep-orange:hover{border-color:#ff5722!important}
        .w3-border-pink,.w3-hover-border-pink:hover{border-color:#e91e63!important}
        .w3-border-purple,.w3-hover-border-purple:hover{border-color:#9c27b0!important}
        .w3-border-deep-purple,.w3-hover-border-deep-purple:hover{border-color:#673ab7!important}
        .w3-border-red,.w3-hover-border-red:hover{border-color:#f44336!important}
        .w3-border-sand,.w3-hover-border-sand:hover{border-color:#fdf5e6!important}
        .w3-border-teal,.w3-hover-border-teal:hover{border-color:#009688!important}
        .w3-border-yellow,.w3-hover-border-yellow:hover{border-color:#ffeb3b!important}
        .w3-border-white,.w3-hover-border-white:hover{border-color:#fff!important}
        .w3-border-black,.w3-hover-border-black:hover{border-color:#000!important}
        .w3-border-grey,.w3-hover-border-grey:hover,.w3-border-gray,.w3-hover-border-gray:hover{border-color:#9e9e9e!important}
        .w3-border-light-grey,.w3-hover-border-light-grey:hover,.w3-border-light-gray,.w3-hover-border-light-gray:hover{border-color:#f1f1f1!important}
        .w3-border-dark-grey,.w3-hover-border-dark-grey:hover,.w3-border-dark-gray,.w3-hover-border-dark-gray:hover{border-color:#616161!important}
        .w3-border-pale-red,.w3-hover-border-pale-red:hover{border-color:#ffe7e7!important}.w3-border-pale-green,.w3-hover-border-pale-green:hover{border-color:#e7ffe7!important}
        .w3-border-pale-yellow,.w3-hover-border-pale-yellow:hover{border-color:#ffffcc!important}.w3-border-pale-blue,.w3-hover-border-pale-blue:hover{border-color:#e7ffff!important}
    </style>

    <style>
        * {
            font-size: 12px;
        }
    </style>
    <body>
        <br>
        <table class="w3-table w3-padding" >
            <tr>
                <td style="width: 25%" >
                    <img src="{{ url('/logo.png') }}" width="100px" > 
                </td>

                <td style="width: 25%" class="w3-display-container" >
                    <svg id="barcode" class="w3-block"></svg>
                </td>

                <td style="width: 25%"></td>
                <td style="width: 25%" class="w3-padding">
                    
                    <div id="qrcode" style="width: 150px;margin: auto" ></div>
                    
                </td>
            </tr>
        </table>
        <table class="w3-table w3-table-bordered" >
            <tr >
                <td style="width: 32%" >
                    <div class="w3-indigo w3-padding w3-center"   >
                        Sender
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span class="w3-left" >Account No.</span>
                        <span class="w3-right" >رقم الحساب</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional($resource->company)->id }}
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Customer Name.</span>
                        <span style="float: right" >اسم العميل.</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional($resource->company)->name }}
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Address.</span>
                        <span style="float: right" >العنوان.</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container" style="height: 70px!important"  >
                        {{ optional($resource->company)->address }}
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Tel&Fax.</span>
                        <span style="float: right" >التليفون/الفاكس.</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional($resource->company)->phone }}
                    </div>
                    <div class="w3-border w3-border-block w3-display-container w3-row"  >
                        <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3- w3-display-container"  >
                                <span style="float: left" >Province.</span>
                                <span class="w3-right" >الحى/المقاطعه.</span>
                                <br>
                            </div>
                            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                                {{ optional(optional($resource->company)->city)->name }}
                            </div>  
                        </div>
                        <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3- w3-display-container"  >
                                <span style="float: left" >Origin.</span>
                                <span style="float: right" >جهة المصدر.</span>
                                <br>
                            </div>
                            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                                {{ optional(optional($resource->company)->area)->name }}
                            </div>  
                        </div>
                    </div>
                    <div class="w3-border w3-border-block w3-display-container w3-indigo"  >
                        <span style="float: left" >Signature Of Sender.</span>
                        <span style="float: right" >توقيع الراسل.</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-gray w3-display-container w3-row"  >
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Name.</span>
                            <span style="float: right" >الاسم</span> 
                            <br>
                        </div> 
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Sign.</span>
                            <span style="float: right" >التوقيع</span> 
                            <br>
                        </div> 
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Pickup Date/Time.</span>
                            <span style="float: right" >التاريخ/الوقت</span> 
                            <br>
                        </div> 
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Courier Signature's.</span>
                            <span style="float: right" >توقيع المندوب</span> 
                            <br>
                        </div> 
                    </div>
                    <div class="w3-border w3-border-gray w3-display-container w3-row" style="border-top: 0px"  >
                        <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                                <span style="float: left" >Weight.</span>
                                <span class="w3-right" >الوزن</span>
                                <br>
                            </div>
                            <div class="w3-border w3-border-block w3-padding w3-display-container w3-center"  >
                                {{ $resource->weight }}
                            </div>  
                        </div>
                        <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                                <span style="float: left" >Pieces.</span>
                                <span style="float: right" >عدد القطع</span>
                                <br>
                            </div>
                            <div class="w3-border w3-border-block w3-padding w3-display-container w3-center"  >
                                {{ $resource->pieces }}
                            </div>  
                        </div>
                    </div>

                </td>

                <td style="width: 32%" >
                    <div class="w3-indigo w3-padding w3-center" >
                        Receiver
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span class="w3-left" >Contact Name.</span>
                        <span class="w3-right" >الشخص المرسل اليه</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional($resource->receiver)->name }}
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >To Company.</span>
                        <span style="float: right" >اسم الشركة المرسل اليها.</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional(optional($resource->receiver)->company)->name }}
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Address.</span>
                        <span style="float: right" >العنوان.</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container" style="height: 70px!important"  >
                        {{ optional($resource->receiver)->address }}
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Tel&Fax.</span>
                        <span style="float: right" >التليفون/الفاكس.</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        {{ optional($resource->receiver)->phone }}
                    </div>
                    <div class="w3-border w3-border-block w3-display-container w3-row"  >
                        <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3- w3-display-container"  >
                                <span style="float: left" >Province.</span>
                                <span class="w3-right" >الحى/المقاطعه.</span>
                                <br>
                            </div>
                            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                                {{ optional(optional($resource->receiver)->city)->name }}
                            </div>  
                        </div>
                        <div class="w3-col l6 m6 s6 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3- w3-display-container"  >
                                <span style="float: left" >Origin.</span>
                                <span style="float: right" >جهة المصدر.</span>
                                <br>
                            </div>
                            <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                                {{ optional(optional($resource->receiver)->area)->name }}
                            </div>  
                        </div>
                    </div>
                    <div class="w3-border w3-border-block w3-display-container w3-indigo"  >
                        <span style="float: left" >Receiver Data.</span>
                        <span style="float: right" >بيانات المستلم</span>
                        <br>
                    </div>
                    <div class="w3-border w3-border-gray w3-display-container w3-row"  >
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Name.</span>
                            <span style="float: right" >الاسم</span> 
                            <br>
                        </div> 
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Sign.</span>
                            <span style="float: right" >التوقيع</span> 
                            <br>
                        </div> 
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Receiver Date</span>
                            <span style="float: right" >التاريخ</span> 
                            <br>
                        </div> 
                        <div class="w3-display-container" style="padding-bottom: 10px" >
                            <span style="float: left" >Receiver Time.</span>
                            <span style="float: right" >الوقت</span> 
                            <br>
                        </div> 
                    </div>
                    <div class="w3-border w3-border-block w3-padding w3-display-container"  >
                        <span style="float: left" >Deliver Status.</span>
                        <span style="float: right" >حالة التسليم</span>
                        <br>
                    </div>
                    <div class=" w3-display-container w3-row"  >

                        <div class="w3-col l4 m4 s4 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3- w3-display-container"  >
                                <div class="w3-display-topright" style="padding-right: 1px" >
                                <div class="w3-center" >تم التسليم</div>
                                <div class="w3-center" >Ok</div>
                                </div>
                                <br>
                                <br>

                                <div style="width: 28px;height: 38px" class="w3-light-gray w3-display-topleft" >
                                </div>
                            </div>
                        </div>

                        <div class="w3-col l4 m4 s4 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3- w3-display-container"  >
                                <div class="w3-display-topright" style="padding-right: 1px" >
                                <div class="w3-center" >اعادة التسليم</div>
                                <div class="w3-center" >Reply</div>
                                </div>
                                <br>
                                <br>

                                <div style="width: 28px;height: 38px" class="w3-light-gray w3-display-topleft" >
                                </div>
                            </div>
                        </div>

                        <div class="w3-col l4 m4 s4 w3-border w3-border-gray w3-display-container" >
                            <div class="w3-border w3-border-block w3- w3-display-container"  >
                                <div class="w3-display-topright" style="padding-right: 1px" >
                                    <div class="w3-center" >مرتجع</div>
                                    <div class="w3-center" >Return</div>
                                </div>
                                <br>
                                <br>

                                <div style="width: 28px;height: 38px" class="w3-light-gray w3-display-topleft" >
                                </div>
                            </div>
                        </div>

                    </div>

                </td>
                <td style="width: 32%" > 

                    <div class="w3-indigo w3-center w3-border w3-border-gray" style="padding: 3px" >
                        <span style="float: left" >Payment Type.</span>
                        <span style="float: right" >طريقة الدفع</span> 
                        <br>
                    </div>
                    <div class="w3- w3-border w3-border-gray" style="padding: 3px" >
                        {{ optional($resource->paymentType)->name }}
                    </div>
                    <br>

                    <div class="w3-indigo w3-center w3-border w3-border-gray" style="padding: 3px" >
                        <span style="float: left" >Service Type.</span>
                        <span style="float: right" >نوع الخدمة</span> 
                        <br>
                    </div>
                    <div class="w3- w3-border w3-border-gray" style="padding: 3px" >
                        {{ optional($resource->service)->name }}
                    </div>
                    <br>

                    <div class="w3-indigo w3-center w3-border w3-border-gray" style="padding: 3px" >
                        <span style="float: left" >Collection.</span>
                        <span style="float: right" >المطلوب تحصيله</span> 
                        <br>
                    </div>
                    <div class="w3- w3-border w3-border-gray" style="padding: 3px" >
                        {{ optional($resource)->collection }}
                    </div>
                    <br>

                    <div class="w3-indigo w3-center w3-border w3-border-gray" style="padding: 3px" >
                        <span style="float: left" >Remarks.</span>
                        <span style="float: right" >ملاحظات</span> 
                        <br>
                    </div>
                    <div class="w3- w3-border w3-border-gray" style="padding: 3px" >
                        {{ optional($resource)->notes }}
                    </div>
                    <br>

                    <div class="w3-indigo w3- w3-center w3-border w3-border-gray" style="padding: 3px" >
                        <span style="float: left" >Returned.</span>
                        <span style="float: right" >رقم بوليصة الشحن العكسية</span> 
                        <br>
                    </div>
                    <div class="w3- w3-border w3-border-gray" >
                        1
                    </div>
                    <br>


                </td>

                <td  class="w3-padding w3-display-container" style="width: 4%" >
                </td>
            </tr>
        </table>
        
        <div class="w3-padding" >
            <div class="w3-center w3-border w3-border-gray" style="font-size: 5px" >
                Conditions of Carriage (Domestic Shipments) In tendering the shipment for carriage, the customer agrees to these terms and conditions of carriage and that this Air Waybill is NON-NEGOTIABLE and has been prepared by the customer or on the customer’s behalf by UFS. As used in these conditions, UFS includes UFS CO, all operating divisions and subsidiaries of UFS Co. and their respective agents, servants, officers and employees. 1. SCOPE OF CONDITIONS These conditions shall govern and apply to all services provided by UFS. BY SIGNING THIS AIR WAYBILL, THE CUSTOMER ACKNOWLEDGES THAT HE/SHE HAS READ THESE CONDITIONS AND AGREES TO BE BOUND BY EACH OF THEM. UFS shall not be bound by any agreement which varies from these conditions, unless such agreement is in writing and signed by an authorized officer of UFS. In the absence of such written agreement, these conditions shall constitute the entire agreement between UFS and each of its customers. No employee of UFS shall have the authority to alter or waive these terms and conditions, except as stated herein. 2. UFS’S OBLIGATIONS UFS agrees, subject to receiving payment of applicable rates and charges in effect on the date of acceptance by UFS of a customer’s shipment, to arrange for the transportation of the shipment between the locations agreed upon by UFS and the customer. UFS reserves the right to transport the customer’s shipment by any route and procedure and by successive carriers and according to its own handling, storage and transportation methods. 3. SERVICE RESTRICTIONS a. UFS reserves the right to refuse any documents or parcels from any person, firm, or company at its own discretion. b. UFS reserves the right to abandon carriage of any shipment at any time after acceptance when such shipment could possibly cause damage or delay to other shipments, equipment or personnel, or when any such carriage is prohibited by law or is in violation of any of the rules contained herein. c. UFS reserves the right to open and inspect any shipment consigned by a customer to ensure that it is capable of carriage to the destination within the standard customs procedures and handling methods of UFS.In exercising this right, UFS does not warrant that any particular item to be carried is capable of carriage, without infringing the law of any country or state through which the item may be carried. 4. LIMITATION OF LIABILITY Subject to Sections 5 and 6 hereof: a. UFS will be responsible for the customer’s shipment only while it is within UFS’s custody and control.UFS shall not be liable for loss or damage of a shipment while shipment is out of UFS’s custody or control.UFS’s LIABILITY IS IN ANY EVENT LIMITED TO TWENTY FIVE DOLLARS (US$25/=) or its equivalent per shipment unless a higher value is declared on the Airway bill at the time of tender and an additional charge is paid for, as assessed and determined by UFS, for each Twenty Five Dollars (US$25/=) or fraction thereof, by which the insured value designated by the customer on the Airway bill exceeds Twenty Five Dollars (US$25/=) per shipment. b. Notwithstanding the foregoing, should the customer, at the time of tender, declare a higher value than Twenty Five Dollars (US$25.00) on the Airway bill, UFS’s liability shall in any event be limited to the lower of the insured value or the amount of any loss or damage actually sustained by the customer. c. The actual value of a shipment shall be ascertained by reference to its replacement, reconstitution or reconstruction value at the time and place of shipment, whichever is less, without reference to its commercial utility to the customer or to other items of consequential loss. d. NOTWITHSTANDING ANY OF THE FOREGOING, THE MAXIMUM INSURED VALUE ON ANY SHIPMENT ACCEPTED BY UFS IS TEN THOUSAND DOLLARS (US$10,000.00) AND IN NO EVENT SHALL THE LIABILITY OF UFS EXCEED THAT AMOUNT. 5. CONSEQUENTIAL DAMAGES EXCLUDED UFS SHALL NOT BE LIABLE, IN ANY EVENT, FOR ANY CONSEQUENTIAL OR SPECIAL OR INCIDENTAL DAMAGE OR OTHER INDIRECT LOSS HOWEVER ARISING, WHETHER OR NOT UFS HAD KNOWLEDGE THAT SUCH DAMAGE MIGHT BE INCURRED, INCLUDING, BUT NOT LIMITED TO LOSS OF INCOME, PROFITS, INTEREST, UTILITY OR LOSS OF MARKET. 6. LIABILITIES NOT ASSUMED: a. UFS shall be not liable for any loss, damage, delay, misdelivery, nondelivery not caused by its own negligence, or for any loss, damage, delay, misdelivery or non-delivery caused by: i. the act, default or omission of the shipper or consignee or any other party who claims an interest in the shipment. ii. the nature of the shipment or any defect, characteristic, or inherent vice thereof. iii. violation by the shipper or consignee of any term or condition stated herein including, but not limited to, improper or insufficient packing, securing, marking or addressing, misdescribing the contents of any shipment or failure to observe any of these rules relating to shipments not acceptable for transportation whether such rules are now or hereafter promulgated by UFS. iv. Acts of God, perils of the air, enemies, public authorities acting with actual or apparent authority or law, acts or omission of postal, customs or other government officials, riots, strikes, or other local disputes, hazard incidents to a state of war, weather conditions, temperature or atmospheric changes or conditions, mechanical or other delay, of any aircraft used in providing transportation services or any other cause reasonably beyond the control of UFS. v. Acts or omissions of any postal service, forwarder, or any other entity to whom a shipment is tendered by UFS for transportation, regardless of whether the shipper requested or had knowledge of such third party delivery requirement. vi. Electrical or magnetic injury, erasure, or other such damage to electronic or photographic images or recordings in any form, or damage due to insects or vermin. b. While UFS will endeavour to exercise its best efforts to provide expeditious delivery in accordance with regular delivery schedules, UFS will not under any circumstances be liable for delay in pickup, transportation or delivery of any shipment regardless of the causes of such delay. 7. MATERIALS NOT ACCEPTABLE FOR TRANSPORT: a. UFS will notify customer from time to time as to certain classes of materials which are not accepted by UFS for carriage.It is the customer’s responsibility to accurately describe the shipment on this Airbill and to ensure that no material is delivered to UFS which has been declared to be unacceptable by UFS. b. UFS will not carry: iii. property, the carriage of which is prohibited by any law, regulation or state or local government of any country from, to or through which the property may be carried; and firearms bullion works of art negotiable instruments in bearer form jewelry precious metals precious stones lewd, obscene or pornographic material currency stamps deeds hazardous or combustible materials cashier’s checks money orders traveller’s checks industrial carbons and diamonds antiques plants animals iv. In the event that any customer should consign to UFS any such item as described above, or any item which the customer has undervalued for customs purposes or misdescribed, whether intentionally or otherwise, the customer shall indemnify and hold UFS harmless from all claims, damages, fines and expenses arising in connection therewith, and UFS shall have the right to abandon such property and/or release possession of said property to any agent or employee of any national or local government claiming jurisdiction over such materials.Immediately upon UFS’s obtaining knowledge that such materials infringing these conditions have been turned over to UFS for transport, UFS shall be free to exercise any of its rights reserved to it under this section without incurring liability whatsoever to the customer. PACKAGING AND ADDRESSING: The packaging of the customer’s documents or goods for transportation is the customer’s sole responsibility, including the placing of the goods or documents in any container which may be supplied to the customer by UFS. UFS accepts no responsibility for loss or damage to documents or goods caused by inadequate or inappropriate packaging. It is the sole responsibility of the customer to address adequately each consignment of documents or goods to enable effective delivery to be made. UFS shall not be liable for delay in forwarding or delivery resulting from the customer’s failure to comply with its obligations in this respect. NEGLIGENCE: The customer is liable for all losses, damages and expenses arising as a result of its failure to comply with its obligations under this agreement as a result of its negligence. CHARGES: Any rates quoted by UFS for carriage are inclusive of local airport taxes, but exclusive of any value added or sales taxes, duties, levies, imposts, deposits or outlays incurred in respect of carriage of the customer’s goods. Should the customer indicate by endorsement in the space provided on the airbill that the receiver shall be liable for any customs duty, the customer shall be liable for such customs duty in the event of a default in payment by the receiver. UFS will not be liable for any penalties imposed or loss or damage incurred due to the customer’s documents or goods being impounded by customs or similar authorities and the customer hereby indemnifies UFS against such penalty or loss. PROPERTY: UFS will only carry documents or goods which are the property of the customer and the customer warrants that it is authorized to accept and is accepting these conditions not only on behalf of itself but as agent and on behalf of all other persons who are or may hereafter be interested in the documents or goods. The customer hereby undertakes to indemnify UFS against any damages, costs and expenses resulting from any breach of this warranty. CLAIMS: ANY CLAIMS AGAINST UFS MUST BE SUBMITTED IN WRITING TO THE OFFICE OF UFS NEAREST THE LOCATION WHERE THE SHIPMENT WAS ACCEPTED, WITHIN SIXTY (60) DAYS OF THE DATE OF ACCEPTANCE BY UFS. Notwithstanding any of the foregoing, no claim for loss or damage will be entertained until all transportation charges have been paid. NON-DELIVERY OF SHIPMENT Notwithstanding the shipper’s instruction to the contrary, the shipper shall be liable for all costs and expenses related to the shipment of the package, and for costs incurred in either returning the shipment or warehousing the shipment pending disposition.
            </div>
        </div>

        <div  style="display: none;position: fixed;top: 40%;right: 0px;transform: rotate(90deg);width: 500px;text-align: center" >
            fddfsdfdsf
        </div>

        <script src="{{ url('/js/JsBarcode.all.min.js') }}" ></script>
        <script src="{{ url('/js/qrcode.min.js') }}" ></script>

        <script>

JsBarcode("#barcode", "{{ $resource->code }}", {
    font: 'Arial',
    fontSize: 30,
});

new QRCode(document.getElementById("qrcode"), {
    text: "{{ $resource->code }}",
    width: 150,
    height: 150,
});

window.print();

        </script>
    </body>
</html>