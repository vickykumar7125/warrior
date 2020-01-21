<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$data = [
    'title' => 'Admin Dashboard | Computer Warriors Education Pvt. Ltd.',
    'status' => 300
];

if ($_POST){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    if ($conf_password == $password){
        $password = md5($password);
        $user_detail = $database -> get('admin', '*', ['user_id' => $user_name]);
        if (empty($user_detail)){
            $add = $database -> insert('admin', [
                'user_id' => $user_name,
                'password' => $password,
                'created_at' => date('Y-m-d')
            ]);
            if ($add -> rowCount() > 0){
                $data['status'] = 200;
            }else{
                $data['status'] = 404;
            }
        }else{
            $data['status'] = 400;
        }
    }else{
        $data['status'] = 301;
    }
}
load_template('admin/new_user', $data);