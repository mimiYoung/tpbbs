<?php

Route::get('home', 'welcome/index/home');
Route::get('help', 'welcome/index/help');
Route::get('about', 'welcome/index/about');

Route::get('signup', 'user/auth/create');