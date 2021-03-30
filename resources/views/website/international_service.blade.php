@extends('website.master', ["title" => "International service"])

@section('styles')
    <style>
        #header {
            background-image: url("{{ url('/') }}/wp-content/uploads/2015/11/header_bg_13.jpg")!important;
            background-repeat: repeat!important;
        }
        #header {
            position: relative!important;
            background-color: #183650!important;
            background-position: 50% 0!important;
            color: #fff!important;
            z-index: 50!important;
            margin: 0 0 37px!important;
        }
        .vc_row[data-vc-full-width].vc_hidden
        {
            opacity: 100%;
        }
        .wpb_row:last-child{
            margin-bottom: 0;
        }
        .wpb_wrapper
        {
            padding: 30px!important;
        }
        .secondary_bg_color {
            background-color: #1283a9;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1449137019491"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element  vc_custom_1449137011806">
                            <div class="wpb_wrapper">
                                <h3>International Express</h3>
                                <p>
                                    UFS provides a global solution for moving time-sensitive documents
                                    and parcels around the world, door-to-door, within committed transit
                                    times that meet your needs and expectations.
                                </p>

                            </div>
                        </div>
                    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_right">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="525" height="225" src="../wp-content/uploads/2015/11/image_1.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/image_1.jpg 525w, https://logistics.stylemixthemes.com/wp-content/uploads/2015/11/image_1-300x129.jpg 300w" sizes="(max-width: 525px) 100vw, 525px"></div>
                            </figure>
                        </div>
                    </div></div></div>
        </div>


        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid secondary_bg_color services_icons reset-sm-paddings vc_custom_1453118792113 vc_row-no-padding" style="position: relative; left: -189.6px; box-sizing: border-box; width: 1519px;"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4"><div class="vc_column-inner vc_custom_1449204255225"><div class="wpb_wrapper">
                        <div class="stm_icon center icon_position_top">
                            <div class="icon" style="font-size: 67px; height: 90px; color: #ffffff;">
                                <i class="stm-security"></i>
                            </div>
                            <div class="icon_text">
                                <div class="title" style="font-size: 24px; font-weight: 500; color: #ffffff;">
                                    Worldwide Document  Express 							</div>
                                <div class="text" style="color: #ffffff;">
                                    <p>
                                        The  extensive UFS network, short transit times and competitive
                                        shipping rates ensure door-to-door delivery of urgent documents to any
                                        destination in the world.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1449204260881"><div class="wpb_wrapper">
                        <div class="stm_icon center icon_position_top">
                            <div class="icon" style="font-size: 67px; height: 90px; color: #ffffff;">
                                <i class="stm-fast-delivery"></i>
                            </div>
                            <div class="icon_text">
                                <div class="title" style="font-size: 24px; font-weight: 500; color: #ffffff;">
                                    Worldwide  Parcel  Express
                                </div>
                                <div class="text" style="color: #ffffff;">
                                    <p>
                                        The  most  valuable  objects  are  specially  packaged  and  handled
                                        UFS, taking it fast through customs to make sure it gets there on time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1449204266169"><div class="wpb_wrapper">
                        <div class="stm_icon center icon_position_top">
                            <div class="icon" style="font-size: 67px; height: 90px; color: #ffffff;">
                                <i class="stm-support"></i>
                            </div>
                            <div class="icon_text">
                                <div class="title" style="font-size: 24px; font-weight: 500; color: #ffffff;">
                                    Return  Service  UFS 							</div>
                                <div class="text" style="color: #ffffff;">
                                    <p>
                                        offers  this  service  for  retailers  who  wish  to  include  a  free  return
                                        service with  the  delivery  of  their  goods  and  for  customers  who
                                        want  to  send  an  item  to  get  it  fixed  and  have  the repair company
                                        return it without incurring shipping charges.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div>
    </div>
    </div>
@endsection
