<?php

//  loading the vendor component
require_once __DIR__ . '/vendor/autoload.php';

// loading the lib
require_once __DIR__ . '/lib/session.php';

// loading the namespace
use Dotenv\Dotenv;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Medoo\Medoo;

// loading the environment variable
$env = Dotenv::createImmutable(__DIR__);
$env->load();

// generating the database connection
$database = new Medoo(
    [
        'database_type' => 'mysql',
        'database_name' => getenv('DB_NAME'),
        'server' => getenv('DB_SERVER'),
        'username' => getenv('DB_USER'),
        'password' => getenv('DB_PASSWORD'),
        'port' => getenv('DB_PORT')
    ]
);

// function to load the template
function load_template($template, $data = []){
    $path = explode('/', $template);
    $dir = __DIR__ . '/template/';
    if (count($path) > 1){
        $dir .= $path[0] . '/';
        $template = $path[count($path) - 1];
    }
    $template .= '.twig';
    $loader = new FilesystemLoader($dir);
    $twig = new Environment($loader, [
        'cache' => __DIR__ . '/cache/',
        'debug' => true,
        'auto_reload' => true,
    ]);
    echo $twig -> render($template, $data);
}

function redirect_uri($url){
    header('location:' . $url);
}

// course list
$course = [
    'Diploma Courses' => [
        'dca' => 'DCA (Diploma in Computer Application)',
        'adca' => 'ADCA (Advance Diploma in Computer Application)',
        'dtp' => 'DTP (Diploma in Desktop Publishing)',
        'adtp' => 'ADTP (Advance Diploma in Desktop Publishing)',
        'tally' => 'Tally (Tally ERP9 With GST)',
        'adca-plus' => 'ADCA (Advance Diploma in Computer Application-plus)',
        'h-n' => 'H&N (Hardware & Networking)'
    ],
    'Language Courses' => [
        'c' => "'C' Language",
        'ds' => 'Data Structure',
        'c-plus' => 'C++',
        'core-java' => 'Core Java',
        'visual-basic' => 'Visual Basic',
        'dot-net' => '.Net',
        'dbms' => 'DBMS',
        'oracle' => 'Oracle',
        'q-basic' => 'Q Basic',
        'advance-java' => 'Advance Java',
        'python' => 'Python',
        'android' => 'Android'
    ],
    'CAD / CAM Design' => [
        'auto-cad' => 'Auto Cad (2d, 3d)',
        'revit-arc' => 'Revit Architecture',
        'staad-pro' => 'Staad Pro',
        '3d-max' => '3d Max',
        'catia' => 'Catia',
        'solid-works' => 'Solid Works'
    ]
];


$web_data = [
    'course_data' => $course,
    'title' => ''
];