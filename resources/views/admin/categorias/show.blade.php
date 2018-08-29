@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.categorias.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.categorias.fields.categoria')</th>
                            <td field-key='categoria'>{{ $categoria->categoria }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.categorias.fields.slug')</th>
                            <td field-key='slug'>{{ $categoria->slug }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#banner" aria-controls="banner" role="tab" data-toggle="tab">Banner</a></li>
<li role="presentation" class=""><a href="#atividades" aria-controls="atividades" role="tab" data-toggle="tab">Atividades</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="banner">
<table class="table table-bordered table-striped {{ count($banners) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.banner.fields.texto')</th>
                        <th>@lang('global.banner.fields.categoria')</th>
                        <th>@lang('global.banner.fields.banner1')</th>
                        <th>@lang('global.banner.fields.link1')</th>
                        <th>@lang('global.banner.fields.banner2')</th>
                        <th>@lang('global.banner.fields.link2')</th>
                        <th>@lang('global.banner.fields.banner3')</th>
                        <th>@lang('global.banner.fields.link3')</th>
                        <th>@lang('global.banner.fields.banner4')</th>
                        <th>@lang('global.banner.fields.link4')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($banners) > 0)
            @foreach ($banners as $banner)
                <tr data-entry-id="{{ $banner->id }}">
                    <td field-key='texto'>{{ $banner->texto }}</td>
                                <td field-key='categoria'>{{ $banner->categoria->categoria or '' }}</td>
                                <td field-key='banner1'>@if($banner->banner1)<a href="{{ asset(env('UPLOAD_PATH').'/' . $banner->banner1) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $banner->banner1) }}"/></a>@endif</td>
                                <td field-key='link1'>{{ $banner->link1 }}</td>
                                <td field-key='banner2'>@if($banner->banner2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $banner->banner2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $banner->banner2) }}"/></a>@endif</td>
                                <td field-key='link2'>{{ $banner->link2 }}</td>
                                <td field-key='banner3'>@if($banner->banner3)<a href="{{ asset(env('UPLOAD_PATH').'/' . $banner->banner3) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $banner->banner3) }}"/></a>@endif</td>
                                <td field-key='link3'>{{ $banner->link3 }}</td>
                                <td field-key='banner4'>@if($banner->banner4)<a href="{{ asset(env('UPLOAD_PATH').'/' . $banner->banner4) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $banner->banner4) }}"/></a>@endif</td>
                                <td field-key='link4'>{{ $banner->link4 }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.banners.restore', $banner->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.banners.perma_del', $banner->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('banner_view')
                                    <a href="{{ route('admin.banners.show',[$banner->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('banner_edit')
                                    <a href="{{ route('admin.banners.edit',[$banner->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('banner_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.banners.destroy', $banner->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="15">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="atividades">
<table class="table table-bordered table-striped {{ count($atividades) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.atividades.fields.nome')</th>
                        <th>@lang('global.atividades.fields.texto')</th>
                        <th>@lang('global.atividades.fields.categoria')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($atividades) > 0)
            @foreach ($atividades as $atividade)
                <tr data-entry-id="{{ $atividade->id }}">
                    <td field-key='nome'>{{ $atividade->nome }}</td>
                                <td field-key='texto'>{{ $atividade->texto }}</td>
                                <td field-key='categoria'>{{ $atividade->categoria->categoria or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.atividades.restore', $atividade->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.atividades.perma_del', $atividade->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('atividade_view')
                                    <a href="{{ route('admin.atividades.show',[$atividade->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('atividade_edit')
                                    <a href="{{ route('admin.atividades.edit',[$atividade->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('atividade_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.atividades.destroy', $atividade->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.categorias.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


