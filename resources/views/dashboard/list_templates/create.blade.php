@extends('adminlte::layout.main', ['title' => trans('list_templates.actions.create')])

@section('content')
    @component('adminlte::page', ['title' => trans('list_templates.actions.create'), 'breadcrumb' => 'dashboard.list_templates.create'])
        @component('adminlte::box')
            @php(BsForm::resource('list_templates'))
            {{ BsForm::post(route('dashboard.list_templates.store'), ['files' => true]) }}

            @include('dashboard.list_templates.partials.form')

            {{ BsForm::submit(trans('forms.save')) }}
            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
