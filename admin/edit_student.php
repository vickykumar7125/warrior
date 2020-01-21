<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Edit student detail | Computer Warriors Education Pvt. Ltd.',
    'status' => 300
];

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data['detail'] = $database -> get('student', '*', ['id' => $id]);
    $doa1 = explode('-', $data['detail']['doa']);
    $data['detail']['doa'] = $doa1[1] . '/' . $doa1[2] . '/' . $doa1[0];
    $dob1 = explode('-', $data['detail']['dob']);
    $data['detail']['dob'] = $dob1[1] . '/' . $dob1[2] . '/' . $dob1[0];
    if ($_POST){
        $reg_id = $_POST['reg_id'];
        $name = $_POST['name'];
        $mname = $_POST['mname'];
        $fname = $_POST['fname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $doa = explode('/',$_POST['doa']);
        $doa = $doa[2] . '-' . $doa[0] . '-' . $doa[1];
        $dob = explode('/',$_POST['dob']);
        $dob = $dob[2] . '-' . $dob[0] . '-' . $dob[1];
        $course_id = $_POST['course_id'];
        $reg_fee = $_POST['reg_fee'];
        $course_fee = $_POST['course_fee'];
        $qualification = $_POST['qualification'];
        $update_array = [
            'name' => $name,
            'mother_name' => $mname,
            'father_name' => $fname,
            'mobile' => $mobile,
            'email' => $email,
            'address' => $address,
            'dob' => $dob,
            'doa' => $doa,
            'course_id' => $course_id,
            'reg_fee' => $reg_fee,
            'course_fee' => $course_fee,
            'qualification' => $qualification
        ];
        $update = $database -> update('student', $update_array, ['id' => $id]);
        if ($update -> rowCount() > 0){
            $data['status'] = 200;
        }else{
            $data['status'] = 404;
        }
    }
}else{
    ?>
    <script>
        window.alert('Please select a student');
        window.location.href = '/admin/student_list.php';
    </script>
    <?php
}
$data['course_list'] = $database -> select('course', '*');

load_template('admin/edit_student', $data);