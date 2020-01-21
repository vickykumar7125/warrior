<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Course List | Computer Warriors Education Pvt. Ltd.'
];

// getting thea all student number
$data['course_list'] = $database -> select('course', '*');
load_template('admin/course_list', $data);