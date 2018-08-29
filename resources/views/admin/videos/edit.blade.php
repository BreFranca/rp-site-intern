@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.video.title')</h3>
    
    {!! Form::model($video, ['method' => 'PUT', 'route' => ['admin.videos.update', $video->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('titulo', trans('global.video.fields.titulo').'', ['class' => 'control-label']) !!}
                    {!! Form::text('titulo', old('titulo'), ['class' => 'form-control', 'placeholder' => 'Titulo do Video']) !!}
                    <p class="help-block">Titulo do Video</p>
                    @if($errors->has('titulo'))
                        <p class="help-block">
                            {{ $errors->first('titulo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('texto', trans('global.video.fields.texto').'', ['class' => 'control-label']) !!}
                    {!! Form::text('texto', old('texto'), ['class' => 'form-control', 'placeholder' => 'Texto do Video']) !!}
                    <p class="help-block">Texto do Video</p>
                    @if($errors->has('texto'))
                        <p class="help-block">
                            {{ $errors->first('texto') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('url', trans('global.video.fields.url').'', ['class' => 'control-label']) !!}
                    {!! Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => 'Url do Video ( ex: https://www.youtube.com/watch?v=W7ziBLHC_Cs )']) !!}
                    <p class="help-block">Url do Video ( ex: https://www.youtube.com/watch?v=W7ziBLHC_Cs )</p>
                    @if($errors->has('url'))
                        <p class="help-block">
                            {{ $errors->first('url') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

