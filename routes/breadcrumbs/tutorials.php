<?php

// Home / Users
Breadcrumbs::register('dashboard.tutorials.index', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.home');
    $breadcrumbs->push(trans('tutorials.actions.list'), route('dashboard.tutorials.index'), ['icon' => 'fa fa-users']);
});

// Home / tutorials / Create
Breadcrumbs::register('dashboard.tutorials.create', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard.tutorials.index');
    $breadcrumbs->push(trans('tutorials.actions.create'), route('dashboard.tutorials.create'), ['icon' => 'fa fa-user-plus']);
});

// Home / tutorials / {admin}
Breadcrumbs::register('dashboard.tutorials.show', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.tutorials.index');
    $breadcrumbs->push($admin->title, route('dashboard.tutorials.show', $admin), ['icon' => 'fa fa-user']);
});

// Home / tutorials / {admin} / Edit
Breadcrumbs::register('dashboard.tutorials.edit', function ($breadcrumbs, $admin) {
    $breadcrumbs->parent('dashboard.tutorials.show', $admin);
    $breadcrumbs->push(trans('tutorials.actions.edit'), route('dashboard.tutorials.edit', $admin), ['icon' => 'fa fa-edit']);
});
