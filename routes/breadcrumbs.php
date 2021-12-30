<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Title Here', route('admin.dashboard'));
});

Breadcrumbs::for('admin.user.index', function ($trail) {
    $trail->push('Danh sách khách hàng', route('admin.user.index'));
});

Breadcrumbs::for('admin.user.create', function ($trail) {
    $trail->parent('admin.user.index');
    $trail->push('Thêm khách hàng', route('admin.user.create'));
});
