@extends('adminlte::layout.main', ['title' => trans('list_templates.plural')])

@section('content')
    @component('adminlte::page', ['title' => trans('list_templates.plural'), 'breadcrumb' => ['dashboard.list_templates.show', $list_template]])
        @component('adminlte::table-box')

            <tr>
                <th>{{ trans('list_templates.attributes.name') }}</th>
                <td>{{ $list_template->name }}</td>
            </tr>

            <tr>
                <th>{{ trans('list_templates.attributes.disaster') }}</th>
                <td><a href="{{ route('dashboard.disasters.show', $list_template->disaster_id) }}">{{ $list_template->disaster->name }}</a></td>
            </tr>

            @slot('footer')
                    {{ $list_template->present()->editButton }}

                    {{ $list_template->present()->deleteButton }}
            @endslot

        @endcomponent
        @component('adminlte::box')
            <h2>List Items</h2>
            @php(BsForm::resource('list_template_items'))
            {{ BsForm::post(route('dashboard.list_template_items.store', $list_template), ['files' => true]) }}

            @include('dashboard.list_template_items.partials.form')

            {{ BsForm::submit(trans('forms.save')) }}
            {{ BsForm::close() }}
            @component('adminlte::table-box')
                <tr>
                    <th>#</th>
                    <th>{{ trans('list_template_items.attributes.name') }}</th>
                    <th>...</th>
                </tr>
                @foreach ($list_template->items()->paginate() as $list_template)
                    <tr>
                        <td>{{ $list_template->id }}</td>
                        <td>{{ $list_template->title }}</td>
                        <td>
                            {{ $list_template->present()->controlButton }}
                        </td>
                    </tr>
                @endforeach
            @endcomponent
        @endcomponent
    @endcomponent
@endsection
