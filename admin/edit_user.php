<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Admin Dashboard | Computer Warriors Education Pvt. Ltd.',
    'status' => 300
];

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data['detail'] = $database -> get('admin', '*', ['id' => $id]);
    if ($_POST){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];
        if ($conf_password == $password){
            $password = md5($password);
            $update_array = [
                'password' => $password
            ];
            $update = $database -> update('admin', $update_array, ['id' => $id]);
            if ($update -> rowCount() > 0){
                $data['status'] = 200;
            }else{
                $data['status'] = 404;
            }
        }else{
            $data['status'] = 301;
        }
    }
}else{
    ?>
    <script>
        window.alert('Please select a admin user');
        window.location.href = '/admin/user_list.php';
    </script>
    <?php
}

load_template('admin/edit_user', $data);