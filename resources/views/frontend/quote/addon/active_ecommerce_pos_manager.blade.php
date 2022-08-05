@extends('frontend.quote.frontend')
@section('content')
    <main class="content" id="content">
        <section data-row-bg="{{ static_asset('assets/img/pos-manager.jpg') }}" data-parallax="true"
            data-parallax-options='{"parallaxBG":true}' style="background-position:center center !important;"
            data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1578401182102 liquid-row-shadowbox-6057a22927555 vc_row-has-fill vc_row-has-bg vc_row-o-full-height vc_row-o-columns-middle vc_row-flex">
            <span class="row-bg-loader"></span>
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-10 vc_col-sm-offset-1 text-center liquid-column-60a1f6748878e">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper vc_custom_1606215477128">
                                <div class="wpb_wrapper-inner">
                                    <div
                                        class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1590914085173 liquid_vc_single_image-60a1f674963db">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img style="max-width: 150px; height: auto;"
                                                    src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 200 200&#039;%2F&gt;"
                                                    class="vc_single_image-img attachment-full ld-lazyload" alt="" srcset=""
                                                    sizes="(max-width: 150px) 100vw, 150px"
                                                    data-src="{{ static_asset('assets/img/addon-landing-pos.png') }}"
                                                    data-srcset="{{ static_asset('assets/img/addon-landing-pos.png') }} 200w, {{ static_asset('assets/img/addon-landing-pos.png') }} 150w"
                                                    data-aspect="1" /></div>
                                        </figure>
                                    </div>
                                    <div class="ld-fancy-heading ld_fancy_heading_60a1f674964a1">
                                        <h1 class="lqd-highlight-underline lqd-highlight-grow-left" data-fittext="true"
                                            data-fittext-options='{"compressor":0.6,"maxFontSize":"50","minFontSize":"36"}'
                                            data-split-text="true" data-custom-animations="true"
                                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-words .split-inner","duration":"1200","startDelay":"220","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"translateZ":-154,"rotateX":-73,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                            data-split-options='{"type":"words"}'><span class="ld-fh-txt"
                                                style="font-size: 50px; color: #fff">
                                                @lang('pos_manager.active_ecommerce_pos_manager_add_on')</span></h1>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a1f674966b6"><span
                                            class="liquid_empty_space_inner"></span></div>
                                    <div class="ld-fancy-heading ld_fancy_heading_60a218778382c">
                                        <p class="lqd-highlight-underline lqd-highlight-grow-left" data-fittext="true"
                                            data-fittext-options='{"compressor":0.6,"maxFontSize":"currentFontSize","minFontSize":"20"}'
                                            data-split-text="true" data-custom-animations="true"
                                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-lines .split-inner","duration":"1200","startDelay":"600","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":45,"translateZ":-109,"rotateX":-71,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                            data-split-options='{"type":"lines"}'><span
                                                class="ld-fh-txt">@lang('pos_manager.create_order')</span>
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
                                                            <span> <span style="padding-right: 18px; padding-left: 18px"
                                                                    class="btn-txt">@lang('pos_manager.check_demo')</span>
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
                                                                    class="btn-txt">@lang('pos_manager.check_pricing')</span>
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
            class="vc_row wpb_row vc_row-fluid all-features-icon vc_custom_1582620489012 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a1f6749990c vc_row-has-fill vc_row-has-bg vc_column-gap-10 vc_row-o-equal-height vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div class="wpb_column vc_column_container vc_col-sm-12 liquid-column-60a1f67499c5c">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper vc_custom_1582584173891">
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a1f67499d2e">
                                        <h4 class="lqd-highlight-underline lqd-highlight-grow-left">
                                            <span class="ld-fh-txt">
                                                @lang('pos_manager.standard_pos_manager_system')
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 text-center liquid-column-60a1f6749a150">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a1f6749a23a"
                                        id="ld_icon_box_60a1f6749a23a" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="fa fa-user-plus"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('pos_manager.order_create_by_admin')</h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a1f6749a67c">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a1f6749a771"
                                        id="ld_icon_box_60a1f6749a771"  data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="fa fa-user-o"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('pos_manager.order_create_by_seller')</h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a1f6749abba">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a1f6749acf7"
                                        id="ld_icon_box_60a1f6749acf7" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="fa fa-truck"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('pos_manager.shipping_cost')</h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a1f6749b0e4">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a1f6749b1bf"
                                        id="ld_icon_box_60a1f6749b1bf" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="icon-md-pricetags"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('pos_manager.add_discount')</h3>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span
                                            class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3 vc_col-xs-6 liquid-column-60a1f6749b5c1">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-sm iconbox-heading-xs iconbox-filled ld_icon_box_60a1f6749b696"
                                        id="ld_icon_box_60a1f6749b696" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container" style="color: #e62e04; margin-bottom: 15px !important; background: #fff8d5;"><i
                                                    class="icon-et-refresh"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('pos_manager.dynamic_shipping_info')</h3>
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
            class="vc_row wpb_row vc_row-fluid vc_custom_1587032513478 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a1f6749ba78">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a1f6749be44">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a1f6749bf31">
                                        <h2 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">
                                                @lang('pos_manager.how_it_works')</span></h2>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a1f6749bff0"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1587346659554 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a1f6749c30e vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a1f6749c62f">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div id="ld_images_group_container_60a1f6749c765"
                                        class="liquid-img-group-container ld_images_group_container_60a1f6749c765">
                                        <div class="liquid-img-group-inner">
                                            <div id="ld_images_group_element_60a1f6749cb19"
                                                class="liquid-img-group-single ld_images_group_element_60a1f6749cb19"
                                                data-shadow-style="4" data-roundness="4" data-inview="true"
                                                data-animate-shadow="true">
                                                <div class="liquid-img-group-img-container">
                                                    <div class="liquid-img-container-inner">
                                                        <figure><img width="1909" height="964"
                                                                src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1909 964&#039;%2F&gt;"
                                                                class="attachment-full size-full ld-lazyload" alt=""
                                                                srcset="" sizes="(max-width: 1909px) 100vw, 1909px"
                                                                data-src="{{ static_asset('assets/img/Install-the-addon.png') }}"
                                                                data-srcset="{{ static_asset('assets/img/Install-the-addon.png') }} 1909w, {{ static_asset('assets/img/Install-the-addon.png') }} 300w, {{ static_asset('assets/img/Install-the-addon.png') }}"
                                                                data-aspect="1.9802904564315" /></figure>
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
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a1f674ab026 liquid-column-responsive-60a1f674ab028 vc_col-has-fill">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper vc_custom_1587360090457" data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'
                                style="background-position:left top !important;">
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a1f674ab153">
                                        <h4 class="lqd-highlight-underline lqd-highlight-fadein">
                                            <span class="ld-fh-txt">
                                                <span style="color: #575a63">
                                                    @lang('pos_manager.install_the_addon')
                                                </span>
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a1f674ab2e7"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-bg-image="url"
            class="vc_row wpb_row vc_row-fluid vc_custom_1582582297559 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a1f674ab620 vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a1f674ab99e liquid-column-responsive-60a1f674ab9a0">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a1f674aba99">
                                        <h4 class="lqd-highlight-underline lqd-highlight-grow-left">
                                            <span class="ld-fh-txt">
                                                <strong>
                                                    @lang('pos_manager.admin_will_get_pos_manager')
                                                </strong>
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a1f674abbf9"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a1f674abf33">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div id="ld_images_group_container_60a1f674abfe9"
                                        class="liquid-img-group-container ld_images_group_container_60a1f674abfe9">
                                        <div class="liquid-img-group-inner">
                                            <div id="ld_images_group_element_60a1f674ac124"
                                                class="liquid-img-group-single ld_images_group_element_60a1f674ac124"
                                                data-shadow-style="4" data-roundness="4" data-inview="true"
                                                data-animate-shadow="true">
                                                <div class="liquid-img-group-img-container">
                                                    <div class="liquid-img-container-inner">
                                                        <figure><img width="1920" height="969"
                                                                src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 969&#039;%2F&gt;"
                                                                class="attachment-full size-full ld-lazyload" alt=""
                                                                srcset="" sizes="(max-width: 1920px) 100vw, 1920px"
                                                                data-src="{{ static_asset('assets/img/Install-the-addon-ecommerce-cms.png') }}"
                                                                data-srcset="{{ static_asset('assets/img/Install-the-addon-ecommerce-cms.png') }} 1920w, {{ static_asset('assets/img/Install-the-addon-ecommerce-cms.png') }} 300w, {{ static_asset('assets/img/Install-the-addon-ecommerce-cms.png') }} 1024w"
                                                                data-aspect="1.9814241486068" /></figure>
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
            class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a1f674c107b vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a1f674c13aa">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper ">
                                <div class="wpb_wrapper-inner">
                                    <div id="ld_images_group_container_60a1f674c1491"
                                        class="liquid-img-group-container ld_images_group_container_60a1f674c1491">
                                        <div class="liquid-img-group-inner">
                                            <div id="ld_images_group_element_60a1f674c15dc"
                                                class="liquid-img-group-single ld_images_group_element_60a1f674c15dc"
                                                data-shadow-style="4" data-roundness="4" data-inview="true"
                                                data-animate-shadow="true">
                                                <div class="liquid-img-group-img-container">
                                                    <div class="liquid-img-container-inner">
                                                        <figure><img width="891" height="784"
                                                                src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 891 784&#039;%2F&gt;"
                                                                class="attachment-full size-full ld-lazyload" alt=""
                                                                srcset="" sizes="(max-width: 891px) 100vw, 891px"
                                                                data-src="{{ static_asset('assets/img/pos-manager-ecommerce-cms-cart.png') }} "
                                                                data-srcset="{{ static_asset('assets/img/pos-manager-ecommerce-cms-cart.png') }} 891w, {{ static_asset('assets/img/pos-manager-ecommerce-cms-cart.png') }} 300w"
                                                                data-aspect="1.1364795918367" /></figure>
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
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a1f675837c6 liquid-column-responsive-60a1f675837c7">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a1f67583916">
                                        <h4 class="lqd-highlight-underline lqd-highlight-grow-left">
                                            <span class="ld-fh-txt">
                                                <span style="color: #575a63">
                                                    <span style="font-weight: 400">
                                                        @lang('pos_manager.sellers_will_get_pos_manager')
                                                    </span>
                                                </span>
                                            </span>
                                        </h4>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a1f67583a9f"><span
                                            class="liquid_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing"
            class="vc_row wpb_row vc_row-fluid vc_custom_1587032534127 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a1f67583dcc">
            <div class="ld-container container">
                <div class="row ld-row">
                    <div
                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a1f6758409e">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper " data-custom-animations="true"
                                data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                <div class="wpb_wrapper-inner">
                                    <div class="ld-fancy-heading ld_fancy_heading_60a1f67584160">
                                        <h2 class="lqd-highlight-underline lqd-highlight-grow-left"><span
                                                class="ld-fh-txt">@lang('pos_manager.pricing')</span></h2>
                                    </div>
                                    <div class="ld-empty-space ld_spacer_60a1f6758424b"><span
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
