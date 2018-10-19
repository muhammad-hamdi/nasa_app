@extends('adminlte::layout.main', ['title' => trans('disasters.actions.create')])

@section('content')
    @component('adminlte::page', ['title' => trans('disasters.actions.create'), 'breadcrumb' => 'dashboard.disasters.create'])
        @component('adminlte::box')
            @php(BsForm::resource('disasters'))
            {{ BsForm::post(route('dashboard.disasters.store'), ['files' => true]) }}

            @include('dashboard.disasters.partials.form')

            {{ BsForm::submit(trans('forms.save')) }}
            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
