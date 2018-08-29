@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.banner.title')</h3>
    
    {!! Form::model($banner, ['method' => 'PUT', 'route' => ['admin.banners.update', $banner->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('texto', trans('global.banner.fields.texto').'', ['class' => 'control-label']) !!}
                    {!! Form::text('texto', old('texto'), ['class' => 'form-control', 'placeholder' => 'Ex: Tecnologia']) !!}
                    <p class="help-block">Título do Banner</p>
                    @if($errors->has('texto'))
                        <p class="help-block">
                            {{ $errors->first('texto') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($banner->banner)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$banner->banner) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$banner->banner) }}"></a>
                    @endif
                    {!! Form::label('banner', trans('global.banner.fields.banner').'', ['class' => 'control-label']) !!}
                    {!! Form::file('banner', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('banner_max_size', 5) !!}
                    {!! Form::hidden('banner_max_width', 4096) !!}
                    {!! Form::hidden('banner_max_height', 4096) !!}
                    <p class="help-block">tamanho: 797x385 (.png)</p>
                    @if($errors->has('banner'))
                        <p class="help-block">
                            {{ $errors->first('banner') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('slug', trans('global.banner.fields.slug').'', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block">Slug do Banner ( Cores )</p>
                    @if($errors->has('slug'))
                        <p class="help-block">
                            {{ $errors->first('slug') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('link', trans('global.banner.fields.link').'', ['class' => 'control-label']) !!}
                    {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block">Link do Banner</p>
                    @if($errors->has('link'))
                        <p class="help-block">
                            {{ $errors->first('link') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('descricao', trans('global.banner.fields.descricao').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('descricao', old('descricao'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('descricao'))
                        <p class="help-block">
                            {{ $errors->first('descricao') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

