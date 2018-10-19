@extends('adminlte::layout.main', ['title' => trans('list_template_items.actions.edit')])

@section('content')
    @component('adminlte::page', ['title' => trans('list_template_items.actions.edit'), 'breadcrumb' => ['dashboard.list_template_items.edit', $list_template_item]])
        @component('adminlte::box', ['title' => trans('list_template_items.singular')])
            @php(BsForm::resource('list_template_items'))

            {{ BsForm::putModel($list_template_item, route('dashboard.list_template_items.update', $list_template_item),['files' => true]) }}

            @include('dashboard.list_template_items.partials.form')

            {{ BsForm::submit(trans('forms.edit')) }}

            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
