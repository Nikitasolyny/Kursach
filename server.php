<?php
define('DB_HOST', 'localhost:3307');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Kursuch');

$connect_nik = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db_nik = new PDO("mysql:host=localhost:3307;dbname=Kursuch","root","");
if (!$db_nik) {
    die('error connect do database!');
}

$team = [];    
if ($query = $db_nik->query("SELECT * FROM `Team`  WHERE Worker_id = '1' ")) {
    $team = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$team1 = [];    
if ($query = $db_nik->query("SELECT * FROM `Team`  WHERE Worker_id = '2' ")) {
    $team1 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$team2 = [];    
if ($query = $db_nik->query("SELECT * FROM `Team`  WHERE Worker_id = '3' ")) {
    $team2 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$team3 = [];    
if ($query = $db_nik->query("SELECT * FROM `Team`  WHERE Worker_id = '4' ")) {
    $team3 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$service = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '1' ")) {
    $service = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$service1 = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '2' ")) {
    $service1 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$service2 = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '3' ")) {
    $service2 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$service3 = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '4' ")) {
    $service3 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$port = [];    
if ($query = $db_nik->query("SELECT * FROM `Portfolio`  WHERE portfolio_id = '2' ")) {
    $port = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$port1 = [];    
if ($query = $db_nik->query("SELECT * FROM `Portfolio`  WHERE portfolio_id = '3' ")) {
    $port1 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$order = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '1' ")) {
    $order = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$order1 = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '2' ")) {
    $order1 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$order2 = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '3' ")) {
    $order2 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$order3 = [];    
if ($query = $db_nik->query("SELECT * FROM `service type`  WHERE service_id = '4' ")) {
    $order3 = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

$team_all = [];    
if ($query = $db_nik->query("SELECT * FROM `Team` ")) {
    $team_all = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db_nik->errorInfo());
}

?>