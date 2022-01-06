<?php
$server = 'localhost:3307';
$username = 'root';
$password = '';
$n0romi00 = 'auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$n0romi00;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}