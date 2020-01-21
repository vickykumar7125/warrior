<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = $database -> delete('student', ['id' => $id]);
    $del_cert = $database -> delete('certificate', ['stu_id' => $id]);
    if ($delete -> rowCount() > 0){
        ?>
        <script>
            window.alert('Student Deleted successfully.');
            window.location.href = '/admin/student_list.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert('Error, Please try again.');
            window.location.href = '/admin/student_list.php';
        </script>
        <?php
    }
}else{
    ?>
    <script>
        window.alert('Please select a student');
        window.location.href = '/admin/student_list.php';
    </script>
    <?php
}