<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Admin Dashboard | Computer Warriors Education Pvt. Ltd.'
];

// geting thea all student number
$data['total_stu'] = count($database -> select('student', '*'));
$data['issue_cert'] = count($database -> select('certificate', '*'));
$data['pen_cert'] = $data['total_stu'] - $data['issue_cert'];

load_template('admin/dashboard', $data);