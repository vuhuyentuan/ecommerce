@extends('frontend.quote.frontend')
@section('content')

<div class="titlebar text-center" style="background-image: url('../../public/assets/img/titlebar-bg.svg')">
    <div class="titlebar-inner">
        <div class="container titlebar-container">
            <div class="row titlebar-container">
                <div class="titlebar-col col-md-12">
                    <div class="docs-titlebar">
                        <h1> @lang('footer.Customization_Policy')</h1>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.titlebar-inner -->
</div>
        <!-- /.titlebar -->
        <main class="content" id="content">
            <div class="container">
                <h4><strong>@lang('footer.Basic_Terms')</strong></h4>
                <p>@lang('footer.Customized_script')</p>
                <h4>@lang('footer.Feature')</h4>
                <p>@lang('footer.Before_starting')</p>
                <h4>@lang('footer.Payments')</h4>
                <p>@lang('footer.Payments_des')</p>
                <h4>@lang('footer.Project_policy')</h4>
                <p>@lang('footer.If_clients')</p>
            </div>
        </main>
        <!-- #content -->
      
@endsection