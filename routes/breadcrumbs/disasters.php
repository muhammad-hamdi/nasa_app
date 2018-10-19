<?php

// Home / Users
Breadcrumbs::register('dashboard.disasters.index', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.home');
    $breadcrumbs->push(trans('disasters.actions.list'), route('dashboard.disasters.index'), ['icon' => 'fa fa-users']);
});

// Home / disasters / Create
Breadcrumbs::register('dashboard.disasters.create', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.disasters.index');
    $breadcrumbs->push(trans('disasters.actions.create'), route('dashboard.disasters.create'), ['icon' => 'fa fa-user-plus']);
});

// Home / disasters / {admin}
Breadcrumbs::register('dashboard.disasters.show', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.disasters.index');
    $breadcrumbs->push($admin->name, route('dashboard.disasters.show', $admin), ['icon' => 'fa fa-user']);
});

// Home / disasters / {admin} / Edit
Breadcrumbs::register('dashboard.disasters.edit', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.disasters.show', $admin);
    $breadcrumbs->push(trans('disasters.actions.edit'), route('dashboard.disasters.edit', $admin), ['icon' => 'fa fa-edit']);
});
