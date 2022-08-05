@extends('frontend.quote.frontend')
@section('content')


        <main class="content" id="content">
            <section
            data-row-bg="{{ static_asset('photos/AEC-OTP-Website-Landing-Page.jpg') }}"
            data-parallax="true" data-parallax-options='{"parallaxBG":true}'
            style="background-position:center center !important;" data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1616755593916 liquid-row-shadowbox-60a2187706513 vc_row-has-fill vc_row-has-bg vc_row-o-full-height vc_row-o-columns-middle vc_row-flex">
            <span class="row-bg-loader"></span>
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-10 vc_col-sm-offset-1 text-center liquid-column-60a21877068ca">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper vc_custom_1606204886448">
                                <div class="wpb_wrapper-inner">
                                    <div
                                        class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1590738294401 liquid_vc_single_image-60a2187783400">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="200"
                                                    height="200"
                                                    src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 200 200&#039;%2F&gt;"
                                                    class="vc_single_image-img attachment-full ld-lazyload" alt="" srcset=""
                                                    sizes="(max-width: 200px) 100vw, 200px"
                                                    data-src="{{ static_asset('photos/addon-landing-otp.png') }}"
                                                    data-srcset="{{ static_asset('photos/addon-landing-otp.png') }} 200w, {{ static_asset('photos/addon-landing-otp.png') }} 150w"
                                                    data-aspect="1" /></div>
                                        </figure>
                                    </div>
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2187783571">
                                        <h1 class="lqd-highlight-underline lqd-highlight-grow-left" data-fittext="true"
                                            data-fittext-options='{"compressor":0.6,"maxFontSize":"50","minFontSize":"36"}'
                                            data-split-text="true" data-custom-animations="true"
                                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-words .split-inner","duration":"1200","startDelay":"220","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"translateZ":-154,"rotateX":-73,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                            data-split-options='{"type":"words"}'><span class="ld-fh-txt"> <span
                                                    style="color: #ff6600"><strong>@lang('OTP.otp')</strong></span></span>
                                        </h1>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a218778370c"><span
                                            class="liquid_empty_space_inner"></span></div>
                                    <div class="ld-fancy-heading ld_fancy_heading_60a218778382c">
                                        <p class="lqd-highlight-underline lqd-highlight-grow-left" data-fittext="true"
                                            data-fittext-options='{"compressor":0.6,"maxFontSize":"currentFontSize","minFontSize":"20"}'
                                            data-split-text="true" data-custom-animations="true"
                                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-lines .split-inner","duration":"1200","startDelay":"600","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":45,"translateZ":-109,"rotateX":-71,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                            data-split-options='{"type":"lines"}'><span
                                                class="ld-fh-txt">@lang('OTP.otp_des')</span>
                                        </p>
                                    </div>
                                    <div class="vc_empty_space" style="height: 40px"><span
                                            class="vc_empty_space_inner"></span></div>
                                    <div data-custom-animations="true"
                                        data-ca-options='{"triggerHandler":"inview","animationTarget":".wpb_column","duration":"1200","startDelay":"950","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":41,"translateZ":-118,"rotateX":-65,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                        class="vc_row wpb_row vc_inner vc_row-fluid liquid-row-shadowbox-60a2187783cae vc_column-gap-5 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                        <div
                                            class="wpb_column vc_column_container vc_col-sm-6 text-md-right text-xs-center liquid-column-60a2187783f75">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper ">
                                                    <div class="wpb_wrapper-inner"><a href="#" target="_blank"
                                                            class="btn btn-solid btn-sm circle btn-bordered border-thin ld_button_60a218778407f vc_custom_1591762901260">
                                                            <span> <span
                                                                    class="btn-txt" style="padding-right: 18px; padding-left: 18px">@lang('affiliate.check_demo')</span>
                                                            </span>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="wpb_column vc_column_container vc_col-sm-6 text-md-left text-xs-center liquid-column-60a21877843f0">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper ">
                                                    <div class="wpb_wrapper-inner"><a href="#pricing"
                                                            class="btn btn-default btn-sm circle btn-bordered border-thick ld_button_60a21877844c3 vc_custom_1587351507567"
                                                            data-localscroll="true"> <span> <span
                                                                    class="btn-txt" >@lang('affiliate.pricing_1')</span>
                                                            </span>
                                                        </a></div>
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
        </section>
            <section data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".wpb_column","duration":"1200","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":60,"opacity":0},"animations":{"translateY":0,"opacity":1}}' data-bg-image="url" class="vc_row wpb_row vc_row-fluid all-features-icon vc_custom_1582620489012 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2059f8771e vc_row-has-fill vc_row-has-bg vc_column-gap-10 vc_row-o-equal-height vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">

                        <div class="wpb_column vc_column_container vc_col-sm-12 liquid-column-60a2059f87a21">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper vc_custom_1582584173891">
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a2059f87b2a">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('OTP.standard')</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a2187787738">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2187787848"
                                        id="ld_icon_box_60a2187787848" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-mobile"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('OTP.Mobile_Registration')
                                        </h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a2187787738">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2187787848"
                                        id="ld_icon_box_60a2187787848" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-sign-in"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('OTP.Mobile_Login')
                                        </h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a2187787738">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2187787848"
                                        id="ld_icon_box_60a2187787848" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-unlock-alt"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('OTP.Reset_Password')
                                        </h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a2187787738">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2187787848"
                                        id="ld_icon_box_60a2187787848" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-comment"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('OTP.Order_SMS')
                                        </h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a2187787738">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2187787848"
                                        id="ld_icon_box_60a2187787848" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-exclamation-circle"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('OTP.Order_Notification')
                                        </h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a2187787738">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2187787848"
                                        id="ld_icon_box_60a2187787848" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-credit-card"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('OTP.Payment_Notification')
                                        </h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                         <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a2187787738">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2187787848"
                                        id="ld_icon_box_60a2187787848" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-comments"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('OTP.Bulk_Send')
                                        </h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <section class="vc_row wpb_row vc_row-fluid vc_custom_1587032513478 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2059f8a552">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a2059f8a9ce">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a2059f8aa89">
                                            <h2 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('affiliate.works')</span></h2>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a2059f8ab48"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1587346659554 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2059f8ae3f vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a2059f8b14c">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a2059f8b226" class="liquid-img-group-container ld_images_group_container_60a2059f8b226">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a2059f8b359" class="liquid-img-group-single ld_images_group_element_60a2059f8b359" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1920" height="1515" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 1515&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px" data-src="{{ static_asset('photos/halovi-ecommerce-otp-system/Config-Nexmo-Twilio-SMS-gateway-with-proper-credentials.png') }}" data-srcset="{{ static_asset('photos/halovi-ecommerce-otp-system/Config-Nexmo-Twilio-SMS-gateway-with-proper-credentials.png') }} 1920w, {{ static_asset('photos/halovi-ecommerce-otp-system/Config-Nexmo-Twilio-SMS-gateway-with-proper-credentials.png') }} 300w, {{ static_asset('photos/halovi-ecommerce-otp-system/Config-Nexmo-Twilio-SMS-gateway-with-proper-credentials.png') }} 1024w" data-aspect="1.2673267326733" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a205a07bf16 liquid-column-responsive-60a205a07bf18 vc_col-has-fill">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper vc_custom_1587360090457" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}' style="background-position:left top !important;">
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a205a07c041">
                                            <h4 class="lqd-highlight-underline lqd-highlight-fadein"><span class="ld-fh-txt">@lang('OTP.Config_Nexmo')</span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a205a07c28b"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582582297559 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a205a07c582 vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a205a07c937 liquid-column-responsive-60a205a07c938">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a205a07ca1c">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('OTP.SMS')</span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a205a07cb69"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a205a07cef9">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a205a07cf97" class="liquid-img-group-container ld_images_group_container_60a205a07cf97">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a205a07d0d0" class="liquid-img-group-single ld_images_group_element_60a205a07d0d0" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1920" height="969" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 969&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px" data-src="{{ static_asset('photos/halovi-ecommerce-otp-system/Activate-the-SMS-gateway.png') }}" data-srcset="{{ static_asset('photos/halovi-ecommerce-otp-system/Activate-the-SMS-gateway.png') }} 1920w, {{ static_asset('photos/halovi-ecommerce-otp-system/Activate-the-SMS-gateway.png') }} 300w, {{ static_asset('photos/halovi-ecommerce-otp-system/Activate-the-SMS-gateway.png') }} 1024w" data-aspect="1.9814241486068" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a205a158fad vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a205a15931e">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a205a1593bf" class="liquid-img-group-container ld_images_group_container_60a205a1593bf">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a205a159512" class="liquid-img-group-single ld_images_group_element_60a205a159512" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1920" height="969" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 969&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px" data-src="{{ static_asset('photos/halovi-ecommerce-otp-system/Activate-when-you-want-to-send-an-SMS-notification.png') }}" data-srcset="{{ static_asset('photos/halovi-ecommerce-otp-system/Activate-when-you-want-to-send-an-SMS-notification.png') }} 1920w, {{ static_asset('photos/halovi-ecommerce-otp-system/Activate-when-you-want-to-send-an-SMS-notification.png') }} 300w, {{ static_asset('photos/halovi-ecommerce-otp-system/Activate-when-you-want-to-send-an-SMS-notification.png') }} 1024w" data-aspect="1.9814241486068" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a205a247801 liquid-column-responsive-60a205a247803">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a205a247925">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('OTP.Activate_SMS')</span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a205a247a74"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582582297559 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a205a247dda vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a205a248115 liquid-column-responsive-60a205a248116">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a205a248206">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('OTP.Customers_SMS')</span></h4>
                                        </div>
                                        <div class="ld-fancy-heading ld_fancy_heading_60a205a248447"></div>
                                        <div class="ld-empty-space ld_spacer_60a205a24854f"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a205a248826">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a205a2488fd" class="liquid-img-group-container ld_images_group_container_60a205a2488fd">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a205a248a31" class="liquid-img-group-single ld_images_group_element_60a205a248a31" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="3691" height="3357" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 3691 3357&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 3691px) 100vw, 3691px" data-src="{{ static_asset('photos/halovi-ecommerce-otp-system/Customers-will-get-SMS-notifications-during-changes.png') }}" data-srcset="{{ static_asset('photos/halovi-ecommerce-otp-system/Customers-will-get-SMS-notifications-during-changes.png') }} 3691w, {{ static_asset('photos/halovi-ecommerce-otp-system/Customers-will-get-SMS-notifications-during-changes.png') }} 300w,{{ static_asset('photos/halovi-ecommerce-otp-system/Customers-will-get-SMS-notifications-during-changes.png') }} 1024w" data-aspect="1.0994935954721" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="pricing"
            class="vc_row wpb_row vc_row-fluid vc_custom_1587032534127 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a218a9be16c">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a218a9be4b5">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a218a9be597">
                                        <h2 class="lqd-highlight-underline lqd-highlight-grow-left">
                                            <span class="ld-fh-txt">
                                                @lang('african_payment.pricing')
                                            </span>
                                        </h2>
                                    <div class="ld-empty-space ld_spacer_60a218a9be686"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                                <div style="margin-top: 50px; margin-bottom: 100px;" class="pricing-table-footer"> <a href="http://halovi.com.vn/contact?cache=ecommerce" target="_blank" class="btn btn-solid btn-lg circle btn-bordered border-thick ld_button_6057a9a0c1c52"> <span> <span class="btn-txt">@lang('pricing.Contact_us')</span> </span> </a></div><!-- /.pricing-table-footer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main><!-- #content -->

@endsection
