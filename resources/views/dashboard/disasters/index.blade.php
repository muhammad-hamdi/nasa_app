@extends('adminlte::layout.main', ['title' => trans('disasters.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('disasters.plural'), 'breadcrumb' => 'dashboard.disasters.index'])
        @component('adminlte::table-box', ['collection' => $disasters])
            @slot('title') @endslot
            @slot('tools')
                {{ present('disasters')->createButton }}
            @endslot
            <tr>
                <th>#</th>
                <th style="width: 90px;">{{ trans('disasters.attributes.avatar') }}</th>
                <th>{{ trans('disasters.attributes.name') }}</th>
                <th>...</th>
            </tr>
            @foreach ($disasters as $disaster)
                <tr>
                    <td>{{ $disaster->id }}</td>
                    <td>
                        <img src="{{ $disaster->getFirstOrDefaultMediaUrl() }}" alt="{{ $disaster->name }}" width="150">
                    </td>
                    <td>{{ $disaster->name }}</td>
                    <td>
                        {{ $disaster->present()->controlButton }}
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
@endsection
