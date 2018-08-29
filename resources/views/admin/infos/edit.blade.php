@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.infos.title')</h3>
    
    {!! Form::model($info, ['method' => 'PUT', 'route' => ['admin.infos.update', $info->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email_contato', trans('global.infos.fields.email-contato').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email_contato', old('email_contato'), ['class' => 'form-control', 'placeholder' => 'Ex: email@email.com.br']) !!}
                    <p class="help-block">Ex: email@email.com.br</p>
                    @if($errors->has('email_contato'))
                        <p class="help-block">
                            {{ $errors->first('email_contato') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('linked_in', trans('global.infos.fields.linked-in').'', ['class' => 'control-label']) !!}
                    {!! Form::text('linked_in', old('linked_in'), ['class' => 'form-control', 'placeholder' => 'Ex: https://www.linkedin.com/company/empresa']) !!}
                    <p class="help-block">Ex: https://www.linkedin.com/company/empresa</p>
                    @if($errors->has('linked_in'))
                        <p class="help-block">
                            {{ $errors->first('linked_in') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook', trans('global.infos.fields.facebook').'', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook', old('facebook'), ['class' => 'form-control', 'placeholder' => 'Ex: https://www.facebook.com/empresa']) !!}
                    <p class="help-block">Ex: https://www.facebook.com/empresa</p>
                    @if($errors->has('facebook'))
                        <p class="help-block">
                            {{ $errors->first('facebook') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('instagram', trans('global.infos.fields.instagram').'', ['class' => 'control-label']) !!}
                    {!! Form::text('instagram', old('instagram'), ['class' => 'form-control', 'placeholder' => 'Ex: https://www.instagram.com/empresa']) !!}
                    <p class="help-block">Ex: https://www.instagram.com/empresa</p>
                    @if($errors->has('instagram'))
                        <p class="help-block">
                            {{ $errors->first('instagram') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vimeo', trans('global.infos.fields.vimeo').'', ['class' => 'control-label']) !!}
                    {!! Form::text('vimeo', old('vimeo'), ['class' => 'form-control', 'placeholder' => 'Ex: https://vimeo.com/empresa']) !!}
                    <p class="help-block">Ex: https://vimeo.com/empresa</p>
                    @if($errors->has('vimeo'))
                        <p class="help-block">
                            {{ $errors->first('vimeo') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

