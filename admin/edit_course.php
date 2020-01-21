<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Admin Dashboard | Computer Warriors Education Pvt. Ltd.',
    'status' => 300
];

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data['detail'] = $database -> get('course', '*', ['id' => $id]);
    if ($_POST){
        $course_name = $_POST['name'];
        $course_full_name = $_POST['full_name'];
        $course_duration = $_POST['duration'];
        $course_desc = $_POST['desc'];
        $update_array = [
            'course_name' => $course_name,
            'full_name' => $course_full_name,
            'description' => $course_desc,
            'duration' => $course_duration
        ];
        $update = $database -> update('course', $update_array, ['id' => $id]);
        if ($update -> rowCount() > 0){
            $data['status'] = 200;
        }else{
            $data['status'] = 404;
        }
    }
}else{
    ?>
    <script>
        window.alert('Please select a course');
        window.location.href = '/admin/course_list.php';
    </script>
    <?php
}

load_template('admin/edit_course', $data);