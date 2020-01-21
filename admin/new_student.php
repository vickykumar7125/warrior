<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'New Student | Computer Warriors Education Pvt. Ltd.',
    'status' => 300
];
$reg = 3025;
$reg .= date('ym') . "001";
$max_reg = (int)$database -> max('student', 'reg_id');
$reg = $max_reg >= $reg ? (int)($max_reg + 1) : (int)$reg;
$data['reg'] = $reg;
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
    $insert_array = [
        'reg_id' => $reg_id,
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
    $insert = $database -> insert('student', $insert_array);
    if ($insert -> rowCount() > 0){
        $data['status'] = 200;
    }else{
        $data['status'] = 404;
    }
}

$data['course_list'] = $database -> select('course', '*');
//print_r($data);
load_template('admin/new_student', $data);