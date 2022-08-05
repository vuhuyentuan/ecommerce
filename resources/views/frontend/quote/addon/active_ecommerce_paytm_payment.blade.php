@extends('frontend.quote.frontend')
@section('content')
    <main class="content" id="content">
        <section
            data-row-bg="{{ static_asset('assets/img/paytm-website-landing-page.jpg') }}"
            data-parallax="true" data-parallax-options='{"parallaxBG":true}'
            style="background-position:center center !important;" data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1578401182102 liquid-row-shadowbox-6057a22927555 vc_row-has-fill vc_row-has-bg vc_row-o-full-height vc_row-o-columns-middle vc_row-flex">
            <span class="row-bg-loader"></span>
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-10 vc_col-sm-offset-1 text-center liquid-column-60a2188d9c18f">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper vc_custom_1527245307587">
                                <div class="wpb_wrapper-inner">
                                    <div
                                        class="wpb_single_image wpb_content_element vc_align_center vc_custom_1590755024219 liquid_vc_single_image-60a2188e264b3">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper vc_box_border_grey"><img style="max-width: 150px; height: auto;"
                                                    src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 200 200&#039;%2F&gt;"
                                                    class="vc_single_image-img attachment-full ld-lazyload" alt="" srcset=""
                                                    sizes="(max-width: 150px) 100vw, 150px"
                                                    data-src="{{ static_asset('assets/img/addon-landing-paytm.png') }}"
                                                    data-srcset="{{ static_asset('assets/img/addon-landing-paytm.png') }} 200w, {{ static_asset('assets/img/addon-landing-paytm.png') }} 150w"
                                                    data-aspect="1" /></div>
                                        </figure>
                                    </div>
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2188e2656b">
                                        <h1 class="lqd-highlight-underline lqd-highlight-grow-left" data-fittext="true"
                                            data-fittext-options='{"compressor":0.6,"maxFontSize":"50","minFontSize":"36"}'
                                            data-split-text="true" data-custom-animations="true"
                                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-words .split-inner","duration":"1200","startDelay":"220","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"translateZ":-154,"rotateX":-73,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                            data-split-options='{"type":"words"}'><span class="ld-fh-txt" style="font-size: 50px; color: #fff;"> @lang('paytm_payment.halovi_ecommerce_paytm_add_on')</span></h1>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a2188e266dd"><span
                                            class="liquid_empty_space_inner"></span></div>

                                    <div class="ld-fancy-heading ld_fancy_heading_60a218778382c">
                                        <p class="lqd-highlight-underline lqd-highlight-grow-left" data-fittext="true"
                                            data-fittext-options='{"compressor":0.6,"maxFontSize":"currentFontSize","minFontSize":"20"}'
                                            data-split-text="true" data-custom-animations="true"
                                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-lines .split-inner","duration":"1200","startDelay":"600","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":45,"translateZ":-109,"rotateX":-71,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                            data-split-options='{"type":"lines"}'><span
                                                class="ld-fh-txt">@lang('paytm_payment.paytm_payment_method')</span>
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
                                                            <span > <span style="padding-right: 18px; padding-left: 18px"
                                                                    class="btn-txt">@lang('paytm_payment.check_demo')</span>
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
                                                            data-localscroll="true"> <span> <span style="width: 123px; height: 28px; text-align: center"
                                                                    class="btn-txt">@lang('paytm_payment.check_pricing')</span>
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

        <section data-custom-animations="true"
            data-ca-options='{"triggerHandler":"inview","animationTarget":".wpb_column","duration":"1200","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":60,"opacity":0},"animations":{"translateY":0,"opacity":1}}'
            data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid all-features-icon vc_custom_1582620489012 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2188e292e8 vc_row-has-fill vc_row-has-bg vc_column-gap-10 vc_row-o-equal-height vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div class="wpb_column vc_column_container vc_col-sm-12 liquid-column-60a2188e297a1">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper vc_custom_1582584173891">
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2188e298c1">
                                        <h4 class="lqd-highlight-underline lqd-highlight-grow-left">
                                            <span class="ld-fh-txt">
                                                @lang('paytm_payment.standard_paytm_system')
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4 vc_col-xs-6 text-center liquid-column-60a2188e29e7a">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2188e2a003"
                                        id="ld_icon_box_60a2188e2a003" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="fa fa-cog"></i></span></div><!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('paytm_payment.config_page_easily')</h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4 vc_col-xs-6 liquid-column-60a2188e2a5e6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2188e2a771"
                                        id="ld_icon_box_60a2188e2a771" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="fa fa-check-circle"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('paytm_payment.paytm_payment_in_checkout')</h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4 vc_col-xs-6 liquid-column-60a2188e2ada3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a2188e2af10"
                                        id="ld_icon_box_60a2188e2af10" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="icon-md-wallet"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('paytm_payment.paytm_in_wallet_recharge')</h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="vc_row wpb_row vc_row-fluid vc_custom_1587032513478 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2188e2b4b6">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a2188e2b936">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2188e2ba88">
                                        <h2 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">
                                        @lang('paytm_payment.how_it_works')</span></h2>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a2188e2bb8b"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1587346659554 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2188e2bfff vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a2188e2c485">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div id="ld_images_group_container_60a2188e2c599"
                                        class="liquid-img-group-container ld_images_group_container_60a2188e2c599">
                                        <div class="liquid-img-group-inner">
                                            <div id="ld_images_group_element_60a2188e2c73c"
                                                class="liquid-img-group-single ld_images_group_element_60a2188e2c73c"
                                                data-shadow-style="4" data-roundness="4" data-inview="true"
                                                data-animate-shadow="true">
                                                <div class="liquid-img-group-img-container">
                                                    <div class="liquid-img-container-inner">
                                                        <figure><img width="555" height="372"
                                                                src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 555 372&#039;%2F&gt;"
                                                                class="attachment-full size-full ld-lazyload" alt=""
                                                                srcset="" sizes="(max-width: 555px) 100vw, 555px"
                                                                data-src="{{ static_asset('assets/img/ecommerce-african-payment-1.png') }}"
                                                                data-srcset="{{ static_asset('assets/img/ecommerce-african-payment-1.png') }} 555w, {{ static_asset('assets/img/ecommerce-african-payment-1.png') }} 300w"
                                                                data-aspect="1.491935483871" /></figure>
                                                    </div><!-- /.liquid-img-container-inner -->
                                                </div><!-- /.liquid-img-group-content -->
                                            </div><!-- /.liquid-img-group-single -->
                                        </div><!-- /.liquid-img-group-inner -->
                                    </div><!-- /.liquid-img-group-container -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a2188ed4e73 liquid-column-responsive-60a2188ed4e75 vc_col-has-fill">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper vc_custom_1587360090457" data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'
                                style="background-position:left top !important;">
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2188ed4f99">
                                        <h4 class="lqd-highlight-underline lqd-highlight-fadein">
                                        <span class="ld-fh-txt">
                                            <strong>
                                                <span style="color: #575a63">
                                                @lang('paytm_payment.configure_paytm_payment_method_with')
                                                </span>
                                            </strong>
                                        </span></h4>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a2188ed51b1"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1582582297559 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2188ed54da vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a2188ed57d8 liquid-column-responsive-60a2188ed57d9">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2188ed5905">
                                        <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">
                                            <strong>
                                                <span style="color: #575a63">
                                                @lang('paytm_payment.customers_will_get')
                                                </span>
                                            </strong></span></h4>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a2188ed5a3f"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a2188ed5d9e">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div id="ld_images_group_container_60a2188ed5e49"
                                        class="liquid-img-group-container ld_images_group_container_60a2188ed5e49">
                                        <div class="liquid-img-group-inner">
                                            <div id="ld_images_group_element_60a2188ed5f9c"
                                                class="liquid-img-group-single ld_images_group_element_60a2188ed5f9c"
                                                data-shadow-style="4" data-roundness="4" data-inview="true"
                                                data-animate-shadow="true">
                                                <div class="liquid-img-group-img-container">
                                                    <div class="liquid-img-container-inner">
                                                        <figure><img width="555" height="372"
                                                                src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 555 372&#039;%2F&gt;"
                                                                class="attachment-full size-full ld-lazyload" alt=""
                                                                srcset="" sizes="(max-width: 555px) 100vw, 555px"
                                                                data-src="{{ static_asset('assets/img/ecommerce-african-payment-2.png') }}"
                                                                data-srcset="{{ static_asset('assets/img/ecommerce-african-payment-2.png') }} 555w, {{ static_asset('assets/img/ecommerce-african-payment-2.png') }} 300w"
                                                                data-aspect="1.491935483871" /></figure>
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
        <section data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2188f8720f vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a2188f87581">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div id="ld_images_group_container_60a2188f8761d"
                                        class="liquid-img-group-container ld_images_group_container_60a2188f8761d">
                                        <div class="liquid-img-group-inner">
                                            <div id="ld_images_group_element_60a2188f8779e"
                                                class="liquid-img-group-single ld_images_group_element_60a2188f8779e"
                                                data-shadow-style="4" data-roundness="4" data-inview="true"
                                                data-animate-shadow="true">
                                                <div class="liquid-img-group-img-container">
                                                    <div class="liquid-img-container-inner">
                                                        <figure><img width="555" height="372"
                                                                src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 555 372&#039;%2F&gt;"
                                                                class="attachment-full size-full ld-lazyload" alt=""
                                                                srcset="" sizes="(max-width: 555px) 100vw, 555px"
                                                                data-src="{{ static_asset('assets/img/ecommerce-african-payment-3.jpg') }}"
                                                                data-srcset="{{ static_asset('assets/img/ecommerce-african-payment-3.jpg') }} 555w, {{ static_asset('assets/img/ecommerce-african-payment-3.jpg') }} 300w"
                                                                data-aspect="1.491935483871" /></figure>
                                                    </div><!-- /.liquid-img-container-inner -->
                                                </div><!-- /.liquid-img-group-content -->
                                            </div><!-- /.liquid-img-group-single -->
                                        </div><!-- /.liquid-img-group-inner -->
                                    </div><!-- /.liquid-img-group-container -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a2188f9426b liquid-column-responsive-60a2188f9426d">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2188f94361">
                                        <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">
                                                <strong>
                                                    <span style="color: #575a63">
                                                    @lang('paytm_payment.customers_will_get_paytm_payment_option_during')
                                                    </span>
                                                </strong></span></h4>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a2188f94495"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing"
            class="vc_row wpb_row vc_row-fluid vc_custom_1587032534127 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2188f94871">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a2188f94bc9">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2188f94c91">
                                        <h2 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">
                                        @lang('paytm_payment.pricing')</span></h2>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a2188f94d87"><span
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
