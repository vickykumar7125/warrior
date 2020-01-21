<?php

// loading the bootstrap
require_once __DIR__ . '/../bootstrap.php';

$session = new Client_Session();

$session -> DestroySession();

redirect_uri('/auth/login.php');