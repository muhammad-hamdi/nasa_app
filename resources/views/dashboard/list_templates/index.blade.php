@extends('adminlte::layout.main', ['title' => trans('list_templates.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('list_templates.plural'), 'breadcrumb' => 'dashboard.list_templates.index'])
        @component('adminlte::table-box', ['collection' => $list_templates])
            @slot('title') @endslot
            @slot('tools')
                {{ present('list_templates')->createButton }}
            @endslot
            <tr>
                <th>#</th>
                <th style="width: 90px;">{{ trans('list_templates.attributes.avatar') }}</th>
                <th>{{ trans('list_templates.attributes.name') }}</th>
                <th>...</th>
            </tr>
            @foreach ($list_templates as $list_template)
                <tr>
                    <td>{{ $list_template->id }}</td>
                    <td>{{ $list_template->name }}</td>
                    <td>
                        {{ $list_template->present()->controlButton }}
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
@endsection
