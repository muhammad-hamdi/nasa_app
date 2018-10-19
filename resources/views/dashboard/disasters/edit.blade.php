@extends('adminlte::layout.main', ['title' => trans('disasters.actions.edit')])

@section('content')
    @component('adminlte::page', ['title' => trans('disasters.actions.edit'), 'breadcrumb' => ['dashboard.disasters.edit', $disaster]])
        @component('adminlte::box', ['title' => trans('disasters.singular')])
            @php(BsForm::resource('disasters'))

            {{ BsForm::putModel($disaster, route('dashboard.disasters.update', $disaster),['files' => true]) }}

            @include('dashboard.disasters.partials.form')

            {{ BsForm::submit(trans('forms.edit')) }}

            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
