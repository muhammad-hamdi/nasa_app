@extends('adminlte::layout.main', ['title' => trans('tutorials.actions.edit')])

@section('content')
    @component('adminlte::page', ['title' => trans('tutorials.actions.edit'), 'breadcrumb' => ['dashboard.tutorials.edit', $tutorial]])
        @component('adminlte::box', ['title' => trans('tutorials.singular')])
            @php(BsForm::resource('tutorials'))

            {{ BsForm::putModel($tutorial, route('dashboard.tutorials.update', $tutorial),['files' => true]) }}

            @include('dashboard.tutorials.partials.form')

            {{ BsForm::submit(trans('forms.edit')) }}

            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
