<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = $database -> delete('certificate', ['id' => $id]);
    if ($delete -> rowCount() > 0){
        ?>
        <script>
            window.alert('Student certificate Deleted successfully.');
            window.location.href = '/admin/certificate_list.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert('Error, Please try again.');
            window.location.href = '/admin/certificate_list.php';
        </script>
        <?php
    }
}else{
    ?>
    <script>
        window.alert('Please select a student certificate');
        window.location.href = '/admin/certificate_list.php';
    </script>
    <?php
}