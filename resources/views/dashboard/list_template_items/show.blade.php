@extends('adminlte::layout.main', ['title' => trans('list_template_items.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('list_template_items.plural'), 'breadcrumb' => ['dashboard.list_template_items.show', $list_template_item]])
        @component('adminlte::table-box')

            <tr>
                <th>{{ trans('list_template_items.attributes.name') }}</th>
                <td>{{ $list_template_item->title }}</td>
            </tr>

            <tr>
                <th>{{ trans('list_template_items.attributes.disaster') }}</th>
                <td><a href="{{ route('dashboard.list_templates.show', $list_template_item->list_template_id) }}">{{ $list_template_item->listTemplate->name }}</a></td>
            </tr>

            @slot('footer')
                    {{ $list_template_item->present()->editButton }}

                    {{ $list_template_item->present()->deleteButton }}
            @endslot

        @endcomponent
    @endcomponent
@endsection
