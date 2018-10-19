@extends('adminlte::layout.main', ['title' => trans('tutorials.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('tutorials.plural'), 'breadcrumb' => 'dashboard.tutorials.index'])
        @component('adminlte::table-box', ['collection' => $tutorials])
            @slot('title') @endslot
            @slot('tools')
                {{ present('tutorials')->createButton }}
            @endslot
            <tr>
                <th>#</th>
                <th style="width: 90px;">{{ trans('tutorials.attributes.avatar') }}</th>
                <th>{{ trans('tutorials.attributes.name') }}</th>
                <th>...</th>
            </tr>
            @foreach ($tutorials as $tutorial)
                <tr>
                    <td>{{ $tutorial->id }}</td>
                    <td>{{ $tutorial->title }}</td>
                    <td>
                        {{ $tutorial->present()->controlButton }}
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
@endsection
