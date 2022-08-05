@extends('frontend.quote.frontend')
@section('content') 
		<div class="titlebar text-center" style="background-image: url('../public/assets/img/titlebar-bg.svg')">
			<div class="titlebar-inner">
				<div class="container titlebar-container">
					<div class="row titlebar-container">
						<div class="titlebar-col col-md-12">
							<div class="docs-titlebar">
								<h1> @lang('doc.documents')</h1>
							</div>
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.titlebar-inner -->
		</div><!-- /.titlebar -->
		<main class="content" id="content" style="margin-top: 50px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="doc-list-box">
							<h3><a href="{{route('quote.document_detail.setup_and_configuration')}}">@lang('doc.Setup&Configuration')</a></h3>
							<ul>
								@foreach(explode('.', trans('doc.Setup&Configuration_content')) as $line)
								<li class="text-truncate"><i class="fa fa-file-text-o"></i>{{$line}}</li>
								@endforeach
								<li class="see-all"><a href="{{route('quote.document_detail.setup_and_configuration')}}">@lang('doc.See_all_articles')</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="doc-list-box">
							<h3><a href="{{route('quote.document_detail.manage_shop')}}">@lang('doc.Manage_Shop')</a></h3>
							<ul>
								@foreach(explode('.', trans('doc.Manage_Shop_content')) as $line)
								<li class="text-truncate"><i class="fa fa-file-text-o"></i>{{$line}}</li>
								@endforeach
								<li class="see-all"><a href="{{route('quote.document_detail.manage_shop')}}">@lang('doc.See_all_articles')</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="doc-list-box">
							<h3><a href="{{route('quote.document_detail.others')}}">@lang('doc.Others')</a></h3>
							<ul>
								@foreach(explode('.', trans('doc.Others_content')) as $line)
								<li class="text-truncate"><i class="fa fa-file-text-o"></i>{{$line}}</li>
								@endforeach
								<li class="see-all"><a href="{{route('quote.document_detail.others')}}">@lang('doc.See_all_articles')</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #content -->

@endsection