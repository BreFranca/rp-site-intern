@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.banner.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.banner.fields.texto')</th>
                            <td field-key='texto'>{{ $banner->texto }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.banner.fields.banner')</th>
                            <td field-key='banner'>@if($banner->banner)<a href="{{ asset(env('UPLOAD_PATH').'/' . $banner->banner) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $banner->banner) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.banner.fields.slug')</th>
                            <td field-key='slug'>{{ $banner->slug }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.banner.fields.link')</th>
                            <td field-key='link'>{{ $banner->link }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.banner.fields.descricao')</th>
                            <td field-key='descricao'>{!! $banner->descricao !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.banners.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


