@extends('adminlte::layout.main', ['title' => trans('tutorials.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('tutorials.plural'), 'breadcrumb' => ['dashboard.tutorials.show', $tutorial]])
        @component('adminlte::table-box')

            <tr>
                <th>{{ trans('tutorials.attributes.name') }}</th>
                <td>{{ $tutorial->title }}</td>
            </tr>

            <tr>
                <th>{{ trans('tutorials.attributes.disaster') }}</th>
                <td><a href="{{ route('dashboard.disasters.show', $tutorial->disaster_id) }}">{{ $tutorial->disaster->name }}</a></td>
            </tr>

            <tr>
                <th>{{ trans('tutorials.attributes.content') }}</th>
                <td>{{ $tutorial->content }}</td>
            </tr>

            @slot('footer')
                    {{ $tutorial->present()->editButton }}

                    {{ $tutorial->present()->deleteButton }}
            @endslot

        @endcomponent
    @endcomponent
@endsection
