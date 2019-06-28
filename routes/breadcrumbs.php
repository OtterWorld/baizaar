<?php

use Illuminate\Support\Facades\Lang;

// Main
Breadcrumbs::for('main', function ($trail) {
    $trail->push(Lang::get('interface.title.main'), route('main.page'));
});

// News
Breadcrumbs::for('news', function ($trail) {
    $trail->parent('main');
    $trail->push(Lang::get('interface.title.news'), route('news.all.page'));
});

// Sales
Breadcrumbs::for('sales', function ($trail) {
    $trail->parent('main');
    $trail->push(Lang::get('interface.title.sales'), route('sales.page'));
});

// About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('main');
    $trail->push(Lang::get('interface.title.about'), route('about.page'));
});

// Info
Breadcrumbs::for('info', function ($trail) {
    $trail->parent('main');
    $trail->push(Lang::get('interface.title.info'), route('info.page'));
});

// Contacts
Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('main');
    $trail->push(Lang::get('interface.title.contacts'), route('contacts.page'));
});

// Schedule
Breadcrumbs::for('schedule', function ($trail) {
    $trail->parent('main');
    $trail->push(Lang::get('interface.title.schedule'), route('schedule.page'));
});

// Shops
Breadcrumbs::for('shops', function ($trail, $name, $id) {
    $trail->parent('main');
    $trail->push($name, route('shop.show.page', $id));
});

// News One
Breadcrumbs::for('news.one', function ($trail, $name, $id) {
    $trail->parent('main');
    $trail->push($name, route('news.one.page', $id));
});

// Sale One
Breadcrumbs::for('sales.one', function ($trail, $name, $id) {
    $trail->parent('sales');
    $trail->push($name, route('sales.show.page', $id));
});

// Cooperations One
Breadcrumbs::for('cooperations', function ($trail) {
    $trail->parent('main');
    $trail->push(Lang::get('interface.title.cooperation'), route('cooperations.page'));
});