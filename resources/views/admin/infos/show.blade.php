@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.infos.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.infos.fields.email-contato')</th>
                            <td field-key='email_contato'>{{ $info->email_contato }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.infos.fields.linked-in')</th>
                            <td field-key='linked_in'>{{ $info->linked_in }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.infos.fields.facebook')</th>
                            <td field-key='facebook'>{{ $info->facebook }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.infos.fields.instagram')</th>
                            <td field-key='instagram'>{{ $info->instagram }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.infos.fields.vimeo')</th>
                            <td field-key='vimeo'>{{ $info->vimeo }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.infos.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


