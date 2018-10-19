@extends('adminlte::layout.main', ['title' => trans('list_templates.actions.edit')])

@section('content')
    @component('adminlte::page', ['title' => trans('list_templates.actions.edit'), 'breadcrumb' => ['dashboard.list_templates.edit', $list_template]])
        @component('adminlte::box', ['title' => trans('list_templates.singular')])
            @php(BsForm::resource('list_templates'))

            {{ BsForm::putModel($list_template, route('dashboard.list_templates.update', $list_template),['files' => true]) }}

            @include('dashboard.list_templates.partials.form')

            {{ BsForm::submit(trans('forms.edit')) }}

            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
