<?php

// Home / Users
Breadcrumbs::register('dashboard.list_templates.index', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.home');
    $breadcrumbs->push(trans('list_templates.actions.list'), route('dashboard.list_templates.index'), ['icon' => 'fa fa-users']);
});

// Home / list_templates / Create
Breadcrumbs::register('dashboard.list_templates.create', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.list_templates.index');
    $breadcrumbs->push(trans('list_templates.actions.create'), route('dashboard.list_templates.create'), ['icon' => 'fa fa-user-plus']);
});

// Home / list_templates / {admin}
Breadcrumbs::register('dashboard.list_templates.show', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.list_templates.index');
    $breadcrumbs->push($admin->name, route('dashboard.list_templates.show', $admin), ['icon' => 'fa fa-user']);
});

// Home / list_templates / {admin} / Edit
Breadcrumbs::register('dashboard.list_templates.edit', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.list_templates.show', $admin);
    $breadcrumbs->push(trans('list_templates.actions.edit'), route('dashboard.list_templates.edit', $admin), ['icon' => 'fa fa-edit']);
});
