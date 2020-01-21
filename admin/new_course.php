<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'New Course | Computer Warriors Education Pvt. Ltd.',
    'status' => 300
];

if ($_POST){
    $course_name = $_POST['name'];
    $course_full_name = $_POST['full_name'];
    $course_duration = $_POST['duration'];
    $course_desc = $_POST['desc'];
    $course_detail = $database -> get('course', '*', ['name' => $course_name, 'duration' => $course_duration]);
    if (empty($user_detail)){
        $add = $database -> insert('course', [
            'course_name' => $course_name,
            'full_name' => $course_full_name,
            'description' => $course_desc,
            'duration' => $course_duration
        ]);
        if ($add -> rowCount() > 0){
            $data['status'] = 200;
        }else{
            $data['status'] = 404;
        }
    }else{
        $data['status'] = 400;
    }
}
load_template('admin/new_course', $data);