{{ BsForm::text('name') }}
@if(Route::currentRouteName() != 'dashboard.list_templates.edit')
    {{ BsForm::select('disaster_id', $disasters) }}
@endif
{{ BsForm::select('is_public', [1 => 'yes', 0 => 'no']) }}