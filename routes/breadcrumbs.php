<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > login
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

// Home > register
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Register', route('register'));
});
//==========================================================================================
// Home > Admin
Breadcrumbs::for('admin', function ($trail) {
    $trail->parent('home');
    $trail->push('Admin', route('admin.home'));
});

// Home > Admin > Users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('admin');
    $trail->push('Users', route('users.index'));
});

// Home > Admin > Users > Create
Breadcrumbs::for('user_create', function ($trail) {
    $trail->parent('users');
    $trail->push('Create user', route('users.create'));
});

// Home > Admin > Users > Name
Breadcrumbs::for('user_show', function ($trail, $user) {
    $trail->parent('users');
    $trail->push($user->name, route('users.show', $user->id));
});

// Home > Admin > Users > Edit > Name
Breadcrumbs::for('user_edit', function ($trail, $user) {
    $trail->parent('users', $user->name);
    $trail->push('Edit '. $user->name, route('users.edit', $user->id));
});










/*
// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});*/