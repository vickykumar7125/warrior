<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = $database -> delete('admin', ['id' => $id]);
    if ($delete -> rowCount() > 0){
        ?>
        <script>
            window.alert('Admin user Deleted successfully.');
            window.location.href = '/admin/user_list.php';
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert('Error, Please try again.');
            window.location.href = '/admin/user_list.php';
        </script>
        <?php
    }
}else{
    ?>
    <script>
        window.alert('Please select a admin user');
        window.location.href = '/admin/user_list.php';
    </script>
    <?php
}