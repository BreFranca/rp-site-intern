@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.video.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.video.fields.titulo')</th>
                            <td field-key='titulo'>{{ $video->titulo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.video.fields.texto')</th>
                            <td field-key='texto'>{{ $video->texto }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.video.fields.url')</th>
                            <td field-key='url'>{{ $video->url }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.videos.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


