<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Admin Dashboard | Computer Warriors Education Pvt. Ltd.'
];

// geting thea all student number
$data['user_list'] = $database -> select('admin', '*');

load_template('admin/user_list', $data);