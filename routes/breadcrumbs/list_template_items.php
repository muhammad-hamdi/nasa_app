<?php

// Home / Users
Breadcrumbs::register('dashboard.list_template_items.index', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.home');
    $breadcrumbs->push(trans('list_template_items.actions.list'), '#', ['icon' => 'fa fa-users']);
});

// Home / list_template_items / Create
Breadcrumbs::register('dashboard.list_template_items.create', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.list_template_items.index');
    $breadcrumbs->push(trans('list_template_items.actions.create'), route('dashboard.list_template_items.create'), ['icon' => 'fa fa-user-plus']);
});

// Home / list_template_items / {admin}
Breadcrumbs::register('dashboard.list_template_items.show', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.list_template_items.index');
    $breadcrumbs->push($admin->title, route('dashboard.list_template_items.show', $admin), ['icon' => 'fa fa-user']);
});

// Home / list_template_items / {admin} / Edit
Breadcrumbs::register('dashboard.list_template_items.edit', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.list_template_items.show', $admin);
    $breadcrumbs->push(trans('list_template_items.actions.edit'), route('dashboard.list_template_items.edit', $admin), ['icon' => 'fa fa-edit']);
});
