<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$session = new Client_Session();

$data = [
    'title' => 'Admin Dashboard | Computer Warriors Education Pvt. Ltd.',
    'status' => 300
];

if ($_POST){
    $user_name = $session -> getsessiondata('user_id');
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    if ($conf_password == $password){
        $password = md5($password);
        $update_array = [
            'password' => $password
        ];
        $update = $database -> update('admin', $update_array, ['user_id' => $user_name]);
        if ($update -> rowCount() > 0){
            $data['status'] = 200;
        }else{
            $data['status'] = 404;
        }
    }else{
        $data['status'] = 301;
    }
}

load_template('admin/password', $data);