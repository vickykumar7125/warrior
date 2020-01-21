<?php

//  loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';


// setting session 
$session  = new Client_Session();

$data = [
    'status' => 300
];
if($_POST){
    //print_r($_POST);
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $user_detail = $database -> get('admin', '*', [
        'user_id' => $username,
        'password' => $password
    ]);
    $status = 404;
    if (!empty($user_detail)){
        $session -> setsessionvar('user_id', $username);
        $status = 200;
    }
    $data['status'] = $status;
}
load_template('auth/login', $data);