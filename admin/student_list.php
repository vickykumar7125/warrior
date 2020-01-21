<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Student List | Computer Warriors Education Pvt. Ltd.'
];

// getting thea all student number
$data['student_list'] = $database -> select('student', '*');
for($i = 0; $i < count($data['student_list']); $i++){
    $data['student_list'][$i]['course_detail'] = $database -> get('course', '*', ['id' => $data['student_list'][$i]['course_id']]);
}
load_template('admin/student_list', $data);