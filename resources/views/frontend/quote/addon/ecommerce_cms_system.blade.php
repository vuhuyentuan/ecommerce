@extends('frontend.quote.frontend')
@section('content')


        <main class="content" id="content">
        <section
            data-row-bg="{{static_asset('photos/AEC-Refund-Website-Landing-Page.jpg')}}"
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
                                                    data-src="{{static_asset('photos/addon-landing-refund.png')}}"
                                                    data-srcset="{{static_asset('photos/addon-landing-refund.png')}} 200w, {{static_asset('photos/addon-landing-refund.png')}}150w"
                                                    data-aspect="1" /></div>
                                        </figure>
                                    </div>
                                    <div class="ld-fancy-heading ld_fancy_heading_60a2187783571">
                                        <h1 class="lqd-highlight-underline lqd-highlight-grow-left" data-fittext="true"
                                            data-fittext-options='{"compressor":0.6,"maxFontSize":"50","minFontSize":"36"}'
                                            data-split-text="true" data-custom-animations="true"
                                            data-ca-options='{"triggerHandler":"inview","animationTarget":".lqd-words .split-inner","duration":"1200","startDelay":"220","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"translateZ":-154,"rotateX":-73,"opacity":0},"animations":{"translateY":0,"translateZ":0,"rotateX":0,"opacity":1}}'
                                            data-split-options='{"type":"words"}'><span class="ld-fh-txt"> <span
                                                    style="color: #070707"><strong>@lang('refund.refund')</strong></span></span>
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
                                                class="ld-fh-txt">@lang('refund.refund_des')</span>
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
                                                    <div class="wpb_wrapper-inner"><a href="http://ec.halovi.com.vn/" target="_blank"
                                                            class="btn btn-solid btn-sm circle btn-bordered border-thin ld_button_60a218778407f vc_custom_1591762901260">
                                                            <span > <span
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
         <!--    <section data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".wpb_column","duration":"1200","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":60,"opacity":0},"animations":{"translateY":0,"opacity":1}}' class="vc_row wpb_row vc_row-fluid all-features-icon vc_custom_1581327823099 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20291e1723 vc_column-gap-10 vc_row-o-equal-height vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 liquid-column-60a20291e1ac7">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper vc_custom_1582584159934">
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20291e1b88">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> <span style="color: #e62e04"><strong>@lang('affiliate.requirements')</strong></span></span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-6 vc_col-md-6 vc_col-xs-6 liquid-column-60a20291e1f3f">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-md iconbox-heading-xs iconbox-filled iconbox-icon-image ld_icon_box_60a20291e206f" id="ld_icon_box_60a20291e206f" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                            <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><img src="{{static_asset('photos/round-icons-10-1.png')}}" class="liquid-image-icon" /></span></div>
                                            <div class="contents">
                                                <p><span style="font-size: 18px"><span style="font-family: 'arial black', sans-serif">@lang('refund.available')</span></p>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-6 vc_col-md-2 vc_col-xs-6 liquid-column-60a20291e261b">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div class="iconbox iconbox-round iconbox-shadow iconbox-circle iconbox-md iconbox-heading-xs iconbox-filled iconbox-icon-image ld_icon_box_60a20291e2744" id="ld_icon_box_60a20291e2744" data-plugin-options='{"color":"rgb(230, 46, 4)"}'>
                                            <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><img src="{{static_asset('photos/php-mysql.png')}}" class="liquid-image-icon" /></span></div>
                                            <div class="contents">
                                            <p><span style="font-size: 18px"><span style="font-family: 'arial black', sans-serif">@lang('affiliate.php_1')</span></span>
                                                    </span>
                                                </p>
                                                <p><span style="font-size: 18px"><span style="font-family: 'arial black', sans-serif">@lang('affiliate.php_2')<br /> </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".wpb_column","duration":"1200","delay":"180","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":60,"opacity":0},"animations":{"translateY":0,"opacity":1}}' data-bg-image="url" class="vc_row wpb_row vc_row-fluid all-features-icon vc_custom_1582620489012 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20291e2f72 vc_row-has-fill vc_row-has-bg vc_column-gap-10 vc_row-o-equal-height vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 liquid-column-60a20291e328a">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper vc_custom_1582584173891">
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20291e3362">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">@lang('refund.standard') </span></h4>
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-product-hunt"></i></span></div>

                                        <h3 class="font-weight-normal">@lang('refund.Enable')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-thumbs-down"></i></span></div>

                                        <h3 class="font-weight-normal">@lang('refund.Disable')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-calendar"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('refund.Time')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-user-plus"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('refund.Request')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-check-square-o"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('refund.Seller')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-handshake-o"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('refund.Dispute')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="fa fa-thumbs-up"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('refund.Approved')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="icon-et-wallet"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('refund.Add')
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
                                        <h3 class="font-weight-normal">@lang('refund.Log')
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
                                        <div class="iconbox-icon-wrap"><span class="iconbox-icon-container"><i class="icon-md-wallet"></i></span></div>
                                        <!-- /.iconbox-icon-wrap -->
                                        <h3 class="font-weight-normal">@lang('refund.Wallet')
                                        </h3>
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
            <section class="vc_row wpb_row vc_row-fluid vc_custom_1587032513478 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20291e6ad6">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a20291e6dcf">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20291e6e96">
                                            <h2 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('affiliate.works')</span></h2>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a20291e6f8a"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1587346659554 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20291e723c vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a20291e753a">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a20291e7611" class="liquid-img-group-container ld_images_group_container_60a20291e7611">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a20291e7740" class="liquid-img-group-single ld_images_group_element_60a20291e7740" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1902" height="912" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1902 912&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1902px) 100vw, 1902px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/Admin-seller-can-set-refundable-non-refundable-for-each-product.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/Admin-seller-can-set-refundable-non-refundable-for-each-product.png')}} 300w, {{static_asset('photos/halovi-eCommerce-cms-system/Admin-seller-can-set-refundable-non-refundable-for-each-product.png')}} 1024w" data-aspect="2.0855263157895" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a20292027cf liquid-column-responsive-60a20292027d1 vc_col-has-fill">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper vc_custom_1587360090457" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}' style="background-position:left top !important;">
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a2029202924">
                                            <h4 class="lqd-highlight-underline lqd-highlight-fadein"><span class="ld-fh-txt">@lang('refund.product') </span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a2029202ab4"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582582297559 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2029202dad vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a202920309a liquid-column-responsive-60a202920309c">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a2029203193">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">@lang('refund.policy') </span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a20292032ad"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a202920364e">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a20292036f4" class="liquid-img-group-container ld_images_group_container_60a20292036f4">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a2029203836" class="liquid-img-group-single ld_images_group_element_60a2029203836" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1896" height="926" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1896 926&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1896px) 100vw, 1896px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-policy.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-policy.png')}} 1896w, {{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-policy.png')}} 300w, {{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-policy.png')}} 1024w" data-aspect="2.0475161987041" /></figure>
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
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20292e636a vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a20292e68c2">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a20292e69be" class="liquid-img-group-container ld_images_group_container_60a20292e69be">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a20292e6b9b" class="liquid-img-group-single ld_images_group_element_60a20292e6b9b" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1920" height="969" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 969&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-duration.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-duration.png')}} 1920w, {{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-duration.png')}} 300w, {{static_asset('photos/halovi-eCommerce-cms-system/Admin-can-set-refund-duration.png')}} 1024w" data-aspect="1.9814241486068" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a202930487a liquid-column-responsive-60a202930487d">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20293049fc">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">@lang('refund.duration') </span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a2029304c4d"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582582297559 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a2029307156 vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a2029307917 liquid-column-responsive-60a2029307919">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a2029307a8a">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">@lang('refund.After')  </span></h4>
                                        </div>
                                        <div class="ld-fancy-heading ld_fancy_heading_60a2029308988"></div>
                                        <div class="ld-empty-space ld_spacer_60a2029308a82"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a2029308f5d">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a2029309075" class="liquid-img-group-container ld_images_group_container_60a2029309075">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a202930924c" class="liquid-img-group-single ld_images_group_element_60a202930924c" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1903" height="912" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1903 912&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1903px) 100vw, 1903px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/After-purchasingrefundable-product-customers.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/After-purchasingrefundable-product-customers.png')}} 1903w, {{static_asset('photos/halovi-eCommerce-cms-system/After-purchasingrefundable-product-customers.png')}} 300w, {{static_asset('photos/halovi-eCommerce-cms-system/After-purchasingrefundable-product-customers.png')}} 1024w" data-aspect="2.0866228070175" /></figure>
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
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20293ec5f8 vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a20293ecc0a">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a20293ecd68" class="liquid-img-group-container ld_images_group_container_60a20293ecd68">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a20293ecf12" class="liquid-img-group-single ld_images_group_element_60a20293ecf12" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1920" height="912" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 912&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/If-that-product-is-a-seller-product-seller-can-approve-reject-that-refund-request.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/If-that-product-is-a-seller-product-seller-can-approve-reject-that-refund-request.png')}} 1920w, {{static_asset('photos/halovi-eCommerce-cms-system/If-that-product-is-a-seller-product-seller-can-approve-reject-that-refund-request.png')}} 300w, {{static_asset('photos/halovi-eCommerce-cms-system/If-that-product-is-a-seller-product-seller-can-approve-reject-that-refund-request.png')}} 1024w" data-aspect="2.1052631578947" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a20294e132a liquid-column-responsive-60a20294e132c">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20294e14fc">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">@lang('refund.seller_product') </span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a20294e16f2"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20294e1b6e vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a20294e3fbf liquid-column-responsive-60a20294e3fc2">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20294e413c">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('refund.Finally') </span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a20294e436d"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a20294e47f9">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a20294e48fa" class="liquid-img-group-container ld_images_group_container_60a20294e48fa">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a20294e4ad3" class="liquid-img-group-single ld_images_group_element_60a20294e4ad3" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1903" height="912" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1903 912&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1903px) 100vw, 1903px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/Finally-admin-approve-reject-all-request-including-seller-admin-product-refund.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/Finally-admin-approve-reject-all-request-including-seller-admin-product-refund.png')}} 1903w, {{static_asset('photos/halovi-eCommerce-cms-system/Finally-admin-approve-reject-all-request-including-seller-admin-product-refund.png')}} 300w, {{static_asset('photos/halovi-eCommerce-cms-system/Finally-admin-approve-reject-all-request-including-seller-admin-product-refund.png')}} 1024w" data-aspect="2.0866228070175" /></figure>
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
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a202950486b vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a2029504d4d">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a2029504e54" class="liquid-img-group-container ld_images_group_container_60a2029504e54">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a2029505015" class="liquid-img-group-single ld_images_group_element_60a2029505015" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1920" height="912" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 912&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/that-product-price-1.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/that-product-price-1.png')}} 1920w, {{static_asset('photos/halovi-eCommerce-cms-system/that-product-price-1.png')}} 300w, {{static_asset('photos/halovi-eCommerce-cms-system/that-product-price-1.png')}} 1024w" data-aspect="2.1052631578947" /></figure>
                                                        </div><!-- /.liquid-img-container-inner -->
                                                    </div><!-- /.liquid-img-group-content -->
                                                </div><!-- /.liquid-img-group-single -->
                                            </div><!-- /.liquid-img-group-inner -->
                                        </div><!-- /.liquid-img-group-container -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a20295d3681 liquid-column-responsive-60a20295d3683">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20295d3834">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">@lang('refund.customer_receive')</span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a20295d3a7f"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bg-image="url" class="vc_row wpb_row vc_row-fluid vc_custom_1582578619813 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20295d3efa vc_row-has-fill vc_row-has-bg vc_row-o-content-middle vc_row-flex">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 liquid-column-60a20295d4400 liquid-column-responsive-60a20295d4402">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1600","delay":"160","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":30,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20295d4591">
                                            <h4 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt">@lang('refund.purchase_another') </span></h4>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a20295d475d"><span class="liquid_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-0 vc_col-md-6 text-center liquid-column-60a20295d8346">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper ">
                                    <div class="wpb_wrapper-inner">
                                        <div id="ld_images_group_container_60a20295d87f4" class="liquid-img-group-container ld_images_group_container_60a20295d87f4">
                                            <div class="liquid-img-group-inner">
                                                <div id="ld_images_group_element_60a20295d8aa7" class="liquid-img-group-single ld_images_group_element_60a20295d8aa7" data-shadow-style="4" data-roundness="4" data-inview="true" data-animate-shadow="true">
                                                    <div class="liquid-img-group-img-container">
                                                        <div class="liquid-img-container-inner">
                                                            <figure><img width="1920" height="1942" src="data:image/svg+xml;charset=utf-8,&lt;svg xmlns%3D&#039;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#039; viewBox%3D&#039;0 0 1920 1942&#039;%2F&gt;" class="attachment-full size-full ld-lazyload" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px" data-src="{{static_asset('photos/halovi-eCommerce-cms-system/Then-the-customer.png')}}" data-srcset="{{static_asset('photos/halovi-eCommerce-cms-system/Then-the-customer.png')}} 1920w, {{static_asset('photos/halovi-eCommerce-cms-system/Then-the-customer.png')}} 297w, {{static_asset('photos/halovi-eCommerce-cms-system/Then-the-customer.png')}} 1012w" data-aspect="0.98867147270855" /></figure>
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
            <section id="pricing" class="vc_row wpb_row vc_row-fluid vc_custom_1587032534127 row-contains-padding-top row-contains-padding-bottom liquid-row-shadowbox-60a20296c816d">
                <div class="ld-container container">
                    <div class="row ld-row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-3 vc_col-md-6 text-center liquid-column-60a20296c84c2">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper " data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":700,"delay":100,"easing":"easeOutQuint","direction":"forward","initValues":{"translateY":33,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                                    <div class="wpb_wrapper-inner">
                                        <div class="ld-fancy-heading ld_fancy_heading_60a20296c862d">
                                            <h2 class="lqd-highlight-underline lqd-highlight-grow-left"><span class="ld-fh-txt"> @lang('affiliate.pricing')</span></h2>
                                        </div>
                                        <div class="ld-empty-space ld_spacer_60a20296c8766"><span class="liquid_empty_space_inner"></span></div>
                                         <div style="margin-top: 50px; margin-bottom: 100px;" class="pricing-table-footer"> <a href="http://halovi.com.vn/contact?cache=ecommerce" target="_blank" class="btn btn-solid btn-lg circle btn-bordered border-thick ld_button_6057a9a0c1c52"> <span> <span class="btn-txt">@lang('pricing.Contact_us')</span> </span> </a></div><!-- /.pricing-table-footer -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main><!-- #content -->

<!-- Page generated by LiteSpeed Cache 3.6.2 on 2021-05-17 05:43:51 -->
@endsection
