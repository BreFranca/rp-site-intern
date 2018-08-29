@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.depoimentos.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.depoimentos.fields.cliente')</th>
                            <td field-key='cliente'>{{ $depoimento->cliente }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.depoimentos.fields.empresa')</th>
                            <td field-key='empresa'>{{ $depoimento->empresa }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.depoimentos.fields.depoimento')</th>
                            <td field-key='depoimento'>{!! $depoimento->depoimento !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.depoimentos.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


