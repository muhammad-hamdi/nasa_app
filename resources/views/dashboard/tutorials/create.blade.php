@extends('adminlte::layout.main', ['title' => trans('tutorials.actions.create')])

@section('content')
    @component('adminlte::page', ['title' => trans('tutorials.actions.create'), 'breadcrumb' => 'dashboard.tutorials.create'])
        @component('adminlte::box')
            @php(BsForm::resource('tutorials'))
            {{ BsForm::post(route('dashboard.tutorials.store'), ['files' => true]) }}

            @include('dashboard.tutorials.partials.form')

            {{ BsForm::submit(trans('forms.save')) }}
            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
