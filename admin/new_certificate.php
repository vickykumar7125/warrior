<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'New Certificate | Computer Warriors Education Pvt. Ltd.',
    'status' => 300,
    'cert_type' => 0
];


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data['detail'] = $database -> get('student', '*', ['id' => $id]);
    if (empty($data['detail'])){
        ?>
        <script>
            window.alert('Certificate has been already issued, please select another student.');
            window.location.href = '/admin/select_student.php';
        </script>
        <?php
    }else {
        $doa1 = explode('-', $data['detail']['doa']);
        $data['detail']['doa'] = $doa1[1] . '/' . $doa1[2] . '/' . $doa1[0];
        $dob1 = explode('-', $data['detail']['dob']);
        $data['detail']['dob'] = $dob1[1] . '/' . $dob1[2] . '/' . $dob1[0];
        if ($_POST) {
            $sl_no = $_POST['sl_no'];
            $stu_id = $_POST['stu_no'];
            $place = $_POST['place'];
            $in_year = $_POST['in_year'];
            $grade = $_POST['grade'];
            $doi = $_POST['doi'];
            $insert_array = [
                'sl_no' => $sl_no,
                'stu_id' => $stu_id,
                'place' => $place,
                'in_year' => $in_year,
                'grade' => $grade,
                'doi' => $doi
            ];
            $insert = $database->insert('certificate', $insert_array);
            if ($insert->rowCount() > 0) {
                $data['status'] = 200;
            } else {
                $data['status'] = 404;
            }
        }
    }
}else{
    ?>
    <script>
        window.alert('Please select a student');
        window.location.href = '/admin/select_student.php';
    </script>
    <?php
}
$data['course_list'] = $database -> select('course', '*');
//print_r($data);
load_template('admin/new_certificate', $data);