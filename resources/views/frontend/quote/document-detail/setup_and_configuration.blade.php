@extends('frontend.quote.frontend')
@section('content')
<div class="titlebar text-center" style="background-image: url('../../public/assets/img/titlebar-bg.svg')">
    <div class="titlebar-inner">
        <div class="container titlebar-container">
            <div class="row titlebar-container">
                <div class="titlebar-col col-md-12">
                    <div class="docs-titlebar">
                        <h1> @lang('doc.Articles')</h1>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.titlebar-inner -->
</div><!-- /.titlebar -->
<main class="content" id="content" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="docs-sidebar">
                    <li class="docs_category">
                        <h3><a href="">@lang('doc.Active_eCommerce_CMS')</a></h3>
                        <ul>
                            <li class="cat-item cat-item-105 current-cat"><a aria-current="page" href="{{route('quote.document_detail.setup_and_configuration')}}">@lang('doc.Setup&Configuration')</a></li>
                            <li class="cat-item cat-item-109"><a href="{{route('quote.document_detail.manage_shop')}}">@lang('doc.Manage_Shop')</a></li>
                            <li class="cat-item cat-item-132"><a href="{{route('quote.document_detail.others')}}">@lang('doc.Others')</a></li>
                        </ul>
                    </li>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
                <div class="docs-list">
                    <h2>@lang('doc.Setup&Configuration')</h2>
                    <p>@lang('doc.Setup&Configuration_content1')</p>
                    <ul>
                        @foreach(explode('.', trans('doc.Setup&Configuration_content2')) as $line)
						<li class="text-truncate"><i class="fa fa-file-text-o"></i>{{$line}}</li>
						@endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main><!-- #content -->    
@endsection