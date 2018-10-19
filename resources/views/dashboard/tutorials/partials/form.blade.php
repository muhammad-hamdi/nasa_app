{{ BsForm::text('title') }}
@if(Route::currentRouteName() != 'dashboard.tutorials.edit')
    {{ BsForm::select('disaster_id', $disasters) }}
@endif
{{ BsForm::textarea('content') }}