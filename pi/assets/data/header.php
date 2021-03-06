<?php
	require_once 'headers.php';

    session_start();
    require_once "showFunctions.php";
    require_once "doFunctions.php";
    require_once "Upload_db.php";
    require_once "Config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GoWest drive</title>
    <meta name="author" content="Nick Dewitte"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/screen.css">
	<link rel="manifest" href="/manifest.json">

	<link rel="apple-touch-icon" sizes="57x57" href="assets/media/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/media/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/media/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/media/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/media/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/media/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/media/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/media/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/media/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/media/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/media/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/media/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/media/icons/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#50859C">
	<meta name="msapplication-TileImage" content="assets/media/icons/ms-icon-144x144.png">
</head>
<body>
<header class="cf">
    <?php
    if(isset($_SESSION["name"])) {
        $name = $_SESSION["name"];
        echo "<h1>Welcome <span>$name</span></h1>";
    } else {
        if($_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/register.php' && $_SERVER['REQUEST_URI'] != '/readme.php') {
            redirect('index.php');
        }
		echo "<h1>Please log in</h1>";
    }
    /**/?>
	<a href="home.php" class="" id="homeButton">
		<i class="fa fa-home fa-2x"></i>
	</a>
</header>