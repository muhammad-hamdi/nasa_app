@extends('adminlte::layout.main', ['title' => trans('disasters.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('disasters.plural'), 'breadcrumb' => ['dashboard.disasters.show', $disaster]])
        @component('adminlte::table-box')

            <tr>
                <th>{{ trans('disasters.attributes.name') }}</th>
                <td>{{ $disaster->name }}</td>
            </tr>
            <tr>
                <th>{{ trans('disasters.attributes.content') }}</th>
                <td>{{ $disaster->description }}</td>
            </tr>

            @slot('footer')
                    {{ $disaster->present()->editButton }}

                    {{ $disaster->present()->deleteButton }}
            @endslot

        @endcomponent
    @endcomponent
@endsection
